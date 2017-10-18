<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	</head>
       <button onclick="ejecutarAjax()">Presioname</button>
       <div id="resultado" >

       <script src="js/jquery-3.2.1.min.js"></script>
       <script >
       	function ejecutarAjax(){
                     $.ajax({
                            url: 'procesar.php',
                            data: {param1: 'value1'},
                            beforeSend: function(){
                                   $("#resultado").html('');
                                   $("#resultado").append("<span>Enviando</span>");
                            },
                     })
                     .done(function() {
                             $("#resultado").html('');
                             $("#resultado").append("<span>Exito al responder</span>");
                     })
                     .fail(function() {
                             $("#resultado").html('');
                             $("#resultado").append("<span>Error al enviar</span>");
                     })
                     /*.always(function() {
                            alert("complete");
                     });*/
                     
                     


                     
                     
              }

       	
       </script>
       </html>