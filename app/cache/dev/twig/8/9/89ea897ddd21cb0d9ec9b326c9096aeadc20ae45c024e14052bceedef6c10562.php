<?php

/* IndicadoresBundle:ReportesAdmin:plantilla_reporte.html.twig */
class __TwigTemplate_89ea897ddd21cb0d9ec9b326c9096aeadc20ae45c024e14052bceedef6c10562 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IndicadoresBundle::standard_layout.html.twig", "IndicadoresBundle:ReportesAdmin:plantilla_reporte.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
            'content1' => array($this, 'block_content1'),
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

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/indicadores/js/pivotTable/pivot.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/indicadores/css/FichaTecnicaAdmin/pivotTable.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/reportes/css/bootstrap.min.css"), "html", null, true);
        echo "\" media=\"all\" />
<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/reportes/css/bootstrap-theme.css"), "html", null, true);
        echo "\" media=\"all\" />
<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/reportes/css/reportes.css"), "html", null, true);
        echo "\" media=\"all\" />
<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/reportes/css/jquery.dataTables.min.css"), "html", null, true);
        echo "\" media=\"all\" />
";
    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        // line 12
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script type=\"text/javascript\" src=\"https://www.google.com/jsapi\"></script>
<script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/indicadores/js/FichaTecnicaAdmin/pivotTable.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/indicadores/js/pivotTable/pivot.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/indicadores/js/pivotTable/pivot.es.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/indicadores/js/pivotTable/gcharts_renderers.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/indicadores/js/rasterizeHTML.allinone.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/indicadores/js/jquery.searchFilter.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/reportes/js/reportes.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/reportes/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        // line 24
        echo "
<script>
\t\$(document).ready(function() {
    \t\$('#graficosT').dataTable( {
        
            \"info\": \"Indicador _PAGE_ de _PAGES_\",
            \"iDisplayLength\": 1,
\t    \"bFilter\": false, 
\t    \"bInfo\": false,
\t    \"bLengthChange\": false,
\t    \"bSort\":false,
\t         
\t    \t\t
    });
    var t = \$('#graficosT').DataTable();
   
    \$('#add').on( 'click', function () {
        t.row.add( [
\t    \"<input class='Gcomentarios' name='tituloE' type='text' value='' placeholder='Titulo'><br><br><textarea name='comentariosG' rows='30' cols='120' placeholder='Comentarios' ></textarea>\"
        ] ).draw();
    } );
\t
    \t\$('#graficosT tbody').on( 'click', 'tr', function () {
        if ( \$(this).hasClass('iDisplay') ) {
            \$(this).removeClass('iDisplay');
        }
        else {
            t.\$('tr.iDisplay').removeClass('iDisplay');
            \$(this).addClass('iDisplay');
        }
    } );
 
    \$('#delete').click( function () {
        t.row('.iDisplay').remove().draw( false );
    } );


\tvar form = document.getElementsByName(\"Reporte\");
\t\t
\t\$('.enviar').click(function() {
\t\t\t
\t\tcont = 1;
\t\t\$.each(\$(\"#graficosT\").dataTable().fnGetNodes(), function () { 
\t\tvar str = \$(this).find('input').val();
\t\tvar n = str.search(\"image/png;\");

\t\tif(n == '-1' )
\t\t{
\t\t\t\$('<input>').attr({
\t\t\t\t    \t\t\t'name': 'comentariosG'+cont,
\t\t\t\t\t\t\t'value': \$(this).find('textarea').val(),
\t\t\t\t\t\t\t'type': 'hidden'
\t\t\t}).appendTo(form)
\t\t\t
\t\t\t\$('<input>').attr({
\t\t\t\t    \t\t\t'name': 'tituloE'+cont,
\t\t\t\t\t\t\t'value': \$(this).find('input:text').val(),
\t\t\t\t\t\t\t'type': 'hidden'
\t\t\t}).appendTo(form)
\t\t\t\t
\t\t\t\t\t\t
\t\t}
\t\telse 
\t\t{
\t\t\t\$('<input>').attr({
\t\t\t\t    \t\t\t'name': 'data'+cont,
\t\t\t\t\t\t\t'value': \$(this).find('input:hidden').val(),
\t\t\t\t\t\t\t'type': 'hidden'
\t\t\t}).appendTo(form)
\t\t\t\$('<input>').attr({
\t\t\t\t    \t\t\t'name': 'comentarios1'+cont,
\t\t\t\t\t\t\t'value': \$(this).find('textarea').val(),
\t\t\t\t\t\t\t'type': 'hidden'
\t\t\t}).appendTo(form)
\t\t\t\$('<input>').attr({
\t\t\t\t    \t\t\t'name': 'tablaA'+cont,
\t\t\t\t\t\t\t'value': \$(this).find('input.tablaD'+cont).val(),
\t\t\t\t\t\t\t'type': 'hidden'
\t\t\t}).appendTo(form)
\t\t
\t\t}
\t\tif(\$(this).find('div.tablaDatos').hasClass(\"mostrada\"))
\t\t{\t
\t\t\t\$('<input>').attr({
\t    \t\t\t'name': 'bandera'+cont,
\t\t\t\t'value': '1',
\t\t\t\t'type': 'hidden'
\t\t\t}).appendTo(form)
\t\t}\t\t
\t\telse 
\t\t{
\t\t\t\$('<input>').attr({
\t    \t\t\t'name': 'bandera'+cont,
\t\t\t\t'value': '0',
\t\t\t\t'type': 'hidden'

\t\t\t}).appendTo(form)
\t\t}
\t\tcont++;\t
\t\t
\t   }
\t   );
\t\t\$('<input>').attr({
\t\t\t\t    \t\t\t'name': 'elementos',
\t\t\t\t\t\t\t'value': cont,
\t\t\t\t\t\t\t'type': 'hidden'
\t\t}).appendTo(form)
\t\t
\t\t
\t});

\t\$(\"#mostrar\").click(function(){
\t  \t\t\t\t\$( \".tablaDatos\" ).toggle();
\t\t\t\t\t\$( \"div.tablaDatos\" ).toggleClass( \"mostrada\" );
\t\t\t\t\t
\t});
\t
} );
\t
</script>

";
        // line 145
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 146
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

<button id=\"add\" type=\"button\" class=\"btn btn-default\">
  <span aria-hidden=\"true\">Nueva hoja</span> 
</button>
<button id=\"delete\" type=\"button\" class=\"btn btn-default\">
  <span aria-hidden=\"true\">Eliminar hoja</span> 
</button>
<button id=\"mostrar\" type=\"button\" class=\"btn btn-default\">
  \t\t\t\t<span aria-hidden=\"true\">Mostrar/ocultar tabla</span> 
</button>


<br><br>
<div class=\"row text-center\">
\t<div class=\"col-md-1\"><label for=\"Name\" style=\"float: left\">Logo 1:</label></div>
\t<div class=\"col-md-11\" style=\"float: left\">
\t\t";
        // line 163
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "attachment1", array()), 'widget');
        echo "
\t</div>
\t<div class=\"col-md-1\"><label for=\"Name\" style=\"float: left\">Logo 2:</label></div>
\t<div class=\"col-md-11\" style=\"float: left\">";
        // line 166
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "attachment2", array()), 'widget');
        echo "</div>
</div>

<div class=\"marco-sala\" id=\"marco-sala\">
   <div id=\"div_carga\" class='affix'>
      <img id=\"cargador\" src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/indicadores/images/ajax-loader.gif"), "html", null, true);
        echo "\"/>
   </div>
   <div class=\"page\">
        
      <div class=\"content\">
         
         ";
        // line 177
        $this->displayBlock('content1', $context, $blocks);
        // line 270
        echo "      </div>
      
   </div>
