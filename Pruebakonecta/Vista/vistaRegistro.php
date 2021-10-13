<?php
require_once('../Conexion/conexion.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Formulario de Registro</title>
</head>
<body>
  
  <tr>
    <td>
      <table width="570" height="674" border="0" align="center" cellspacing="20" bordercolor="#F0F0F0" id="table_registro">

    <tr>
      <td colspan="2">
        <div align="center" class="Titulo">
          <span><h2>Registro Producto</h2></span>
        </div>
      </td>
    </tr>

    <form id="form1" name="form1" method="post" action="../Controlador/controlador.php">
    <tr>
      <td width="252"><div align="left" ><strong>Nombre del producto</strong></div></td>
      <td width="252"><div align="left" ><strong>Referencia </strong></div></td>
    </tr>

    <tr>
      < <td>
        <label for="label"></label>
      <input name="nombre" type="text" id="nombre" size="42"  placeholder="Digite nombre del producto" required="required"/>
      </td>

      <td>
        <label for="label"></label>
      <input name="referencia" type="text" id="referencia" size="42"  placeholder="Digite referencia del producto" required="required"/>
      </td>
    </tr>

    <tr>
      <td width="252"><div align="left" ><strong>Precio</strong></div></td>
      <td width="252"><div align="left" ><strong>Peso </strong></div></td>
    </tr>

    <tr>
      <td >
      <input name="precio" type="text" id="precio" size="40" placeholder="Digite el precio del producto" required="required"/>
    </td>
    <td>
      <input name="peso" type="text" id="peso" size="40" placeholder="Digite el peso" required="required"/>
      </td>
    </tr>

    <tr>
      <td width="252"><div align="left" ><strong>Categoria</strong></div></td>
      <td width="252"><div align="left" ><strong>Stock </strong></div></td>
    </tr>

     <tr>
      <td >
      <input name="categoria" type="text" id="categoria" size="40" placeholder="Digite categoria" required="required"/>
    </td>
    <td>
      <input name="stock" type="text" id="stock" size="40" placeholder="Digite el stock" required="required"/>
      </td>
    </tr>

    <tr>
      <td width="252"><div align="left" ><strong>Fecha de creación</strong></div></td>
      <td width="252"><div align="left" ><strong>Fecha de última venta</strong></div></td>
    </tr>

    <tr>
      <td>
        <label for="label"></label>
      <input name="fechacre" type="date" id="label2" size="50" required="required" list="fecha" />
      </td>

       <td>
        <label for="label"></label>
      <input name="fechaven" type="date" id="label3" size="50" required="required" list="fecha" />
      </td>
    </tr>
    <tr>
      <td>
        <div align="center">
          <button type="submit" class="btn-btn-success" name="funcion" value="1">Registrar</button>
      </div>
     </td>
    </tr>
  </form>
  </table>
  </td>
  </tr>
</body>
</html>