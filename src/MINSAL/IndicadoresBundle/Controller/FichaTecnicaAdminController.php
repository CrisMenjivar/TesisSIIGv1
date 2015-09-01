<?php

namespace MINSAL\IndicadoresBundle\Controller;

use Sonata\AdminBundle\Controller\CRUDController as Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use MINSAL\IndicadoresBundle\Entity\ResponsableIndicador;
use MINSAL\IndicadoresBundle\Form\EditorReportes;


//use Symfony\Component\Console\Input\ArrayInput;

class FichaTecnicaAdminController extends Controller {

    public function editAction($id = null) {
        $repo = $this->getDoctrine()->getManager()->getRepository('IndicadoresBundle:FichaTecnica');
        $this->admin->setRepository($repo);

        return parent::editAction($id);
    }

    public function createAction() {
        $repo = $this->getDoctrine()->getManager()->getRepository('IndicadoresBundle:FichaTecnica');
        $this->admin->setRepository($repo);

        return parent::createAction();
    }

    public function getListadoIndicadores() {
        $em = $this->getDoctrine()->getManager();
        $clasificacionUso = $em->getRepository("IndicadoresBundle:ClasificacionUso")->findBy(array(), array('descripcion' => 'ASC'));

        //Luego agregar un método para obtener la clasificacion de uso por defecto del usuario
        $usuario = $this->getUser();
        if ($usuario->getClasificacionUso()) {
            $clasificacionUsoPorDefecto = $usuario->getClasificacionUso();
        } else {
            $clasificacionUsoPorDefecto = $clasificacionUso[0];
        }
        $categorias = $em->getRepository("IndicadoresBundle:ClasificacionTecnica")->findBy(array('clasificacionUso' => $clasificacionUsoPorDefecto));

        //Indicadores asignados por usuario
        $usuarioIndicadores = ($usuario->hasRole('ROLE_SUPER_ADMIN')) ?
                $em->getRepository("IndicadoresBundle:FichaTecnica")->findBy(array(), array('nombre' => 'ASC')) :
                $usuario->getIndicadores();
        //Indicadores asignadas al grupo al que pertenece el usuario
        $indicadoresPorGrupo = array();
        foreach ($usuario->getGroups() as $grp) {
            foreach ($grp->getIndicadores() as $indicadores_grupo) {
                $indicadoresPorGrupo[] = $indicadores_grupo;
            }
        }

        $indicadores_por_usuario = array();
        $indicadores_clasificados = array();
        foreach ($usuarioIndicadores as $ind) {
            $indicadores_por_usuario[] = $ind->getId();
        }

        foreach ($indicadoresPorGrupo as $ind) {
            $indicadores_por_usuario[] = $ind->getId();
        }

        $categorias_indicador = array();
        foreach ($categorias as $cat) {
            $categorias_indicador[$cat->getId()]['cat'] = $cat;
            $categorias_indicador[$cat->getId()]['indicadores'] = array();
            $indicadores_por_categoria = $cat->getIndicadores();
            foreach ($indicadores_por_categoria as $ind) {
                if (in_array($ind->getId(), $indicadores_por_usuario)) {
                    $categorias_indicador[$cat->getId()]['indicadores'][] = $ind;
                    $indicadores_clasificados[] = $ind->getId();
                }
            }
        }

        $indicadores_no_clasificados = array();
        foreach ($usuarioIndicadores as $ind) {
            if (!in_array($ind->getId(), $indicadores_clasificados)) {
                $indicadores_no_clasificados[] = $ind;
            }
        }
        foreach ($indicadoresPorGrupo as $ind) {
            if (!in_array($ind->getId(), $indicadores_clasificados)) {
                $indicadores_no_clasificados[] = $ind;
            }
        }
        $resp = array('categorias' => $categorias_indicador,
            'clasficacion_uso' => $clasificacionUso,
            'indicadores_no_clasificados' => $indicadores_no_clasificados);

        return $resp;
    }