</div>
</div>

<button name=\"pdf\"  class=\"btn btn-success enviar\" style=\"float: right margin-right:5px\" formnovalidate>
\t<span class=\"glyphicon glyphicon-file\"></span> Generar PDF
</button>
<a href=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "tablero"), "method"), "html", null, true);
        echo "\">
\t<button type=\"button\" class=\"btn btn-danger \" style=\"float: right\">
\t\t<span class=\"glyphicon glyphicon glyphicon-remove\" aria-hidden=\"true\" ></span> Descartar cambios
\t</button>
</a>



";
        // line 287
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
    }

    // line 177
    public function block_content1($context, array $blocks = array())
    {
        // line 178
        echo "         <input name='num_graficosPDF' type='hidden' value='";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["graphs"]) ? $context["graphs"] : $this->getContext($context, "graphs"))), "html", null, true);
        echo "'>
\t 
\t <div class=\"row text-center\">
\t    <div class=\"col-md-12\">
\t       ";
        // line 182
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "encabezado", array()), 'widget');
        echo "
\t    </div>
\t</div>\t\t    
\t    <table class=\"table-borderless\" width=\"100%\">
\t      <tbody>
\t       <tr class=\"text-center\">
\t\t\t<td width=\"10%\">

\t\t\t\t<img width=\"100px\" height=\"100px\" src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/reportes/images/Logo1.png"), "html", null, true);
        echo "\"/>
\t\t\t</td>
\t\t\t<td width=\"80%\">
\t\t\t\t";
        // line 193
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titulo", array()), 'widget');
        echo "
\t\t\t</td>
\t\t\t<td width=\"10%\">

\t\t\t\t<img width=\"100px\" height=\"100px\" src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/reportes/images/Logo1.png"), "html", null, true);
        echo "\"/>
\t\t\t</td> \t
\t\t</tr>
\t      </tbody>
\t</table> 
\t
\t <table id=\"graficosT\" >
\t    <thead>
      \t\t<tr><td></td></tr>
    \t    </thead>
\t    <tbody>
\t\t\t    \t\t    
            
            ";
        // line 210
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["graphs"]) ? $context["graphs"] : $this->getContext($context, "graphs")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
            // line 211
            echo "\t\t <tr class=\"select\">
