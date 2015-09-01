<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // _inicio
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_inicio');
            }

            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => '_inicio',);
        }

        // tablero_sala
        if (0 === strpos($pathinfo, '/tablero/sala') && preg_match('#^/tablero/sala/(?P<sala>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tablero_sala')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\FichaTecnicaAdminController::tableroSalaAction',));
        }

        if (0 === strpos($pathinfo, '/indicador')) {
            if (0 === strpos($pathinfo, '/indicador/d')) {
                // indicador_dimensiones
                if (0 === strpos($pathinfo, '/indicador/dimensiones') && preg_match('#^/indicador/dimensiones/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'indicador_dimensiones')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\IndicadorController::getDimensionesAction',));
                }

                if (0 === strpos($pathinfo, '/indicador/datos')) {
                    // indicador_datos_filtrar
                    if ($pathinfo === '/indicador/datos/filtrar') {
                        return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\IndicadorController::getDatosFiltrados',  '_route' => 'indicador_datos_filtrar',);
                    }

                    // indicador_datos_mapa
                    if ($pathinfo === '/indicador/datos/mapa') {
                        return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\IndicadorController::getMapaAction',  '_route' => 'indicador_datos_mapa',);
                    }

                }

            }

            // change_locale
            if (preg_match('#^/indicador/(?P<_locale>[^/]++)/change$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'change_locale')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\IndicadorController::changeLocaleAction',));
            }

        }

        // change_clasificacion_uso
        if (0 === strpos($pathinfo, '/tablero/usuario/change') && preg_match('#^/tablero/usuario/change/(?P<codigo_clasificacion>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'change_clasificacion_uso')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\IndicadorController::changeClasificacionUsoAction',));
        }

        if (0 === strpos($pathinfo, '/indicador')) {
            // indicador_favorito
            if ($pathinfo === '/indicador/favorito') {
                return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\IndicadorController::indicadorFavorito',  '_route' => 'indicador_favorito',);
            }

            // get_indicador_ficha
            if (preg_match('#^/indicador/(?P<id>[^/]++)/ficha$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_indicador_ficha')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\IndicadorController::getFichaAction',));
            }

        }

        // sala_guardar
        if ($pathinfo === '/sala/guardar') {
            return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\IndicadorController::guardarSala',  '_route' => 'sala_guardar',);
        }

        // usuario_asignar_sala
        if (0 === strpos($pathinfo, '/usuario') && preg_match('#^/usuario/(?P<id>[^/]++)/sala/(?P<id_sala>[^/]++)/(?P<accion>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_asignar_sala')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\IndicadorController::asignarSala',));
        }

        // sala_get_imagenes
        if (0 === strpos($pathinfo, '/sala/get_imagenes') && preg_match('#^/sala/get_imagenes/(?P<id>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'sala_get_imagenes');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sala_get_imagenes')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\IndicadorController::getImagenesSala',));
        }

        if (0 === strpos($pathinfo, '/rest-service')) {
            if (0 === strpos($pathinfo, '/rest-service/data')) {
                // minsal_indicadores_indicadorrest_getindicador
                if (preg_match('#^/rest\\-service/data/(?P<id>[^/]++)/(?P<dimension>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_minsal_indicadores_indicadorrest_getindicador;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'minsal_indicadores_indicadorrest_getindicador')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\IndicadorRESTController::getIndicadorAction',));
                }
                not_minsal_indicadores_indicadorrest_getindicador:

                // minsal_indicadores_indicadorrest_getdatosindicador
                if (preg_match('#^/rest\\-service/data/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_minsal_indicadores_indicadorrest_getdatosindicador;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'minsal_indicadores_indicadorrest_getdatosindicador')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\IndicadorRESTController::getDatosIndicadorAction',));
                }
                not_minsal_indicadores_indicadorrest_getdatosindicador:

            }

            // minsal_indicadores_indicadorrest_getindicadores
            if ($pathinfo === '/rest-service/indicadores') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_minsal_indicadores_indicadorrest_getindicadores;
                }

                return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\IndicadorRESTController::getIndicadoresAction',  '_route' => 'minsal_indicadores_indicadorrest_getindicadores',);
            }
            not_minsal_indicadores_indicadorrest_getindicadores:

        }

        // origen_dato_conexion_probar
        if ($pathinfo === '/conexion/probar') {
            return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\OrigenDatoController::probarConexionAction',  '_route' => 'origen_dato_conexion_probar',);
        }

        // origen_dato_conexion_probar_sentencia
        if ($pathinfo === '/sentencia/probar') {
            return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\OrigenDatoController::probarSentenciaAction',  '_route' => 'origen_dato_conexion_probar_sentencia',);
        }

        // origen_dato_leer
        if (0 === strpos($pathinfo, '/origen_dato') && preg_match('#^/origen_dato/(?P<id>[^/]++)/leer$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'origen_dato_leer')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\OrigenDatoController::leerOrigenAction',));
        }

        // configurar_campo
        if ($pathinfo === '/configurar/campo') {
            return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\OrigenDatoController::configurarCampoAction',  '_route' => 'configurar_campo',);
        }

        // origen_dato_get_campos
        if (0 === strpos($pathinfo, '/origen_dato/get_campos') && preg_match('#^/origen_dato/get_campos/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'origen_dato_get_campos')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\OrigenDatoController::getCamposAction',));
        }

        if (0 === strpos($pathinfo, '/sala')) {
            // sala_acciones_custom_list
            if (preg_match('#^/sala/(?P<id>[^/]++)/acciones/list$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sala_acciones_custom_list')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\SalaAccionesAdminController::customListAction',));
            }

            // accion_guardar
            if (preg_match('#^/sala/(?P<id>[^/]++)/accion/guardar$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'accion_guardar')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\SalaAccionesAdminController::guardarAccion',));
            }

            // sala_get_comentarios
            if (0 === strpos($pathinfo, '/sala/get_comentarios') && preg_match('#^/sala/get_comentarios/(?P<idSala>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sala_get_comentarios');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sala_get_comentarios')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\SocialController::getComentariosSala',));
            }

            // sala_set_comentario
            if (preg_match('#^/sala/(?P<id>[^/]++)/set_comentario$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sala_set_comentario')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\SocialController::setComentarioSala',));
            }

            // sala_get_usuarios
            if (0 === strpos($pathinfo, '/sala/get_usuarios') && preg_match('#^/sala/get_usuarios/(?P<idSala>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sala_get_usuarios');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sala_get_usuarios')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\SocialController::getUsuariosSala',));
            }

            // sala_set_usuario
            if (preg_match('#^/sala/(?P<id>[^/]++)/set_usuario/(?P<id_usuario>[^/]++)/(?P<accion>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sala_set_usuario')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\SocialController::setUsuarioSala',));
            }

        }

        // minsal_costos_costeorest_getdatoscosteo
        if (0 === strpos($pathinfo, '/rest-service/costos/data') && preg_match('#^/rest\\-service/costos/data/(?P<codigo>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_minsal_costos_costeorest_getdatoscosteo;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'minsal_costos_costeorest_getdatoscosteo')), array (  '_controller' => 'MINSAL\\CostosBundle\\Controller\\CosteoRESTController::getDatosCosteoAction',));
        }
        not_minsal_costos_costeorest_getdatoscosteo:

        // minsal_costos_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'minsal_costos_default_index')), array (  '_controller' => 'MINSAL\\CostosBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/grid')) {
            // get_grid_data
            if (preg_match('#^/grid/(?P<id>[^/]++)/(?P<periodo_ingreso>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_grid_data')), array (  '_controller' => 'MINSAL\\CostosBundle\\Controller\\GridController::getGridDataAction',));
            }

            // set_grid_data
            if (0 === strpos($pathinfo, '/grid/save') && preg_match('#^/grid/save/(?P<id>[^/]++)/(?P<periodo_ingreso>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'set_grid_data')), array (  '_controller' => 'MINSAL\\CostosBundle\\Controller\\GridController::setGridDataAction',));
            }

        }

        // get_dependencias
        if (0 === strpos($pathinfo, '/estructura/establecimiento') && preg_match('#^/estructura/establecimiento/(?P<codigo_establecimiento>[^/]++)/dependencias$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_dependencias')), array (  '_controller' => 'MINSAL\\CostosBundle\\Controller\\GridController::getDependencias',));
        }

        if (0 === strpos($pathinfo, '/rest-service')) {
            if (0 === strpos($pathinfo, '/rest-service/data')) {
                // get_indicador
                if (preg_match('#^/rest\\-service/data/(?P<id>[^/]++)/(?P<dimension>[^/\\.]++)(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_get_indicador;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_indicador')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\IndicadorRESTController::getIndicadorAction',  '_format' => 'json',));
                }
                not_get_indicador:

                // get_datos_indicador
                if (preg_match('#^/rest\\-service/data/(?P<id>[^/\\.]++)(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_get_datos_indicador;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_datos_indicador')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\IndicadorRESTController::getDatosIndicadorAction',  '_format' => 'json',));
                }
                not_get_datos_indicador:

            }

            // get_indicadores
            if (0 === strpos($pathinfo, '/rest-service/indicadores') && preg_match('#^/rest\\-service/indicadores(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_get_indicadores;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_indicadores')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\IndicadorRESTController::getIndicadoresAction',  '_format' => 'json',));
            }
            not_get_indicadores:

            // get_datos_costeo
            if (0 === strpos($pathinfo, '/rest-service/costos/data') && preg_match('#^/rest\\-service/costos/data/(?P<codigo>[^/\\.]++)(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_get_datos_costeo;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_datos_costeo')), array (  '_controller' => 'MINSAL\\CostosBundle\\Controller\\CosteoRESTController::getDatosCosteoAction',  '_format' => 'json',));
            }
            not_get_datos_costeo:

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_redirect
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
            }

            // sonata_admin_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/core')) {
                // sonata_admin_retrieve_form_element
                if ($pathinfo === '/admin/core/get-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                }

                // sonata_admin_append_form_element
                if ($pathinfo === '/admin/core/append-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_short_object_information
                if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                }

                // sonata_admin_set_object_field_value
                if ($pathinfo === '/admin/core/set-object-field-value') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            // sonata_admin_search
            if ($pathinfo === '/admin/search') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
            }

            // sonata_admin_retrieve_autocomplete_items
            if ($pathinfo === '/admin/core/get-autocomplete-items') {
                return array (  '_controller' => 'sonata.admin.controller.admin:retrieveAutocompleteItemsAction',  '_route' => 'sonata_admin_retrieve_autocomplete_items',);
            }

            if (0 === strpos($pathinfo, '/admin/minsal')) {
                if (0 === strpos($pathinfo, '/admin/minsal/indicadores')) {
                    if (0 === strpos($pathinfo, '/admin/minsal/indicadores/agencia')) {
                        // admin_minsal_indicadores_agencia_list
                        if ($pathinfo === '/admin/minsal/indicadores/agencia/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.agencia',  '_sonata_name' => 'admin_minsal_indicadores_agencia_list',  '_route' => 'admin_minsal_indicadores_agencia_list',);
                        }

                        // admin_minsal_indicadores_agencia_create
                        if ($pathinfo === '/admin/minsal/indicadores/agencia/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.agencia',  '_sonata_name' => 'admin_minsal_indicadores_agencia_create',  '_route' => 'admin_minsal_indicadores_agencia_create',);
                        }

                        // admin_minsal_indicadores_agencia_batch
                        if ($pathinfo === '/admin/minsal/indicadores/agencia/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.agencia',  '_sonata_name' => 'admin_minsal_indicadores_agencia_batch',  '_route' => 'admin_minsal_indicadores_agencia_batch',);
                        }

                        // admin_minsal_indicadores_agencia_edit
                        if (preg_match('#^/admin/minsal/indicadores/agencia/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_agencia_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.agencia',  '_sonata_name' => 'admin_minsal_indicadores_agencia_edit',));
                        }

                        // admin_minsal_indicadores_agencia_delete
                        if (preg_match('#^/admin/minsal/indicadores/agencia/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_agencia_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.agencia',  '_sonata_name' => 'admin_minsal_indicadores_agencia_delete',));
                        }

                        // admin_minsal_indicadores_agencia_show
                        if (preg_match('#^/admin/minsal/indicadores/agencia/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_agencia_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.agencia',  '_sonata_name' => 'admin_minsal_indicadores_agencia_show',));
                        }

                        // admin_minsal_indicadores_agencia_export
                        if ($pathinfo === '/admin/minsal/indicadores/agencia/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.agencia',  '_sonata_name' => 'admin_minsal_indicadores_agencia_export',  '_route' => 'admin_minsal_indicadores_agencia_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/minsal/indicadores/imagen')) {
                        // admin_minsal_indicadores_imagen_list
                        if ($pathinfo === '/admin/minsal/indicadores/imagen/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.imagen',  '_sonata_name' => 'admin_minsal_indicadores_imagen_list',  '_route' => 'admin_minsal_indicadores_imagen_list',);
                        }

                        // admin_minsal_indicadores_imagen_create
                        if ($pathinfo === '/admin/minsal/indicadores/imagen/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.imagen',  '_sonata_name' => 'admin_minsal_indicadores_imagen_create',  '_route' => 'admin_minsal_indicadores_imagen_create',);
                        }

                        // admin_minsal_indicadores_imagen_batch
                        if ($pathinfo === '/admin/minsal/indicadores/imagen/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.imagen',  '_sonata_name' => 'admin_minsal_indicadores_imagen_batch',  '_route' => 'admin_minsal_indicadores_imagen_batch',);
                        }

                        // admin_minsal_indicadores_imagen_edit
                        if (preg_match('#^/admin/minsal/indicadores/imagen/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_imagen_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.imagen',  '_sonata_name' => 'admin_minsal_indicadores_imagen_edit',));
                        }

                        // admin_minsal_indicadores_imagen_delete
                        if (preg_match('#^/admin/minsal/indicadores/imagen/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_imagen_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.imagen',  '_sonata_name' => 'admin_minsal_indicadores_imagen_delete',));
                        }

                        // admin_minsal_indicadores_imagen_show
                        if (preg_match('#^/admin/minsal/indicadores/imagen/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_imagen_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.imagen',  '_sonata_name' => 'admin_minsal_indicadores_imagen_show',));
                        }

                        // admin_minsal_indicadores_imagen_export
                        if ($pathinfo === '/admin/minsal/indicadores/imagen/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.imagen',  '_sonata_name' => 'admin_minsal_indicadores_imagen_export',  '_route' => 'admin_minsal_indicadores_imagen_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/minsal/indicadores/responsabledato')) {
                        // admin_minsal_indicadores_responsabledato_list
                        if ($pathinfo === '/admin/minsal/indicadores/responsabledato/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.responsable_dato',  '_sonata_name' => 'admin_minsal_indicadores_responsabledato_list',  '_route' => 'admin_minsal_indicadores_responsabledato_list',);
                        }

                        // admin_minsal_indicadores_responsabledato_create
                        if ($pathinfo === '/admin/minsal/indicadores/responsabledato/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.responsable_dato',  '_sonata_name' => 'admin_minsal_indicadores_responsabledato_create',  '_route' => 'admin_minsal_indicadores_responsabledato_create',);
                        }

                        // admin_minsal_indicadores_responsabledato_batch
                        if ($pathinfo === '/admin/minsal/indicadores/responsabledato/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.responsable_dato',  '_sonata_name' => 'admin_minsal_indicadores_responsabledato_batch',  '_route' => 'admin_minsal_indicadores_responsabledato_batch',);
                        }

                        // admin_minsal_indicadores_responsabledato_edit
                        if (preg_match('#^/admin/minsal/indicadores/responsabledato/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_responsabledato_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.responsable_dato',  '_sonata_name' => 'admin_minsal_indicadores_responsabledato_edit',));
                        }

                        // admin_minsal_indicadores_responsabledato_delete
                        if (preg_match('#^/admin/minsal/indicadores/responsabledato/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_responsabledato_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.responsable_dato',  '_sonata_name' => 'admin_minsal_indicadores_responsabledato_delete',));
                        }

                        // admin_minsal_indicadores_responsabledato_show
                        if (preg_match('#^/admin/minsal/indicadores/responsabledato/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_responsabledato_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.responsable_dato',  '_sonata_name' => 'admin_minsal_indicadores_responsabledato_show',));
                        }

                        // admin_minsal_indicadores_responsabledato_export
                        if ($pathinfo === '/admin/minsal/indicadores/responsabledato/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.responsable_dato',  '_sonata_name' => 'admin_minsal_indicadores_responsabledato_export',  '_route' => 'admin_minsal_indicadores_responsabledato_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/minsal/indicadores/fuentedato')) {
                        // admin_minsal_indicadores_fuentedato_list
                        if ($pathinfo === '/admin/minsal/indicadores/fuentedato/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.fuente_dato',  '_sonata_name' => 'admin_minsal_indicadores_fuentedato_list',  '_route' => 'admin_minsal_indicadores_fuentedato_list',);
                        }

                        // admin_minsal_indicadores_fuentedato_create
                        if ($pathinfo === '/admin/minsal/indicadores/fuentedato/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.fuente_dato',  '_sonata_name' => 'admin_minsal_indicadores_fuentedato_create',  '_route' => 'admin_minsal_indicadores_fuentedato_create',);
                        }

                        // admin_minsal_indicadores_fuentedato_batch
                        if ($pathinfo === '/admin/minsal/indicadores/fuentedato/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.fuente_dato',  '_sonata_name' => 'admin_minsal_indicadores_fuentedato_batch',  '_route' => 'admin_minsal_indicadores_fuentedato_batch',);
                        }

                        // admin_minsal_indicadores_fuentedato_edit
                        if (preg_match('#^/admin/minsal/indicadores/fuentedato/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_fuentedato_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.fuente_dato',  '_sonata_name' => 'admin_minsal_indicadores_fuentedato_edit',));
                        }

                        // admin_minsal_indicadores_fuentedato_delete
                        if (preg_match('#^/admin/minsal/indicadores/fuentedato/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_fuentedato_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.fuente_dato',  '_sonata_name' => 'admin_minsal_indicadores_fuentedato_delete',));
                        }

                        // admin_minsal_indicadores_fuentedato_show
                        if (preg_match('#^/admin/minsal/indicadores/fuentedato/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_fuentedato_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.fuente_dato',  '_sonata_name' => 'admin_minsal_indicadores_fuentedato_show',));
                        }

                        // admin_minsal_indicadores_fuentedato_export
                        if ($pathinfo === '/admin/minsal/indicadores/fuentedato/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.fuente_dato',  '_sonata_name' => 'admin_minsal_indicadores_fuentedato_export',  '_route' => 'admin_minsal_indicadores_fuentedato_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/minsal/indicadores/responsableindicador')) {
                        // admin_minsal_indicadores_responsableindicador_list
                        if ($pathinfo === '/admin/minsal/indicadores/responsableindicador/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.responsable_indicador',  '_sonata_name' => 'admin_minsal_indicadores_responsableindicador_list',  '_route' => 'admin_minsal_indicadores_responsableindicador_list',);
                        }

                        // admin_minsal_indicadores_responsableindicador_create
                        if ($pathinfo === '/admin/minsal/indicadores/responsableindicador/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.responsable_indicador',  '_sonata_name' => 'admin_minsal_indicadores_responsableindicador_create',  '_route' => 'admin_minsal_indicadores_responsableindicador_create',);
                        }

                        // admin_minsal_indicadores_responsableindicador_batch
                        if ($pathinfo === '/admin/minsal/indicadores/responsableindicador/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.responsable_indicador',  '_sonata_name' => 'admin_minsal_indicadores_responsableindicador_batch',  '_route' => 'admin_minsal_indicadores_responsableindicador_batch',);
                        }

                        // admin_minsal_indicadores_responsableindicador_edit
                        if (preg_match('#^/admin/minsal/indicadores/responsableindicador/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_responsableindicador_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.responsable_indicador',  '_sonata_name' => 'admin_minsal_indicadores_responsableindicador_edit',));
                        }

                        // admin_minsal_indicadores_responsableindicador_delete
                        if (preg_match('#^/admin/minsal/indicadores/responsableindicador/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_responsableindicador_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.responsable_indicador',  '_sonata_name' => 'admin_minsal_indicadores_responsableindicador_delete',));
                        }

                        // admin_minsal_indicadores_responsableindicador_show
                        if (preg_match('#^/admin/minsal/indicadores/responsableindicador/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_responsableindicador_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.responsable_indicador',  '_sonata_name' => 'admin_minsal_indicadores_responsableindicador_show',));
                        }

                        // admin_minsal_indicadores_responsableindicador_export
                        if ($pathinfo === '/admin/minsal/indicadores/responsableindicador/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.responsable_indicador',  '_sonata_name' => 'admin_minsal_indicadores_responsableindicador_export',  '_route' => 'admin_minsal_indicadores_responsableindicador_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/minsal/indicadores/clasificacion')) {
                        if (0 === strpos($pathinfo, '/admin/minsal/indicadores/clasificaciontecnica')) {
                            // admin_minsal_indicadores_clasificaciontecnica_list
                            if ($pathinfo === '/admin/minsal/indicadores/clasificaciontecnica/list') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.clasificacion_tecnica',  '_sonata_name' => 'admin_minsal_indicadores_clasificaciontecnica_list',  '_route' => 'admin_minsal_indicadores_clasificaciontecnica_list',);
                            }

                            // admin_minsal_indicadores_clasificaciontecnica_create
                            if ($pathinfo === '/admin/minsal/indicadores/clasificaciontecnica/create') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.clasificacion_tecnica',  '_sonata_name' => 'admin_minsal_indicadores_clasificaciontecnica_create',  '_route' => 'admin_minsal_indicadores_clasificaciontecnica_create',);
                            }

                            // admin_minsal_indicadores_clasificaciontecnica_batch
                            if ($pathinfo === '/admin/minsal/indicadores/clasificaciontecnica/batch') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.clasificacion_tecnica',  '_sonata_name' => 'admin_minsal_indicadores_clasificaciontecnica_batch',  '_route' => 'admin_minsal_indicadores_clasificaciontecnica_batch',);
                            }

                            // admin_minsal_indicadores_clasificaciontecnica_edit
                            if (preg_match('#^/admin/minsal/indicadores/clasificaciontecnica/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_clasificaciontecnica_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.clasificacion_tecnica',  '_sonata_name' => 'admin_minsal_indicadores_clasificaciontecnica_edit',));
                            }

                            // admin_minsal_indicadores_clasificaciontecnica_delete
                            if (preg_match('#^/admin/minsal/indicadores/clasificaciontecnica/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_clasificaciontecnica_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.clasificacion_tecnica',  '_sonata_name' => 'admin_minsal_indicadores_clasificaciontecnica_delete',));
                            }

                            // admin_minsal_indicadores_clasificaciontecnica_show
                            if (preg_match('#^/admin/minsal/indicadores/clasificaciontecnica/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_clasificaciontecnica_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.clasificacion_tecnica',  '_sonata_name' => 'admin_minsal_indicadores_clasificaciontecnica_show',));
                            }

                            // admin_minsal_indicadores_clasificaciontecnica_export
                            if ($pathinfo === '/admin/minsal/indicadores/clasificaciontecnica/export') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.clasificacion_tecnica',  '_sonata_name' => 'admin_minsal_indicadores_clasificaciontecnica_export',  '_route' => 'admin_minsal_indicadores_clasificaciontecnica_export',);
                            }

                        }

                        if (0 === strpos($pathinfo, '/admin/minsal/indicadores/clasificacionprivacidad')) {
                            // admin_minsal_indicadores_clasificacionprivacidad_list
                            if ($pathinfo === '/admin/minsal/indicadores/clasificacionprivacidad/list') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.clasificacion_privacidad',  '_sonata_name' => 'admin_minsal_indicadores_clasificacionprivacidad_list',  '_route' => 'admin_minsal_indicadores_clasificacionprivacidad_list',);
                            }

                            // admin_minsal_indicadores_clasificacionprivacidad_create
                            if ($pathinfo === '/admin/minsal/indicadores/clasificacionprivacidad/create') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.clasificacion_privacidad',  '_sonata_name' => 'admin_minsal_indicadores_clasificacionprivacidad_create',  '_route' => 'admin_minsal_indicadores_clasificacionprivacidad_create',);
                            }

                            // admin_minsal_indicadores_clasificacionprivacidad_batch
                            if ($pathinfo === '/admin/minsal/indicadores/clasificacionprivacidad/batch') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.clasificacion_privacidad',  '_sonata_name' => 'admin_minsal_indicadores_clasificacionprivacidad_batch',  '_route' => 'admin_minsal_indicadores_clasificacionprivacidad_batch',);
                            }

                            // admin_minsal_indicadores_clasificacionprivacidad_edit
                            if (preg_match('#^/admin/minsal/indicadores/clasificacionprivacidad/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_clasificacionprivacidad_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.clasificacion_privacidad',  '_sonata_name' => 'admin_minsal_indicadores_clasificacionprivacidad_edit',));
                            }

                            // admin_minsal_indicadores_clasificacionprivacidad_delete
                            if (preg_match('#^/admin/minsal/indicadores/clasificacionprivacidad/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_clasificacionprivacidad_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.clasificacion_privacidad',  '_sonata_name' => 'admin_minsal_indicadores_clasificacionprivacidad_delete',));
                            }

                            // admin_minsal_indicadores_clasificacionprivacidad_show
                            if (preg_match('#^/admin/minsal/indicadores/clasificacionprivacidad/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_clasificacionprivacidad_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.clasificacion_privacidad',  '_sonata_name' => 'admin_minsal_indicadores_clasificacionprivacidad_show',));
                            }

                            // admin_minsal_indicadores_clasificacionprivacidad_export
                            if ($pathinfo === '/admin/minsal/indicadores/clasificacionprivacidad/export') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.clasificacion_privacidad',  '_sonata_name' => 'admin_minsal_indicadores_clasificacionprivacidad_export',  '_route' => 'admin_minsal_indicadores_clasificacionprivacidad_export',);
                            }

                        }

                        if (0 === strpos($pathinfo, '/admin/minsal/indicadores/clasificacionnivel')) {
                            // admin_minsal_indicadores_clasificacionnivel_list
                            if ($pathinfo === '/admin/minsal/indicadores/clasificacionnivel/list') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.clasificacion_nivel',  '_sonata_name' => 'admin_minsal_indicadores_clasificacionnivel_list',  '_route' => 'admin_minsal_indicadores_clasificacionnivel_list',);
                            }

                            // admin_minsal_indicadores_clasificacionnivel_create
                            if ($pathinfo === '/admin/minsal/indicadores/clasificacionnivel/create') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.clasificacion_nivel',  '_sonata_name' => 'admin_minsal_indicadores_clasificacionnivel_create',  '_route' => 'admin_minsal_indicadores_clasificacionnivel_create',);
                            }

                            // admin_minsal_indicadores_clasificacionnivel_batch
                            if ($pathinfo === '/admin/minsal/indicadores/clasificacionnivel/batch') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.clasificacion_nivel',  '_sonata_name' => 'admin_minsal_indicadores_clasificacionnivel_batch',  '_route' => 'admin_minsal_indicadores_clasificacionnivel_batch',);
                            }

                            // admin_minsal_indicadores_clasificacionnivel_edit
                            if (preg_match('#^/admin/minsal/indicadores/clasificacionnivel/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_clasificacionnivel_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.clasificacion_nivel',  '_sonata_name' => 'admin_minsal_indicadores_clasificacionnivel_edit',));
                            }

                            // admin_minsal_indicadores_clasificacionnivel_delete
                            if (preg_match('#^/admin/minsal/indicadores/clasificacionnivel/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_clasificacionnivel_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.clasificacion_nivel',  '_sonata_name' => 'admin_minsal_indicadores_clasificacionnivel_delete',));
                            }

                            // admin_minsal_indicadores_clasificacionnivel_show
                            if (preg_match('#^/admin/minsal/indicadores/clasificacionnivel/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_clasificacionnivel_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.clasificacion_nivel',  '_sonata_name' => 'admin_minsal_indicadores_clasificacionnivel_show',));
                            }

                            // admin_minsal_indicadores_clasificacionnivel_export
                            if ($pathinfo === '/admin/minsal/indicadores/clasificacionnivel/export') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.clasificacion_nivel',  '_sonata_name' => 'admin_minsal_indicadores_clasificacionnivel_export',  '_route' => 'admin_minsal_indicadores_clasificacionnivel_export',);
                            }

                        }

                        if (0 === strpos($pathinfo, '/admin/minsal/indicadores/clasificacionuso')) {
                            // admin_minsal_indicadores_clasificacionuso_list
                            if ($pathinfo === '/admin/minsal/indicadores/clasificacionuso/list') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.clasificacion_uso',  '_sonata_name' => 'admin_minsal_indicadores_clasificacionuso_list',  '_route' => 'admin_minsal_indicadores_clasificacionuso_list',);
                            }

                            // admin_minsal_indicadores_clasificacionuso_create
                            if ($pathinfo === '/admin/minsal/indicadores/clasificacionuso/create') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.clasificacion_uso',  '_sonata_name' => 'admin_minsal_indicadores_clasificacionuso_create',  '_route' => 'admin_minsal_indicadores_clasificacionuso_create',);
                            }

                            // admin_minsal_indicadores_clasificacionuso_batch
                            if ($pathinfo === '/admin/minsal/indicadores/clasificacionuso/batch') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.clasificacion_uso',  '_sonata_name' => 'admin_minsal_indicadores_clasificacionuso_batch',  '_route' => 'admin_minsal_indicadores_clasificacionuso_batch',);
                            }

                            // admin_minsal_indicadores_clasificacionuso_edit
                            if (preg_match('#^/admin/minsal/indicadores/clasificacionuso/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_clasificacionuso_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.clasificacion_uso',  '_sonata_name' => 'admin_minsal_indicadores_clasificacionuso_edit',));
                            }

                            // admin_minsal_indicadores_clasificacionuso_delete
                            if (preg_match('#^/admin/minsal/indicadores/clasificacionuso/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_clasificacionuso_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.clasificacion_uso',  '_sonata_name' => 'admin_minsal_indicadores_clasificacionuso_delete',));
                            }

                            // admin_minsal_indicadores_clasificacionuso_show
                            if (preg_match('#^/admin/minsal/indicadores/clasificacionuso/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_clasificacionuso_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.clasificacion_uso',  '_sonata_name' => 'admin_minsal_indicadores_clasificacionuso_show',));
                            }

                            // admin_minsal_indicadores_clasificacionuso_export
                            if ($pathinfo === '/admin/minsal/indicadores/clasificacionuso/export') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.clasificacion_uso',  '_sonata_name' => 'admin_minsal_indicadores_clasificacionuso_export',  '_route' => 'admin_minsal_indicadores_clasificacionuso_export',);
                            }

                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/minsal/indicadores/significadocampo')) {
                        // admin_minsal_indicadores_significadocampo_list
                        if ($pathinfo === '/admin/minsal/indicadores/significadocampo/list') {
                            return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\SignificadoCampoAdminController::listAction',  '_sonata_admin' => 'sonata.admin.significado_campo',  '_sonata_name' => 'admin_minsal_indicadores_significadocampo_list',  '_route' => 'admin_minsal_indicadores_significadocampo_list',);
                        }

                        // admin_minsal_indicadores_significadocampo_create
                        if ($pathinfo === '/admin/minsal/indicadores/significadocampo/create') {
                            return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\SignificadoCampoAdminController::createAction',  '_sonata_admin' => 'sonata.admin.significado_campo',  '_sonata_name' => 'admin_minsal_indicadores_significadocampo_create',  '_route' => 'admin_minsal_indicadores_significadocampo_create',);
                        }

                        // admin_minsal_indicadores_significadocampo_batch
                        if ($pathinfo === '/admin/minsal/indicadores/significadocampo/batch') {
                            return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\SignificadoCampoAdminController::batchAction',  '_sonata_admin' => 'sonata.admin.significado_campo',  '_sonata_name' => 'admin_minsal_indicadores_significadocampo_batch',  '_route' => 'admin_minsal_indicadores_significadocampo_batch',);
                        }

                        // admin_minsal_indicadores_significadocampo_edit
                        if (preg_match('#^/admin/minsal/indicadores/significadocampo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_significadocampo_edit')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\SignificadoCampoAdminController::editAction',  '_sonata_admin' => 'sonata.admin.significado_campo',  '_sonata_name' => 'admin_minsal_indicadores_significadocampo_edit',));
                        }

                        // admin_minsal_indicadores_significadocampo_delete
                        if (preg_match('#^/admin/minsal/indicadores/significadocampo/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_significadocampo_delete')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\SignificadoCampoAdminController::deleteAction',  '_sonata_admin' => 'sonata.admin.significado_campo',  '_sonata_name' => 'admin_minsal_indicadores_significadocampo_delete',));
                        }

                        // admin_minsal_indicadores_significadocampo_show
                        if (preg_match('#^/admin/minsal/indicadores/significadocampo/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_significadocampo_show')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\SignificadoCampoAdminController::showAction',  '_sonata_admin' => 'sonata.admin.significado_campo',  '_sonata_name' => 'admin_minsal_indicadores_significadocampo_show',));
                        }

                        // admin_minsal_indicadores_significadocampo_export
                        if ($pathinfo === '/admin/minsal/indicadores/significadocampo/export') {
                            return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\SignificadoCampoAdminController::exportAction',  '_sonata_admin' => 'sonata.admin.significado_campo',  '_sonata_name' => 'admin_minsal_indicadores_significadocampo_export',  '_route' => 'admin_minsal_indicadores_significadocampo_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/minsal/indicadores/alerta')) {
                        // admin_minsal_indicadores_alerta_list
                        if ($pathinfo === '/admin/minsal/indicadores/alerta/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.colores_alertas',  '_sonata_name' => 'admin_minsal_indicadores_alerta_list',  '_route' => 'admin_minsal_indicadores_alerta_list',);
                        }

                        // admin_minsal_indicadores_alerta_create
                        if ($pathinfo === '/admin/minsal/indicadores/alerta/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.colores_alertas',  '_sonata_name' => 'admin_minsal_indicadores_alerta_create',  '_route' => 'admin_minsal_indicadores_alerta_create',);
                        }

                        // admin_minsal_indicadores_alerta_batch
                        if ($pathinfo === '/admin/minsal/indicadores/alerta/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.colores_alertas',  '_sonata_name' => 'admin_minsal_indicadores_alerta_batch',  '_route' => 'admin_minsal_indicadores_alerta_batch',);
                        }

                        // admin_minsal_indicadores_alerta_edit
                        if (preg_match('#^/admin/minsal/indicadores/alerta/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_alerta_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.colores_alertas',  '_sonata_name' => 'admin_minsal_indicadores_alerta_edit',));
                        }

                        // admin_minsal_indicadores_alerta_delete
                        if (preg_match('#^/admin/minsal/indicadores/alerta/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_alerta_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.colores_alertas',  '_sonata_name' => 'admin_minsal_indicadores_alerta_delete',));
                        }

                        // admin_minsal_indicadores_alerta_show
                        if (preg_match('#^/admin/minsal/indicadores/alerta/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_alerta_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.colores_alertas',  '_sonata_name' => 'admin_minsal_indicadores_alerta_show',));
                        }

                        // admin_minsal_indicadores_alerta_export
                        if ($pathinfo === '/admin/minsal/indicadores/alerta/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.colores_alertas',  '_sonata_name' => 'admin_minsal_indicadores_alerta_export',  '_route' => 'admin_minsal_indicadores_alerta_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/minsal/indicadores/conexion')) {
                        // admin_minsal_indicadores_conexion_list
                        if ($pathinfo === '/admin/minsal/indicadores/conexion/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.conexion',  '_sonata_name' => 'admin_minsal_indicadores_conexion_list',  '_route' => 'admin_minsal_indicadores_conexion_list',);
                        }

                        // admin_minsal_indicadores_conexion_create
                        if ($pathinfo === '/admin/minsal/indicadores/conexion/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.conexion',  '_sonata_name' => 'admin_minsal_indicadores_conexion_create',  '_route' => 'admin_minsal_indicadores_conexion_create',);
                        }

                        // admin_minsal_indicadores_conexion_batch
                        if ($pathinfo === '/admin/minsal/indicadores/conexion/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.conexion',  '_sonata_name' => 'admin_minsal_indicadores_conexion_batch',  '_route' => 'admin_minsal_indicadores_conexion_batch',);
                        }

                        // admin_minsal_indicadores_conexion_edit
                        if (preg_match('#^/admin/minsal/indicadores/conexion/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_conexion_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.conexion',  '_sonata_name' => 'admin_minsal_indicadores_conexion_edit',));
                        }

                        // admin_minsal_indicadores_conexion_delete
                        if (preg_match('#^/admin/minsal/indicadores/conexion/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_conexion_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.conexion',  '_sonata_name' => 'admin_minsal_indicadores_conexion_delete',));
                        }

                        // admin_minsal_indicadores_conexion_show
                        if (preg_match('#^/admin/minsal/indicadores/conexion/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_conexion_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.conexion',  '_sonata_name' => 'admin_minsal_indicadores_conexion_show',));
                        }

                        // admin_minsal_indicadores_conexion_export
                        if ($pathinfo === '/admin/minsal/indicadores/conexion/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.conexion',  '_sonata_name' => 'admin_minsal_indicadores_conexion_export',  '_route' => 'admin_minsal_indicadores_conexion_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/minsal/indicadores/origendatos')) {
                        // admin_minsal_indicadores_origendatos_list
                        if ($pathinfo === '/admin/minsal/indicadores/origendatos/list') {
                            return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\OrigenDatosAdminController::listAction',  '_sonata_admin' => 'sonata.admin.origen_dato',  '_sonata_name' => 'admin_minsal_indicadores_origendatos_list',  '_route' => 'admin_minsal_indicadores_origendatos_list',);
                        }

                        // admin_minsal_indicadores_origendatos_create
                        if ($pathinfo === '/admin/minsal/indicadores/origendatos/create') {
                            return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\OrigenDatosAdminController::createAction',  '_sonata_admin' => 'sonata.admin.origen_dato',  '_sonata_name' => 'admin_minsal_indicadores_origendatos_create',  '_route' => 'admin_minsal_indicadores_origendatos_create',);
                        }

                        // admin_minsal_indicadores_origendatos_batch
                        if ($pathinfo === '/admin/minsal/indicadores/origendatos/batch') {
                            return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\OrigenDatosAdminController::batchAction',  '_sonata_admin' => 'sonata.admin.origen_dato',  '_sonata_name' => 'admin_minsal_indicadores_origendatos_batch',  '_route' => 'admin_minsal_indicadores_origendatos_batch',);
                        }

                        // admin_minsal_indicadores_origendatos_edit
                        if (preg_match('#^/admin/minsal/indicadores/origendatos/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_origendatos_edit')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\OrigenDatosAdminController::editAction',  '_sonata_admin' => 'sonata.admin.origen_dato',  '_sonata_name' => 'admin_minsal_indicadores_origendatos_edit',));
                        }

                        // admin_minsal_indicadores_origendatos_delete
                        if (preg_match('#^/admin/minsal/indicadores/origendatos/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_origendatos_delete')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\OrigenDatosAdminController::deleteAction',  '_sonata_admin' => 'sonata.admin.origen_dato',  '_sonata_name' => 'admin_minsal_indicadores_origendatos_delete',));
                        }

                        // admin_minsal_indicadores_origendatos_show
                        if (preg_match('#^/admin/minsal/indicadores/origendatos/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_origendatos_show')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\OrigenDatosAdminController::showAction',  '_sonata_admin' => 'sonata.admin.origen_dato',  '_sonata_name' => 'admin_minsal_indicadores_origendatos_show',));
                        }

                        // admin_minsal_indicadores_origendatos_export
                        if ($pathinfo === '/admin/minsal/indicadores/origendatos/export') {
                            return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\OrigenDatosAdminController::exportAction',  '_sonata_admin' => 'sonata.admin.origen_dato',  '_sonata_name' => 'admin_minsal_indicadores_origendatos_export',  '_route' => 'admin_minsal_indicadores_origendatos_export',);
                        }

                        // admin_minsal_indicadores_origendatos_merge_save
                        if ($pathinfo === '/admin/minsal/indicadores/origendatos/merge/save') {
                            return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\OrigenDatosAdminController::mergeSaveAction',  '_sonata_admin' => 'sonata.admin.origen_dato',  '_sonata_name' => 'admin_minsal_indicadores_origendatos_merge_save',  '_route' => 'admin_minsal_indicadores_origendatos_merge_save',);
                        }

                        // admin_minsal_indicadores_origendatos_load_data
                        if ($pathinfo === '/admin/minsal/indicadores/origendatos/load_data') {
                            return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\OrigenDatosAdminController::loadDataAction',  '_sonata_admin' => 'sonata.admin.origen_dato',  '_sonata_name' => 'admin_minsal_indicadores_origendatos_load_data',  '_route' => 'admin_minsal_indicadores_origendatos_load_data',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/minsal/indicadores/diccionario')) {
                        // admin_minsal_indicadores_diccionario_list
                        if ($pathinfo === '/admin/minsal/indicadores/diccionario/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.diccionario',  '_sonata_name' => 'admin_minsal_indicadores_diccionario_list',  '_route' => 'admin_minsal_indicadores_diccionario_list',);
                        }

                        // admin_minsal_indicadores_diccionario_create
                        if ($pathinfo === '/admin/minsal/indicadores/diccionario/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.diccionario',  '_sonata_name' => 'admin_minsal_indicadores_diccionario_create',  '_route' => 'admin_minsal_indicadores_diccionario_create',);
                        }

                        // admin_minsal_indicadores_diccionario_batch
                        if ($pathinfo === '/admin/minsal/indicadores/diccionario/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.diccionario',  '_sonata_name' => 'admin_minsal_indicadores_diccionario_batch',  '_route' => 'admin_minsal_indicadores_diccionario_batch',);
                        }

                        // admin_minsal_indicadores_diccionario_edit
                        if (preg_match('#^/admin/minsal/indicadores/diccionario/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_diccionario_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.diccionario',  '_sonata_name' => 'admin_minsal_indicadores_diccionario_edit',));
                        }

                        // admin_minsal_indicadores_diccionario_delete
                        if (preg_match('#^/admin/minsal/indicadores/diccionario/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_diccionario_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.diccionario',  '_sonata_name' => 'admin_minsal_indicadores_diccionario_delete',));
                        }

                        // admin_minsal_indicadores_diccionario_show
                        if (preg_match('#^/admin/minsal/indicadores/diccionario/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_diccionario_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.diccionario',  '_sonata_name' => 'admin_minsal_indicadores_diccionario_show',));
                        }

                        // admin_minsal_indicadores_diccionario_export
                        if ($pathinfo === '/admin/minsal/indicadores/diccionario/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.diccionario',  '_sonata_name' => 'admin_minsal_indicadores_diccionario_export',  '_route' => 'admin_minsal_indicadores_diccionario_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/minsal/indicadores/reglatransformacion')) {
                        // admin_minsal_indicadores_reglatransformacion_list
                        if ($pathinfo === '/admin/minsal/indicadores/reglatransformacion/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.regla_transformacion',  '_sonata_name' => 'admin_minsal_indicadores_reglatransformacion_list',  '_route' => 'admin_minsal_indicadores_reglatransformacion_list',);
                        }

                        // admin_minsal_indicadores_reglatransformacion_create
                        if ($pathinfo === '/admin/minsal/indicadores/reglatransformacion/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.regla_transformacion',  '_sonata_name' => 'admin_minsal_indicadores_reglatransformacion_create',  '_route' => 'admin_minsal_indicadores_reglatransformacion_create',);
                        }

                        // admin_minsal_indicadores_reglatransformacion_batch
                        if ($pathinfo === '/admin/minsal/indicadores/reglatransformacion/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.regla_transformacion',  '_sonata_name' => 'admin_minsal_indicadores_reglatransformacion_batch',  '_route' => 'admin_minsal_indicadores_reglatransformacion_batch',);
                        }

                        // admin_minsal_indicadores_reglatransformacion_edit
                        if (preg_match('#^/admin/minsal/indicadores/reglatransformacion/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_reglatransformacion_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.regla_transformacion',  '_sonata_name' => 'admin_minsal_indicadores_reglatransformacion_edit',));
                        }

                        // admin_minsal_indicadores_reglatransformacion_delete
                        if (preg_match('#^/admin/minsal/indicadores/reglatransformacion/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_reglatransformacion_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.regla_transformacion',  '_sonata_name' => 'admin_minsal_indicadores_reglatransformacion_delete',));
                        }

                        // admin_minsal_indicadores_reglatransformacion_show
                        if (preg_match('#^/admin/minsal/indicadores/reglatransformacion/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_reglatransformacion_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.regla_transformacion',  '_sonata_name' => 'admin_minsal_indicadores_reglatransformacion_show',));
                        }

                        // admin_minsal_indicadores_reglatransformacion_export
                        if ($pathinfo === '/admin/minsal/indicadores/reglatransformacion/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.regla_transformacion',  '_sonata_name' => 'admin_minsal_indicadores_reglatransformacion_export',  '_route' => 'admin_minsal_indicadores_reglatransformacion_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/minsal/indicadores/ca')) {
                        if (0 === strpos($pathinfo, '/admin/minsal/indicadores/campo')) {
                            // admin_minsal_indicadores_campo_list
                            if ($pathinfo === '/admin/minsal/indicadores/campo/list') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.campo_calculado',  '_sonata_name' => 'admin_minsal_indicadores_campo_list',  '_route' => 'admin_minsal_indicadores_campo_list',);
                            }

                            // admin_minsal_indicadores_campo_create
                            if ($pathinfo === '/admin/minsal/indicadores/campo/create') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.campo_calculado',  '_sonata_name' => 'admin_minsal_indicadores_campo_create',  '_route' => 'admin_minsal_indicadores_campo_create',);
                            }

                            // admin_minsal_indicadores_campo_batch
                            if ($pathinfo === '/admin/minsal/indicadores/campo/batch') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.campo_calculado',  '_sonata_name' => 'admin_minsal_indicadores_campo_batch',  '_route' => 'admin_minsal_indicadores_campo_batch',);
                            }

                            // admin_minsal_indicadores_campo_edit
                            if (preg_match('#^/admin/minsal/indicadores/campo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_campo_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.campo_calculado',  '_sonata_name' => 'admin_minsal_indicadores_campo_edit',));
                            }

                            // admin_minsal_indicadores_campo_delete
                            if (preg_match('#^/admin/minsal/indicadores/campo/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_campo_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.campo_calculado',  '_sonata_name' => 'admin_minsal_indicadores_campo_delete',));
                            }

                            // admin_minsal_indicadores_campo_show
                            if (preg_match('#^/admin/minsal/indicadores/campo/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_campo_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.campo_calculado',  '_sonata_name' => 'admin_minsal_indicadores_campo_show',));
                            }

                            // admin_minsal_indicadores_campo_export
                            if ($pathinfo === '/admin/minsal/indicadores/campo/export') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.campo_calculado',  '_sonata_name' => 'admin_minsal_indicadores_campo_export',  '_route' => 'admin_minsal_indicadores_campo_export',);
                            }

                        }

                        if (0 === strpos($pathinfo, '/admin/minsal/indicadores/categoriavariablecaptura')) {
                            // admin_minsal_indicadores_categoriavariablecaptura_list
                            if ($pathinfo === '/admin/minsal/indicadores/categoriavariablecaptura/list') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.categoria_variable_captura',  '_sonata_name' => 'admin_minsal_indicadores_categoriavariablecaptura_list',  '_route' => 'admin_minsal_indicadores_categoriavariablecaptura_list',);
                            }

                            // admin_minsal_indicadores_categoriavariablecaptura_create
                            if ($pathinfo === '/admin/minsal/indicadores/categoriavariablecaptura/create') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.categoria_variable_captura',  '_sonata_name' => 'admin_minsal_indicadores_categoriavariablecaptura_create',  '_route' => 'admin_minsal_indicadores_categoriavariablecaptura_create',);
                            }

                            // admin_minsal_indicadores_categoriavariablecaptura_batch
                            if ($pathinfo === '/admin/minsal/indicadores/categoriavariablecaptura/batch') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.categoria_variable_captura',  '_sonata_name' => 'admin_minsal_indicadores_categoriavariablecaptura_batch',  '_route' => 'admin_minsal_indicadores_categoriavariablecaptura_batch',);
                            }

                            // admin_minsal_indicadores_categoriavariablecaptura_edit
                            if (preg_match('#^/admin/minsal/indicadores/categoriavariablecaptura/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_categoriavariablecaptura_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.categoria_variable_captura',  '_sonata_name' => 'admin_minsal_indicadores_categoriavariablecaptura_edit',));
                            }

                            // admin_minsal_indicadores_categoriavariablecaptura_delete
                            if (preg_match('#^/admin/minsal/indicadores/categoriavariablecaptura/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_categoriavariablecaptura_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.categoria_variable_captura',  '_sonata_name' => 'admin_minsal_indicadores_categoriavariablecaptura_delete',));
                            }

                            // admin_minsal_indicadores_categoriavariablecaptura_show
                            if (preg_match('#^/admin/minsal/indicadores/categoriavariablecaptura/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_categoriavariablecaptura_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.categoria_variable_captura',  '_sonata_name' => 'admin_minsal_indicadores_categoriavariablecaptura_show',));
                            }

                            // admin_minsal_indicadores_categoriavariablecaptura_export
                            if ($pathinfo === '/admin/minsal/indicadores/categoriavariablecaptura/export') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.categoria_variable_captura',  '_sonata_name' => 'admin_minsal_indicadores_categoriavariablecaptura_export',  '_route' => 'admin_minsal_indicadores_categoriavariablecaptura_export',);
                            }

                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/minsal/indicadores/variable')) {
                        if (0 === strpos($pathinfo, '/admin/minsal/indicadores/variablecaptura')) {
                            // admin_minsal_indicadores_variablecaptura_list
                            if ($pathinfo === '/admin/minsal/indicadores/variablecaptura/list') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.variable_captura',  '_sonata_name' => 'admin_minsal_indicadores_variablecaptura_list',  '_route' => 'admin_minsal_indicadores_variablecaptura_list',);
                            }

                            // admin_minsal_indicadores_variablecaptura_create
                            if ($pathinfo === '/admin/minsal/indicadores/variablecaptura/create') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.variable_captura',  '_sonata_name' => 'admin_minsal_indicadores_variablecaptura_create',  '_route' => 'admin_minsal_indicadores_variablecaptura_create',);
                            }

                            // admin_minsal_indicadores_variablecaptura_batch
                            if ($pathinfo === '/admin/minsal/indicadores/variablecaptura/batch') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.variable_captura',  '_sonata_name' => 'admin_minsal_indicadores_variablecaptura_batch',  '_route' => 'admin_minsal_indicadores_variablecaptura_batch',);
                            }

                            // admin_minsal_indicadores_variablecaptura_edit
                            if (preg_match('#^/admin/minsal/indicadores/variablecaptura/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_variablecaptura_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.variable_captura',  '_sonata_name' => 'admin_minsal_indicadores_variablecaptura_edit',));
                            }

                            // admin_minsal_indicadores_variablecaptura_delete
                            if (preg_match('#^/admin/minsal/indicadores/variablecaptura/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_variablecaptura_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.variable_captura',  '_sonata_name' => 'admin_minsal_indicadores_variablecaptura_delete',));
                            }

                            // admin_minsal_indicadores_variablecaptura_show
                            if (preg_match('#^/admin/minsal/indicadores/variablecaptura/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_variablecaptura_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.variable_captura',  '_sonata_name' => 'admin_minsal_indicadores_variablecaptura_show',));
                            }

                            // admin_minsal_indicadores_variablecaptura_export
                            if ($pathinfo === '/admin/minsal/indicadores/variablecaptura/export') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.variable_captura',  '_sonata_name' => 'admin_minsal_indicadores_variablecaptura_export',  '_route' => 'admin_minsal_indicadores_variablecaptura_export',);
                            }

                        }

                        if (0 === strpos($pathinfo, '/admin/minsal/indicadores/variabledato')) {
                            // admin_minsal_indicadores_variabledato_list
                            if ($pathinfo === '/admin/minsal/indicadores/variabledato/list') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.variable',  '_sonata_name' => 'admin_minsal_indicadores_variabledato_list',  '_route' => 'admin_minsal_indicadores_variabledato_list',);
                            }

                            // admin_minsal_indicadores_variabledato_create
                            if ($pathinfo === '/admin/minsal/indicadores/variabledato/create') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.variable',  '_sonata_name' => 'admin_minsal_indicadores_variabledato_create',  '_route' => 'admin_minsal_indicadores_variabledato_create',);
                            }

                            // admin_minsal_indicadores_variabledato_batch
                            if ($pathinfo === '/admin/minsal/indicadores/variabledato/batch') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.variable',  '_sonata_name' => 'admin_minsal_indicadores_variabledato_batch',  '_route' => 'admin_minsal_indicadores_variabledato_batch',);
                            }

                            // admin_minsal_indicadores_variabledato_edit
                            if (preg_match('#^/admin/minsal/indicadores/variabledato/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_variabledato_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.variable',  '_sonata_name' => 'admin_minsal_indicadores_variabledato_edit',));
                            }

                            // admin_minsal_indicadores_variabledato_delete
                            if (preg_match('#^/admin/minsal/indicadores/variabledato/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_variabledato_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.variable',  '_sonata_name' => 'admin_minsal_indicadores_variabledato_delete',));
                            }

                            // admin_minsal_indicadores_variabledato_show
                            if (preg_match('#^/admin/minsal/indicadores/variabledato/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_variabledato_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.variable',  '_sonata_name' => 'admin_minsal_indicadores_variabledato_show',));
                            }

                            // admin_minsal_indicadores_variabledato_export
                            if ($pathinfo === '/admin/minsal/indicadores/variabledato/export') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.variable',  '_sonata_name' => 'admin_minsal_indicadores_variabledato_export',  '_route' => 'admin_minsal_indicadores_variabledato_export',);
                            }

                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/minsal/indicadores/fichatecnica')) {
                        // admin_minsal_indicadores_fichatecnica_list
                        if ($pathinfo === '/admin/minsal/indicadores/fichatecnica/list') {
                            return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\FichaTecnicaAdminController::listAction',  '_sonata_admin' => 'sonata.admin.ficha',  '_sonata_name' => 'admin_minsal_indicadores_fichatecnica_list',  '_route' => 'admin_minsal_indicadores_fichatecnica_list',);
                        }

                        // admin_minsal_indicadores_fichatecnica_create
                        if ($pathinfo === '/admin/minsal/indicadores/fichatecnica/create') {
                            return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\FichaTecnicaAdminController::createAction',  '_sonata_admin' => 'sonata.admin.ficha',  '_sonata_name' => 'admin_minsal_indicadores_fichatecnica_create',  '_route' => 'admin_minsal_indicadores_fichatecnica_create',);
                        }

                        // admin_minsal_indicadores_fichatecnica_batch
                        if ($pathinfo === '/admin/minsal/indicadores/fichatecnica/batch') {
                            return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\FichaTecnicaAdminController::batchAction',  '_sonata_admin' => 'sonata.admin.ficha',  '_sonata_name' => 'admin_minsal_indicadores_fichatecnica_batch',  '_route' => 'admin_minsal_indicadores_fichatecnica_batch',);
                        }

                        // admin_minsal_indicadores_fichatecnica_edit
                        if (preg_match('#^/admin/minsal/indicadores/fichatecnica/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_fichatecnica_edit')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\FichaTecnicaAdminController::editAction',  '_sonata_admin' => 'sonata.admin.ficha',  '_sonata_name' => 'admin_minsal_indicadores_fichatecnica_edit',));
                        }

                        // admin_minsal_indicadores_fichatecnica_delete
                        if (preg_match('#^/admin/minsal/indicadores/fichatecnica/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_fichatecnica_delete')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\FichaTecnicaAdminController::deleteAction',  '_sonata_admin' => 'sonata.admin.ficha',  '_sonata_name' => 'admin_minsal_indicadores_fichatecnica_delete',));
                        }

                        // admin_minsal_indicadores_fichatecnica_show
                        if (preg_match('#^/admin/minsal/indicadores/fichatecnica/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_fichatecnica_show')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\FichaTecnicaAdminController::showAction',  '_sonata_admin' => 'sonata.admin.ficha',  '_sonata_name' => 'admin_minsal_indicadores_fichatecnica_show',));
                        }

                        // admin_minsal_indicadores_fichatecnica_export
                        if ($pathinfo === '/admin/minsal/indicadores/fichatecnica/export') {
                            return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\FichaTecnicaAdminController::exportAction',  '_sonata_admin' => 'sonata.admin.ficha',  '_sonata_name' => 'admin_minsal_indicadores_fichatecnica_export',  '_route' => 'admin_minsal_indicadores_fichatecnica_export',);
                        }

                        // admin_minsal_indicadores_fichatecnica_tablero
                        if ($pathinfo === '/admin/minsal/indicadores/fichatecnica/tablero') {
                            return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\FichaTecnicaAdminController::tableroAction',  '_sonata_admin' => 'sonata.admin.ficha',  '_sonata_name' => 'admin_minsal_indicadores_fichatecnica_tablero',  '_route' => 'admin_minsal_indicadores_fichatecnica_tablero',);
                        }

                        // admin_minsal_indicadores_fichatecnica_pivotTable
                        if ($pathinfo === '/admin/minsal/indicadores/fichatecnica/pivotTable') {
                            return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\FichaTecnicaAdminController::pivotTableAction',  '_sonata_admin' => 'sonata.admin.ficha',  '_sonata_name' => 'admin_minsal_indicadores_fichatecnica_pivotTable',  '_route' => 'admin_minsal_indicadores_fichatecnica_pivotTable',);
                        }

                        // admin_minsal_indicadores_fichatecnica_reportes_crear
                        if ($pathinfo === '/admin/minsal/indicadores/fichatecnica/reportesCrear') {
                            return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\FichaTecnicaAdminController::reportesCrearAction',  '_sonata_admin' => 'sonata.admin.ficha',  '_sonata_name' => 'admin_minsal_indicadores_fichatecnica_reportes_crear',  '_route' => 'admin_minsal_indicadores_fichatecnica_reportes_crear',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/minsal/indicadores/indicadoralertas')) {
                        // admin_minsal_indicadores_indicadoralertas_list
                        if ($pathinfo === '/admin/minsal/indicadores/indicadoralertas/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.indicador_alertas',  '_sonata_name' => 'admin_minsal_indicadores_indicadoralertas_list',  '_route' => 'admin_minsal_indicadores_indicadoralertas_list',);
                        }

                        // admin_minsal_indicadores_indicadoralertas_create
                        if ($pathinfo === '/admin/minsal/indicadores/indicadoralertas/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.indicador_alertas',  '_sonata_name' => 'admin_minsal_indicadores_indicadoralertas_create',  '_route' => 'admin_minsal_indicadores_indicadoralertas_create',);
                        }

                        // admin_minsal_indicadores_indicadoralertas_batch
                        if ($pathinfo === '/admin/minsal/indicadores/indicadoralertas/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.indicador_alertas',  '_sonata_name' => 'admin_minsal_indicadores_indicadoralertas_batch',  '_route' => 'admin_minsal_indicadores_indicadoralertas_batch',);
                        }

                        // admin_minsal_indicadores_indicadoralertas_edit
                        if (preg_match('#^/admin/minsal/indicadores/indicadoralertas/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_indicadoralertas_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.indicador_alertas',  '_sonata_name' => 'admin_minsal_indicadores_indicadoralertas_edit',));
                        }

                        // admin_minsal_indicadores_indicadoralertas_delete
                        if (preg_match('#^/admin/minsal/indicadores/indicadoralertas/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_indicadoralertas_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.indicador_alertas',  '_sonata_name' => 'admin_minsal_indicadores_indicadoralertas_delete',));
                        }

                        // admin_minsal_indicadores_indicadoralertas_show
                        if (preg_match('#^/admin/minsal/indicadores/indicadoralertas/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_indicadoralertas_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.indicador_alertas',  '_sonata_name' => 'admin_minsal_indicadores_indicadoralertas_show',));
                        }

                        // admin_minsal_indicadores_indicadoralertas_export
                        if ($pathinfo === '/admin/minsal/indicadores/indicadoralertas/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.indicador_alertas',  '_sonata_name' => 'admin_minsal_indicadores_indicadoralertas_export',  '_route' => 'admin_minsal_indicadores_indicadoralertas_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/minsal/indicadores/salaacciones')) {
                        // admin_minsal_indicadores_salaacciones_list
                        if ($pathinfo === '/admin/minsal/indicadores/salaacciones/list') {
                            return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\SalaAccionesAdminController::listAction',  '_sonata_admin' => 'sonata.admin.sala_acciones',  '_sonata_name' => 'admin_minsal_indicadores_salaacciones_list',  '_route' => 'admin_minsal_indicadores_salaacciones_list',);
                        }

                        // admin_minsal_indicadores_salaacciones_create
                        if ($pathinfo === '/admin/minsal/indicadores/salaacciones/create') {
                            return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\SalaAccionesAdminController::createAction',  '_sonata_admin' => 'sonata.admin.sala_acciones',  '_sonata_name' => 'admin_minsal_indicadores_salaacciones_create',  '_route' => 'admin_minsal_indicadores_salaacciones_create',);
                        }

                        // admin_minsal_indicadores_salaacciones_batch
                        if ($pathinfo === '/admin/minsal/indicadores/salaacciones/batch') {
                            return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\SalaAccionesAdminController::batchAction',  '_sonata_admin' => 'sonata.admin.sala_acciones',  '_sonata_name' => 'admin_minsal_indicadores_salaacciones_batch',  '_route' => 'admin_minsal_indicadores_salaacciones_batch',);
                        }

                        // admin_minsal_indicadores_salaacciones_edit
                        if (preg_match('#^/admin/minsal/indicadores/salaacciones/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_salaacciones_edit')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\SalaAccionesAdminController::editAction',  '_sonata_admin' => 'sonata.admin.sala_acciones',  '_sonata_name' => 'admin_minsal_indicadores_salaacciones_edit',));
                        }

                        // admin_minsal_indicadores_salaacciones_delete
                        if (preg_match('#^/admin/minsal/indicadores/salaacciones/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_salaacciones_delete')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\SalaAccionesAdminController::deleteAction',  '_sonata_admin' => 'sonata.admin.sala_acciones',  '_sonata_name' => 'admin_minsal_indicadores_salaacciones_delete',));
                        }

                        // admin_minsal_indicadores_salaacciones_show
                        if (preg_match('#^/admin/minsal/indicadores/salaacciones/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_salaacciones_show')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\SalaAccionesAdminController::showAction',  '_sonata_admin' => 'sonata.admin.sala_acciones',  '_sonata_name' => 'admin_minsal_indicadores_salaacciones_show',));
                        }

                        // admin_minsal_indicadores_salaacciones_export
                        if ($pathinfo === '/admin/minsal/indicadores/salaacciones/export') {
                            return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\SalaAccionesAdminController::exportAction',  '_sonata_admin' => 'sonata.admin.sala_acciones',  '_sonata_name' => 'admin_minsal_indicadores_salaacciones_export',  '_route' => 'admin_minsal_indicadores_salaacciones_export',);
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/minsal/costos')) {
                    if (0 === strpos($pathinfo, '/admin/minsal/costos/formulario')) {
                        // admin_minsal_costos_formulario_list
                        if ($pathinfo === '/admin/minsal/costos/formulario/list') {
                            return array (  '_controller' => 'MINSAL\\CostosBundle\\Controller\\FormularioAdminController::listAction',  '_sonata_admin' => 'sonata.admin.formulario',  '_sonata_name' => 'admin_minsal_costos_formulario_list',  '_route' => 'admin_minsal_costos_formulario_list',);
                        }

                        // admin_minsal_costos_formulario_create
                        if ($pathinfo === '/admin/minsal/costos/formulario/create') {
                            return array (  '_controller' => 'MINSAL\\CostosBundle\\Controller\\FormularioAdminController::createAction',  '_sonata_admin' => 'sonata.admin.formulario',  '_sonata_name' => 'admin_minsal_costos_formulario_create',  '_route' => 'admin_minsal_costos_formulario_create',);
                        }

                        // admin_minsal_costos_formulario_batch
                        if ($pathinfo === '/admin/minsal/costos/formulario/batch') {
                            return array (  '_controller' => 'MINSAL\\CostosBundle\\Controller\\FormularioAdminController::batchAction',  '_sonata_admin' => 'sonata.admin.formulario',  '_sonata_name' => 'admin_minsal_costos_formulario_batch',  '_route' => 'admin_minsal_costos_formulario_batch',);
                        }

                        // admin_minsal_costos_formulario_edit
                        if (preg_match('#^/admin/minsal/costos/formulario/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_costos_formulario_edit')), array (  '_controller' => 'MINSAL\\CostosBundle\\Controller\\FormularioAdminController::editAction',  '_sonata_admin' => 'sonata.admin.formulario',  '_sonata_name' => 'admin_minsal_costos_formulario_edit',));
                        }

                        // admin_minsal_costos_formulario_delete
                        if (preg_match('#^/admin/minsal/costos/formulario/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_costos_formulario_delete')), array (  '_controller' => 'MINSAL\\CostosBundle\\Controller\\FormularioAdminController::deleteAction',  '_sonata_admin' => 'sonata.admin.formulario',  '_sonata_name' => 'admin_minsal_costos_formulario_delete',));
                        }

                        // admin_minsal_costos_formulario_show
                        if (preg_match('#^/admin/minsal/costos/formulario/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_costos_formulario_show')), array (  '_controller' => 'MINSAL\\CostosBundle\\Controller\\FormularioAdminController::showAction',  '_sonata_admin' => 'sonata.admin.formulario',  '_sonata_name' => 'admin_minsal_costos_formulario_show',));
                        }

                        // admin_minsal_costos_formulario_export
                        if ($pathinfo === '/admin/minsal/costos/formulario/export') {
                            return array (  '_controller' => 'MINSAL\\CostosBundle\\Controller\\FormularioAdminController::exportAction',  '_sonata_admin' => 'sonata.admin.formulario',  '_sonata_name' => 'admin_minsal_costos_formulario_export',  '_route' => 'admin_minsal_costos_formulario_export',);
                        }

                        if (0 === strpos($pathinfo, '/admin/minsal/costos/formulario/rrhh')) {
                            // admin_minsal_costos_formulario_rrhhValorPagado
                            if ($pathinfo === '/admin/minsal/costos/formulario/rrhhValorPagado') {
                                return array (  '_controller' => 'MINSAL\\CostosBundle\\Controller\\FormularioAdminController::rrhhValorPagadoAction',  '_sonata_admin' => 'sonata.admin.formulario',  '_sonata_name' => 'admin_minsal_costos_formulario_rrhhValorPagado',  '_route' => 'admin_minsal_costos_formulario_rrhhValorPagado',);
                            }

                            // admin_minsal_costos_formulario_rrhhDistribucionHora
                            if ($pathinfo === '/admin/minsal/costos/formulario/rrhhDistribucionHora') {
                                return array (  '_controller' => 'MINSAL\\CostosBundle\\Controller\\FormularioAdminController::rrhhDistribucionHoraAction',  '_sonata_admin' => 'sonata.admin.formulario',  '_sonata_name' => 'admin_minsal_costos_formulario_rrhhDistribucionHora',  '_route' => 'admin_minsal_costos_formulario_rrhhDistribucionHora',);
                            }

                            // admin_minsal_costos_formulario_rrhhCostos
                            if ($pathinfo === '/admin/minsal/costos/formulario/rrhhCostos') {
                                return array (  '_controller' => 'MINSAL\\CostosBundle\\Controller\\FormularioAdminController::rrhhCostosAction',  '_sonata_admin' => 'sonata.admin.formulario',  '_sonata_name' => 'admin_minsal_costos_formulario_rrhhCostos',  '_route' => 'admin_minsal_costos_formulario_rrhhCostos',);
                            }

                        }

                        if (0 === strpos($pathinfo, '/admin/minsal/costos/formulario/ga')) {
                            // admin_minsal_costos_formulario_gaAf
                            if ($pathinfo === '/admin/minsal/costos/formulario/gaAf') {
                                return array (  '_controller' => 'MINSAL\\CostosBundle\\Controller\\FormularioAdminController::gaAfAction',  '_sonata_admin' => 'sonata.admin.formulario',  '_sonata_name' => 'admin_minsal_costos_formulario_gaAf',  '_route' => 'admin_minsal_costos_formulario_gaAf',);
                            }

                            // admin_minsal_costos_formulario_gaCompromisosFinancieros
                            if ($pathinfo === '/admin/minsal/costos/formulario/gaCompromisosFinancieros') {
                                return array (  '_controller' => 'MINSAL\\CostosBundle\\Controller\\FormularioAdminController::gaCompromisosFinancierosAction',  '_sonata_admin' => 'sonata.admin.formulario',  '_sonata_name' => 'admin_minsal_costos_formulario_gaCompromisosFinancieros',  '_route' => 'admin_minsal_costos_formulario_gaCompromisosFinancieros',);
                            }

                            // admin_minsal_costos_formulario_gaVariables
                            if ($pathinfo === '/admin/minsal/costos/formulario/gaVariables') {
                                return array (  '_controller' => 'MINSAL\\CostosBundle\\Controller\\FormularioAdminController::gaVariablesAction',  '_sonata_admin' => 'sonata.admin.formulario',  '_sonata_name' => 'admin_minsal_costos_formulario_gaVariables',  '_route' => 'admin_minsal_costos_formulario_gaVariables',);
                            }

                            // admin_minsal_costos_formulario_gaDistribucion
                            if ($pathinfo === '/admin/minsal/costos/formulario/gaDistribucion') {
                                return array (  '_controller' => 'MINSAL\\CostosBundle\\Controller\\FormularioAdminController::gaDistribucionAction',  '_sonata_admin' => 'sonata.admin.formulario',  '_sonata_name' => 'admin_minsal_costos_formulario_gaDistribucion',  '_route' => 'admin_minsal_costos_formulario_gaDistribucion',);
                            }

                            // admin_minsal_costos_formulario_gaCostos
                            if ($pathinfo === '/admin/minsal/costos/formulario/gaCostos') {
                                return array (  '_controller' => 'MINSAL\\CostosBundle\\Controller\\FormularioAdminController::gaCostosAction',  '_sonata_admin' => 'sonata.admin.formulario',  '_sonata_name' => 'admin_minsal_costos_formulario_gaCostos',  '_route' => 'admin_minsal_costos_formulario_gaCostos',);
                            }

                        }

                        // admin_minsal_costos_formulario_almacenDatos
                        if ($pathinfo === '/admin/minsal/costos/formulario/almacenDatos') {
                            return array (  '_controller' => 'MINSAL\\CostosBundle\\Controller\\FormularioAdminController::almacenDatosAction',  '_sonata_admin' => 'sonata.admin.formulario',  '_sonata_name' => 'admin_minsal_costos_formulario_almacenDatos',  '_route' => 'admin_minsal_costos_formulario_almacenDatos',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/minsal/costos/campo')) {
                        // admin_minsal_costos_campo_list
                        if ($pathinfo === '/admin/minsal/costos/campo/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.costos.admin.campo',  '_sonata_name' => 'admin_minsal_costos_campo_list',  '_route' => 'admin_minsal_costos_campo_list',);
                        }

                        // admin_minsal_costos_campo_create
                        if ($pathinfo === '/admin/minsal/costos/campo/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.costos.admin.campo',  '_sonata_name' => 'admin_minsal_costos_campo_create',  '_route' => 'admin_minsal_costos_campo_create',);
                        }

                        // admin_minsal_costos_campo_batch
                        if ($pathinfo === '/admin/minsal/costos/campo/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.costos.admin.campo',  '_sonata_name' => 'admin_minsal_costos_campo_batch',  '_route' => 'admin_minsal_costos_campo_batch',);
                        }

                        // admin_minsal_costos_campo_edit
                        if (preg_match('#^/admin/minsal/costos/campo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_costos_campo_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.costos.admin.campo',  '_sonata_name' => 'admin_minsal_costos_campo_edit',));
                        }

                        // admin_minsal_costos_campo_delete
                        if (preg_match('#^/admin/minsal/costos/campo/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_costos_campo_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.costos.admin.campo',  '_sonata_name' => 'admin_minsal_costos_campo_delete',));
                        }

                        // admin_minsal_costos_campo_show
                        if (preg_match('#^/admin/minsal/costos/campo/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_costos_campo_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.costos.admin.campo',  '_sonata_name' => 'admin_minsal_costos_campo_show',));
                        }

                        // admin_minsal_costos_campo_export
                        if ($pathinfo === '/admin/minsal/costos/campo/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.costos.admin.campo',  '_sonata_name' => 'admin_minsal_costos_campo_export',  '_route' => 'admin_minsal_costos_campo_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/minsal/costos/grupocolumnas')) {
                        // admin_minsal_costos_grupocolumnas_list
                        if ($pathinfo === '/admin/minsal/costos/grupocolumnas/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.costos.admin.grupocolumnas',  '_sonata_name' => 'admin_minsal_costos_grupocolumnas_list',  '_route' => 'admin_minsal_costos_grupocolumnas_list',);
                        }

                        // admin_minsal_costos_grupocolumnas_create
                        if ($pathinfo === '/admin/minsal/costos/grupocolumnas/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.costos.admin.grupocolumnas',  '_sonata_name' => 'admin_minsal_costos_grupocolumnas_create',  '_route' => 'admin_minsal_costos_grupocolumnas_create',);
                        }

                        // admin_minsal_costos_grupocolumnas_batch
                        if ($pathinfo === '/admin/minsal/costos/grupocolumnas/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.costos.admin.grupocolumnas',  '_sonata_name' => 'admin_minsal_costos_grupocolumnas_batch',  '_route' => 'admin_minsal_costos_grupocolumnas_batch',);
                        }

                        // admin_minsal_costos_grupocolumnas_edit
                        if (preg_match('#^/admin/minsal/costos/grupocolumnas/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_costos_grupocolumnas_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.costos.admin.grupocolumnas',  '_sonata_name' => 'admin_minsal_costos_grupocolumnas_edit',));
                        }

                        // admin_minsal_costos_grupocolumnas_delete
                        if (preg_match('#^/admin/minsal/costos/grupocolumnas/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_costos_grupocolumnas_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.costos.admin.grupocolumnas',  '_sonata_name' => 'admin_minsal_costos_grupocolumnas_delete',));
                        }

                        // admin_minsal_costos_grupocolumnas_show
                        if (preg_match('#^/admin/minsal/costos/grupocolumnas/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_costos_grupocolumnas_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.costos.admin.grupocolumnas',  '_sonata_name' => 'admin_minsal_costos_grupocolumnas_show',));
                        }

                        // admin_minsal_costos_grupocolumnas_export
                        if ($pathinfo === '/admin/minsal/costos/grupocolumnas/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.costos.admin.grupocolumnas',  '_sonata_name' => 'admin_minsal_costos_grupocolumnas_export',  '_route' => 'admin_minsal_costos_grupocolumnas_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/minsal/costos/estructura')) {
                        // admin_minsal_costos_estructura_list
                        if ($pathinfo === '/admin/minsal/costos/estructura/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.costos.admin.estructura',  '_sonata_name' => 'admin_minsal_costos_estructura_list',  '_route' => 'admin_minsal_costos_estructura_list',);
                        }

                        // admin_minsal_costos_estructura_create
                        if ($pathinfo === '/admin/minsal/costos/estructura/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.costos.admin.estructura',  '_sonata_name' => 'admin_minsal_costos_estructura_create',  '_route' => 'admin_minsal_costos_estructura_create',);
                        }

                        // admin_minsal_costos_estructura_batch
                        if ($pathinfo === '/admin/minsal/costos/estructura/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.costos.admin.estructura',  '_sonata_name' => 'admin_minsal_costos_estructura_batch',  '_route' => 'admin_minsal_costos_estructura_batch',);
                        }

                        // admin_minsal_costos_estructura_edit
                        if (preg_match('#^/admin/minsal/costos/estructura/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_costos_estructura_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.costos.admin.estructura',  '_sonata_name' => 'admin_minsal_costos_estructura_edit',));
                        }

                        // admin_minsal_costos_estructura_delete
                        if (preg_match('#^/admin/minsal/costos/estructura/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_costos_estructura_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.costos.admin.estructura',  '_sonata_name' => 'admin_minsal_costos_estructura_delete',));
                        }

                        // admin_minsal_costos_estructura_show
                        if (preg_match('#^/admin/minsal/costos/estructura/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_costos_estructura_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.costos.admin.estructura',  '_sonata_name' => 'admin_minsal_costos_estructura_show',));
                        }

                        // admin_minsal_costos_estructura_export
                        if ($pathinfo === '/admin/minsal/costos/estructura/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.costos.admin.estructura',  '_sonata_name' => 'admin_minsal_costos_estructura_export',  '_route' => 'admin_minsal_costos_estructura_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/minsal/costos/unidadesproductivas')) {
                        // admin_minsal_costos_unidadesproductivas_list
                        if ($pathinfo === '/admin/minsal/costos/unidadesproductivas/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.costos.admin.up',  '_sonata_name' => 'admin_minsal_costos_unidadesproductivas_list',  '_route' => 'admin_minsal_costos_unidadesproductivas_list',);
                        }

                        // admin_minsal_costos_unidadesproductivas_create
                        if ($pathinfo === '/admin/minsal/costos/unidadesproductivas/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.costos.admin.up',  '_sonata_name' => 'admin_minsal_costos_unidadesproductivas_create',  '_route' => 'admin_minsal_costos_unidadesproductivas_create',);
                        }

                        // admin_minsal_costos_unidadesproductivas_batch
                        if ($pathinfo === '/admin/minsal/costos/unidadesproductivas/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.costos.admin.up',  '_sonata_name' => 'admin_minsal_costos_unidadesproductivas_batch',  '_route' => 'admin_minsal_costos_unidadesproductivas_batch',);
                        }

                        // admin_minsal_costos_unidadesproductivas_edit
                        if (preg_match('#^/admin/minsal/costos/unidadesproductivas/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_costos_unidadesproductivas_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.costos.admin.up',  '_sonata_name' => 'admin_minsal_costos_unidadesproductivas_edit',));
                        }

                        // admin_minsal_costos_unidadesproductivas_delete
                        if (preg_match('#^/admin/minsal/costos/unidadesproductivas/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_costos_unidadesproductivas_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.costos.admin.up',  '_sonata_name' => 'admin_minsal_costos_unidadesproductivas_delete',));
                        }

                        // admin_minsal_costos_unidadesproductivas_show
                        if (preg_match('#^/admin/minsal/costos/unidadesproductivas/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_costos_unidadesproductivas_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.costos.admin.up',  '_sonata_name' => 'admin_minsal_costos_unidadesproductivas_show',));
                        }

                        // admin_minsal_costos_unidadesproductivas_export
                        if ($pathinfo === '/admin/minsal/costos/unidadesproductivas/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.costos.admin.up',  '_sonata_name' => 'admin_minsal_costos_unidadesproductivas_export',  '_route' => 'admin_minsal_costos_unidadesproductivas_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/minsal/costos/contratosfijosga')) {
                        // admin_minsal_costos_contratosfijosga_list
                        if ($pathinfo === '/admin/minsal/costos/contratosfijosga/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.costos.admin.contratos_fijos',  '_sonata_name' => 'admin_minsal_costos_contratosfijosga_list',  '_route' => 'admin_minsal_costos_contratosfijosga_list',);
                        }

                        // admin_minsal_costos_contratosfijosga_create
                        if ($pathinfo === '/admin/minsal/costos/contratosfijosga/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.costos.admin.contratos_fijos',  '_sonata_name' => 'admin_minsal_costos_contratosfijosga_create',  '_route' => 'admin_minsal_costos_contratosfijosga_create',);
                        }

                        // admin_minsal_costos_contratosfijosga_batch
                        if ($pathinfo === '/admin/minsal/costos/contratosfijosga/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.costos.admin.contratos_fijos',  '_sonata_name' => 'admin_minsal_costos_contratosfijosga_batch',  '_route' => 'admin_minsal_costos_contratosfijosga_batch',);
                        }

                        // admin_minsal_costos_contratosfijosga_edit
                        if (preg_match('#^/admin/minsal/costos/contratosfijosga/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_costos_contratosfijosga_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.costos.admin.contratos_fijos',  '_sonata_name' => 'admin_minsal_costos_contratosfijosga_edit',));
                        }

                        // admin_minsal_costos_contratosfijosga_delete
                        if (preg_match('#^/admin/minsal/costos/contratosfijosga/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_costos_contratosfijosga_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.costos.admin.contratos_fijos',  '_sonata_name' => 'admin_minsal_costos_contratosfijosga_delete',));
                        }

                        // admin_minsal_costos_contratosfijosga_show
                        if (preg_match('#^/admin/minsal/costos/contratosfijosga/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_costos_contratosfijosga_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.costos.admin.contratos_fijos',  '_sonata_name' => 'admin_minsal_costos_contratosfijosga_show',));
                        }

                        // admin_minsal_costos_contratosfijosga_export
                        if ($pathinfo === '/admin/minsal/costos/contratosfijosga/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.costos.admin.contratos_fijos',  '_sonata_name' => 'admin_minsal_costos_contratosfijosga_export',  '_route' => 'admin_minsal_costos_contratosfijosga_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/minsal/costos/ubicacion')) {
                        // admin_minsal_costos_ubicacion_list
                        if ($pathinfo === '/admin/minsal/costos/ubicacion/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.costos.admin.ubicacion',  '_sonata_name' => 'admin_minsal_costos_ubicacion_list',  '_route' => 'admin_minsal_costos_ubicacion_list',);
                        }

                        // admin_minsal_costos_ubicacion_create
                        if ($pathinfo === '/admin/minsal/costos/ubicacion/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.costos.admin.ubicacion',  '_sonata_name' => 'admin_minsal_costos_ubicacion_create',  '_route' => 'admin_minsal_costos_ubicacion_create',);
                        }

                        // admin_minsal_costos_ubicacion_batch
                        if ($pathinfo === '/admin/minsal/costos/ubicacion/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.costos.admin.ubicacion',  '_sonata_name' => 'admin_minsal_costos_ubicacion_batch',  '_route' => 'admin_minsal_costos_ubicacion_batch',);
                        }

                        // admin_minsal_costos_ubicacion_edit
                        if (preg_match('#^/admin/minsal/costos/ubicacion/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_costos_ubicacion_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.costos.admin.ubicacion',  '_sonata_name' => 'admin_minsal_costos_ubicacion_edit',));
                        }

                        // admin_minsal_costos_ubicacion_delete
                        if (preg_match('#^/admin/minsal/costos/ubicacion/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_costos_ubicacion_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.costos.admin.ubicacion',  '_sonata_name' => 'admin_minsal_costos_ubicacion_delete',));
                        }

                        // admin_minsal_costos_ubicacion_show
                        if (preg_match('#^/admin/minsal/costos/ubicacion/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_costos_ubicacion_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.costos.admin.ubicacion',  '_sonata_name' => 'admin_minsal_costos_ubicacion_show',));
                        }

                        // admin_minsal_costos_ubicacion_export
                        if ($pathinfo === '/admin/minsal/costos/ubicacion/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.costos.admin.ubicacion',  '_sonata_name' => 'admin_minsal_costos_ubicacion_export',  '_route' => 'admin_minsal_costos_ubicacion_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/minsal/costos/periodoingreso')) {
                        // admin_minsal_costos_periodoingreso_list
                        if ($pathinfo === '/admin/minsal/costos/periodoingreso/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.costos.periodos.ingreso',  '_sonata_name' => 'admin_minsal_costos_periodoingreso_list',  '_route' => 'admin_minsal_costos_periodoingreso_list',);
                        }

                        // admin_minsal_costos_periodoingreso_create
                        if ($pathinfo === '/admin/minsal/costos/periodoingreso/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.costos.periodos.ingreso',  '_sonata_name' => 'admin_minsal_costos_periodoingreso_create',  '_route' => 'admin_minsal_costos_periodoingreso_create',);
                        }

                        // admin_minsal_costos_periodoingreso_batch
                        if ($pathinfo === '/admin/minsal/costos/periodoingreso/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.costos.periodos.ingreso',  '_sonata_name' => 'admin_minsal_costos_periodoingreso_batch',  '_route' => 'admin_minsal_costos_periodoingreso_batch',);
                        }

                        // admin_minsal_costos_periodoingreso_edit
                        if (preg_match('#^/admin/minsal/costos/periodoingreso/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_costos_periodoingreso_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.costos.periodos.ingreso',  '_sonata_name' => 'admin_minsal_costos_periodoingreso_edit',));
                        }

                        // admin_minsal_costos_periodoingreso_delete
                        if (preg_match('#^/admin/minsal/costos/periodoingreso/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_costos_periodoingreso_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.costos.periodos.ingreso',  '_sonata_name' => 'admin_minsal_costos_periodoingreso_delete',));
                        }

                        // admin_minsal_costos_periodoingreso_show
                        if (preg_match('#^/admin/minsal/costos/periodoingreso/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_costos_periodoingreso_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.costos.periodos.ingreso',  '_sonata_name' => 'admin_minsal_costos_periodoingreso_show',));
                        }

                        // admin_minsal_costos_periodoingreso_export
                        if ($pathinfo === '/admin/minsal/costos/periodoingreso/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.costos.periodos.ingreso',  '_sonata_name' => 'admin_minsal_costos_periodoingreso_export',  '_route' => 'admin_minsal_costos_periodoingreso_export',);
                        }

                        if (0 === strpos($pathinfo, '/admin/minsal/costos/periodoingresodatosformulario')) {
                            // admin_minsal_costos_periodoingresodatosformulario_list
                            if ($pathinfo === '/admin/minsal/costos/periodoingresodatosformulario/list') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.costos.periodos.ingreso.datos.formulario',  '_sonata_name' => 'admin_minsal_costos_periodoingresodatosformulario_list',  '_route' => 'admin_minsal_costos_periodoingresodatosformulario_list',);
                            }

                            // admin_minsal_costos_periodoingresodatosformulario_create
                            if ($pathinfo === '/admin/minsal/costos/periodoingresodatosformulario/create') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.costos.periodos.ingreso.datos.formulario',  '_sonata_name' => 'admin_minsal_costos_periodoingresodatosformulario_create',  '_route' => 'admin_minsal_costos_periodoingresodatosformulario_create',);
                            }

                            // admin_minsal_costos_periodoingresodatosformulario_batch
                            if ($pathinfo === '/admin/minsal/costos/periodoingresodatosformulario/batch') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.costos.periodos.ingreso.datos.formulario',  '_sonata_name' => 'admin_minsal_costos_periodoingresodatosformulario_batch',  '_route' => 'admin_minsal_costos_periodoingresodatosformulario_batch',);
                            }

                            // admin_minsal_costos_periodoingresodatosformulario_edit
                            if (preg_match('#^/admin/minsal/costos/periodoingresodatosformulario/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_costos_periodoingresodatosformulario_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.costos.periodos.ingreso.datos.formulario',  '_sonata_name' => 'admin_minsal_costos_periodoingresodatosformulario_edit',));
                            }

                            // admin_minsal_costos_periodoingresodatosformulario_delete
                            if (preg_match('#^/admin/minsal/costos/periodoingresodatosformulario/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_costos_periodoingresodatosformulario_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.costos.periodos.ingreso.datos.formulario',  '_sonata_name' => 'admin_minsal_costos_periodoingresodatosformulario_delete',));
                            }

                            // admin_minsal_costos_periodoingresodatosformulario_show
                            if (preg_match('#^/admin/minsal/costos/periodoingresodatosformulario/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_costos_periodoingresodatosformulario_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.costos.periodos.ingreso.datos.formulario',  '_sonata_name' => 'admin_minsal_costos_periodoingresodatosformulario_show',));
                            }

                            // admin_minsal_costos_periodoingresodatosformulario_export
                            if ($pathinfo === '/admin/minsal/costos/periodoingresodatosformulario/export') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.costos.periodos.ingreso.datos.formulario',  '_sonata_name' => 'admin_minsal_costos_periodoingresodatosformulario_export',  '_route' => 'admin_minsal_costos_periodoingresodatosformulario_export',);
                            }

                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/minsal/costos/formato')) {
                        // admin_minsal_costos_formato_list
                        if ($pathinfo === '/admin/minsal/costos/formato/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.costos.admin.formato',  '_sonata_name' => 'admin_minsal_costos_formato_list',  '_route' => 'admin_minsal_costos_formato_list',);
                        }

                        // admin_minsal_costos_formato_create
                        if ($pathinfo === '/admin/minsal/costos/formato/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.costos.admin.formato',  '_sonata_name' => 'admin_minsal_costos_formato_create',  '_route' => 'admin_minsal_costos_formato_create',);
                        }

                        // admin_minsal_costos_formato_batch
                        if ($pathinfo === '/admin/minsal/costos/formato/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.costos.admin.formato',  '_sonata_name' => 'admin_minsal_costos_formato_batch',  '_route' => 'admin_minsal_costos_formato_batch',);
                        }

                        // admin_minsal_costos_formato_edit
                        if (preg_match('#^/admin/minsal/costos/formato/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_costos_formato_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.costos.admin.formato',  '_sonata_name' => 'admin_minsal_costos_formato_edit',));
                        }

                        // admin_minsal_costos_formato_delete
                        if (preg_match('#^/admin/minsal/costos/formato/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_costos_formato_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.costos.admin.formato',  '_sonata_name' => 'admin_minsal_costos_formato_delete',));
                        }

                        // admin_minsal_costos_formato_show
                        if (preg_match('#^/admin/minsal/costos/formato/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_costos_formato_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.costos.admin.formato',  '_sonata_name' => 'admin_minsal_costos_formato_show',));
                        }

                        // admin_minsal_costos_formato_export
                        if ($pathinfo === '/admin/minsal/costos/formato/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.costos.admin.formato',  '_sonata_name' => 'admin_minsal_costos_formato_export',  '_route' => 'admin_minsal_costos_formato_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/minsal/costos/tipo')) {
                        if (0 === strpos($pathinfo, '/admin/minsal/costos/tipocontrol')) {
                            // admin_minsal_costos_tipocontrol_list
                            if ($pathinfo === '/admin/minsal/costos/tipocontrol/list') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.costos.admin.tipo_control',  '_sonata_name' => 'admin_minsal_costos_tipocontrol_list',  '_route' => 'admin_minsal_costos_tipocontrol_list',);
                            }

                            // admin_minsal_costos_tipocontrol_create
                            if ($pathinfo === '/admin/minsal/costos/tipocontrol/create') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.costos.admin.tipo_control',  '_sonata_name' => 'admin_minsal_costos_tipocontrol_create',  '_route' => 'admin_minsal_costos_tipocontrol_create',);
                            }

                            // admin_minsal_costos_tipocontrol_batch
                            if ($pathinfo === '/admin/minsal/costos/tipocontrol/batch') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.costos.admin.tipo_control',  '_sonata_name' => 'admin_minsal_costos_tipocontrol_batch',  '_route' => 'admin_minsal_costos_tipocontrol_batch',);
                            }

                            // admin_minsal_costos_tipocontrol_edit
                            if (preg_match('#^/admin/minsal/costos/tipocontrol/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_costos_tipocontrol_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.costos.admin.tipo_control',  '_sonata_name' => 'admin_minsal_costos_tipocontrol_edit',));
                            }

                            // admin_minsal_costos_tipocontrol_delete
                            if (preg_match('#^/admin/minsal/costos/tipocontrol/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_costos_tipocontrol_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.costos.admin.tipo_control',  '_sonata_name' => 'admin_minsal_costos_tipocontrol_delete',));
                            }

                            // admin_minsal_costos_tipocontrol_show
                            if (preg_match('#^/admin/minsal/costos/tipocontrol/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_costos_tipocontrol_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.costos.admin.tipo_control',  '_sonata_name' => 'admin_minsal_costos_tipocontrol_show',));
                            }

                            // admin_minsal_costos_tipocontrol_export
                            if ($pathinfo === '/admin/minsal/costos/tipocontrol/export') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.costos.admin.tipo_control',  '_sonata_name' => 'admin_minsal_costos_tipocontrol_export',  '_route' => 'admin_minsal_costos_tipocontrol_export',);
                            }

                        }

                        if (0 === strpos($pathinfo, '/admin/minsal/costos/tipodato')) {
                            // admin_minsal_costos_tipodato_list
                            if ($pathinfo === '/admin/minsal/costos/tipodato/list') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.costos.admin.tipo_dato',  '_sonata_name' => 'admin_minsal_costos_tipodato_list',  '_route' => 'admin_minsal_costos_tipodato_list',);
                            }

                            // admin_minsal_costos_tipodato_create
                            if ($pathinfo === '/admin/minsal/costos/tipodato/create') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.costos.admin.tipo_dato',  '_sonata_name' => 'admin_minsal_costos_tipodato_create',  '_route' => 'admin_minsal_costos_tipodato_create',);
                            }

                            // admin_minsal_costos_tipodato_batch
                            if ($pathinfo === '/admin/minsal/costos/tipodato/batch') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.costos.admin.tipo_dato',  '_sonata_name' => 'admin_minsal_costos_tipodato_batch',  '_route' => 'admin_minsal_costos_tipodato_batch',);
                            }

                            // admin_minsal_costos_tipodato_edit
                            if (preg_match('#^/admin/minsal/costos/tipodato/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_costos_tipodato_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.costos.admin.tipo_dato',  '_sonata_name' => 'admin_minsal_costos_tipodato_edit',));
                            }

                            // admin_minsal_costos_tipodato_delete
                            if (preg_match('#^/admin/minsal/costos/tipodato/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_costos_tipodato_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.costos.admin.tipo_dato',  '_sonata_name' => 'admin_minsal_costos_tipodato_delete',));
                            }

                            // admin_minsal_costos_tipodato_show
                            if (preg_match('#^/admin/minsal/costos/tipodato/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_costos_tipodato_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.costos.admin.tipo_dato',  '_sonata_name' => 'admin_minsal_costos_tipodato_show',));
                            }

                            // admin_minsal_costos_tipodato_export
                            if ($pathinfo === '/admin/minsal/costos/tipodato/export') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.costos.admin.tipo_dato',  '_sonata_name' => 'admin_minsal_costos_tipodato_export',  '_route' => 'admin_minsal_costos_tipodato_export',);
                            }

                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/minsal/costos/alineacion')) {
                        // admin_minsal_costos_alineacion_list
                        if ($pathinfo === '/admin/minsal/costos/alineacion/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.costos.admin.alineacion',  '_sonata_name' => 'admin_minsal_costos_alineacion_list',  '_route' => 'admin_minsal_costos_alineacion_list',);
                        }

                        // admin_minsal_costos_alineacion_create
                        if ($pathinfo === '/admin/minsal/costos/alineacion/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.costos.admin.alineacion',  '_sonata_name' => 'admin_minsal_costos_alineacion_create',  '_route' => 'admin_minsal_costos_alineacion_create',);
                        }

                        // admin_minsal_costos_alineacion_batch
                        if ($pathinfo === '/admin/minsal/costos/alineacion/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.costos.admin.alineacion',  '_sonata_name' => 'admin_minsal_costos_alineacion_batch',  '_route' => 'admin_minsal_costos_alineacion_batch',);
                        }

                        // admin_minsal_costos_alineacion_edit
                        if (preg_match('#^/admin/minsal/costos/alineacion/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_costos_alineacion_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.costos.admin.alineacion',  '_sonata_name' => 'admin_minsal_costos_alineacion_edit',));
                        }

                        // admin_minsal_costos_alineacion_delete
                        if (preg_match('#^/admin/minsal/costos/alineacion/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_costos_alineacion_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.costos.admin.alineacion',  '_sonata_name' => 'admin_minsal_costos_alineacion_delete',));
                        }

                        // admin_minsal_costos_alineacion_show
                        if (preg_match('#^/admin/minsal/costos/alineacion/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_costos_alineacion_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.costos.admin.alineacion',  '_sonata_name' => 'admin_minsal_costos_alineacion_show',));
                        }

                        // admin_minsal_costos_alineacion_export
                        if ($pathinfo === '/admin/minsal/costos/alineacion/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.costos.admin.alineacion',  '_sonata_name' => 'admin_minsal_costos_alineacion_export',  '_route' => 'admin_minsal_costos_alineacion_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/minsal/costos/tipo')) {
                        if (0 === strpos($pathinfo, '/admin/minsal/costos/tipocontratacion')) {
                            // admin_minsal_costos_tipocontratacion_list
                            if ($pathinfo === '/admin/minsal/costos/tipocontratacion/list') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.costos.admin.tipo_contratacion',  '_sonata_name' => 'admin_minsal_costos_tipocontratacion_list',  '_route' => 'admin_minsal_costos_tipocontratacion_list',);
                            }

                            // admin_minsal_costos_tipocontratacion_create
                            if ($pathinfo === '/admin/minsal/costos/tipocontratacion/create') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.costos.admin.tipo_contratacion',  '_sonata_name' => 'admin_minsal_costos_tipocontratacion_create',  '_route' => 'admin_minsal_costos_tipocontratacion_create',);
                            }

                            // admin_minsal_costos_tipocontratacion_batch
                            if ($pathinfo === '/admin/minsal/costos/tipocontratacion/batch') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.costos.admin.tipo_contratacion',  '_sonata_name' => 'admin_minsal_costos_tipocontratacion_batch',  '_route' => 'admin_minsal_costos_tipocontratacion_batch',);
                            }

                            // admin_minsal_costos_tipocontratacion_edit
                            if (preg_match('#^/admin/minsal/costos/tipocontratacion/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_costos_tipocontratacion_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.costos.admin.tipo_contratacion',  '_sonata_name' => 'admin_minsal_costos_tipocontratacion_edit',));
                            }

                            // admin_minsal_costos_tipocontratacion_delete
                            if (preg_match('#^/admin/minsal/costos/tipocontratacion/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_costos_tipocontratacion_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.costos.admin.tipo_contratacion',  '_sonata_name' => 'admin_minsal_costos_tipocontratacion_delete',));
                            }

                            // admin_minsal_costos_tipocontratacion_show
                            if (preg_match('#^/admin/minsal/costos/tipocontratacion/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_costos_tipocontratacion_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.costos.admin.tipo_contratacion',  '_sonata_name' => 'admin_minsal_costos_tipocontratacion_show',));
                            }

                            // admin_minsal_costos_tipocontratacion_export
                            if ($pathinfo === '/admin/minsal/costos/tipocontratacion/export') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.costos.admin.tipo_contratacion',  '_sonata_name' => 'admin_minsal_costos_tipocontratacion_export',  '_route' => 'admin_minsal_costos_tipocontratacion_export',);
                            }

                        }

                        if (0 === strpos($pathinfo, '/admin/minsal/costos/tiporecurso')) {
                            // admin_minsal_costos_tiporecurso_list
                            if ($pathinfo === '/admin/minsal/costos/tiporecurso/list') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.costos.admin.tipo_recurso',  '_sonata_name' => 'admin_minsal_costos_tiporecurso_list',  '_route' => 'admin_minsal_costos_tiporecurso_list',);
                            }

                            // admin_minsal_costos_tiporecurso_create
                            if ($pathinfo === '/admin/minsal/costos/tiporecurso/create') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.costos.admin.tipo_recurso',  '_sonata_name' => 'admin_minsal_costos_tiporecurso_create',  '_route' => 'admin_minsal_costos_tiporecurso_create',);
                            }

                            // admin_minsal_costos_tiporecurso_batch
                            if ($pathinfo === '/admin/minsal/costos/tiporecurso/batch') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.costos.admin.tipo_recurso',  '_sonata_name' => 'admin_minsal_costos_tiporecurso_batch',  '_route' => 'admin_minsal_costos_tiporecurso_batch',);
                            }

                            // admin_minsal_costos_tiporecurso_edit
                            if (preg_match('#^/admin/minsal/costos/tiporecurso/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_costos_tiporecurso_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.costos.admin.tipo_recurso',  '_sonata_name' => 'admin_minsal_costos_tiporecurso_edit',));
                            }

                            // admin_minsal_costos_tiporecurso_delete
                            if (preg_match('#^/admin/minsal/costos/tiporecurso/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_costos_tiporecurso_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.costos.admin.tipo_recurso',  '_sonata_name' => 'admin_minsal_costos_tiporecurso_delete',));
                            }

                            // admin_minsal_costos_tiporecurso_show
                            if (preg_match('#^/admin/minsal/costos/tiporecurso/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_costos_tiporecurso_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.costos.admin.tipo_recurso',  '_sonata_name' => 'admin_minsal_costos_tiporecurso_show',));
                            }

                            // admin_minsal_costos_tiporecurso_export
                            if ($pathinfo === '/admin/minsal/costos/tiporecurso/export') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.costos.admin.tipo_recurso',  '_sonata_name' => 'admin_minsal_costos_tiporecurso_export',  '_route' => 'admin_minsal_costos_tiporecurso_export',);
                            }

                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/minsal/costos/especialidad')) {
                        // admin_minsal_costos_especialidad_list
                        if ($pathinfo === '/admin/minsal/costos/especialidad/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.costos.admin.especialidad',  '_sonata_name' => 'admin_minsal_costos_especialidad_list',  '_route' => 'admin_minsal_costos_especialidad_list',);
                        }

                        // admin_minsal_costos_especialidad_create
                        if ($pathinfo === '/admin/minsal/costos/especialidad/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.costos.admin.especialidad',  '_sonata_name' => 'admin_minsal_costos_especialidad_create',  '_route' => 'admin_minsal_costos_especialidad_create',);
                        }

                        // admin_minsal_costos_especialidad_batch
                        if ($pathinfo === '/admin/minsal/costos/especialidad/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.costos.admin.especialidad',  '_sonata_name' => 'admin_minsal_costos_especialidad_batch',  '_route' => 'admin_minsal_costos_especialidad_batch',);
                        }

                        // admin_minsal_costos_especialidad_edit
                        if (preg_match('#^/admin/minsal/costos/especialidad/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_costos_especialidad_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.costos.admin.especialidad',  '_sonata_name' => 'admin_minsal_costos_especialidad_edit',));
                        }

                        // admin_minsal_costos_especialidad_delete
                        if (preg_match('#^/admin/minsal/costos/especialidad/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_costos_especialidad_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.costos.admin.especialidad',  '_sonata_name' => 'admin_minsal_costos_especialidad_delete',));
                        }

                        // admin_minsal_costos_especialidad_show
                        if (preg_match('#^/admin/minsal/costos/especialidad/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_costos_especialidad_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.costos.admin.especialidad',  '_sonata_name' => 'admin_minsal_costos_especialidad_show',));
                        }

                        // admin_minsal_costos_especialidad_export
                        if ($pathinfo === '/admin/minsal/costos/especialidad/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.costos.admin.especialidad',  '_sonata_name' => 'admin_minsal_costos_especialidad_export',  '_route' => 'admin_minsal_costos_especialidad_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/minsal/costos/c')) {
                        if (0 === strpos($pathinfo, '/admin/minsal/costos/criteriosdistribucionga')) {
                            // admin_minsal_costos_criteriosdistribucionga_list
                            if ($pathinfo === '/admin/minsal/costos/criteriosdistribucionga/list') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.costos.admin.criterios_distribucion',  '_sonata_name' => 'admin_minsal_costos_criteriosdistribucionga_list',  '_route' => 'admin_minsal_costos_criteriosdistribucionga_list',);
                            }

                            // admin_minsal_costos_criteriosdistribucionga_create
                            if ($pathinfo === '/admin/minsal/costos/criteriosdistribucionga/create') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.costos.admin.criterios_distribucion',  '_sonata_name' => 'admin_minsal_costos_criteriosdistribucionga_create',  '_route' => 'admin_minsal_costos_criteriosdistribucionga_create',);
                            }

                            // admin_minsal_costos_criteriosdistribucionga_batch
                            if ($pathinfo === '/admin/minsal/costos/criteriosdistribucionga/batch') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.costos.admin.criterios_distribucion',  '_sonata_name' => 'admin_minsal_costos_criteriosdistribucionga_batch',  '_route' => 'admin_minsal_costos_criteriosdistribucionga_batch',);
                            }

                            // admin_minsal_costos_criteriosdistribucionga_edit
                            if (preg_match('#^/admin/minsal/costos/criteriosdistribucionga/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_costos_criteriosdistribucionga_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.costos.admin.criterios_distribucion',  '_sonata_name' => 'admin_minsal_costos_criteriosdistribucionga_edit',));
                            }

                            // admin_minsal_costos_criteriosdistribucionga_delete
                            if (preg_match('#^/admin/minsal/costos/criteriosdistribucionga/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_costos_criteriosdistribucionga_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.costos.admin.criterios_distribucion',  '_sonata_name' => 'admin_minsal_costos_criteriosdistribucionga_delete',));
                            }

                            // admin_minsal_costos_criteriosdistribucionga_show
                            if (preg_match('#^/admin/minsal/costos/criteriosdistribucionga/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_costos_criteriosdistribucionga_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.costos.admin.criterios_distribucion',  '_sonata_name' => 'admin_minsal_costos_criteriosdistribucionga_show',));
                            }

                            // admin_minsal_costos_criteriosdistribucionga_export
                            if ($pathinfo === '/admin/minsal/costos/criteriosdistribucionga/export') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.costos.admin.criterios_distribucion',  '_sonata_name' => 'admin_minsal_costos_criteriosdistribucionga_export',  '_route' => 'admin_minsal_costos_criteriosdistribucionga_export',);
                            }

                        }

                        if (0 === strpos($pathinfo, '/admin/minsal/costos/categoriascontratosfijosga')) {
                            // admin_minsal_costos_categoriascontratosfijosga_list
                            if ($pathinfo === '/admin/minsal/costos/categoriascontratosfijosga/list') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.costos.admin.categorias_contratos',  '_sonata_name' => 'admin_minsal_costos_categoriascontratosfijosga_list',  '_route' => 'admin_minsal_costos_categoriascontratosfijosga_list',);
                            }

                            // admin_minsal_costos_categoriascontratosfijosga_create
                            if ($pathinfo === '/admin/minsal/costos/categoriascontratosfijosga/create') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.costos.admin.categorias_contratos',  '_sonata_name' => 'admin_minsal_costos_categoriascontratosfijosga_create',  '_route' => 'admin_minsal_costos_categoriascontratosfijosga_create',);
                            }

                            // admin_minsal_costos_categoriascontratosfijosga_batch
                            if ($pathinfo === '/admin/minsal/costos/categoriascontratosfijosga/batch') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.costos.admin.categorias_contratos',  '_sonata_name' => 'admin_minsal_costos_categoriascontratosfijosga_batch',  '_route' => 'admin_minsal_costos_categoriascontratosfijosga_batch',);
                            }

                            // admin_minsal_costos_categoriascontratosfijosga_edit
                            if (preg_match('#^/admin/minsal/costos/categoriascontratosfijosga/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_costos_categoriascontratosfijosga_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.costos.admin.categorias_contratos',  '_sonata_name' => 'admin_minsal_costos_categoriascontratosfijosga_edit',));
                            }

                            // admin_minsal_costos_categoriascontratosfijosga_delete
                            if (preg_match('#^/admin/minsal/costos/categoriascontratosfijosga/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_costos_categoriascontratosfijosga_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.costos.admin.categorias_contratos',  '_sonata_name' => 'admin_minsal_costos_categoriascontratosfijosga_delete',));
                            }

                            // admin_minsal_costos_categoriascontratosfijosga_show
                            if (preg_match('#^/admin/minsal/costos/categoriascontratosfijosga/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_costos_categoriascontratosfijosga_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.costos.admin.categorias_contratos',  '_sonata_name' => 'admin_minsal_costos_categoriascontratosfijosga_show',));
                            }

                            // admin_minsal_costos_categoriascontratosfijosga_export
                            if ($pathinfo === '/admin/minsal/costos/categoriascontratosfijosga/export') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.costos.admin.categorias_contratos',  '_sonata_name' => 'admin_minsal_costos_categoriascontratosfijosga_export',  '_route' => 'admin_minsal_costos_categoriascontratosfijosga_export',);
                            }

                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/minsal/indicadores/user')) {
                    // admin_minsal_indicadores_user_list
                    if ($pathinfo === '/admin/minsal/indicadores/user/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_minsal_indicadores_user_list',  '_route' => 'admin_minsal_indicadores_user_list',);
                    }

                    // admin_minsal_indicadores_user_create
                    if ($pathinfo === '/admin/minsal/indicadores/user/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_minsal_indicadores_user_create',  '_route' => 'admin_minsal_indicadores_user_create',);
                    }

                    // admin_minsal_indicadores_user_batch
                    if ($pathinfo === '/admin/minsal/indicadores/user/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_minsal_indicadores_user_batch',  '_route' => 'admin_minsal_indicadores_user_batch',);
                    }

                    // admin_minsal_indicadores_user_edit
                    if (preg_match('#^/admin/minsal/indicadores/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_user_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_minsal_indicadores_user_edit',));
                    }

                    // admin_minsal_indicadores_user_delete
                    if (preg_match('#^/admin/minsal/indicadores/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_user_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_minsal_indicadores_user_delete',));
                    }

                    // admin_minsal_indicadores_user_show
                    if (preg_match('#^/admin/minsal/indicadores/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_user_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_minsal_indicadores_user_show',));
                    }

                    // admin_minsal_indicadores_user_export
                    if ($pathinfo === '/admin/minsal/indicadores/user/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_minsal_indicadores_user_export',  '_route' => 'admin_minsal_indicadores_user_export',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/sonata/user/group')) {
                // admin_sonata_user_group_list
                if ($pathinfo === '/admin/sonata/user/group/list') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_list',  '_route' => 'admin_sonata_user_group_list',);
                }

                // admin_sonata_user_group_create
                if ($pathinfo === '/admin/sonata/user/group/create') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_create',  '_route' => 'admin_sonata_user_group_create',);
                }

                // admin_sonata_user_group_batch
                if ($pathinfo === '/admin/sonata/user/group/batch') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_batch',  '_route' => 'admin_sonata_user_group_batch',);
                }

                // admin_sonata_user_group_edit
                if (preg_match('#^/admin/sonata/user/group/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_group_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_edit',));
                }

                // admin_sonata_user_group_delete
                if (preg_match('#^/admin/sonata/user/group/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_group_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_delete',));
                }

                // admin_sonata_user_group_show
                if (preg_match('#^/admin/sonata/user/group/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_group_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_show',));
                }

                // admin_sonata_user_group_export
                if ($pathinfo === '/admin/sonata/user/group/export') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_export',  '_route' => 'admin_sonata_user_group_export',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/sonata/cache')) {
            // sonata_cache_esi
            if (0 === strpos($pathinfo, '/sonata/cache/esi') && preg_match('#^/sonata/cache/esi/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_cache_esi')), array (  '_controller' => 'sonata.cache.esi:cacheAction',));
            }

            // sonata_cache_ssi
            if (0 === strpos($pathinfo, '/sonata/cache/ssi') && preg_match('#^/sonata/cache/ssi/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_cache_ssi')), array (  '_controller' => 'sonata.cache.ssi:cacheAction',));
            }

            if (0 === strpos($pathinfo, '/sonata/cache/js-')) {
                // sonata_cache_js_async
                if ($pathinfo === '/sonata/cache/js-async') {
                    return array (  '_controller' => 'sonata.cache.js_async:cacheAction',  '_route' => 'sonata_cache_js_async',);
                }

                // sonata_cache_js_sync
                if ($pathinfo === '/sonata/cache/js-sync') {
                    return array (  '_controller' => 'sonata.cache.js_sync:cacheAction',  '_route' => 'sonata_cache_js_sync',);
                }

            }

            // sonata_cache_apc
            if (0 === strpos($pathinfo, '/sonata/cache/apc') && preg_match('#^/sonata/cache/apc/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_cache_apc')), array (  '_controller' => 'sonata.cache.apc:cacheAction',));
            }

            // sonata_cache_symfony
            if (0 === strpos($pathinfo, '/sonata/cache/symfony') && preg_match('#^/sonata/cache/symfony/(?P<token>[^/]++)/(?P<type>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_cache_symfony')), array (  '_controller' => 'sonata.cache.symfony:cacheAction',));
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\SecurityFOSUser1Controller::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\SecurityFOSUser1Controller::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\SecurityFOSUser1Controller::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

            if (0 === strpos($pathinfo, '/login')) {
                // sonata_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\SecurityFOSUser1Controller::loginAction',  '_route' => 'sonata_user_security_login',);
                }

                // sonata_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_sonata_user_security_check;
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\SecurityFOSUser1Controller::checkAction',  '_route' => 'sonata_user_security_check',);
                }
                not_sonata_user_security_check:

            }

            // sonata_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\SecurityFOSUser1Controller::logoutAction',  '_route' => 'sonata_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ($pathinfo === '/resetting/request') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_request;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::requestAction',  '_route' => 'fos_user_resetting_request',);
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_send_email
            if ($pathinfo === '/resetting/send-email') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_user_resetting_send_email;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ($pathinfo === '/resetting/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_check_email;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
            }
            not_fos_user_resetting_check_email:

            if (0 === strpos($pathinfo, '/resetting/re')) {
                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::resetAction',));
                }
                not_fos_user_resetting_reset:

                // sonata_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_sonata_user_resetting_request;
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::requestAction',  '_route' => 'sonata_user_resetting_request',);
                }
                not_sonata_user_resetting_request:

            }

            // sonata_user_resetting_send_email
            if ($pathinfo === '/resetting/send-email') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_sonata_user_resetting_send_email;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::sendEmailAction',  '_route' => 'sonata_user_resetting_send_email',);
            }
            not_sonata_user_resetting_send_email:

            // sonata_user_resetting_check_email
            if ($pathinfo === '/resetting/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_sonata_user_resetting_check_email;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::checkEmailAction',  '_route' => 'sonata_user_resetting_check_email',);
            }
            not_sonata_user_resetting_check_email:

            // sonata_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_sonata_user_resetting_reset;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_user_resetting_reset')), array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::resetAction',));
            }
            not_sonata_user_resetting_reset:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            if (0 === strpos($pathinfo, '/profile/edit-')) {
                // fos_user_profile_edit_authentication
                if ($pathinfo === '/profile/edit-authentication') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::editAuthenticationAction',  '_route' => 'fos_user_profile_edit_authentication',);
                }

                // fos_user_profile_edit
                if ($pathinfo === '/profile/edit-profile') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::editProfileAction',  '_route' => 'fos_user_profile_edit',);
                }

            }

            // sonata_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_sonata_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_user_profile_show');
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::showAction',  '_route' => 'sonata_user_profile_show',);
            }
            not_sonata_user_profile_show:

            if (0 === strpos($pathinfo, '/profile/edit-')) {
                // sonata_user_profile_edit_authentication
                if ($pathinfo === '/profile/edit-authentication') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::editAuthenticationAction',  '_route' => 'sonata_user_profile_edit_authentication',);
                }

                // sonata_user_profile_edit
                if ($pathinfo === '/profile/edit-profile') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::editProfileAction',  '_route' => 'sonata_user_profile_edit',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if (rtrim($pathinfo, '/') === '/register') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::registerAction',  '_route' => 'fos_user_registration_register',);
            }

            if (0 === strpos($pathinfo, '/register/c')) {
                // fos_user_registration_check_email
                if ($pathinfo === '/register/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_registration_check_email;
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                }
                not_fos_user_registration_check_email:

                if (0 === strpos($pathinfo, '/register/confirm')) {
                    // fos_user_registration_confirm
                    if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_confirm;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::confirmAction',));
                    }
                    not_fos_user_registration_confirm:

                    // fos_user_registration_confirmed
                    if ($pathinfo === '/register/confirmed') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_confirmed;
                        }

                        return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                    }
                    not_fos_user_registration_confirmed:

                }

            }

            // sonata_user_registration_register
            if (rtrim($pathinfo, '/') === '/register') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_user_registration_register');
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::registerAction',  '_route' => 'sonata_user_registration_register',);
            }

            if (0 === strpos($pathinfo, '/register/c')) {
                // sonata_user_registration_check_email
                if ($pathinfo === '/register/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_sonata_user_registration_check_email;
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::checkEmailAction',  '_route' => 'sonata_user_registration_check_email',);
                }
                not_sonata_user_registration_check_email:

                if (0 === strpos($pathinfo, '/register/confirm')) {
                    // sonata_user_registration_confirm
                    if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_sonata_user_registration_confirm;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_user_registration_confirm')), array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::confirmAction',));
                    }
                    not_sonata_user_registration_confirm:

                    // sonata_user_registration_confirmed
                    if ($pathinfo === '/register/confirmed') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_sonata_user_registration_confirmed;
                        }

                        return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::confirmedAction',  '_route' => 'sonata_user_registration_confirmed',);
                    }
                    not_sonata_user_registration_confirmed:

                }

            }

        }

        if (0 === strpos($pathinfo, '/profile/change-password')) {
            // fos_user_change_password
            if ($pathinfo === '/profile/change-password') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_change_password;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ChangePasswordFOSUser1Controller::changePasswordAction',  '_route' => 'fos_user_change_password',);
            }
            not_fos_user_change_password:

            // sonata_user_change_password
            if ($pathinfo === '/profile/change-password') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_sonata_user_change_password;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ChangePasswordFOSUser1Controller::changePasswordAction',  '_route' => 'sonata_user_change_password',);
            }
            not_sonata_user_change_password:

        }

        if (0 === strpos($pathinfo, '/group')) {
            // fos_user_group_list
            if ($pathinfo === '/group/list') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_group_list;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::listAction',  '_route' => 'fos_user_group_list',);
            }
            not_fos_user_group_list:

            // fos_user_group_new
            if ($pathinfo === '/group/new') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::newAction',  '_route' => 'fos_user_group_new',);
            }

            // fos_user_group_show
            if (preg_match('#^/group/(?P<groupname>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_group_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_group_show')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::showAction',));
            }
            not_fos_user_group_show:

            // fos_user_group_edit
            if (preg_match('#^/group/(?P<groupname>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_group_edit')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::editAction',));
            }

            // fos_user_group_delete
            if (preg_match('#^/group/(?P<groupname>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_group_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_group_delete')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::deleteAction',));
            }
            not_fos_user_group_delete:

        }

        if (0 === strpos($pathinfo, '/admin/log')) {
            if (0 === strpos($pathinfo, '/admin/login')) {
                // sonata_user_admin_security_login
                if ($pathinfo === '/admin/login') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::loginAction',  '_route' => 'sonata_user_admin_security_login',);
                }

                // sonata_user_admin_security_check
                if ($pathinfo === '/admin/login_check') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::checkAction',  '_route' => 'sonata_user_admin_security_check',);
                }

            }

            // sonata_user_admin_security_logout
            if ($pathinfo === '/admin/logout') {
                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::logoutAction',  '_route' => 'sonata_user_admin_security_logout',);
            }

        }

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
