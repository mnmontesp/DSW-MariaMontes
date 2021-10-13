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

 <form method="post" action="../Controlador/controlador.php">
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
      <button type="submit" name="funcion" class="btn btn-success" value="3">Eliminar</button> 
    </div>
  </div>
</form>
<?php

$referencia="";

if (isset($_POST['funcion']) ) {
  $referencia = $_POST['referencia'];
  
}



?>
<br/>

<?php

$con = new Conexion();
$mysql = $con->conectar();
$listarProducto=mysqli_query($mysql,"SELECT NombreProducto, Referencia,Precio,Peso,Categoria,Stock,FechaCreacion,FechaVenta FROM productos ORDER BY NombreProducto");  
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
	}
	?>
</tbody>
</table>
</body>
</html>