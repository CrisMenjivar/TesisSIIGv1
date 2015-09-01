<?php

/* IndicadoresBundle:FichaTecnicaAdmin:tablero_normal.html.twig */
class __TwigTemplate_6636be6d9f3616ec5dc8baed9c1c07d155b3e9f7806f2218c212a6f7938f765d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
";
        // line 2
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"marco-sala\">
";
        // line 5
        echo "    ";
        // line 7
        echo "    ";
        $this->loadTemplate("IndicadoresBundle:FichaTecnicaAdmin:menu_tablero.html.twig", "IndicadoresBundle:FichaTecnicaAdmin:tablero_normal.html.twig", 7)->display($context);
        // line 9
        echo "
    ";
        // line 10
        echo "    
    <input type=\"hidden\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["confTablero"]) ? $context["confTablero"] : $this->getContext($context, "confTablero")), "ocultar_menu_principal", array()), "html", null, true);
        echo "\" id=\"ocultar_menu_principal\" />
    <input type=\"hidden\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["confTablero"]) ? $context["confTablero"] : $this->getContext($context, "confTablero")), "directorio", array()), "html", null, true);
        echo "\" id=\"directorio\" />
    <input type=\"hidden\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, ((array_key_exists("id_sala", $context)) ? (_twig_default_filter((isset($context["id_sala"]) ? $context["id_sala"] : $this->getContext($context, "id_sala")), 0)) : (0)), "html", null, true);
        echo "\" id=\"sala_default\" />
    
    <style>
        .area_grafico { 
            width: ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["confTablero"]) ? $context["confTablero"] : $this->getContext($context, "confTablero")), "ancho_area_grafico", array()), "html", null, true);
        echo "px; 
            height: ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["confTablero"]) ? $context["confTablero"] : $this->getContext($context, "confTablero")), "alto_area_grafico", array()), "html", null, true);
        echo "px; 
        }
        .marco-sala:after {
            font-size: ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["confTablero"]) ? $context["confTablero"] : $this->getContext($context, "confTablero")), "titulo_sala_tamanio_fuente", array()), "html", null, true);
        echo "pt;
        }
        .table {
            font-size: 9pt;
        }
    </style>    
    <div id='nombre_sala2' ></div>
    <div class=\"tab-content\">        
        <div class=\"content tab-pane\" id=\"sala\" >
\t\t\t
        </div>
        <div class=\"content tab-pane\" id=\"opciones_sala\">
            <div class=\"panel-group\" id=\"accordion1\">
                <div class=\"btn-group\">
                    <a class='btn btn-success' role=\"button\" href=\"#myModal\" data-toggle=\"modal\">
                        <span class=\"glyphicon glyphicon-save\"></span>
                        ";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("_guardar_sala_"), "html", null, true);
        echo "
                    </a>
                    <a class='btn btn-success' role=\"button\" id=\"aCollapseOne\" href=\"#\" >
                        <span class=\"glyphicon glyphicon-transfer\"></span>
                        ";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("_ocultar/mostrar_menu_principal_"), "html", null, true);
        echo "
                    </a>
                </div><br/><br/>                                
                <ul class='list-group'>
                    ";
        // line 45
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["salas"]) ? $context["salas"] : $this->getContext($context, "salas")));
        foreach ($context['_seq'] as $context["_key"] => $context["sala"]) {
            echo "                                   
                        <li class='list-group-item'>
                            <A href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("tablero_sala", array("sala" => $this->getAttribute($this->getAttribute($context["sala"], "datos_sala", array()), "id", array()), "_sonata_admin" => "sonata.admin.ficha")), "html", null, true);
            echo "\">
                                <button class=\"btn btn-info btn-bg \" type=\"button\" title='";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("_reporte_sala_"), "html", null, true);
            echo "'>
                                      <span class=\"glyphicon glyphicon-file\"></span>                                                
                                </button>
                            </A>
                            <A class='salas-id ' sala-id='";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sala"], "datos_sala", array()), "id", array()), "html", null, true);
            echo "' sala-nombre='";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sala"], "datos_sala", array()), "nombre", array()), "html", null, true);
            echo "'  data=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($context["sala"], "indicadores_sala", array())), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sala"], "datos_sala", array()), "nombre", array()), "html", null, true);
            echo "</A>                            
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sala'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                </ul>
            </div>
        </div>        
        ";
        // line 58
        $this->loadTemplate("IndicadoresBundle:FichaTecnicaAdmin:listado_indicadores.html.twig", "IndicadoresBundle:FichaTecnicaAdmin:tablero_normal.html.twig", 58)->display($context);
        // line 59
        echo "        <div class=\"content tab-pane\" id=\"social\">
            <div class=\"panel-group col-md-4\" >
                <div class=\"panel panel-default panel-info \">
                    <div class=\"panel-heading\">
                        <h4 class=\"panel-title\">";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("javascript._compartir_sala_"), "html", null, true);
        echo "</h4>
                    </div>
                    <div class=\"panel-body\">                        
                        <form id=\"compartir_frm\">                            
                            <div id=\"usuarios_sala\"></div>
                        </form> 
                    </div>
                </div> 
            </div>
            <div class=\"panel-group col-md-8\" >
                <div class=\"panel panel-default panel-info \">
                    <div class=\"panel-heading\">
                        <h4 class=\"panel-title\">";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("_comentarios_"), "html", null, true);
        echo "</h4>
                    </div>
                    <div class=\"panel-body\">                        
                        <div id=\"chat\">                    
                            <form id=\"chat-form\">                            
                                <textarea name=\"chat-mensaje\" id=\"chat-form-mensaje\" required=\"true\"></textarea>
                                <button type=\"submit\" class=\"btn btn-primary\">";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("_enviar_"), "html", null, true);
        echo "</button>
                            </form>
                            <div id=\"chat-mensajes\"></div>
                        </div>
                    </div>
                </div> 
            </div>            
        </div>
