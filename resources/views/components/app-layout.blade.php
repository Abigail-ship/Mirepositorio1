<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
<style>
  .titulo{ font-family: 'Cookie';font-weight: 50px; }
  .contenido { font-family: "Cookie"; src: url("Fuentes/Cookie-Regular") format("truetype"); }
</style>
</head>
<body>
  <header>Cabecera, no cambia</header>
  
       {{$slot}}   
 
  <footer>Pié de página, no cambia</footer> 
</body>
</html>