
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
		
			<h1> Turistapp </h1>
		
		</div>
		<br>
		<div data-role="navbar">
				<ul>
				<li><a href="index">Inicio</a></li>
				<li><a href="index2">Ingreso</a></li>
				<li><a href="index3">registro</a></li>
				</ul>
		</div>
		
		
		
			
                    <div data-role="content">
<form action="registro.php" method="post">
<div data-role="fieldcontain">
<label for="nombre">Nombre:</label>
<input type="text" name="nombre" id="nombre" value="" />
</div>
   <div data-role="fieldcontain">
<label for="apellido">Apellido:</label>
<input type="text" name="apellido" id="apellido" value="" />
</div> 
    
<div data-role="fieldcontain">
<label for="email">Email:</label>
<input type="text" name="email" id="email" value="" />
</div>
    
    <div data-role="fieldcontain">
<label for="ciudad">Ciudad</label>
<input type="text" name="ciudad" id="ciudad" value="" />
</div>
    
      <div data-role="fieldcontain">
<label for="usuario">Usuario</label>
<input type="text" name="usuario" id="usuario" value="" />
</div>
    
         <div data-role="fieldcontain">
<label for="pass">Contraseña</label>
<input type="text" name="pass" id="pass" value="" />
</div>
    
    
<div data-role="fieldcontain">
<input type="submit" name="submit" value="Enviar" />
</div>
</form>
</div>
			<hr>
         
        
        
       
	
		
		<div data-role="footer" data-theme="b">
		
			<p align="center"> Turistapp &copy; 2014</p>
		
		</div>
	</div>
	
       
    </body>
</html>
