<?php 

class ControladorUsuarios{
    //método para inicio de sesion "login"
    static public function controladorIngresoUsuario(){

        if (isset($_POST["nuevoUsuario"])) {
            if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingUsuario"]) &&
			   preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingPassword"])){

			   	$encriptar = crypt($_POST["ingPassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

                //llamamos a la variable que contiene el nombre de la tabla de la base de datos
                //eso esta en el modelo
                $tabla = "usuarios";
                $item = "usuarios";
                $valor = $_POST["ingUsuario"];
                
                //instanciamos
                $respuesta = ModeloUsuarios::modeloMostrarUsuarios($tabla,$item,$valor);
            }
        }

    }

}