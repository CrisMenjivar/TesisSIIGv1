<?php

/* SonataUserBundle:Admin:Security/login.html.twig */
class __TwigTemplate_d33e2417512f1a1f30c986aed0ac873cc296cc5b3445f88dc2d9461f8fd7ea97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_attributes' => array($this, 'block_body_attributes'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_user_login_form' => array($this, 'block_sonata_user_login_form'),
            'sonata_user_login_error' => array($this, 'block_sonata_user_login_error'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataUserBundle:Admin:Security/login.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body_attributes($context, array $blocks = array())
    {
        echo "class=\"sonata-bc login-page\"";
    }

    // line 5
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        // line 6
        echo "
    <div class=\"login-box\">        

        ";
        // line 9
        $this->displayBlock('sonata_user_login_form', $context, $blocks);
        // line 65
        echo "    </div>

";
    }

    // line 9
    public function block_sonata_user_login_form($context, array $blocks = array())
    {
        // line 10
        echo "            ";
        $this->displayBlock('sonata_user_login_error', $context, $blocks);
        // line 15
        echo "
            <form action=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("sonata_user_admin_security_check");
        echo "\" method=\"post\">  
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\"><h4 class=\"login-box-msg\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_user_authentication", array(), "SonataUserBundle"), "html", null, true);
        echo "</h4></div>
                    <div class=\"panel-body\">
                        ";
        // line 20
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 21
            echo "                            <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "SonataUserBundle"), "html", null, true);
            echo "</div>
                        ";
        }
        // line 23
        echo "
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

                        <div class=\"control-group\">

                            <div class=\"form-group\">
                                <label for=\"username\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                                <div class=\"input-group\">
                                    <div class=\"input-group-addon\" style=\"height:45px\">
                                        <i class=\"glyphicon glyphicon-user\"></i>
                                    </div>
                                    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" class=\"form-control\" style=\"height:45px\"/>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"password\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                                <div class=\"input-group\">
                                    <div class=\"input-group-addon\" style=\"height:45px\">
                                        <i class=\"glyphicon glyphicon-lock\"></i>
                                    </div>
                                    <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" style=\"height:45px\"/>
                                </div>
                            </div>  
                            <div class=\"form-group\">
                                <label for=\"remember_me\">
                                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                                    ";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
                                </label>                                    
                            </div>
                            <div>
                               ";
        // line 54
        echo "                            </div>
                        </div>

                    </div>
                    <div class=\"panel-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                    </div>
                </div>
            </form>

        ";
    }

    // line 10
    public function block_sonata_user_login_error($context, array $blocks = array())
    {
        // line 11
        echo "                ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 12
            echo "                    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
                ";
        }
        // line 14
        echo "            ";
    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Admin:Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 14,  149 => 12,  146 => 11,  143 => 10,  133 => 59,  126 => 54,  119 => 49,  105 => 38,  98 => 34,  90 => 29,  82 => 24,  79 => 23,  73 => 21,  71 => 20,  66 => 18,  61 => 16,  58 => 15,  55 => 10,  52 => 9,  46 => 65,  44 => 9,  39 => 6,  36 => 5,  30 => 3,  21 => 1,);
    }
}
