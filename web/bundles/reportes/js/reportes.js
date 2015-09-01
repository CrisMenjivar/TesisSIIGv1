function _PruebaAJAX(contenido, id)
{
    //alert(contenido);
    var url="/app_dev.php/admin/minsal/indicadores/fichatecnica/reportesAjax/"+id;
 
    var cont="#"+contenido;
    //alert(url);
    $(cont).load(url);
}

function PruebaAJAX(contenido, id)
{
	var url="/app_dev.php/admin/minsal/indicadores/fichatecnica/reportesAjax/"+id;
	var cont="#"+contenido;
	$(document).ready(function(){
	  $.get(url, function(data){
	    $(cont).append(data);
	  });
	});
}

function eliminarVariable(elemento_eliminar)
{
	
	var eliminar="#"+elemento_eliminar;
	//alert(elemento_eliminar);
	$(eliminar).remove();
}

function cargarSql()
{	
	var url="/app_dev.php/admin/minsal/indicadores/fichatecnica/verSql";
	var cont="#verSql";
	$(document).ready(function(){
        $.getJSON(url, function(data) {
            document.getElementById("Reporte_verSql").value=data.datos;
        });
    });
	
	
}


function wrapText(context, text, x, y, maxWidth, lineHeight) {
	var words = text.split(' ');
	var line = '';

	for(var n = 0; n < words.length; n++) {
	  var testLine = line + words[n] + ' ';
	  var metrics = context.measureText(testLine);
	  var testWidth = metrics.width;
	  if (testWidth > maxWidth && n > 0) {
	    context.fillText(line, x, y);
	    line = words[n] + ' ';
	    y += lineHeight;
	  }
	  else {
	    line = testLine;
	  }
	}
	context.fillText(line, x, y);
}




