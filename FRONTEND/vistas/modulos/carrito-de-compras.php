<?php
    
    $url = Ruta::ctrRuta();

 ?>

<!--=====================================
BREADCRUMB CARRITO DE COMPRAS
======================================-->

<div class="container-fluid well well-sm">
  
  <div class="container">
    
    <div class="row">
      
      <ul class="breadcrumb fondoBreadcrumb text-uppercase">
        
        <li><a href="<?php echo $url;  ?>">CARRITO DE COMPRAS</a></li>
        <li class="active pagActiva"><?php echo $rutas[0] ?></li>

      </ul>

    </div>

  </div>

</div>

<!--=====================================
TABLA CARRITO DE COMPRAS
======================================-->

<div class="container-fluid">

  <div class="container">

    <div class="panel panel-default">
      
      <!--=====================================
      CABECERA CARRITO DE COMPRAS
      ======================================-->

      <div class="panel-heading cabeceraCarrito">
        
        <div class="col-md-6 col-sm-7 col-xs-12 text-center">
          
          <h3>
            <small>PRODUCTO</small>
          </h3>

        </div>

        <div class="col-md-2 col-sm-1 col-xs-0 text-center">
          
          <h3>
            <small>PRECIO</small>
          </h3>

        </div>

        <div class="col-sm-2 col-xs-0 text-center">
          
          <h3>
            <small>CANTIDAD</small>
          </h3>

        </div>

        <div class="col-sm-2 col-xs-0 text-center">
          
          <h3>
            <small>SUBTOTAL</small>
          </h3>

        </div>

      </div>

      <!--=====================================
      CUERPO CARRITO DE COMPRAS
      ======================================-->

      <div class="panel-body cuerpoCarrito">

        

      </div>

      <!--=====================================
      SUMA DEL TOTAL DE PRODUCTOS
      ======================================-->

      <div class="panel-body sumaCarrito">

        <div class="col-md-4 col-sm-6 col-xs-12 pull-right well">
          
          <div class="col-xs-6">
            
            <h4>TOTAL:</h4>

          </div>

          <div class="col-xs-6">

            <h4 class="sumaSubTotal">
              
              

            </h4>

          </div> 

        </div>

      </div>

      <!--=====================================
      BOTÓN CHECKOUT
      ======================================-->

      <div class="panel-heading cabeceraCheckout">

      <?php

        if(isset($_SESSION["validarSesion"])){

          if($_SESSION["validarSesion"] == "ok"){

            echo '<a id="btnCheckout" href="#modalCheckout" data-toggle="modal" idUsuario="'.$_SESSION["id"].'"><button class="btn btn-default backColor btn-lg pull-right">REALIZAR PAGO</button></a>';

          }


        }else{

          echo '<a href="#modalIngreso" data-toggle="modal"><button class="btn btn-default backColor btn-lg pull-right">REALIZAR PAGO</button></a>';
        }

      ?>  

      </div>

    </div>

  </div>

</div>

<!--=====================================
VENTANA MODAL PARA CHECKOUT
======================================-->

