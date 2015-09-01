<?php

/* IndicadoresBundle:FichaTecnicaAdmin:menu_tablero.html.twig */
class __TwigTemplate_da874b91b791698c18d8d9903166ce48d05019629087cc1114d423eebf31f0a5 extends Twig_Template
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
        echo "<ul class=\"nav nav-tabs\" id=\"myTab\">
    <li><a href=\"#sala\">";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("_graficos_"), "html", null, true);
        echo "</a></li>
    <li><a href=\"#opciones_sala\">";
        // line 3
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("_salas_")), "html", null, true);
        echo "</a></li>
    <li class=\"active\"><a href=\"#listado_indicadores\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("indicadores"), "html", null, true);
        echo "</a></li>
    <li><a href=\"#social\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("_social_"), "html", null, true);
        echo "</a></li>
    <li><a href=\"#acciones_sala\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("_sala_acciones_"), "html", null, true);
        echo "</a></li>
    <li><A class=\"crear_reporte\"> Reporte </A></li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "IndicadoresBundle:FichaTecnicaAdmin:menu_tablero.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  34 => 5,  30 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
