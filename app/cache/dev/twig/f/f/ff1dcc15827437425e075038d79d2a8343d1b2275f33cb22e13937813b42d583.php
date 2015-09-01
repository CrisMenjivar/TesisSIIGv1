<?php

/* IndicadoresBundle::standard_layout.html.twig */
class __TwigTemplate_ff1dcc15827437425e075038d79d2a8343d1b2275f33cb22e13937813b42d583 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle::standard_layout.html.twig", "IndicadoresBundle::standard_layout.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'sonata_head_title' => array($this, 'block_sonata_head_title'),
            'body_attributes' => array($this, 'block_body_attributes'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'sonata_top_nav_menu' => array($this, 'block_sonata_top_nav_menu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/indicadores/css/custom_layout.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    ";
        // line 5
        if (((isset($context["logo"]) ? $context["logo"] : $this->getContext($context, "logo")) == 1)) {
            // line 6
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/indicadores/css/custom_layout_2.css"), "html", null, true);
            echo "\" type=\"text/css\" media=\"all\" />
    ";
        }
        // line 8
        echo "
";
    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>

    ";
        // line 15
        $this->loadTemplate(twig_join_filter(array(0 => "IndicadoresBundle::messages_js.html.twig")), "IndicadoresBundle::standard_layout.html.twig", 15)->display($context);
    }

    // line 17
    public function block_sonata_head_title($context, array $blocks = array())
    {
        // line 18
        echo "    eTAB
";
    }

    // line 20
    public function block_body_attributes($context, array $blocks = array())
    {
        echo "class=\"sonata-bc sidebar-collapse\"";
    }

    // line 21
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
    }

    // line 23
    public function block_sonata_top_nav_menu($context, array $blocks = array())
    {
        // line 24
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "token", array())) {
            // line 25
            echo "        ";
            echo $this->env->getExtension('knp_menu')->render("sonata_admin_sidebar", array("template" => $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "knp_menu_template"), "method")));
            echo "
    ";
        }
        // line 27
        echo "    <div class=\"navbar-custom-menu\">        
        <ul class=\"nav navbar-nav\">
            ";
        // line 35
        echo "            <li class=\"dropdown user-menu\">
                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                    <i class=\"fa fa-user fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                </a>
                <ul class=\"dropdown-menu dropdown-user\">
                    ";
        // line 40
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) != "")) {
            // line 41
            echo "                        ";
            $this->loadTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "user_block"), "method"), "IndicadoresBundle::standard_layout.html.twig", 41)->display($context);
            echo "                                            
                        <li><A class=\"btn btn-flat\" href='";
            // line 42
            echo $this->env->getExtension('routing')->getUrl("fos_user_change_password");
            echo "'>
                               <span class=\"glyphicon glyphicon-repeat\"></span>";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("_cambiar_clave_"), "html", null, true);
            echo "</A>
                        </li>
                        <li class=\"divider\"></li>
                    ";
        }
        // line 46
        echo "                
                ";
        // line 47
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array("es_SV" => "Español", "en_US" => "English"));
        foreach ($context['_seq'] as $context["locale"] => $context["lenguaje"]) {
            // line 48
            echo "                    ";
            if (($context["locale"] == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()))) {
                // line 49
                echo "                        <li class='active'><A href='#'>";
                echo twig_escape_filter($this->env, $context["lenguaje"], "html", null, true);
                echo "</a></li>
                    ";
            } else {
                // line 51
                echo "                        <li ><a href='";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("change_locale", array("_locale" => $context["locale"])), "html", null, true);
                echo "'>";
                echo twig_escape_filter($this->env, $context["lenguaje"], "html", null, true);
                echo "</a></li>
                    ";
            }
            // line 53
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['locale'], $context['lenguaje'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                </ul>
            </li>            
        </ul>
    </div>
";
    }

    public function getTemplateName()
    {
        return "IndicadoresBundle::standard_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 54,  163 => 53,  155 => 51,  149 => 49,  146 => 48,  142 => 47,  139 => 46,  132 => 43,  128 => 42,  123 => 41,  121 => 40,  114 => 35,  110 => 27,  104 => 25,  101 => 24,  98 => 23,  93 => 21,  87 => 20,  82 => 18,  79 => 17,  75 => 15,  70 => 13,  66 => 12,  61 => 11,  58 => 10,  53 => 8,  47 => 6,  45 => 5,  41 => 4,  36 => 3,  33 => 2,  11 => 1,);
    }
}