\t
        <div id=\"acciones_sala\" class=\"content tab-pane\" ></div>
\t
    </div>
</div>
<!-- Modal -->
<div id=\"myModal\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                <h3 id=\"myModalLabel\">";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("_sala_situacional_"), "html", null, true);
        echo "</h3>
            </div>      
            <div class=\"modal-body\">
                <label for=\"nombre_sala\">";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("_nombre_sala_"), "html", null, true);
        echo "</label>
                <textarea id='nombre_sala' id-sala='' rows=\"3\" style=\"width: 90%\"></textarea>
                <BR/>
                <input type=\"checkbox\" value=\"1\" name=\"guardar_como\" id=\"guardar_como\">";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("_guardar_como_"), "html", null, true);
        echo "
                <span class='info' id='info_sala'></span>
            </div>

            <div class=\"modal-footer\">
                <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("_cerrar_"), "html", null, true);
        echo "</button>
                <button id='guardar_sala' class=\"btn btn-primary\">";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("_guardar_cambios_"), "html", null, true);
        echo "</button>
            </div>
        </div>
    </div>
</div>

<div id=\"myModal2\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel2\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                <h3 id=\"myModalLabel2\"></h3>
            </div>

            <div class=\"modal-body\">
                <span class='info' id='sql'></span>
            </div>

            <div class=\"modal-footer\">
                <button class=\"btn btn-info\" data-dismiss=\"modal\" aria-hidden=\"true\">";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("_cerrar_"), "html", null, true);
        echo "</button>
            </div>
        </div>
    </div>
</div>
";
        // line 136
        $this->loadTemplate("IndicadoresBundle:FichaTecnicaAdmin:accion_sala.html.twig", "IndicadoresBundle:FichaTecnicaAdmin:tablero_normal.html.twig", 136)->display($context);
        // line 137
        echo "<div id=\"container\" >
    <div id=\"wrapper\">
        <div id=\"carousel\"></div>            
        <a id=\"ui-carousel-prev\" href=\"#\" >
            <span>prev</span>
        </a>
        <a id=\"ui-carousel-next\" href=\"#\" >
            <span>next</span>
        </a>
    </div>
    <a id=\"ui-carousel-close\" href=\"#\" style=\"opacity: 1;\" >        
    </a>
</div>
<div id=\"show-carousel\">
    <a id=\"ui-carousel-show\" href=\"#\" style=\"opacity: 1;\" >
        <span>";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("_mostrar_cinta_"), "html", null, true);
        echo "</span>
    </a>
</div>

";
    }

    public function getTemplateName()
    {
        return "IndicadoresBundle:FichaTecnicaAdmin:tablero_normal.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  266 => 152,  249 => 137,  247 => 136,  239 => 131,  217 => 112,  213 => 111,  205 => 106,  199 => 103,  193 => 100,  171 => 81,  162 => 75,  147 => 63,  141 => 59,  139 => 58,  134 => 55,  119 => 52,  112 => 48,  108 => 47,  101 => 45,  94 => 41,  87 => 37,  68 => 21,  62 => 18,  58 => 17,  51 => 13,  47 => 12,  43 => 11,  40 => 10,  37 => 9,  34 => 7,  32 => 5,  29 => 3,  23 => 2,  20 => 1,);
    }
}
