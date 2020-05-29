<?php
	class Usuario
    {
	   public function RegistroU()
       {
            $smarty=new Smarty();
			$user=new Usuarios();
			$lib=new Librerias();
            
            
            $nombre=$_POST['usuario'];
			$pass=$_POST['pass'];
			

			$dato=$user->BuscarUsuario($nombre, $pass);
			$d=$lib->DatosRow($dato);
		

			if($dato->num_rows==1)
			{
				$smarty->display('Menu.tpl');
			}
			else 
			{
				$smarty->display('RegistroU.tpl');
			}
       }
    }
?>