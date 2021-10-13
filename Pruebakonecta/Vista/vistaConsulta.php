<?php
error_reporting(0);
require_once('../Conexion/conexion.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

 <form method="post" >
        <div align="center"><br>
         <label for="referencia">Referencia:
         </label>

         <div><br>
          <input type="text" name="referencia" id="referencia"  class="form-control has-feedback-left" required="required" placeholder="Digite la referencia">
          
        </div>
	  
    </div>
    <div ><br>
     <div align="center">
      <button id="funcion" name="funcion" class="btn btn-success" value="funcion">Consultar</button> 
      <button id="venta" name="venta" class="btn btn-success" value="venta">Vender Producto</button> 
    </div>
  </div>
</form>
<?php

$referencia="";

if (isset($_POST['funcion']) || isset($_POST['venta'])) {
  $referencia = $_POST['referencia'];
  
}

?>
<br/>

<?php

$con = new Conexion();
$mysql = $con->conectar();
$listarProducto=mysqli_query($mysql,"SELECT NombreProducto, Referencia,Precio,Peso,Categoria,Stock,FechaCreacion,FechaVenta FROM productos WHERE Referencia = '".$referencia."' ORDER BY NombreProducto");  
//var_dump( $listarProducto);


?>


<table class="table" align="center">
 <thead> 
  <tr>
   <th style="text-align: center;">Nombre producto</th>
   <th style="text-align: center;">Referencia</th>
   <th style="text-align: center;">Precio</th>
   <th style="text-align: center;">Peso</th>
   <th style="text-align: center;">Categoria</th>
   <th style="text-align: center;">Stock</th>
   <th style="text-align: center;">Fecha creación</th>
   <th style="text-align: center;">Fecha venta</th>
 </tr>
</thead>
<tbody>
<?php  
foreach ($listarProducto as $row) {
  ?>
    <tr > 
     <td style="text-align: center;"><?php echo $row['NombreProducto']; ?> </td>
     <td style="text-align: center;"><?php echo $row['Referencia']; ?></td> 
     <td style="text-align: center;"><?php echo $row['Precio']; ?></td> 
     <td style="text-align: center;"><?php echo $row['Peso']; ?></td> 
    <td style="text-align: center;"><?php echo $row['Categoria']; ?></td> 
    <td style="text-align: center;"><?php echo $row['Stock']; ?></td> 
    <td style="text-align: center;"><?php echo $row['FechaCreacion']; ?></td> 
    <td style="text-align: center;"><?php echo $row['FechaVenta']; ?></td> 
   </tr>
   <?php
   $stk= $row['Stock'];
   if($stk > 0){
    $stock=mysqli_query($mysql,"UPDATE productos SET Stock = '".$stk."' - 1 WHERE Referencia = '".$referencia."'");
   }else{?>
    <script type="text/javascript">
    alert("El producto no se puede vender porque no tiene productos en stock"); 
    </script>
   <?php
    }
	}
	?>
</tbody>
</table>
</body>
</html>