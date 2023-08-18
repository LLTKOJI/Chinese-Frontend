<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Órdenes Listas</title>
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
    display: grid;
    grid-template-columns: 40% 40%;
    grid-gap: 20px;
    width: 80%;
    height: 80%;
  }

  .grid {
    border: 1px solid #ccc;
    padding: 20px;
    background-color: #f0f0f0;
    border-radius: 10px;
  }

  .grid h2 {
    margin-bottom: 10px;
    font-size: 20px;
  }

  .grid ul {
    list-style: none;
    padding: 0;
  }

  .grid li {
    margin-bottom: 10px;
    font-size: 16px;
  }
</style>
</head>
<body>
  <div class="grid-container">
    <div class="grid">
      <h2>Órdenes Listas que se pueden Entregar a Mesa</h2>
      <ul>
        <li>Orden #1</li>
        <li>Orden #2</li>
        <li>Orden #3</li>
        <!-- Agrega más órdenes aquí -->
      </ul>
    </div>
    <div class="grid">
      <h2>Órdenes que se pueden Cancelar</h2>
      <ul>
        <li>Orden #4</li>
        <li>Orden #5</li>
        <li>Orden #6</li>
        <!-- Agrega más órdenes aquí -->
      </ul>
    </div>
  </div>
</body>
</html>
