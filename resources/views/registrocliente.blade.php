<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registro de Clientes</title>
<style>
body {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    margin: 0;
    background-image: url("/img/wallpaper.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    font-family: Arial, sans-serif;
  }
  
  
  .formulario {
    display: flex;
    max-width: 800px;
    margin: 20px;
    background-color: rgba(255, 255, 255, 0.8);
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  }
  
  .formulario .campos {
    flex: 1;
    padding: 20px;
  }
  
  .formulario h1 {
    font-size: 24px;
    margin-bottom: 15px;
  }
  
  .formulario label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
    font-size: 18px;
  }
  
  .formulario input[type="text"],
  .formulario input[type="email"],
  .formulario input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
  }
  
  .barra-lateral {
    background-color: #ff0000;
    width: 8px;
    border-radius: 0 10px 10px 0;
  }
  
  .imagen-barra {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100%;
  }
  
  .imagen-barra img {
    width: 150px; /* Tamaño de la imagen ajustado */
    border-radius: 50%;
  }
  

</style>
</head>
<body>
  <div class="formulario">
    <div class="campos">
      <h1>Registro de Clientes</h1>
      <form method="POST" action="http://localhost:8080/clientes/crearCliente">
        @csrf <!-- Agrega el campo CSRF para protección -->
        
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre">

        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido">

        <label for="correo">Correo:</label>
        <input type="email" id="correo" name="correo">

        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena">

        <button type="submit" id="submitBtn" name="submit">Registrar</button>
      </form>
    </div>
    <div class="barra-lateral">
    </div>
  </div>
  
  <?php
  if (isset($_POST['submit'])) {
      $url = 'http://localhost:8080/clientes/crearCliente';
      
      $data = [
          'nombre' => $_POST['nombre'],
          'apellido' => $_POST['apellido'],
          'correo' => $_POST['correo'],
          'contrasena' => $_POST['contrasena'],
          'clientePreferencial' => false // Ajusta el valor a "false"
      ];
      
      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_HTTPHEADER, array(
          'Content-Type: application/json'
      ));
      
      $response = curl_exec($ch);
      
      if (curl_errno($ch)) {
          echo 'Error: ' . curl_error($ch);
      } else {
          echo 'Response: ' . $response;
      }
      
      curl_close($ch);
  }
  ?>
</body>
</html>