<?php 

    require_once("clases/accesoDatos.php");
    require_once("clases/producto.php");
    require_once("clases/pedido.php");

    $arrayDeProductos=producto::traerTodos();
    
?>

<div id="formPedidos" class="container">
    <input type="text" id="idPedido">
    <h3>Agregar Productos al Pedido</h3>
<table class="table table-hover" >    
    <thead>
        <tr>                        
            <th>Nombre</th><th>Precio</th><th>Cantidad</th><th>Agregar</th>
        </tr>
    </thead>
    <tbody>

        <?php 

        

        foreach ($arrayDeProductos as $prod) 
        {
            $cant=$prod->idProducto;
            echo
            "
            <tr>           
                    <td>$prod->nombreProd</td>
                    <td>$prod->precioProd</td>                    
                    <td><input type='text' size='3' id='$cant'>                                        
                    <td><a onclick='AgregarProd($prod->idProducto)' class='btn btn-warning'>&nbsp; <span class='glyphicon glyphicon-plus-sign'>&nbsp;</span></a></td>                    
                </tr>";
        }
         ?>

    </tbody>
    
</table>


</div>
