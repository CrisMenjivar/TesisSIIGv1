<?php

/* IndicadoresBundle:FichaTecnicaAdmin:listado_indicadores.html.twig */
class __TwigTemplate_fdc7517aaf0566249377f132722ca2eb613483043eb1d8d4caad4bfbb18a3dae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "        ";
        $context["clasificacion_seleccionada"] = "";
        // line 2
        echo "        <div class=\"content tab-pane active\" id=\"listado_indicadores\" >            
            <div class=\"btn-group\">
                <div class=\"input-group\">
                    <div class=\"input-group-btn\">
                        <button type=\"button\" class=\"btn btn-success dropdown-toggle\" data-toggle=\"dropdown\">
                            ";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("_clasificacion_indicadores_"), "html", null, true);
        echo "
                            <span class=\"caret\"></span>
                        </button>
                        <ul class=\"dropdown-menu\" role=\"menu\">
                            ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clasificacionUso"]) ? $context["clasificacionUso"] : $this->getContext($context, "clasificacionUso")));
        foreach ($context['_seq'] as $context["_key"] => $context["clasificacion"]) {
            // line 12
            echo "                                ";
            if (($this->getAttribute($context["clasificacion"], "codigo", array()) == (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "clasificacionUso", array(), "any", false, true), "codigo", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "clasificacionUso", array(), "any", false, true), "codigo", array()), "")) : ("")))) {
                // line 13
                echo "                                    <li class='active'><A >";
                echo twig_escape_filter($this->env, $this->getAttribute($context["clasificacion"], "descripcion", array()), "html", null, true);
                echo "</a></li>
                                    ";
                // line 14
                $context["clasificacion_seleccionada"] = $this->getAttribute($context["clasificacion"], "descripcion", array());
                // line 15
                echo "                                ";
            } else {
                // line 16
                echo "                                    <li ><a href='";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("change_clasificacion_uso", array("codigo_clasificacion" => $this->getAttribute($context["clasificacion"], "codigo", array()))), "html", null, true);
                echo "'>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["clasificacion"], "descripcion", array()), "html", null, true);
                echo "</a></li>
                                ";
            }
            // line 18
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['clasificacion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "                        </ul>
                    </div>
                    <input type=\"text\" class=\"form-control\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["clasificacion_seleccionada"]) ? $context["clasificacion_seleccionada"] : $this->getContext($context, "clasificacion_seleccionada")), "html", null, true);
        echo "\" readonly />
                    
                    <div class=\"input-group-addon btn-success btn\"><span class=\"glyphicon glyphicon-search\"></span></div>
                    <input class=\"form-control\" type=\"search\" id='FiltroNoClasificados' placeholder=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("_buscar_indicador_"), "html", null, true);
        echo "...\">                    
                </div>                
            </div><br/><br/>
            <div class=\"panel-group\" id=\"accordion2\">
                <div class=\"panel panel-default panel-info grupo_indicadores\">
                    <div class=\"panel-heading\">
                        <h4 class=\"panel-title\">
                            ";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("favoritos"), "html", null, true);
        echo " <span class=\"badge\" id='cantidad_favoritos'>";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "favoritos", array())), "html", null, true);
        echo "</span>
                        </h4>
                    </div>
                    <div class=\"panel-body\">
                        <div id=\"collapse4\">
                            <div class=\"accordion-inner list-group\" id='listado-favoritos'>
                                ";
        // line 37
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "favoritos", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["indicador"]) {
            // line 38
            echo "                                <A id='fav-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["indicador"], "id", array()), "html", null, true);
            echo "' class='indicador list-group-item'
                                    data-id='";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["indicador"], "id", array()), "html", null, true);
            echo "'
                                    data-unidad-medida='";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["indicador"], "unidadMedida", array()), "html", null, true);
            echo "'>
                                            ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["indicador"], "nombre", array()), "html", null, true);
            echo "
                                </A>                                
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['indicador'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                            </div>
                        </div>
                    </div>
                </div>                
                ";
        // line 48
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) ? $context["categorias"] : $this->getContext($context, "categorias")));
        foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
            // line 49
            echo "                    ";
            if ((twig_length_filter($this->env, $this->getAttribute($context["categoria"], "indicadores", array())) > 0)) {
                // line 50
                echo "                        <div class=\"panel panel-default panel-info grupo_indicadores\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    ";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["categoria"], "cat", array()), "descripcion", array()), "html", null, true);
                echo " <span class=\"badge\" >(";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["categoria"], "indicadores", array())), "html", null, true);
                echo ")</span>                                  
                                </h4>
                            </div>                            
                             <div id=\"collapsecat";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["categoria"], "cat", array()), "id", array()), "html", null, true);
                echo "\" >
                                 <div class=\"list-group\">
                                    ";
                // line 58
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["categoria"], "indicadores", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["indicador"]) {
                    // line 59
                    echo "                                    <A id='";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["indicador"], "id", array()), "html", null, true);
                    echo "' class='indicador list-group-item'
                                            data-id='";
                    // line 60
                    echo twig_escape_filter($this->env, $this->getAttribute($context["indicador"], "id", array()), "html", null, true);
                    echo "'
                                            data-unidad-medida='";
                    // line 61
                    echo twig_escape_filter($this->env, $this->getAttribute($context["indicador"], "unidadMedida", array()), "html", null, true);
                    echo "'>
                                                            ";
                    // line 62
                    echo twig_escape_filter($this->env, $this->getAttribute($context["indicador"], "nombre", array()), "html", null, true);
                    echo "
                                        </A>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['indicador'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 65
                echo "                                 </div>
                            </div>
                        </div>
                    ";
            }
            // line 69
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                
                ";
        // line 71
        if ((twig_length_filter($this->env, (isset($context["indicadores_no_clasificados"]) ? $context["indicadores_no_clasificados"] : $this->getContext($context, "indicadores_no_clasificados"))) > 0)) {
            // line 72
            echo "                    <div class=\"panel panel-default panel-info grupo_indicadores\">
                        <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    ";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("_no_clasificados_"), "html", null, true);
            echo " <span class=\"badge\" id='cantidad_no_clasificados'>";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["indicadores_no_clasificados"]) ? $context["indicadores_no_clasificados"] : $this->getContext($context, "indicadores_no_clasificados"))), "html", null, true);
            echo "</span>                                 
                                </h4>
                        </div>  
                        <div id=\"collapseNC\" >
                            <div class=\"list-group\">
                            ";
            // line 80
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["indicadores_no_clasificados"]) ? $context["indicadores_no_clasificados"] : $this->getContext($context, "indicadores_no_clasificados")));
            foreach ($context['_seq'] as $context["_key"] => $context["indicador"]) {
                // line 81
                echo "                                <A class='indicador list-group-item' id='";
                echo twig_escape_filter($this->env, $this->getAttribute($context["indicador"], "id", array()), "html", null, true);
                echo "' 
                                        data-id='";
                // line 82
                echo twig_escape_filter($this->env, $this->getAttribute($context["indicador"], "id", array()), "html", null, true);
                echo "'
                                        data-unidad-medida='";
                // line 83
                echo twig_escape_filter($this->env, $this->getAttribute($context["indicador"], "unidadMedida", array()), "html", null, true);
                echo "'>
                                                    ";
                // line 84
                echo twig_escape_filter($this->env, $this->getAttribute($context["indicador"], "nombre", array()), "html", null, true);
                echo "
                                </A>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['indicador'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "                            </div>
                        </div>
                    </div>
                ";
        }
        // line 91
        echo "            </div>
        </div> 
";
    }

    public function getTemplateName()
    {
        return "IndicadoresBundle:FichaTecnicaAdmin:listado_indicadores.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 91,  239 => 87,  230 => 84,  226 => 83,  222 => 82,  217 => 81,  213 => 80,  203 => 75,  198 => 72,  196 => 71,  193 => 70,  187 => 69,  181 => 65,  172 => 62,  168 => 61,  164 => 60,  159 => 59,  155 => 58,  150 => 56,  142 => 53,  137 => 50,  134 => 49,  130 => 48,  124 => 44,  115 => 41,  111 => 40,  107 => 39,  102 => 38,  98 => 37,  87 => 31,  77 => 24,  71 => 21,  67 => 19,  61 => 18,  53 => 16,  50 => 15,  48 => 14,  43 => 13,  40 => 12,  36 => 11,  29 => 7,  22 => 2,  19 => 1,);
    }
}
