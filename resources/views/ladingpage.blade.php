<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cuadros de Acceso</title>
<style>
  body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    background-image: url('img/wallpaper.jpg'); /* Ruta a la imagen */
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
  }

  .cuadro {
    width: 200px;
    height: 200px;
    border: 2px solid #333;
    border-radius: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 10px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s;
  }

  .cuadro:hover {
    background-color: #f0f0f0;
  }
</style>
</head>
<body>
  <div class="cuadro" onclick="location.href='login.html'">
    Login
  </div>
  <div class="cuadro" onclick="location.href='registro_cliente.html'">
    Registro Cliente
  </div>
  <div class="cuadro" onclick="location.href='registro_empleado.html'">
    Registro Empleado
  </div>
</body>
</html>
