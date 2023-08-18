<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Menú de Platos</title>
<style>
  body {
    display: grid;
    grid-template-columns: 65% 35%;
    height: 100vh;
    margin: 0;
    font-family: Arial, sans-serif;
    
  }

  .platos-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 10px;
    padding: 20px;
    background-color: #f0f0f0;
    overflow: auto;
  }

  .plato {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 10px;
    
    background-color: #d1d1d1;
    border-radius: 5px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
  }

  .plato button {
    padding: 0;
    background-color: transparent;
    border: none;
    cursor: pointer;
  }

  .plato img {
    width: 100px; /* Tamaño predeterminado para las imágenes */
    height: 100px;
  }
  
  /* Agrega el estilo de selección al hacer clic en el botón de plato */
  .plato button.selected {
    border: 2px solid #ff0000;
  }

  .controles-grid {
    display: grid;
    grid-template-rows: repeat(12, auto);
    gap: 10px;
    padding: 20px;
    background-color: #f0f0f0;
  }

  .control {
    display: flex;
    align-items: center;
    justify-content: space-between;
    font-size: 16px;
  }

  .contador {
    display: flex;
    align-items: center;
  }

  .contador button {
    padding: 5px 10px;
    font-size: 14px;
    background-color: #ff0000;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
  }

  .contador button:hover {
    background-color: #cc0000;
  }

  .contador {
    display: none;
  }

  .siguiente {
    display: flex;
    justify-content: flex-start;
    margin-top: auto;
    padding-left: 20px;
  }

  .siguiente button {
    padding: 10px 20px;
    font-size: 16px;
    background-color: #ff0000;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
  }

  .siguiente button:hover {
    background-color: #cc0000;
  }

 /* Muestra los controles de cantidad inicialmente */
 .contador {
    display: none;
    align-items: center;
  }

  .contador button {
    padding: 5px 10px;
    font-size: 14px;
    background-color: #ff0000;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
  }

  .contador button:hover {
    background-color: #cc0000;
  }

  /* Oculta los checks inicialmente */
  .controles-grid input[type="checkbox"] {
    display: none;
  }

   /* Estilo para los labels de los botones */
   .plato label {
    font-size: 14px;
    margin-top: 5px;
    text-align: center;
  }
  /* Estilo para los precios */
  .plato .precio {
    font-size: 12px;
    color: #555;
    margin-top: 2px;
  }

