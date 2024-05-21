<?php 
//llamar o invocar a la conexion a base de datos
require_once "conexion.php";
class ModeloCategorias{

    //método para guardar
    public static function modeloIngresarCategoria($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (categoria) VALUES(:categoria)");

        $stmt->bindParam(":categoria",$datos,PDO::PARAM_STR);

        if($stmt->execute()){
            return "ok";
        }else{
            return "error";
        }
        $stmt->closeCursor();
        $stmt = null;

    }

    //método mostrar categorias
    public static function modeloMostrarCategoria($tabla, $item, $valor){



    }

    //método para editar categorias
    public static function modeloEditarCategoria($tabla, $datos){



    }

    //método para borrar categoria
    public static function modeloBorrarCategoria($tabla, $datos){



    }


}