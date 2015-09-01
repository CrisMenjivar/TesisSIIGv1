<?php

/* IndicadoresBundle:FichaTecnicaAdmin:accion_sala.html.twig */
class __TwigTemplate_bb631bbe00146c741b63f2dd30f69d10a385211173f26a82901ecb6f66e9886c extends Twig_Template
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
        echo "<div id=\"addAction\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"addActionLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                <h3 id=\"addActionLabel\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("_agregar_accion_"), "html", null, true);
        echo "</h3>
            </div>

            <div class=\"modal-body\">
                <form id='acciones_frm' class=\"form-horizontal\" role=\"form\">
                    <div class=\"form-group\" id=\"acciones_div\">
                      <label for=\"acciones\" class=\"col-sm-2 control-label\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("_acciones_"), "html", null, true);
        echo "</label>
                      <div class=\"col-sm-10\">
                        <textarea class=\"form-control\" rows=\"3\" id=\"acciones\"></textarea>
                      </div>
                    </div>
                    <div class=\"form-group\">
                      <label for=\"observaciones\" class=\"col-sm-2 control-label\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("_observaciones_"), "html", null, true);
        echo "</label>
                      <div class=\"col-sm-10\">
                        <textarea class=\"form-control\" rows=\"3\" id=\"observaciones\"></textarea>
                      </div>
                    </div>
                    <div class=\"form-group\">
                      <label for=\"responsables\" class=\"col-sm-2 control-label\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("_responsables_"), "html", null, true);
        echo "</label>
                      <div class=\"col-sm-10\">
                        <textarea class=\"form-control\" rows=\"3\" id=\"responsables\"></textarea>
                      </div>
                    </div>
                </form>
                <div id='info_accion' class=\"alert alert-danger\" role=\"alert\" style=\"display: none;\"></div>
            </div>

            <div class=\"modal-footer\">
                <button id='guardar_accion' class=\"btn btn-primary\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("_guardar_cambios_"), "html", null, true);
        echo "</button>
                <button class=\"btn btn-info\" data-dismiss=\"modal\" aria-hidden=\"true\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("_cerrar_"), "html", null, true);
        echo "</button>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "IndicadoresBundle:FichaTecnicaAdmin:accion_sala.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 35,  66 => 34,  53 => 24,  44 => 18,  35 => 12,  26 => 6,  19 => 1,);
    }
}
