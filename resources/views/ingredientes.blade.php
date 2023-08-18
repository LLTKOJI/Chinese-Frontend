<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Gestión de Ingredientes</title>
<style>
  body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    font-family: Arial, sans-serif;
    background-image: url('img/wallpaper.jpg'); /* Ruta a la imagen */
  }

  .grid-container {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    width: 80%;
    height: 80%;
    padding: 20px;
  }

  .grid {
    border: 1px solid #ccc;
    padding: 20px;
    background-color: #f0f0f0;
    border-radius: 10px;
    height: 80%; /* Aumentar la altura */
  }

  .label {
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 5px;
  }

  .textbox {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }

  .button-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 10px;
  }

  .button {
    padding: 10px 20px;
    font-size: 16px;
    background-color: #ff0000;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
  }

  .button:hover {
    background-color: #cc0000;
  }
</style>
</head>
<body>
  <div class="grid-container">
    <div class="grid">
      <h2>Todos los Ingredientes</h2>
      <!-- Lista de ingredientes -->
    </div>
    <div class="grid">
      <h2>Gestión de Ingredientes</h2>
      <div class="label">Nombre:</div>
      <input type="text" class="textbox" placeholder="Nombre del Ingrediente">
      <div class="label">Stock:</div>
      <input type="text" class="textbox" placeholder="Cantidad en Stock">
      <div class="button-grid">
        <button class="button">Modificar Stock por ID</button>
        <button class="button">Borrar Stock</button>
        <button class="button">Borrar Ingrediente</button>
        <button class="button">Modificar Ingrediente</button>
        <button class="button">Agregar Ingrediente</button>
        <button class="button">Obtener Ingrediente</button>
      </div>
    </div>
  </div>
</body>
</html>
