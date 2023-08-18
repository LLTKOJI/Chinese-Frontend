<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard de Ordenes</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-image: url('img/wallpaper.jpg');
  }

  .boton {
    display: inline-block;
    padding: 10px 20px;
    background-color: #ff0000;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    margin: 10px;
  }

  .boton:hover {
    background-color: #cc0000;
  }
</style>
</head>
<body>
  <div class="botones">
    <button class="boton">Lista de Ordenes Asignadas a Chef</button>
    <button class="boton">Lista de Ordenes en Curso</button>
    <button class="boton">Lista de Ordenes Asignadas a Chef</button>
  </div>
</body>
</html>
