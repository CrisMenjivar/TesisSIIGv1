<?php

/* IndicadoresBundle::messages_js.html.twig */
class __TwigTemplate_e762072793203e4fba41cc023fb2ee1e687a2a31968c980a68f9ec9767d68c6b extends Twig_Template
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
        echo "<script type=\"text/javascript\">
    var trans={
            'sentencia_sql_origen_requeridos' : '";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("validacion.sentencia_sql_origen_requeridos"), "html", null, true);
        echo "',
            'debe_elegir_una_opcion' : '";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("validacion.debe_elegir_una_opcion"), "html", null, true);
        echo "',
            'elija_al_menos_un_campo' : '";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("validacion.elija_al_menos_un_campo"), "html", null, true);
        echo "',
            'elija_tipo_dato' : '";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("javascript.elija_tipo_dato"), "html", null, true);
        echo "',
            'elija_significado_dato' : '";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("javascript.elija_significado_dato"), "html", null, true);
        echo "',
            'configure_campos': '";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("javascript.configure_campos"), "html", null, true);
        echo "',
            'nombre_campo': '";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("javascript.nombre_campo"), "html", null, true);
        echo "',
            'tipo': '";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("javascript.tipo"), "html", null, true);
        echo "',
            'significado': '";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("javascript.significado"), "html", null, true);
        echo "',
            'datos_muestra': '";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("javascript.datos_muestra"), "html", null, true);
        echo "',
            'dimension': '";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("javascript.dimension"), "html", null, true);
        echo "',
            'ascendente': '";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("javascript.ascendente"), "html", null, true);
        echo "',
            'descendente': '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("javascript.descendente"), "html", null, true);
        echo "',
            'ordenar_y': '";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("javascript.ordenar_y"), "html", null, true);
        echo "',
            'ordenar_x': '";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("javascript.ordenar_x"), "html", null, true);
        echo "',
            'filtro_posicion': '";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("javascript.filtro_posicion"), "html", null, true);
        echo "',
            'desde': '";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("javascript.desde"), "html", null, true);
        echo "',
            'hasta': '";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("javascript.hasta"), "html", null, true);
        echo "',
            'filtrar': '";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("javascript.filtrar"), "html", null, true);
        echo "',
            'quitar_filtro': '";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("javascript.quitar_filtro"), "html", null, true);
        echo "',
            'dimension_opciones': '";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("javascript.dimension_opciones"), "html", null, true);
        echo "',
            'cambiar_dimension': '";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("javascript.cambiar_dimension"), "html", null, true);
        echo "',
            'opciones_grafico': '";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("javascript.opciones_grafico"), "html", null, true);
        echo "',
            'filtrar_por_elemento': '";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("javascript.filtrar_por_elemento"), "html", null, true);
        echo "',
            'alertas_indicador': '";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("javascript.alertas_indicador"), "html", null, true);
        echo "',
            'color': '";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("javascript.color"), "html", null, true);
        echo "',
            'limite_inf': '";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("javascript.limite_inf"), "html", null, true);
        echo "',
            'limite_sup': '";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("javascript.limite_sup"), "html", null, true);
        echo "',
            'comentario': '";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("javascript.comentario"), "html", null, true);
        echo "',
            'rango_no_especificado': '";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("javascript.rango_no_especificado"), "html", null, true);
        echo "',
            'max_escala_y': '";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("javascript.max_escala_y"), "html", null, true);
        echo "',
            'max_indicador': '";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("javascript.max_indicador"), "html", null, true);
        echo "',
            'max_rango_alertas': '";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("javascript.max_rango_alertas"), "html", null, true);
        echo "',
            'ocultar_listado_indicadores': '";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("javascript.ocultar_listado_indicadores"), "html", null, true);
        echo "',
            'mostrar_listado_indicadores': '";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("javascript.mostrar_listado_indicadores"), "html", null, true);
        echo "',
            'tipo_grafico': '";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("javascript.tipo_grafico"), "html", null, true);
        echo "',
            'agregar_favorito': '";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("javascript.agregar_favorito"), "html", null, true);
        echo "',
            'quitar_favoritos': '";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("javascript.quitar_favoritos"), "html", null, true);
        echo "',
            'no_mapa': '";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("javascript.no_mapa"), "html", null, true);
        echo "',
            'ver_ficha_tecnica': '";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("javascript.ver_ficha_tecnica"), "html", null, true);
        echo "',
            'tabla_datos': '";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("javascript.tabla_datos"), "html", null, true);
        echo "',
            'indicador': '";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("javascript.indicador"), "html", null, true);
        echo "',
            'descargar_grafico': '";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("javascript.descargar_grafico"), "html", null, true);
        echo "',
            'opciones': '";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("javascript.opciones"), "html", null, true);
        echo "',
            'ver_sql': '";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("javascript.ver_sql"), "html", null, true);
        echo "',
            'diccionario_transformacion' : '";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("javascript.diccionario_transformacion"), "html", null, true);
        echo "',
            'elija_diccionario' : '";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("javascript.elija_diccionario"), "html", null, true);
        echo "',
            'quitar_indicador' : '";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("javascript.quitar_indicador"), "html", null, true);
        echo "',
            'columnas' : '";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("javascript.columnas"), "html", null, true);
        echo "',
            'pastel' : '";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("javascript.pastel"), "html", null, true);
        echo "',
            'mapa' : '";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("javascript.mapa"), "html", null, true);
        echo "',
            'lineas' : '";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("javascript.lineas"), "html", null, true);
        echo "',
            'guardar_imagen' : '";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("javascript.guardar_imagen"), "html", null, true);
        echo "',
            'por': '";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("_por_"), "html", null, true);
        echo "',
            'nada_encontrado' : '";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("javascript._nada_encontrado_"), "html", null, true);
        echo "',
            'mostrando_n_de_n' : '";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("javascript._mostrando_n_de_n_"), "html", null, true);
        echo "',
            'mostrando_0' : '";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("javascript._mostrando_0_"), "html", null, true);
        echo "',
            'filtrados_de': '";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("javascript._filtrados_de_"), "html", null, true);
        echo "',
            'exportar' : '";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("_exportar_"), "html", null, true);
        echo "',
            'no_mas_niveles' : '";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("javascript.no_mas_niveles"), "html", null, true);
        echo "',
            'no_graficos_asignados' : '";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("javascript.no_graficos_asignados"), "html", null, true);
        echo "',
            'recargar_origen': '";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("javascript.recargar_origen"), "html", null, true);
        echo "',
            'ultima_lectura': '";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("javascript.ultima_lectura"), "html", null, true);
        echo "',
            'ultima_lectura_exp': '";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("javascript.ultima_lectura_exp"), "html", null, true);
        echo "',
            '_compartir_sala_': '";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("javascript._compartir_sala_"), "html", null, true);
        echo "',
            '_nombre_sala_': '";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("javascript._nombre_sala_"), "html", null, true);
        echo "',
            '_no_sala_': '";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("javascript._no_sala_"), "html", null, true);
        echo "',            
            '_no_areas_grafico_': '";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("javascript._no_areas_grafico_"), "html", null, true);
        echo "',
            '_cambiar_vista_': '";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("javascript._cambiar_vista_"), "html", null, true);
        echo "',
            '_error_acciones_vacia_': '";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("javascript._error_acciones_vacia_"), "html", null, true);
        echo "'
    }
</script>
";
    }

    public function getTemplateName()
    {
        return "IndicadoresBundle::messages_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 72,  295 => 71,  291 => 70,  287 => 69,  283 => 68,  279 => 67,  275 => 66,  271 => 65,  267 => 64,  263 => 63,  259 => 62,  255 => 61,  251 => 60,  247 => 59,  243 => 58,  239 => 57,  235 => 56,  231 => 55,  227 => 54,  223 => 53,  219 => 52,  215 => 51,  211 => 50,  207 => 49,  203 => 48,  199 => 47,  195 => 46,  191 => 45,  187 => 44,  183 => 43,  179 => 42,  175 => 41,  171 => 40,  167 => 39,  163 => 38,  159 => 37,  155 => 36,  151 => 35,  147 => 34,  143 => 33,  139 => 32,  135 => 31,  131 => 30,  127 => 29,  123 => 28,  119 => 27,  115 => 26,  111 => 25,  107 => 24,  103 => 23,  99 => 22,  95 => 21,  91 => 20,  87 => 19,  83 => 18,  79 => 17,  75 => 16,  71 => 15,  67 => 14,  63 => 13,  59 => 12,  55 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
