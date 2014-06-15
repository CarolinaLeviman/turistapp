<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1">
<title>Sliders con jQuery Mobile</title>
<link rel="stylesheet" href="jquery.mobile-1.0.min.css" />   
<script type="text/javascript" src="jquery-1.7.1.min.js"></script>   
</head>
<body>
<div data-role="page">
   <div data-role="header">
    <h1>Sliders</h1>
   </div>
   <div data-role="content"> 
    <div data-role="content">
      <form action="#" method="get">
       <div data-role="fieldcontain">
       <label for="slider">Slider Simple: </label>
       <input type="range" name="slider" id="slider" max="100" min="1" value="25" />
       <br>
       <label for="slider1">Slider Simple con temas: </label>
       <input type="range" name="slider1" id="slider1" max="100" min="1" value="40" data-theme="b" data-track-theme="a"/>
    <br>

<label for="flip1">Seleccionar una de dos opciones</label>
<select name="slider" id="flip1" data-role="slider">
    <option value="off">Off</option>
    <option value="o">On</option>
</select> 
       </div>
      </form>
</div>
<div data-role="footer">
<h3>Sliders</h3>
</div>
</div>
</div>
</body>
</html>