    /**
     * @Route("/tablero/sala/{sala}", name="tablero_sala", options={"expose"=true})
     */
    public function tableroSalaAction($sala, Request $request) {
        $em = $this->getDoctrine()->getManager();
        $redis = $this->container->get('snc_redis.default');

        $recalcular = true;
        $tipo_reporte = ($request->get('indicador') != null) ? 'indicador' : 'sala';

        //Verificar si existe la información de la sala almacenada en caché
        if ($redis->get('sala_time_' . $tipo_reporte . '_' . $sala) != null) {
            //Verificar la fecha de la última actualización
            $ult_fecha = new \DateTime("2000-07-08 11:14:15.638276");
            $salaObj = $em->getRepository("IndicadoresBundle:GrupoIndicadores")->find($sala);
            $indicadores_sala = $em->getRepository('IndicadoresBundle:GrupoIndicadores')->getIndicadoresSala($salaObj);
            foreach ($indicadores_sala as $ind) {
                $indicador = $indicador = $em->find('IndicadoresBundle:FichaTecnica', $ind['idIndicador']);
                if ($indicador->getUltimaLectura() > $ult_fecha) {
                    $ult_fecha = $indicador->getUltimaLectura();
                }
            }
            //Comparar con la fecha de actualización de la sala
            $ult_fecha = ($ult_fecha > $salaObj->getUpdatedAt()) ? $ult_fecha : $salaObj->getUpdatedAt();

            //Recuperar la última fecha en que se construyó el informe
            $st = $redis->get('sala_time_' . $tipo_reporte . '_' . $sala);
            $dt = new \DateTime();
            $dt->setTimestamp($st);
            $recalcular = ($ult_fecha > $dt) ? true : false;
        }
        $recalcular = true;
        if ($recalcular) {
            $html = $this->tableroAction($sala);
            $info_indicador = '';
            if ($request->get('indicador') != null) {
                //Se está cargando el reporte de la sala como reporte asociado
                //a un indicadores, recuperar el indicador para mostrar 
                //información adicional

                $id = $request->get('indicador');
                $indicador = $em->find('IndicadoresBundle:FichaTecnica', $id);
                $info_indicador .= '<BR/></BR/><BR/></BR/>'
                        . '<DIV class="col-md-12" >'
                        . '<B>Interpretación:</B><BR/>' . $indicador->getTema()
                        . '</DIV><BR/><BR/>'
                        . '<DIV class="col-md-12" >'
                        . '<B>Concepto:</B></BR>' . $indicador->getConcepto()
                        . '</DIV><BR/><BR/>'
                        . '<DIV class="col-md-12" >'
                        . '<B>Observaciones:</B><BR/>' . $indicador->getObservacion()
                        . '</div>'
                ;
            }

            $html = preg_replace("/HTTP.+/", "", $html);
            $html = preg_replace("/Cache.+/", "", $html);
            $html = preg_replace("/Date.+/", "", $html);

            $http = 'http';
            if (array_key_exists('HTTPS', $_SERVER)) {
                $http = ($_SERVER['HTTPS'] == null or $_SERVER['HTTPS'] == 'off') ? 'http' : 'https';
            }
            $html = str_replace(array('href="/bundles', 'src="/bundles', 'src="/app_dev.php'), 
                    array('href="' . $http . '://' . $_SERVER['HTTP_HOST'] . $this->container->getParameter('directorio') . '/bundles',
                            'src="' . $http . '://' . $_SERVER['HTTP_HOST']. $this->container->getParameter('directorio') . '/bundles',
                            'src="' . $http . '://'. $_SERVER['HTTP_HOST'] . $this->container->getParameter('directorio') . '/app_dev.php'), $html);
            $html .= $info_indicador;
            $html = $this->get('knp_snappy.pdf')->getOutputFromHtml($html);
            
            $redis->set('sala_' . $sala, $html);
            $redis->set('sala_' . $tipo_reporte . '_' . $sala, $html);
            $redis->set('sala_time_' . $tipo_reporte . '_' . $sala, time());
        } else {
            $html = $redis->get('sala_' . $sala);
        }

        //return new Response($html);        
        return new Response(
                $html, 200, array(
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="reporte.pdf"'
                )
        );
    }

