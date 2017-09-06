<!DOCTYPE html>
<html>
<head>
	<title>Formulario y wea</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
<div class="container">
<div class="row">
	<div class="col-md-6 well">
		<form action="procesar.php" method="POST">
  			<div class="form-group">
    			<label for="email">Nombre</label>
    			<input type="email" class="form-control" id="email">
  			</div>
 			 <div class="form-group">
    			<label for="pwd">Apellido:</label>
    			<input type="password" class="form-control" id="pwd">
  			</div>
  			<div class="form-group">
    			<label for="pwd">Rut:</label>
    			<input type="password" class="form-control" id="pwd">
  			</div>
  			<div class="checkbox">
   				 <label><input type="checkbox"> Remember me</label>
  			</div>
  			  
  			  <input type="hidden" name="alumno_formulario">
			  <button type="submit" class="btn btn-danger">Submit</button>
</form>
	</div>
		<div class="col-md-6 well">
	<form action="procesar.php" method="GET">
 <h3>Ramo</h3>
 Ramo<br>
 <input type="text" name="ramo">
 Nota<br>
 <input type="number" name="nota">
 <input type="hidden" name="ramo_formulario">
 <input type="submit" value="Enviar" class="btn btn-"> 
 
 </form>
		</div>
	</div>
		</div>
<div class="row">
  <div class="col-md-12 well"></div>
</div>
<div class="row">
  <div class="col-md-4 well"></div>
  <div class="col-md-4 well"></div>
  <div class="col-md-4 well"></div>
</div>
<div class="row">
  ...
</div>

<div class="alert alert-success">
  <strong>kepà</strong> zaaaaaaaaaaaaaaaaaa
</div><div class="alert alert-info">
  <strong>a la mierda gestion de empresaaa</strong> de la perraaaaaaa
</div><div class="alert alert-warning">
  <strong>kepà</strong> zaaaaaaaaaaaaaaaaaa
</div>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>



</body>
</html>