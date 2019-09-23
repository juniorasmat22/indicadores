function llenar_grafico(valor){
	var periodo=document.getElementById('periodo').value;
	var link='?c=indicador&a=listar_valores_x_periodo';
    var valores={
      'idIndicador':valor
    }
  $.ajax({
         type: 'POST',
         url:  link,
         data: valores,
         success: function(response){
            try{
               respuesta = JSON.parse(response);
              // console.log(respuesta.resultado[0].nombre);
               if (respuesta.respuesta) {

               	 var c_html="<ul class='y-axis'>"+
                      "<li><span>100</span></li><li><span>80</span></li><li><span>60</span></li><li><span>40</span></li><li><span>20</span></li><li><span>0</span></li>"+
                      "</ul>";
               	for (var i = 0; i < respuesta.resultado.length; i++) {
               		//c_html+="<option value='"+respuesta.resultado[0].codigo +"'>"+respuesta.resultado[0].nombre+"</option>"
									if (respuesta.resultado[i].periodo==periodo) {
										c_html+="<div class='bar'>"+
											"<div class='value tooltips' data-original-title='"+respuesta.resultado[i].resultado.substring(0,5) + "' data-toggle='tooltip' data-placement='top' style='height:"+respuesta.resultado[i].resultado.substring(0,5)+"%;'>"+
											respuesta.resultado[i].resultado.substring(0,5) +"%</div>"+
											"<div class='title' >"+respuesta.resultado[i].curso+"-"+respuesta.resultado[i].periodo+"</div></div>";
									}


               	}
               } else {
               		c_html+="  <div class='alert alert-danger'><b>Oh no!</b>Aún no existen datos para mostar.</div>";
               }
              
               $('#graficoUno').html(c_html)

            }catch(e){
               mostrarErrorPhp(data);
            }
         }
      });
}
function llenar_grafico_sede(valor,sede){
	var periodo=document.getElementById('periodo'+sede).value;
	var link='?c=indicador&a=listar_valores_x_sede';
    var valores={
      'idIndicador':valor,
			'sede':sede
    }
  $.ajax({
         type: 'POST',
         url:  link,
         data: valores,
         success: function(response){
            try{
               respuesta = JSON.parse(response);
              // console.log(respuesta.resultado[0].nombre);
               if (respuesta.respuesta) {
console.log(respuesta);
               	 var c_html="<ul class='y-axis'>"+
                      "<li><span>100</span></li><li><span>80</span></li><li><span>60</span></li><li><span>40</span></li><li><span>20</span></li><li><span>0</span></li>"+
                      "</ul>";
               	for (var i = 0; i < respuesta.resultado.length; i++) {
               		//c_html+="<option value='"+respuesta.resultado[0].codigo +"'>"+respuesta.resultado[0].nombre+"</option>"
									if (respuesta.resultado[i].periodo==periodo) {
										c_html+="<div class='bar'>"+
											"<div class='value tooltips' data-original-title='"+respuesta.resultado[i].resultado.substring(0,5) + "' data-toggle='tooltip' data-placement='top' style='height:"+respuesta.resultado[i].resultado.substring(0,5)+"%;'>"+
											respuesta.resultado[i].resultado.substring(0,5) +"%</div>"+
											"<div class='title' >"+respuesta.resultado[i].curso+"-"+respuesta.resultado[i].periodo+"</div></div>";
									}


               	}
               } else {
               		c_html+="  <div class='alert alert-danger'><b>Oh no!</b>Aún no existen datos para mostar.</div>";
               }

               $('#'+sede).html(c_html)

            }catch(e){
               mostrarErrorPhp(data);
            }
         }
      });
}
