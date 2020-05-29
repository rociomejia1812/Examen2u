<?php
		/**
		 * 
		 */
		//include('./Modelo/Class.CrearProducto.php');
		class Producto
		{
			
			function __construct()
			{
				# code...
			}

			public function guardarP()
			{
				$guardarpro=new CrearProducto();
				$smarty=new Smarty();

				$nombre=$_POST['producto'];
				$descripcion=$_POST['descripcion'];
				$precio=$_POST['cantidad'];
				$cantidad=$_POST['precio'];

				$resultado=$guardarpro->GuardarProductos($nombre,$descripcion,$cantidad,$precio);

				if ($resultado)
				{
					echo "Producto agregado";
				}
				else
				{
					echo"Producto no agregado";
				}
			}
		}
?>