    public function tableroAction($sala_default = null) {
        $em = $this->getDoctrine()->getManager();
        $usuario = $this->getUser();

        $sala_default = ($sala_default == null) ? 0 : $sala_default;

        //Salas por usuario
        $usuarioSalas = array();
        if (($usuario->hasRole('ROLE_SUPER_ADMIN'))) {
            foreach ($em->getRepository("IndicadoresBundle:GrupoIndicadores")->findBy(array(), array('nombre' => 'ASC')) as $sala) {
                $usuarioSalas[$sala->getId()] = $sala;
            }
        } else {
            foreach ($usuario->getGruposIndicadores() as $sala) {
                $usuarioSalas[$sala->getGrupoIndicadores()->getId()] = $sala->getGrupoIndicadores();
            }
        }
        //Salas asignadas al grupo al que pertenece el usuario
        foreach ($usuario->getGroups() as $grp) {
            foreach ($grp->getSalas() as $sala) {
                $usuarioSalas[$sala->getId()] = $sala;
            }
        }

        $salas = array();
        foreach ($usuarioSalas as $sala) {
            $salas[$sala->getId()]['datos_sala'] = $sala;
            $salas[$sala->getId()]['indicadores_sala'] = $em->getRepository('IndicadoresBundle:GrupoIndicadores')
                    ->getIndicadoresSala($sala);
        }

        // si hay una sala por defecto recuperar toda la información de los
        // indicadores contenidos en esta.
        $indicadoresDimensiones = array();
        if ($sala_default != 0) {
            foreach ($salas[$sala_default]['indicadores_sala'] as $ind) {
                $req_dimensiones = $this->forward('IndicadoresBundle:Indicador:getDimensiones', array('id' => $ind['idIndicador']));
                $req_datos = $this->forward('IndicadoresBundle:IndicadorREST:getIndicador', array('id' => $ind['idIndicador'],
                    'dimension' => $ind['dimension'],
                    'filtro' => $ind['filtro'],
                    'ver_sql' => false)
                );
                $indicadoresDimensiones[$ind['idIndicador']]['id'] = $ind['idIndicador'];
                $indicadoresDimensiones[$ind['idIndicador']]['dimensiones'] = $req_dimensiones->getContent();
                $indicadoresDimensiones[$ind['idIndicador']]['datos'] = $req_datos->getContent();
            }
        }

        $datos = $this->getListadoIndicadores();

        $confTablero = array('graficos_por_fila' => $this->container->getParameter('graficos_por_fila'),
            'ancho_area_grafico' => $this->container->getParameter('ancho_area_grafico'),
            'alto_area_grafico' => $this->container->getParameter('alto_area_grafico'),
            'titulo_sala_tamanio_fuente' => $this->container->getParameter('titulo_sala_tamanio_fuente'),
            'ocultar_menu_principal' => $this->container->getParameter('ocultar_menu_principal'),
            'directorio' => $this->container->getParameter('directorio'),
        );

        return $this->render('IndicadoresBundle:FichaTecnicaAdmin:tablero.html.twig', array(
                    'categorias' => $datos['categorias'],
                    'clasificacionUso' => $datos['clasficacion_uso'],
                    'salas' => $salas,
                    'id_sala' => $sala_default,
                    'confTablero' => $confTablero,
                    'indicadoresDimensiones' => $indicadoresDimensiones,
                    'indicadores_no_clasificados' => $datos['indicadores_no_clasificados']
        ));
    }

    public function PivotTableAction() {
        $datos = $this->getListadoIndicadores();

        return $this->render('IndicadoresBundle:FichaTecnicaAdmin:pivotTable.html.twig', array(
                    'categorias' => $datos['categorias'],
                    'clasificacionUso' => $datos['clasficacion_uso'],
                    'indicadores_no_clasificados' => $datos['indicadores_no_clasificados']
        ));
    }

    public function batchActionVerFicha($idx = null) {
        $parameterBag = $this->get('request')->request;
        $em = $this->getDoctrine()->getManager();

        $selecciones = $parameterBag->get('idx');

        $salida = '';
        foreach ($selecciones as $ficha) {
            $fichaTec = $em->find('IndicadoresBundle:FichaTecnica', $ficha);

            $admin = $this->get('sonata.admin.ficha');
            $admin->setSubject($fichaTec);

            $html = $this->render($admin->getTemplate('show'), array(
                'action' => 'show',
                'object' => $fichaTec,
                'elements' => $admin->getShow(),
                'admin' => $admin,
                'base_template' => 'IndicadoresBundle::ajax_layout.html.twig'
            ));

            $salida .= $html->getContent() . '<BR /><BR />';
        }
        //Quitar los comentarios del código html, enlaces y aplicar estilos
        $salida = preg_replace('/<!--(.|\s)*?-->/', '', $salida);
        $salida = preg_replace('/<a(.|\s)*?>/', '', $salida);
        $salida = str_ireplace('</a>', '', $salida);
        $salida = str_ireplace('TD', "TD STYLE='border: 2px double black'", $salida);
        $salida = str_ireplace('TH', "TH STYLE='border: 2px double black'", $salida);
        $salida = str_ireplace('<TABLE', "<TABLE width=95% ", $salida);

        return new Response('<HTML>' . $salida . '</HTML>', 200, array(
            'Content-Type' => 'application/msword',
            'Content-Disposition' => 'attachment; filename="ficha_tecnica.doc"',
            'Pragma' => 'no-cache',
            'Expires' => '0'
                )
        );


    }

/*************************************************************** REPORTES *************************************************************************/

