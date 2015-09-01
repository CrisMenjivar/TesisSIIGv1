<?php

/* IndicadoresBundle:FichaTecnicaAdmin:tablero.html.twig */
class __TwigTemplate_7f4ebe8bee464685dcdd1baa457e5da8cc449a1879dbe3a390ffd23436e0073c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("IndicadoresBundle::standard_layout.html.twig", "IndicadoresBundle:FichaTecnicaAdmin:tablero.html.twig", 3);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IndicadoresBundle::standard_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        if (((isset($context["id_sala"]) ? $context["id_sala"] : $this->getContext($context, "id_sala")) == 0)) {
            // line 6
            echo "        ";
            $this->displayParentBlock("stylesheets", $context, $blocks);
            echo "
    ";
        } else {
            // line 8
            echo "        ";
            if (array_key_exists("admin_pool", $context)) {
                // line 9
                echo "            ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "stylesheets", 1 => array()), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["stylesheet"]) {
                    // line 10
                    echo "                ";
                    if (twig_in_filter("bootstrap.min.css", $context["stylesheet"])) {
                        // line 11
                        echo "                    <link rel=\"stylesheet\" type=\"text/css\"  href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($context["stylesheet"]), "html", null, true);
                        echo "\"  />
                ";
                    }
                    // line 12
                    echo "                
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stylesheet'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 14
                echo "            <link rel=\"stylesheet\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/indicadores/css/custom_bootstrap.min.css"), "html", null, true);
                echo "\" type=\"text/css\" media=\"all\" />
            <link rel=\"stylesheet\" href=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/indicadores/css/custom_layout.css"), "html", null, true);
                echo "\" type=\"text/css\" media=\"all\" />
        ";
            }
            // line 17
            echo "    ";
        }
        // line 18
        echo "    
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/indicadores/css/FichaTecnicaAdmin/tablero.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    <!--EDITADO PARA NUEVOS TIPOS DE GRAFICOS (CSS)-->
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/indicadores/css/FichaTecnicaAdmin/gauge.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    ";
        // line 22
        if (((isset($context["id_sala"]) ? $context["id_sala"] : $this->getContext($context, "id_sala")) == 0)) {
            // line 23
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/indicadores/js/DataTables/media/css/jquery.dataTables.css"), "html", null, true);
            echo "\" type=\"text/css\" media=\"all\" />
        <link rel=\"stylesheet\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/indicadores/js/DataTables/media/css/TableTools.css"), "html", null, true);
            echo "\" type=\"text/css\" media=\"all\" />
        <link rel=\"stylesheet\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/indicadores/js/ryrych-rcarousel/widget/css/rcarousel.css"), "html", null, true);
            echo "\" type=\"text/css\" media=\"all\" />
        <link rel=\"stylesheet\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/indicadores/js/ryrych-rcarousel/examples/rlightbox/css/lightbox.css"), "html", null, true);
            echo "\" type=\"text/css\" media=\"all\" />
        <link rel=\"stylesheet\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/indicadores/css/FichaTecnicaAdmin/carrusel.css"), "html", null, true);
            echo "\" type=\"text/css\" media=\"all\" />
        
    ";
        }
        // line 30
        echo "
