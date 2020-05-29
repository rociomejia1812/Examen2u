<?php
	
	class MostrarP
	{
		
	public function MProductos ()
	{
		$con=new Conexion();
		$query="SELECT * FROM `inventario` WHERE 1";
		$consulta=$con->query($query);
		$con->close();
		return $consulta;
	}
	}
?>