<?php 

class ControladorUsuarios{
    //método para inicio de sesion "login"
    static public function controladorIngresoUsuario(){
        if (isset($_POST["nuevoUsuario"])) {
            if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingUsuario"]) &&
			   preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingPassword"])){

			   	
                $encriptar = crypt($_POST["ingPassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
                //LLAMAMOS A LA VARIABLE
                $tabla = "usuarios";
                $item = "usuario";
                $valor = $_POST["ingUsuario"];
                //INSTANCIAR 
                $respuesta = new ModeloUsuarios:: ModeloMostrarUsuarios($tabla,$item,$valor);
                
                
            
            
            }

            # code...
        } 
        

        

    }

}