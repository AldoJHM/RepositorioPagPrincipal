<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <title>Tabla de productos</title>
</head>

<body>
<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/Mesa.jpg" class="d-block w-100" style="max-width: 1950px; max-height: 500px; width: auto; height: auto;" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/martillo2.jpg" class="d-block w-100" style="max-width: 1950px; max-height: 500px; width: auto; height: auto;" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/cerrucho.jpg" class="d-block w-100" style="max-width: 1950px; max-height: 500px; width: auto; height: auto;" alt="...">
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

  <div class="container-fluid">
    <header>
      MI PRIMER CRUD
    </header>

    <section>
      <div class="alinear">
      </div>
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#InsertProducto"
        data-bs-whatever="@getbootstrap">Insertar productos</button>

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
        <?php
                include ("conexion.php");
                $query = "SELECT * FROM productos";
                $result = mysqli_query($conection, $query);
              
                while($row = mysqli_fetch_array($result))
                {
                  echo ' 
                    <tr>
                    <td> ' . $row["noProducto"] . '</td>
                    <td> ' . $row["nombreProducto"] . '</td>
                    <td> ' . $row["precioProducto"] . '</td>
                    <td> ' . $row["unidadesProducto"] . '</td>
                    <td> ' . $row["descripcionPro"] . '</td>
                    <td><i class="bi bi-pencil-square edit-btn" data-bs-toggle="modal" data-bs-target="#updateProducto" data-bs-whatever="@mdo" </i></td>
                    <td><i class="bi bi-trash delete-btn" data-bs-toggle="modal" data-bs-target="#deleteProducto" data-bs-whatever="@mdo"></i> </td>
                    </tr>
                 ';           
                }            
                ?>
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
            <form name="" method="post" action="insertProducts.php">
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">ID Producto:</label>
                <input type="text" class="form-control" id="recipient-name" name="noProducto">
              </div>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Nombre Producto:</label>
                <input type="text" class="form-control" id="recipient-name" name="nombreProducto">
              </div>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Precio Producto:</label>
                <input type="text" class="form-control" id="recipient-name" name="precioProducto">
              </div>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Unidades Producto:</label>
                <input type="text" class="form-control" id="recipient-name" name="unidadesProducto">
              </div>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Descripción Producto:</label>
                <input type="text" class="form-control" id="recipient-name" name="descripcionPro">
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
          </form>
        </div>
      </div>
    </div>

    <script>
   const InsertProducto = document.getElementById('InsertProducto')
      if (InsertProducto) {
        exampleModal.addEventListener('show.bs.modal', event => {
          const button = event.relatedTarget
          const recipient = button.getAttribute('data-bs-whatever')
          const modalTitle = exampleModal.querySelector('.modal-title')
          const modalBodyInput = exampleModal.querySelector('.modal-body input')

          modalTitle.textContent = New message to ${ recipient }
          modalBodyInput.value = recipient
        })
      }
    </script>

    <div class="modal fade" id="updateProducto" tabindex="-1" aria-labelledby="updateProducto" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="updateProducto">Actualizacion producto</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form name="" method="post" action="updateProducts.php">
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">ID Producto:</label>
                <input type="text" class="form-control" id="update-noProducto" name="noProducto">
              </div>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Nombre Producto:</label>
                <input type="text" class="form-control" id="update-nombreProducto" name="nombreProducto">
              </div>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Precio Producto:</label>
                <input type="text" class="form-control" id="update-precioProducto" name="precioProducto">
              </div>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Unidades Producto:</label>
                <input type="text" class="form-control" id="update-unidadesProducto" name="unidadesProducto">
              </div>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Descripción Producto:</label>
                <input type="text" class="form-control" id="update-descripcionPro" name="descripcionPro">
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Actualizar</button>
          </div>
          </form>
        </div>
      </div>
    </div>

    <script>
      const editButtons = document.querySelectorAll('.edit-btn');
      const updateProductosModal = document.getElementById('updateProductosModal');

      const numeroProductoInput = document.getElementById('update-noProducto');
      const nombreProductoInput = document.getElementById('update-nombreProducto');
      const precioProductoInput = document.getElementById('update-precioProducto');
      const unidadesProductoInput = document.getElementById('update-unidadesProducto');
      const descripcionProductoInput = document.getElementById('update-descripcionPro');

      editButtons.forEach(button => {
        button.addEventListener('click', event => {
          const fila = event.currentTarget.closest('tr');

          const numeroProducto = fila.children[0].textContent;
          const nombreProducto = fila.children[1].textContent;
          const precioProducto = fila.children[2].textContent;
          const unidadesProducto = fila.children[3].textContent;
          const descripcionPro = fila.children[4].textContent;

          numeroProductoInput.value = numeroProducto;
          nombreProductoInput.value = nombreProducto;
          precioProductoInput.value = precioProducto;
          unidadesProductoInput.value = unidadesProducto;
          descripcionProductoInput.value = descripcionPro;

          updateProductosModal.show();

        });
      });

    </script>

<div class="modal fade" id="deleteProducto" tabindex="-1" aria-labelledby="deleteProducto" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="deleteProducto">Eliminacion producto</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form name="" method="post" action="deleteProducts.php">
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">ID Producto:</label>
                <input type="text" class="form-control" id="delete-noProducto" name="noProducto" readonly>
              </div>
              <div><h5>Datos del Producto a eliminar</h5></div>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Nombre Producto:</label>
                <input type="text" class="form-control" id="delete-nombreProducto" name="nombreProducto" readonly>
              </div>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Precio Producto:</label>
                <input type="text" class="form-control" id="delete-precioProducto" name="precioProducto" readonly>
              </div>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Unidades Producto:</label>
                <input type="text" class="form-control" id="delete-unidadesProducto" name="unidadesProducto" readonly>
              </div>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Descripción Producto:</label>
                <input type="text" class="form-control" id="delete-descripcionPro" name="descripcionPro" readonly>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Eliminar</button>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>

    <script>

      const deleteButtons = document.querySelectorAll('.delete-btn');
      const deleteProductoModal = document.getElementById('deleteProducto');

      deleteButtons.forEach(button => {
        button.addEventListener('click', event => {
          const fila = event.currentTarget.closest('tr');

          const numeroProducto = fila.children[0].textContent;
          const nombreProducto = fila.children[1].textContent;
          const precioProducto = fila.children[2].textContent;
          const unidadesProducto = fila.children[3].textContent;
          const descripcionPro = fila.children[4].textContent;

          // Asignar los valores al formulario de eliminación
          document.getElementById('delete-noProducto').value = numeroProducto;
          document.getElementById('delete-nombreProducto').value = nombreProducto;
          document.getElementById('delete-precioProducto').value = precioProducto;
          document.getElementById('delete-unidadesProducto').value = unidadesProducto;
          document.getElementById('delete-descripcionPro').value = descripcionPro;

          // Mostrar el modal de eliminación
          deleteProductoModal.show();
        });
      });
    </script>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</body>
</div>

</html>