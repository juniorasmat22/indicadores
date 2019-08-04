$(document).on('ready', function(){
  var tipo_radio;
         $('input[name=tipo]:radio').on('change', function(){
           tipo_radio = $('input:radio[name=tipo]:checked').val();
           switch (tipo_radio) {
             case "1":
                document.getElementById('p1').style.display =''
                document.getElementById('p2').style.display ='';
                document.getElementById('p3').style.display ='';
                document.getElementById('param2').value="";
                document.getElementById('param3').value="";
              
               break;

               case "6":
               document.getElementById('p1').style.display =''
               document.getElementById('p2').style.display ='none' ;
               document.getElementById('param2').value=0;
               document.getElementById('p3').style.display = 'none';
               document.getElementById('param3').value=0;
               break
               default:
               document.getElementById('p1').style.display =''
               document.getElementById('p2').style.display ='';
               document.getElementById('p3').style.display = 'none';
               document.getElementById('param3').value=0;
               document.getElementById('param2').value="";

               break;
           }

         });
});

function enviarFormula(){
var radio;
radio = $('input:radio[name=tipo]:checked').val();
console.log(radio);

}
