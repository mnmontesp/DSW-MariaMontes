<?php

require_once('../Conexion/conexion.php');


/**
 * summary
 */
class Producto
{
    
		public $nombre;
		public $referencia;
		public $precio;
		public $peso;
		public $categoria;
		public $stock;
		public $fechacre;
		public $fechaven;



   public function Producto(){
		$parametros=func_get_args();
		$cantidad=func_num_args();
		$funcionConstructor= '_constructor'.$cantidad;

		if (method_exists($this, $funcionConstructor))
		{
			call_user_func_array(array($this,$funcionConstructor), $parametros);
			
		}
	}



    public function getId(){

    	return $this->referencia;
    }


    public function _constructor1($referencia){
    	$this->referencia=$referencia;
    }


    public function _constructor8($nombre,$referencia,$precio,$peso,$categoria,$stock,$fechacre,$fechaven){

    	echo $this->nombre=$nombre;
    	$this->referencia=$referencia;
    	$this->precio=$precio;
    	$this->peso=$peso;
    	$this->categoria=$categoria;
    	$this->stock=$stock;
    	$this->fechacre=$fechacre;
    	$this->fechaven=$fechaven;
    	
    }


    public function registrarProducto(){
    	$con = new Conexion();
    	$mysql = $con->conectar();

		$insert = mysqli_query($mysql,"INSERT INTO Productos VALUES('$this->$nombre','$this->$referencia','$this->$precio','$this->$peso','$this->$categoria','$this->$stock','$this->$fechacre','$this->$fechaven')");	

    }

      public function modificarProducto(){
    	$con = new Conexion();
    	$mysql = $con->conectar();

    	$insert = mysqli_query($mysql,"UPDATE Productos SET NombreProducto='$this->$nombre',Referencia ='$this->$referencia',Precio='$this->$precio',Peso='$this->$peso',Categoria='$this->$categoria',Stock='$this->$stock',FechaCreacion='$this->$fechacre',FechaVenta='$this->$fechaven'");	

    }

       public function eliminarProducto(){
    	$con = new Conexion();
    	$mysql = $con->conectar();

    	$insert = mysqli_query($mysql,"DELETE FROM Productos WHERE Referencia ='$this->$referencia'");	

    }
}

?>