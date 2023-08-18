<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Detalles de Orden</title>
<style>
  body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background-image: url('img/wallpaper.jpg'); /* Ruta a la imagen */
  }

  .detalle-container {
  display: grid;
  grid-template-columns: 45% 20% 20% 15%;
  grid-template-rows: 45% 20% 20% 15%;
  width: 100vw;
  height: 100vh;
  justify-content: center;
  align-items: center;
}

  .orden-lista,
  .estado,
  .mesero,
  .acciones {
    background-color: #f0f0f0;
    padding: 20px;
    box-sizing: border-box;
  }

  .orden-lista h3,
  .estado h3,
  .mesero h3 {
    margin: 0;
    font-size: 18px;
    font-weight: bold;
  }

  .orden-lista ul {
    list-style-type: none;
    padding: 0;
    margin-top: 10px;
  }

  .orden-lista li {
    font-size: 16px;
  }

  .acciones button {
    margin-top: 10px;
    padding: 10px 20px;
    background-color: #ff0000;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
  }

  .acciones button:hover {
    background-color: #cc0000;
  }
</style>
</head>
<body>
  <div class="detalle-container">
    <div class="orden-lista">
      <h3>Orden #1</h3>
      <ul>
        <li>Wantan Frito</li>
        <li>Takoyami</li>
        <li>Ramen</li>
      </ul>
    </div>
    <div class="estado">
      <h3>Estado</h3>
      <p>Recibido</p>
    </div>
    <div class="mesero">
      <h3>Mesero Asignado</h3>
      <p>Manuel Angel</p>
    </div>
    <div class="acciones">
      <button>Actualizar Estado</button>
      <button>Cancelar Pedido</button>
    </div>
  </div>
</body>
</html>
