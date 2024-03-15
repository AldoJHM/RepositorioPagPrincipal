//insert
$(document).ready(function() {
    console.log('jQuery está funcionando');
    obtenerProductos();
    // Escuchar el evento de envío del formulario
    $('#InsertProducto').submit(function (e) {
        e.preventDefault(); // Evitar que el formulario se envíe de forma predeterminada
        
        // Obtener todos los valores del formulario
        const noProducto = $('#recipient-noProducto').val();
        const nombreProducto = $('#recipient-nombreProducto').val();
        const precioProducto = $('#recipient-precioProducto').val();
        const unidadesProducto = $('#recipient-unidadesProducto').val();
        const descripcionPro = $('#recipient-descripcionPro').val();
        
        // Crear un objeto con todos los datos del formulario
        const formData = {
            noProducto: noProducto,
            nombreProducto: nombreProducto,
            precioProducto: precioProducto,
            unidadesProducto: unidadesProducto,
            descripcionPro: descripcionPro
        };
        
        // Mostrar los valores en la consola para verificar
        console.log(formData);
        
        // Lógica de AJAX para enviar los datos al servidor
         $.ajax({
             type: 'POST',
             url: 'insertProducts.php', // Especifica la URL del script PHP que procesará los datos
             data: formData, // Envía el objeto formData como datos al servidor
             success: function(response) {
                 obtenerProductos();
                 // Aquí puedes agregar más acciones después de que los datos se envíen correctamente
                 $('#insertForm').trigger('reset'); 
             },
             error: function(response) {
                 // La función error se ejecuta si hay algún error en la solicitud AJAX
                 console.error('Error al enviar datos:', error);
                 // Aquí puedes manejar errores o mostrar un mensaje al usuario
             }
         });
        
    });
 });
 function obtenerProductos() {
  $.ajax({
    url: 'listar.php',
    type: 'GET',
    success: function(response){
        let listProducts = JSON.parse(response);
        let template = '';
        listProducts.forEach(listProduct => {
          template += `
          <tr noProducto="${listProduct.noProducto}">
            <td>${listProduct.noProducto}</td>
            <td>${listProduct.nombreProducto}</td>
            <td>${listProduct.precioProducto}</td>
            <td>${listProduct.unidadesProducto}</td>
            <td>${listProduct.descripcionPro}</td>
            <td><i class="bi bi-pencil-square edit-btn" data-bs-toggle="modal" data-bs-target="#updateProducto" data-bs-whatever="@mdo"></i></td>
            <td><i class="bi bi-trash delete-btn" data-bs-toggle="modal" data-bs-target="#deleteProducto" data-bs-whatever="@mdo"></i></td>
          </tr>
          `
        });
        $('#tablaProductos').html(template);
    }
  })
 }
 
 //update
 
 $(document).ready(function() {
 console.log('jQuery está funcionando');
 
 // Delegar eventos de clic al contenedor de la tabla
 $('#tablaProductos').on('click', '.edit-btn', function() {
     // Obtener los datos de la fila correspondiente
     let row = $(this).closest('tr');
     let noProducto = row.find('td:eq(0)').text();
     let nombreProducto = row.find('td:eq(1)').text();
     let precioProducto = row.find('td:eq(2)').text();
     let unidadesProducto = row.find('td:eq(3)').text();
     let descripcionPro = row.find('td:eq(4)').text();
 
     // Generar el formulario de actualización con los datos obtenidos
     let form = `
         <form name="" method="post" action="updateProducts.php">
             <div class="mb-3">
                 <label for="update-noProducto" class="col-form-label">ID Producto:</label>
                 <input type="text" class="form-control" id="update-noProducto" name="noProducto" value="${noProducto}" readonly>
             </div>
             <div class="mb-3">
                 <label for="update-nombreProducto" class="col-form-label">Nombre Producto:</label>
                 <input type="text" class="form-control" id="update-nombreProducto" name="nombreProducto" value="${nombreProducto}">
             </div>
             <div class="mb-3">
                 <label for="update-precioProducto" class="col-form-label">Precio Producto:</label>
                 <input type="text" class="form-control" id="update-precioProducto" name="precioProducto" value="${precioProducto}">
             </div>
             <div class="mb-3">
                 <label for="update-unidadesProducto" class="col-form-label">Unidades Producto:</label>
                 <input type="text" class="form-control" id="update-unidadesProducto" name="unidadesProducto" value="${unidadesProducto}">
             </div>
             <div class="mb-3">
                 <label for="update-descripcionPro" class="col-form-label">Descripción Producto:</label>
                 <input type="text" class="form-control" id="update-descripcionPro" name="descripcionPro" value="${descripcionPro}">
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                 <button type="submit" class="btn btn-primary">Actualizar</button>
             </div>
         </form>
     `;
 
     // Agregar el formulario al modal y mostrar el modal
     $('#updateProducto .modal-body').html(form);
     $('#updateProducto').modal('show');
 });
 });
 
 //delete
 /*
 $(document).ready(function() {
     console.log('jQuery está funcionando');
 
     // Delegar eventos de clic al contenedor de la tabla
     $('#tablaProductos').on('click', '.delete-btn', function() {
         // Obtener los datos de la fila correspondiente
         let row = $(this).closest('tr');
         let noProducto = row.find('td:eq(0)').text();
         let nombreProducto = row.find('td:eq(1)').text();
         let precioProducto = row.find('td:eq(2)').text();
         let unidadesProducto = row.find('td:eq(3)').text();
         let descripcionPro = row.find('td:eq(4)').text();
 
         // Asignar los valores al formulario de eliminación
         $('#delete-noProducto').val(noProducto);
         $('#delete-nombreProducto').val(nombreProducto);
         $('#delete-precioProducto').val(precioProducto);
         $('#delete-unidadesProducto').val(unidadesProducto);
         $('#delete-descripcionPro').val(descripcionPro);
 
         // Mostrar el modal de eliminación
         $('#deleteProducto').modal('show');
 
     });
 });
 */
$(document).on('click', '.delete-btn', function(){
     let element = $(this)[0].parentElement.parentElement;
     let id = $(element).attr('noProducto');
     console.log(id);
 })