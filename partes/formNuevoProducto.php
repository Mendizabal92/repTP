
<div id="formPedidos" class="container">




    <form  class="form-pedidos " onsubmit="insertarProductos(); return false">
        <h2 class="form-pedidos-heading">Nuevo producto</h2>
        <br>



        <label for="nombre" class="sr-only">Nombre</label>
                <input type="text" id="nombreProd" class="form-control" placeholder="Nombre Producto" required="" autofocus="" value="">
                <br>


        <label for="nombre" class="sr-only">Precio</label>
                <input type="text" id="precioProd" class="form-control" placeholder="Precio Producto" required="" autofocus="" value=""> 
                <br>
                
                <input type="hidden" id="idProd">


        <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar Producto</button>

       </form>


             

 
  </div>