    public function menuReportesAction()
    {
	 
         return $this->render('IndicadoresBundle:ReportesAdmin:menu_base.html.twig');
    }
	
	
	public function reportesIndicadoresAction() {
        $datos = $this->getListadoIndicadores();

        return $this->render('IndicadoresBundle:ReportesAdmin:reportesListIndicadores.html.twig', array(
                    'categorias' => $datos['categorias'],
                    'clasificacionUso' => $datos['clasficacion_uso'],
                    'indicadores_no_clasificados' => $datos['indicadores_no_clasificados']
        ));
    }
    
    public function reportesCrearAction(Request $request)
    {
	$RutaImg1 = '';
	$extension1 = '';
	$RutaImg2 = '';
	$extension2 = '';
	$name1 = '';
	$name2 = '';

	$image = '';
	$imagePDF = '';
	$graficos = array();
	$graficosPDF = array();
	$comentIndicadores = array();

	$post = Request::createFromGlobals();
	//var_dump($post);
	
	if($post->request->get('num_graficos')!= '')
	{
		
		$numgraficos = $post->request->get('num_graficos');
		for($i=1; $i<$numgraficos; $i++){
			$graficos[$i]['data'] = $post->request->get('data'.$i);
			$graficos[$i]['titulo'] = $post->request->get('titulo'.$i);
			$graficos[$i]['tablaDatosR'] = $post->request->get('tablaDatosR'.$i);
		}
	   
	  
	}
	//var_dump($graficos);
	
	
	$form = $this->createForm(new EditorReportes());
	$form->handleRequest($request);					

	$dir = '../web/bundles/reportes/images/logos';
	
	if ($form->isValid()) {	
		//$encabezado = $request->get('Iencabezado');
		//var_dump($encabezado);
		//$titulo = $request->get('Ititulo');
		//var_dump($titulo);
		$numgraficosPDF = $request->get('num_graficosPDF');
		$Elementos = ($request->get('elementos'))-1;
		//$IndicadoresRes = $request->get('numero');
		//var_dump($Elementos);
		for($i=1; $i<=$Elementos; $i++){
			if($request->get('data'.$i)!= null)
			{
				$graficosPDF[$i]['titulo'] = $post->request->get('titulo'.$i);
				$graficosPDF[$i]['data'] = $request->get('data'.$i);
				$graficosPDF[$i]['comentarios1'] = $request->get('comentarios1'.$i);
				$graficosPDF[$i]['comentariosG'] = null;
				$graficosPDF[$i]['tituloE'] = null;
				$bandera = $request->get('bandera'.$i);
				if($bandera=='1')
					$graficosPDF[$i]['tablaDatosR'] = $request->get('tablaA'.$i);
				else 
					$graficosPDF[$i]['tablaDatosR'] = null;	
			}
			else 
			{	
				$graficosPDF[$i]['data'] = null;
				$graficosPDF[$i]['comentarios1'] = null;
				$graficosPDF[$i]['titulo'] = null;		
				$graficosPDF[$i]['tablaDatosR'] = null;		
				$graficosPDF[$i]['comentariosG'] = $request->get('comentariosG'.$i);
				$graficosPDF[$i]['tituloE'] = $post->request->get('tituloE'.$i);
						
			}
		}	
			//var_dump($graficosPDF);
		
		
		$encabezado = $form->get('encabezado')->getData();
		$titulo = $form->get('titulo')->getData();
		//$intro = $form->get('intro')->getData();
		//$comentarios = $form->get('comentarios')->getData();
		//$pie = $form->get('pie')->getData();
		
		$data = $form->getData();
		

		if($data['attachment1'] != null)
		{
			$file1 = $data['attachment1'];
			$name1 = $file1->getClientOriginalName();
			$extension1 = $file1->guessExtension();	
			$file1->move($dir, $name1);
			//$RutaImg1='bundles/reportes/images/logos/logo1.'.$extension1;
		}
		if($data['attachment2'] != null)
		{

			$file2 = $data['attachment2'];
			$name2 = $file2->getClientOriginalName();
			$extension2 = $file2->guessExtension();	
			$file2->move($dir, $name2); 
		
			
			//$RutaImg2='bundles/reportes/images/logos/logo2.'.$extension2;
		}
			//$conn = $this->get('database_connection');
			//$result = $conn->fetchAll($verSql);
			//var_dump($imagePDF);//, 'RutaImg2'=>$RutaImg2
		
		$request = $this->get('request');
		if ($request->request->has('pdf')){
			 $html = $this->renderView('IndicadoresBundle:ReportesAdmin:pdf_generado.html.twig', array('titulo'=> $titulo, /*'intro'=>$intro, 'comentarios' => $comentarios*/ 'name1'=>$name1, 'name2'=>$name2,'graphs' => $graficosPDF));

			return new Response(
				$this->get('knp_snappy.pdf')->getOutputFromHtml($html, array(
					   //'header-html'=> $encabezado,
					   'header-left'=> $encabezado,
					   'header-spacing'=> 15,
					   'footer-spacing'=> 15,
					   //'footer-left'=> $pie,
					   'footer-right'=> '[page]',
					   'toc' => true, 
					   'toc-header-text' => 'Contenido',
					   'footer-font-size' => 10,
					   //'header-line' => true,
					   'margin-bottom'=> 30,
					   'margin-top' => 30,
					   'margin-left'=> 20,
					   'margin-right' => 20,
					   'page-size' => "letter")),
					200,
					array(
						'Content-Type'          => 'application/pdf',
						'Content-Disposition'   => 'attachment; filename="file.pdf"'
					)

			);

		}
		else
			return $this->render('IndicadoresBundle:ReportesAdmin:preview_reporte.html.twig', array('encabezado'=> $encabezado, 'titulo'=> $titulo, 'verSql'=> $verSql, 'comentarios' => $comentarios/*, 'pie'=> $pie*/));
	}
	else
		return $this->render('IndicadoresBundle:ReportesAdmin:plantilla_reporte.html.twig', array('form'=>$form->createView(), 'graphs' => $graficos ));
	
	
    }
    
    
  /*  public function verSqlAction($id_fichaTecnica)
    {
	 	$fichaTecnica = $this->getDoctrine()->getManager()->getRepository('IndicadoresBundle:FichaTecnica')->findOneById($id_fichaTecnica);
	 	
	 	//$ind_dimensiones = $this->forward('IndicadoresBundle:Indicador:getDimensiones', array('id' => $fichaTecnica));
	 	//$dimensiones = $ind_dimensiones->getContent();
	 	//$dimensiones = json_decode($ind_dimensiones, true);
		$ind_datos = $this->forward('IndicadoresBundle:IndicadorREST:getIndicador', array('fichaTec' => $fichaTecnica,
                    'dimension' => 'anio',
                    'filtro' => '',
                    'ver_sql' => true)
                );
		$var=$ind_datos->getContent();
		$prueba=json_decode($var,true);       		
		$conn = $this->get('database_connection');
        	$result = $conn->fetchAll($prueba['datos']);
		//$array = $_POST['json'];
		$arraycode = json_encode($result);

		$response = new Response($arraycode);
		//$response->headers->set('Content-Type', 'application/json');
		//var_dump($response);
		return $response;
		
		//$resultado = new Response();
		//$resultado->setContent(json_enconde($result));
		//return new Response($result);
		
	
		//return $this->render('IndicadoresBundle:ReportesAdmin:prueba.html.twig');
	   
	}
	*/
	
    public function previewReportesAction()
    {
	 	$html= $this->render('IndicadoresBundle:ReportesAdmin:PlantillaPDF.html.twig'); 
	 	return new Response(
    			$this->get('knp_snappy.pdf')->getOutputFromHtml($html),
    			200,
    			array(
        			'Content-Type'          => 'application/pdf',
       				'Content-Disposition'   => 'attachment; filename="file.pdf"'
   	 		     ));
    }
}

