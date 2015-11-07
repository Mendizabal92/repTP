
<div id="formPedidos" class="container">

    <form  class="form-pedidos " onsubmit="insertarPedido(); return false">
        <h2 class="form-pedidos-heading">Nuevo pedido</h2>
        <br>

        

        <label for="nombre" class="sr-only">Fecha de Entrega</label>        
                <input type="date" id="fechaEntrega" class="form-control" placeholder="Fecha de Entrega" required="" autofocus="" value="">
                <br>

        <div class="form-group">
              <label class="control-label" for="rbTipo">Tipo</label>
              <div class=""> 
                <label class="radio-inline" for="envio">
                  <input type="radio" name="rbEnvio" id="entrega" checked="checked">Envio
                </label>
                <label class="radio-inline" for="retiro">
                  <input type="radio" name="rbenvio" id="retiro">Retiro
                </label>
              </div>
            </div>


        <br>
        

        <h4 class="form-pedidos-heading">Datos de Entrega</h4>
        

        <div class="form-group">
              <label class="control-label" for="txtProvincia">Provincia</label>  
              <div class="">
                  <select id="provPedido" name="txtProvincia" class="form-control">
                    <option value="Buenos Aires">Buenos Aires</option>
                    <option value="CABA">CABA</option>
                  </select>                
              </div>
        </div>      

        <div class="form-group">
              <label class="control-label" for="txtLocalidad">Localidad</label>  
              <div class="">
                  <select id="locPedido" name="txtLocalidad" class="form-control">
                    <option value="Avellaneda">Avellaneda</option>
                    <option value="Munro">Munro</option>                    
                  </select>                
              </div>
        </div>            
      
        <label for="nombre" class="control-label">Direccion</label>
        <input type="text" id="domicPedido" class="form-control" placeholder="Direccion" required="" autofocus="" value=""> 
        <br>


        <input type="hidden" id="idPedido">
        
        <br>
        

        <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar Pedido</button>

       </form>


             

 
  </div>