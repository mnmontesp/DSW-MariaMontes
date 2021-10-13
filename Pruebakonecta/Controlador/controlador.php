<?php

require_once('../Conexion/conexion.php');
require('../Modelo/modelo.php');

class controladorProducto {


	private $obj;

	public function registrar(){

		$obj = new Producto(

			$_REQUEST['nombre'],
			$_REQUEST['referencia'],
			$_REQUEST['precio'],
			$_REQUEST['peso'],
			$_REQUEST['categoria'],
			$_REQUEST['stock'],
			$_REQUEST['fechacre'],
			$_REQUEST['fechaven']

		);
		var_dump($obj);
		$obj->registrarProducto();
		echo 'Producto registrado';
	
	}

	public function modificar(){

		$obj = new Producto(
			$_REQUEST["nombre"],
			$_REQUEST["referencia"],
			$_REQUEST["precio"],
			$_REQUEST["peso"],
			$_REQUEST["categoria"],
			$_REQUEST["stock"],
			$_REQUEST["fechacre"],
			$_REQUEST["fechaven"]

		);
		var_dump($obj);
		$obj->modificarProducto();
		echo 'Producto registrado';
	
	}

	public function eliminar(){

		$obj = new Producto(
			$_REQUEST["referencia"]

		);
		var_dump($obj);
		$obj->eliminarProducto();
		echo 'Producto registrado';
	
	}

}
	$controlador = new controladorProducto;

	if (isset($_REQUEST['funcion']) && ($_REQUEST['funcion'])==1) {
		
		$funcion = 'registrar';
		header('location:');
	}
	

	if (isset($_REQUEST['funcion']) && ($_REQUEST['funcion'])==2) {
		
		$funcion = 'modificar';
		header('location:');
	}
	

	if (isset($_REQUEST['funcion']) && ($_REQUEST['funcion'])==3) {
		
		$funcion = 'eliminar';
		header('location:');
	}
	

	if (method_exists($controlador, $funcion)) {
		
		call_user_func(array($controlador,$funcion));  
}

?>