\t\t   <td id=\"celda";
            // line 212
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\">
\t\t\t    
\t\t\t    <center><h4>";
            // line 214
            echo twig_escape_filter($this->env, $this->getAttribute($context["g"], "titulo", array()), "html", null, true);
            echo "</h4></center>
\t\t\t    <br>
\t\t\t    <textarea name='comentarios1";
            // line 216
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "' rows='10' cols='120' placeholder='Comentarios' ></textarea>
\t\t\t    <br>
\t\t\t    <input name='data";
            // line 218
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "' type='hidden' value=''>
\t\t\t    <input class='tablaD";
            // line 219
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "' name='tablaDatosR";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "' type='hidden' value=''>
\t\t\t    
\t\t\t    <br>
\t\t\t    <div class='tablaDatos' id='tablaDatos";
            // line 222
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "'>
\t\t\t    \t\t    
            \t\t    </div>
\t\t\t    <script>\t\t\t\t
\t\t\t\tvar canvas_width = 500;
\t\t\t\tvar canvas_height = 475;
\t\t\t\tvar canvas_line = 25;
\t\t\t\tvar canvas_font = \"12pt Arial\";
\t\t\t\tdiv=document.getElementById('celda";
            // line 230
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "');
\t\t\t\tvar img = new Image();
\t\t\t\timg.width = canvas_width;
\t\t\t\timg.height = canvas_height;
\t\t\t\timg.src = '";
            // line 234
            echo twig_escape_filter($this->env, $this->getAttribute($context["g"], "data", array()), "html", null, true);
            echo "';
\t\t\t\tvar canvas = document.createElement(\"canvas\");
\t\t\t\tcanvas.width = canvas_width;
\t\t\t\tcanvas.height = canvas_height;
\t\t\t   \tvar ctx = canvas.getContext(\"2d\");
\t\t\t\tctx.drawImage(img, 0, 70);
\t\t\t\tctx.font=canvas_font;
\t\t\t\t<!-- wrapText(ctx, '";
            // line 241
            echo twig_escape_filter($this->env, $this->getAttribute($context["g"], "titulo", array()), "html", null, true);
            echo "', 25, 20, canvas_width, canvas_line); -->
\t\t\t\tvar dataURL = canvas.toDataURL(\"image/png\");
\t\t\t\tdiv.appendChild(canvas);
\t\t\t\t\$('input[name=data";
            // line 244
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "]').val(dataURL);
\t\t\t\tvar form = document.getElementsByName(\"Reporte\");
\t\t\t\t\$('<input>').attr({
\t\t    \t\t\t'name': 'titulo'+";
            // line 247
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo ",
\t\t\t\t\t'value':'";
            // line 248
            echo twig_escape_filter($this->env, $this->getAttribute($context["g"], "titulo", array()), "html", null, true);
            echo "',
\t\t\t\t\t'type': 'hidden'
\t\t\t    \t}).appendTo(form)
\t\t\t\t\$(\".tablaDatos\").hide();\t
\t\t\t\tvar \$log = \$('#tablaDatos";
            // line 252
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "'),
\t\t\t\t  str = '";
            // line 253
            echo twig_escape_filter($this->env, $this->getAttribute($context["g"], "tablaDatosR", array()), "html", null, true);
            echo "',
\t\t\t\t  html = \$.parseHTML( str ),
\t\t\t\t  nodeNames = [];
\t\t\t\t  var decoded = \$(\"<div/>\").html(html).text();
\t\t\t\t\$log.append( decoded );\t
\t\t\t\t\$('input[name=tablaDatosR";
            // line 258
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "]').val(decoded);
\t\t\t\t\t\t
\t\t\t    </script>
\t\t\t    
\t\t\t    <br><br>\t\t\t    
\t\t </td>
\t       </tr>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['g'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 266
        echo "\t   </tbody>
         </table>
        
         ";
    }

    public function getTemplateName()
    {
        return "IndicadoresBundle:ReportesAdmin:plantilla_reporte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  492 => 266,  470 => 258,  462 => 253,  458 => 252,  451 => 248,  447 => 247,  441 => 244,  435 => 241,  425 => 234,  418 => 230,  407 => 222,  399 => 219,  395 => 218,  390 => 216,  385 => 214,  380 => 212,  377 => 211,  360 => 210,  344 => 197,  337 => 193,  331 => 190,  320 => 182,  312 => 178,  309 => 177,  303 => 287,  292 => 279,  281 => 270,  279 => 177,  270 => 171,  262 => 166,  256 => 163,  236 => 146,  232 => 145,  109 => 24,  106 => 23,  100 => 21,  96 => 20,  92 => 19,  88 => 18,  84 => 17,  80 => 16,  76 => 15,  72 => 14,  67 => 12,  64 => 11,  58 => 9,  54 => 8,  50 => 7,  46 => 6,  42 => 5,  38 => 4,  34 => 3,  31 => 2,  11 => 1,);
    }
}
