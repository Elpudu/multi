<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	</head>
       <button onclick="ejecutarAjax()">Presioname</button>
       <div id="resultado" > </div>

       <script src="js/jquery-3.2.1.min.js"></script>
       <script >
       	function ejecutarAjax(){
                     $.ajax({
                            url: 'procesar.php',
                            data: {param1: 'value1'},
                            method: "GET",
                            beforeSend: function(){
                                   $("#resultado").html('');
                                   $("#resultado").append("<span>Enviando</span>");
                            },
                     })
                     .done(function(data) {
                             $("#resultado").html('');
                             $("#resultado").append(data);
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