</style>
</head>
<body>
  <div class="platos-grid">
    <div class="plato">
      <button><img src="img/Arrozchino.jpg" alt="Arroz Chino"></button>
      <label>Arroz Chino</label>
      <span class="precio">120 Lps</span>
    </div>
    <div class="plato">
      <button><img src="img/Arrozblanco.jpg" alt="Arroz Chino Blanco"></button>
      <label>Arroz Chino Blanco</label>
      <span class="precio">125 Lps</span>
    </div>
    <div class="plato">
      <button><img src="img/Takoyaki.jpg" alt="Takoyaki"></button>
      <label>Takoyaki</label>
      <span class="precio">200 Lps</span>
    </div>
    <div class="plato">
      <button><img src="img/Chopsuey.jpg" alt="Chop suey"></button>
      <label>Chop suey"</label>
      <span class="precio">120 Lps</span>
    </div>
    <div class="plato">
      <button><img src="img/WatanFrito.jpg" alt="Wantan Frito"></button>
      <label>Wantan Frito</label>
      <span class="precio">175 Lps</span>
    </div>
    <div class="plato">
      <button><img src="img/WantanalVapor.jpg" alt="Wantan al Vapo"></button>
      <label>Wantan al Vapor</label>
      <span class="precio">175 Lps</span>
    </div>
    <div class="plato">
      <button><img src="img/WantandeYuzu.png" alt="Wantan de Yuzu"></button>
      <label>Wantan de Yuzur</label>
      <span class="precio">190 Lps</span>
    </div>
    <div class="plato">
      <button><img src="img/SopadeWatan.jpg" alt="Sopa de Watan"></button>
      <label>Sopa de Watan</label>
      <span class="precio">180 Lps</span>
    </div>
    <div class="plato">
      <button><img src="img/CostillasAgridulces.jpg" alt="Costillas Agridulces"></button>
      <label>Costillas Agridulces</label>
      <span class="precio">315 Lps</span>
    </div>
    <div class="plato">
      <button><img src="img/Dumpligns.jpg" alt="Dumplings"></button>
      <label>Dumplings</label>
      <span class="precio">200 Lps</span>
    </div>
    <div class="plato">
      <button><img src="img/Ramen.jpg" alt="Ramen"></button>
      <label>Ramen"</label>
      <span class="precio">100 Lps</span>
    </div>
    <div class="plato">
      <button><img src="img/Sopadeoden.jpg" alt="Sopa de Oden"></button>
      <label>Sopa De Odon</label>
      <span class="precio">135 Lps</span>
    </div>
  </div>
  <div class="controles-grid">
    <div class="control">
      <label>Arroz Chino</label>
      <div class="contador">
        <button>-</button>
        <span>0</span>
        <button>+</button>
      </div>
    </div>
    <div class="control">
      <label>Arroz Chino Blanco</label>
      <div class="contador">
       <button>-</button>
        <span>0</span>
        <button>+</button>
      </div>
    </div>
    <div class="control">
      <label>Takoyaki</label>
      <div class="contador">
        <button>-</button>
        <span>0</span>
        <button>+</button>
      </div>
    </div>
    <div class="control">
      <label>Chop suey</label>
      <div class="contador">
        <button>-</button>
        <span>0</span>
        <button>+</button>
      </div>
    </div>
    <div class="control">
      <label>Wantan Frito</label>
      <div class="contador">
        <button>-</button>
        <span>0</span>
        <button>+</button>
      </div>
    </div>
    <div class="control">
      <label>Wantan al Vapor</label>
      <div class="contador">
        <button>-</button>
        <span>0</span>
        <button>+</button>
      </div>
    </div>
    <div class="control">
      <label>Wantan de Yuzu</label>
      <div class="contador">
        <button>-</button>
        <span>0</span>
        <button>+</button>
      </div>
    </div>
    <div class="control">
      <label>Sopa de Watan</label>
      <div class="contador">
        <button>-</button>
        <span>0</span>
        <button>+</button>
      </div>
    </div>
    <div class="control">
      <label>Costillas Agridulces</label>
      <div class="contador">
        <button>-</button>
        <span>0</span>
        <button>+</button>
      </div>
    </div>
    <div class="control">
      <label>Dumplings</label>
      <div class="contador">
        <button>-</button>
        <span>0</span>
        <button>+</button>
      </div>
    </div>
    <div class="control">
      <label>Ramen</label>
      <div class="contador">
        <button>-</button>
        <span>0</span>
        <button>+</button>
      </div>
    </div>
    <div class="control">
      <label>Sopa de Oden</label>
      <div class="contador">
        <button>-</button>
        <span>0</span>
        <button>+</button>
      </div>
    </div>
    <div class="siguiente">
      <button>Siguiente</button>
    </div>
  </div>

    <script>
    // Agrega el comportamiento de selección y actualización de cantidad
    const platosButtons = document.querySelectorAll('.plato button');
    const controles = document.querySelectorAll('.controles-grid .control');

    platosButtons.forEach((button, index) => {
      button.addEventListener('click', () => {
        // Alterna la clase 'selected' al botón clickeado
        button.classList.toggle('selected');

        // Actualiza la visibilidad de los controles de cantidad
        controles[index].querySelector('.contador').style.display = button.classList.contains('selected') ? 'flex' : 'none';
      });
    });

    // Agrega el comportamiento de incremento y decremento de la cantidad
    const contadores = document.querySelectorAll('.controles-grid .control .contador');
    contadores.forEach(contador => {
      const decrementButton = contador.querySelector('button:first-child');
      const incrementButton = contador.querySelector('button:last-child');
      const cantidadSpan = contador.querySelector('span');

      let cantidad = 0;

      decrementButton.addEventListener('click', () => {
        if (cantidad > 0) {
          cantidad--;
          cantidadSpan.textContent = cantidad;
        }
      });

      incrementButton.addEventListener('click', () => {
        cantidad++;
        cantidadSpan.textContent = cantidad;
      });
    });
  </script>


</body>
</html>
