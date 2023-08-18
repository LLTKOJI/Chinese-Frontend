<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registro de Usuarios</title>
<style>
  body {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    margin: 0;
    background-image: url('img/wallpaper.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    font-family: Arial, sans-serif;
  }

  .formulario {
    background-color: rgba(255, 255, 255, 0.8);
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
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

  .formulario select {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
  }

  .formulario button {
    padding: 10px 20px;
    background-color: #ff0000;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
  }

  .formulario button:hover {
    background-color: #cc0000;
  }
</style>
</head>
<body>
  <div class="formulario">
    <h1>Registro de Usuarios</h1>
    <form>
      <label for="adminCorreo">Correo de Administrador:</label>
      <input type="email" id="adminCorreo" name="adminCorreo" required>

      <label for="adminContrasena">Contraseña de Administrador:</label>
      <input type="password" id="adminContrasena" name="adminContrasena" required>

      <label for="tipoUsuario">Tipo de Usuario:</label>
      <select id="tipoUsuario" name="tipoUsuario">
        <option value="mesero">Mesero</option>
        <option value="chef">Chef</option>
        <option value="delivery">Delivery</option>
        <option value="admin">Admin</option>
      </select>

      <label for="nombre">Nombre:</label>
      <input type="text" id="nombre" name="nombre" required>

      <label for="apellido">Apellido:</label>
      <input type="text" id="apellido" name="apellido" required>

      <label for="correo">Correo:</label>
      <input type="email" id="correo" name="correo" required>

      <label for="contrasena">Contraseña:</label>
      <input type="password" id="contrasena" name="contrasena" required>

      <button type="submit">Registrarse</button>
    </form>
  </div>
</body>
</html>
