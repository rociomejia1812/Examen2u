<<?php  

             class Mostrar
			{
				
				
				public function CargarOp()
					{
						

						$smarty=new Smarty();
						$mostrarPro=new MostrarP();
						$lib=new Librerias();

				

						$resultado=$mostrarPro->MProductos();
						$dato=$lib->DatosSmarty($resultado);
						session_start();
						$_SESSION['op']=$_GET['op'];

						$smarty->assign('dato',$dato);

						$smarty->assign('e','null');
						$smarty->assign('vista',$_SESSION['op']);
						$smarty->assign('usuario',$_SESSION['user']);
						$smarty->assign('tipo',$_SESSION['tipo']);
						$smarty->display('Listado.tpl'); 
					}
			}

?>