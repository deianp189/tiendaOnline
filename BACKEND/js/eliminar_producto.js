$(document).on('click', '.eliminarProducto', function() {
  var id = $(this).attr('id');
  var boton = $(this);
  $.ajax({
      type: 'POST',
      url: 'eliminar_producto.php',
      data: { id: id },
      success: function(response) {
          if (response.success) {
              boton.closest('tr').remove();
          } else {
              alert('Error al eliminar producto');
          }
      },
      dataType: 'json'
  });
});