";
    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
        echo "    
    ";
        // line 34
        if (((isset($context["id_sala"]) ? $context["id_sala"] : $this->getContext($context, "id_sala")) == 0)) {
            // line 35
            echo "        ";
            $this->displayParentBlock("javascripts", $context, $blocks);
            echo "
    ";
        } else {
            // line 37
            echo "        ";
            if (array_key_exists("admin_pool", $context)) {
                // line 38
                echo "            ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "javascripts", 1 => array()), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["javascript"]) {
                    // line 39
                    echo "                ";
                    if ((twig_in_filter("jquery.min.js", $context["javascript"]) || twig_in_filter("bootstrap.min.js", $context["javascript"]))) {
                        // line 40
                        echo "                    <script src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($context["javascript"]), "html", null, true);
                        echo "\" type=\"text/javascript\"></script>
                ";
                    }
                    // line 42
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['javascript'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                echo "        ";
            }
            // line 44
            echo "        ";
            $this->loadTemplate(twig_join_filter(array(0 => "IndicadoresBundle::messages_js.html.twig")), "IndicadoresBundle:FichaTecnicaAdmin:tablero.html.twig", 44)->display($context);
            // line 45
            echo "    ";
        }
        // line 46
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/indicadores/js/d3.v3.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/indicadores/js/d3pie.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/indicadores/js/topojson.v1.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/indicadores/js/affix.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/indicadores/js/FichaTecnicaAdmin/tablero.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/indicadores/js/FichaTecnicaAdmin/comun.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/indicadores/js/FichaTecnicaAdmin/grafico_pastel.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/indicadores/js/FichaTecnicaAdmin/grafico_columnas.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/indicadores/js/FichaTecnicaAdmin/grafico_lineas.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/indicadores/js/FichaTecnicaAdmin/grafico_mapa.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    
    ";
        // line 58
        if (((isset($context["id_sala"]) ? $context["id_sala"] : $this->getContext($context, "id_sala")) == 0)) {
            // line 59
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/indicadores/js/bridge_draggable_touch.js"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
        <script src=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/indicadores/js/jquery.ui.touch-punch.js"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
        <script src=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/indicadores/js/rasterizeHTML.allinone.js"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
        <script src=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/indicadores/js/DataTables/jquery.dataTables.min.js"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>        
        <script src=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/indicadores/js/DataTables/TableTools.min.js"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
        <script src=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/indicadores/js/ryrych-rcarousel/widget/lib/jquery.ui.rcarousel.min.js"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
        <script src=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/indicadores/js/ryrych-rcarousel/examples/rlightbox/lib/jquery.ui.rlightbox.min.js"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
        <script src=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/indicadores/js/FichaTecnicaAdmin/carrusel.js"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
        <script src=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/indicadores/js/jquery.searchFilter.js"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
        <script src=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/indicadores/js/FichaTecnicaAdmin/fullscreen.js"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
    ";
        }
        // line 70
        echo "    
    <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/indicadores/js/FichaTecnicaAdmin/grafico_gauge.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/indicadores/js/FichaTecnicaAdmin/grafico_termometro.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/indicadores/js/FichaTecnicaAdmin/iopctrl.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    
";
    }

    // line 77
    public function block_content($context, array $blocks = array())
    {
        // line 78
        echo "<div id=\"div_carga\" class='affix'>
    <img id=\"cargador\" src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/indicadores/images/ajax-loader.gif"), "html", null, true);
        echo "\"/>
</div>
";
        // line 81
        if (((isset($context["id_sala"]) ? $context["id_sala"] : $this->getContext($context, "id_sala")) == 0)) {
            // line 82
            echo "    ";
            $this->loadTemplate("IndicadoresBundle:FichaTecnicaAdmin:tablero_normal.html.twig", "IndicadoresBundle:FichaTecnicaAdmin:tablero.html.twig", 82)->display($context);
        } else {
            // line 84
            echo "    ";
            $this->loadTemplate("IndicadoresBundle:FichaTecnicaAdmin:tablero_sala.html.twig", "IndicadoresBundle:FichaTecnicaAdmin:tablero.html.twig", 84)->display($context);
        }
    }

    public function getTemplateName()
    {
        return "IndicadoresBundle:FichaTecnicaAdmin:tablero.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 84,  284 => 82,  282 => 81,  277 => 79,  274 => 78,  271 => 77,  264 => 73,  260 => 72,  256 => 71,  253 => 70,  248 => 68,  244 => 67,  240 => 66,  236 => 65,  232 => 64,  228 => 63,  224 => 62,  220 => 61,  216 => 60,  211 => 59,  209 => 58,  204 => 56,  200 => 55,  196 => 54,  192 => 53,  188 => 52,  184 => 51,  179 => 49,  175 => 48,  171 => 47,  166 => 46,  163 => 45,  160 => 44,  157 => 43,  151 => 42,  145 => 40,  142 => 39,  137 => 38,  134 => 37,  128 => 35,  126 => 34,  121 => 33,  116 => 30,  110 => 27,  106 => 26,  102 => 25,  98 => 24,  93 => 23,  91 => 22,  87 => 21,  82 => 19,  79 => 18,  76 => 17,  71 => 15,  66 => 14,  59 => 12,  53 => 11,  50 => 10,  45 => 9,  42 => 8,  36 => 6,  33 => 5,  30 => 4,  11 => 3,);
    }
}
