<?php 
require_once("clases/estudiantes.php");
$est= new Estudiantes();
$datos = $est->get_estudiantes();
?>
<html> 
    <head>
       <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2">
	    <link rel="stylesheet" href="css/jquery.mobile-1.4.2.min.css" />
        <script src="js/jquery-1.7.2.min.js"></script>
        <script src="js/jquery.mobile-1.4.2.min.js"></script>
    </head>
    
    <body>
	<div data-role="page" id="inicio">
	
		<div data-role="header">
		
			<h1> Ejemplo Jquery Mobile </h1>
		
		</div>
		<br>
		<div data-role="navbar">
				<ul>
				<li><a href="index">Inicio</a></li>
				<li><a href="index2">Index 2</a></li>
				<li><a href="index3">Index 3</a></li>
				</ul>
		</div>
		
		<div data-role="content">
			 <?php
					for($i=0;$i<sizeof($datos);$i++){
            ?>
			
			<div class="ui-field-contain">
					<label for="textinput-1">Identificacion:</label>
					<input type="text" name="textinput-1" id="textinput-1" value ="<?php echo $datos[$i]["idestudiante"]; ?>">
					
					<label for="textinput-2">Nombre Completo:</label>
					<input type="text" name="textinput-2" id="textinput-2" value ="<?php echo $datos[$i]["nombre_completo"]; ?>">
					
					<label for="textinput-3">Telefono:</label>
					<input type="text" name="textinput-3" id="textinput-3" value ="<?php echo $datos[$i]["telefono"]; ?>">


			</div>
			<hr>
         
        
        
       <?php
        }
        ?>
		</div>
		
		<div data-role="footer" data-theme="b">
		
			<p align="center">Creado por Carolina Leviman &copy; 2014</p>
		
		</div>
	</div>
	
       
    </body>
</html>
