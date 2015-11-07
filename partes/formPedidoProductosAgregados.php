<?php 
    
    require_once("clases/accesoDatos.php");
    require_once("clases/producto.php");
    require_once("clases/pedido.php");
    require_once("clases/pedidoProducto.php");

    $idPedido = $_SESSION['idPedido'];        

    $arrayDePedidoProductos=pedidoProducto::traerTodos($idPedido);      

?>

<div id="formPedidos" class="container">
    
    <input type="hidden" id="idPedido">

     <h3>Productos Agregados al Pedido</h3>   

    <table class="table table-hover" >    
        <thead>
            <tr>                        
                <th>Nombre</th><th>Precio</th><th>Cantidad</th><th>Borrar</th>
            </tr>
        </thead>
        <tbody>

            <?php             

            foreach ($arrayDePedidoProductos as $pedProd) 
            {                
                echo
                "<tr>           
                        <td>$pedProd[2]</td>
                        <td>$pedProd[3]</td>                        
                        <td>$pedProd[1]</td>                    
                        
                        <td><a onclick='BorrarPedidoProd()' class='btn btn-danger'>&nbsp; <span class='glyphicon glyphicon-remove-sign'>&nbsp;</span></a></td>                    
                    </tr>";
            }
             ?>

        </tbody>
    
</table>


     <button class="btn btn-lg btn-primary btn-block" type="button" onclick="verPedido(<?php echo isset($pedProd) ? $pedProd[0]: '';?>)">Finalizar</button>

</div>