<div id="modalCheckout" class="modal fade modalFormulario" role="dialog">
  
   <div class="modal-content modal-dialog">
    
    <div class="modal-body modalTitulo">
      
      <h3 class="backColor">REALIZAR PAGO</h3>

      <button type="button" class="close" data-dismiss="modal">&times;</button>

      <div class="contenidoCheckout">
        
        <div>
          
          <h4 class="text-center well text-muted text-uppercase">Información de envío</h4>

          <div class="col-xs-12">
            
          <div class="form-group">
          
            <div class="input-group">
              
              <span class="input-group-addon">
                
                Dirección
              
              </span>

              <input type="text" class="form-control" placeholder="Calle, Portal, Puerta" required>

            </div>

          </div>

          <div class="form-group">
          
          <div class="input-group">
            
            <span class="input-group-addon">
              
              Provincia
            
            </span>


            <select required name="provincia" class="form-control">
              <option value="">Elige Provincia</option>
              <option value="Álava/Araba">Álava/Araba</option>
              <option value="Albacete">Albacete</option>
              <option value="Alicante">Alicante</option>
              <option value="Almería">Almería</option>
              <option value="Asturias">Asturias</option>
              <option value="Ávila">Ávila</option>
              <option value="Badajoz">Badajoz</option>
              <option value="Baleares">Baleares</option>
              <option value="Barcelona">Barcelona</option>
              <option value="Burgos">Burgos</option>
              <option value="Cáceres">Cáceres</option>
              <option value="Cádiz">Cádiz</option>
              <option value="Cantabria">Cantabria</option>
              <option value="Castellón">Castellón</option>
              <option value="Ceuta">Ceuta</option>
              <option value="Ciudad Real">Ciudad Real</option>
              <option value="Córdoba">Córdoba</option>
              <option value="Cuenca">Cuenca</option>
              <option value="Gerona/Girona">Gerona/Girona</option>
              <option value="Granada">Granada</option>
              <option value="Guadalajara">Guadalajara</option>
              <option value="Guipúzcoa/Gipuzkoa">Guipúzcoa/Gipuzkoa</option>
              <option value="Huelva">Huelva</option>
              <option value="Huesca">Huesca</option>
              <option value="Jaén">Jaén</option>
              <option value="La Coruña/A Coruña">La Coruña/A Coruña</option>
              <option value="La Rioja">La Rioja</option>
              <option value="Las Palmas">Las Palmas</option>
              <option value="León">León</option>
              <option value="Lérida/Lleida">Lérida/Lleida</option>
              <option value="Lugo">Lugo</option>
              <option value="Madrid">Madrid</option>
              <option value="Málaga">Málaga</option>
              <option value="Melilla">Melilla</option>
              <option value="Murcia">Murcia</option>
              <option value="Navarra">Navarra</option>
              <option value="Orense/Ourense">Orense/Ourense</option>
              <option value="Palencia">Palencia</option>
              <option value="Pontevedra">Pontevedra</option>
              <option value="Salamanca">Salamanca</option>
              <option value="Segovia">Segovia</option>
              <option value="Sevilla">Sevilla</option>
              <option value="Soria">Soria</option>
              <option value="Tarragona">Tarragona</option>
              <option value="Tenerife">Tenerife</option>
              <option value="Teruel">Teruel</option>
              <option value="Toledo">Toledo</option>
              <option value="Valencia">Valencia</option>
              <option value="Valladolid">Valladolid</option>
              <option value="Vizcaya/Bizkaia">Vizcaya/Bizkaia</option>
              <option value="Zamora">Zamora</option>
              <option value="Zaragoza">Zaragoza</option>
            </select> 

          </div>
        </div>
        
        <div class="form-group">
          <div class="input-group">
              
              <span class="input-group-addon">
                
                C. Postal
              
              </span>

              <input type="text" class="form-control" required> 

            </div>
          </div>

          <div class="form-group">
            <div class="input-group">
                
                <span class="input-group-addon">
                  
                  Télefono
                
                </span>

                <input type="number" class="form-control" placeholder="Opcional"> 

              </div>
          </div>

            

          </div>

        </div>

        <div class="listaProductos row">
          
          <h4 class="text-center well text-muted text-uppercase">Resumen de Compra</h4>

          <table class="table table-striped tablaProductos">
            
             <thead>
              
              <tr>    
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Precio</th>
              </tr>

             </thead>

             <tbody>
              
             </tbody>

          </table>

          <div class="col-sm-6 col-xs-12 pull-right">
            
            <table class="table table-striped tablaTasas">
              
              <tbody>
                
                <tr>
                  <td>Subtotal</td> 
                  <td><span class="cambioDivisa"></span> <span class="valorSubtotal" valor="0">0</span> €</td>  
                </tr>

                <tr>
                  <td>Envío</td>  
                  <td><span class="cambioDivisa"></span><span class="valorTotalEnvio" valor="0">0</span> €</td> 
                </tr>

                <tr>
                  <td>Impuesto</td> 
                  <td><span class="cambioDivisa"></span><span class="valorTotalImpuesto" valor="0">0</span> €</td>  
                </tr>

                <tr>
                  <td><strong>Total</strong></td> 
                  <td><strong><span class="cambioDivisa"></span><span class="valorTotalCompra" valor="0">0</span> €</strong></td> 
                </tr>

              </tbody>  

            </table>

          </div>

          <div class="clearfix"></div>

          <div id="smart-button-container">
            <div style="text-align: center;">
              <div id="paypal-button-container"></div>
              
            </div>
            </div>
          
          <script src="https://www.paypal.com/sdk/js?client-id=sb&enable-funding=venmo&currency=EUR" data-sdk-integration-source="button-factory"></script>
          <script>
            function initPayPalButton() {
            paypal.Buttons({
              style: {
              shape: 'rect',
              color: 'blue',
              layout: 'horizontal',
              label: 'paypal',
              
              },

              createOrder: function(data, actions) {
              var total = $(".valorTotalCompra").html();
              <?php echo $total; ?>
              echo:
              return actions.order.create({
                purchase_units: [{"amount":{
                  "currency_code":"EUR","value":total
                }}]
              });
              },

              onApprove: function(data, actions) {
              return actions.order.capture().then(function(orderData) {
                
                // Full available details
                console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

                // Show a success message within this page, e.g.
                const element = document.getElementById('paypal-button-container');
                element.innerHTML = '';
                element.innerHTML = '<h3>Thank you for your payment!</h3>';

                // Or go to another URL:  actions.redirect('thank_you.html');
                
              });
              },

              onError: function(err) {
              console.log(err);
              }
            }).render('#paypal-button-container');
            }
            initPayPalButton();
          </script>

        </div>

      </div>

    </div>

    <div class="modal-footer">
        
        </div>

  </div>

</div>
