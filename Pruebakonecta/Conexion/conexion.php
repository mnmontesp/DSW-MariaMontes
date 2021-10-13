<?php 
	class Conexion{
		private $data = array(
			'host'=>'localhost',
			'user'=>'root',
			'pw'=>'',
			'db'=>'prueba'
		);
		private $con;

		public function __construct(){
			$this->con = mysqli_connect($this->data['host'],$this->data['user'],$this->data['pw'],$this->data['db']) or die ('problemas al conectar');
			return $this->con;
		}

		public function conectar(){
			return self::__construct();
		}
	}
	$Conexion = new Conexion();
 ?>

