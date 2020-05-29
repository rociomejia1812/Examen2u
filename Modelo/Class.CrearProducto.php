<?php
	/**
	 * 
	 */
	class CrearProducto
	{
		
		function __construct()
		{
			# code...
		}
	

		public function GuardarProductos ($nombre,$descripcion,$cantidad,$precio)
		{
			
			$inventario=new Conexion();
			$query="INSERT INTO inventario(Producto,Descripción,Cantidad,Precio) VALUES ('$nombre','$descripcion','$cantidad','$precio')";

			$consulta=$inventario->query($query);
			$inventario->close();
			return $consulta;

		}
	}
?>