<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <title>Tabla de productos</title>
  <nav class="navbar bg-primary" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Maderereía Hernández.</a>
      <div class="d-flex">
        <a class="nav-link me-3" href="#tabla">Tabla</a>
        <a class="nav-link" href="#pie-de-pagina">Pie de Página</a>
      </div>
    </div>
  </nav>
  <script
  src="https://code.jquery.com/jquery-3.7.1.js"
  integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
  crossorigin="anonymous"></script>
  <style>
        /* CSS para el pie de página */
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        footer p {
            margin-bottom: 0; /* Asegura que no haya espacio adicional debajo del párrafo */
        }
    </style>
</head>

<body>
  <div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/Mesa.jpg" class="d-block w-100" style="max-width: 100%; max-height: 300px;" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/martillo2.jpg" class="d-block w-100" style="max-width: 100%; max-height: 300px;" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/cerrucho.jpg" class="d-block w-100" style="max-width: 100%; max-height: 300px;" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <header>
    <nav class="navbar bg-primary" data-bs-theme="dark">
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#InsertProducto"
        data-bs-whatever="@getbootstrap" style="background-color: #72ADF3;">Insertar productos</button>
    </nav>
  </header>

  <section id='tabla123'>

    <table class="table table-striped">
      <thead>
        <tr>
          <th>No Producto</th>
          <th>Nombre de Producto</th>
          <th>Precio Producto</th>
          <th>Unidades Producto</th>
          <th>Descripción Producto</th>
          <th>Actualizar</th>
          <th>Eliminar</th>

        </tr>
      </thead>
      <tbody id= "tablaProductos"></tbody>
    </table>
  </section>

  <div class="modal fade" id="InsertProducto" tabindex="-1" aria-labelledby="InsertProducto" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="InsertProducto">Nuevo Producto</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form name="InsertProducto" id="insertForm" method="post">
            <div class="mb-3"> 
              <label for="recipient-name" class="col-form-label">ID Producto:</label>
              <input type="text" class="form-control" id="recipient-noProducto" name="noProducto">
            </div>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Nombre Producto:</label>
              <input type="text" class="form-control" id="recipient-nombreProducto" name="nombreProducto">
            </div>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Precio Producto:</label>
              <input type="text" class="form-control" id="recipient-precioProducto" name="precioProducto">
            </div>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Unidades Producto:</label>
              <input type="text" class="form-control" id="recipient-unidadesProducto" name="unidadesProducto">
            </div>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Descripción Producto:</label>
              <input type="text" class="form-control" id="recipient-descripcionPro" name="descripcionPro">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Guardar</button>
        </div>
        </form>
      </div>
    </div>
  </div>
 
  <div class="modal fade" id="updateProducto" tabindex="-1" aria-labelledby="updateProducto" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="updateProducto">Actualizacion producto</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
          <div class="modal-body">
            
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="deleteProducto" tabindex="-1" aria-labelledby="deleteProducto" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="deleteProducto">Eliminacion producto</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form name="deleteProducto" method="post">
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Eliminar</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  </div>

  <script src='JavaScript/app.js'></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>
<footer style="background-color: #333; color: #fff; text-align: center; padding: 20px 0;" id='pie-de-pagina'>
  <div style="max-width: 1200px; margin: 0 auto;">
    <p>© 2024 Maderería Hernández. Created By @AldoHernandez Todos los derechos reservados.</p>
  </div>
</footer>
</div>

</html>