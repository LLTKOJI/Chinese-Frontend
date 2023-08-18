<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Estado de Mesas</title>
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
    background-image: url('img/wallpaper.jpg'); /* Ruta a la imagen */
  }

  .categorias {
    display: flex;
    justify-content: space-around;
  }

  .categoria {
    text-align: center;
    margin: 20px;
  }

  .titulo {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 10px;
  }

  .mesas {
    display: flex;
    justify-content: center;
  }

  .mesa {
    width: 80px;
    height: 60px;
    background-color: #ccc;
    border-radius: 10px;
    margin: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 14px;
    color: white;
    font-weight: bold;
  }

  .mesa-disponible {
    background-color: #4caf50;
  }

  .mesa-ocupada {
    background-color: #f44336;
  }

  .mesa-danada {
    background-color: #ff9800;
  }

  .regresar-button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #ff0000;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s;
    text-decoration: none;
  }

  .regresar-button:hover {
    background-color: #cc0000;
  }
</style>
</head>
<body>
  <div class="categorias">
    <div class="categoria">
      <div class="titulo">Mesas Disponibles</div>
      <div class="mesas">
        <div class="mesa mesa-disponible">Mesa 1</div>
        <div class="mesa mesa-disponible">Mesa 2</div>
        <div class="mesa mesa-disponible">Mesa 3</div>
      </div>
    </div>
    <div class="categoria">
      <div class="titulo">Mesas Ocupadas</div>
      <div class="mesas">
        <div class="mesa mesa-ocupada">Mesa 4</div>
        <div class="mesa mesa-ocupada">Mesa 5</div>
        <div class="mesa mesa-ocupada">Mesa 6</div>
      </div>
    </div>
    <div class="categoria">
      <div class="titulo">Mesas Dañadas</div>
      <div class="mesas">
        <div class="mesa mesa-danada">Mesa 7</div>
        <div class="mesa mesa-danada">Mesa 8</div>
        <div class="mesa mesa-danada">Mesa 9</div>
      </div>
    </div>
  </div>
  <a href="MoD" class="regresar-button">Regresar</a>

</body>
</html>
