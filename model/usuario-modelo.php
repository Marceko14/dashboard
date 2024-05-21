<?php
class MostrarUsuario{
    public function nodeloMostrarUsuarios($tabla,$itemm,$valor){
        //condicional si la tabla bviene vacio
        if($item != null){
          $stmt = Conexion::conectar()-> prepare("SELECT * FROM $tabla WHERE $item = :$item");
          $stmt->bindParam(":".$item,$valor,PDO::PARAM_STR);
          $stmt->execute();
          return $stmt->fetch();
    }else{
      $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
      $stmt->execute();
      return $stmt->fetchAll();
    }
    $stmt ->closeCursor();
    $stmt = null;
    }
    static public function modeloRegistrarUsuarios($tabla,$datos){
        $sql = Conexion:: conectar()->prepare("INSERT INTO $tabla(nombre,usuario,password,perfil,foto) VALUES(:nombre,:usuario,:password,:perfil,:foto)");
        $sql ->bindParam(":nombre",$datos["nombre"],PDO::PARAM_STR);
        $sql ->bindParam(":usuario",$datos["usuario"],PDO::PARAM_STR);
        $sql ->bindParam(":password",$datos["password"],PDO::PARAM_STR);
        $sql ->bindParam(":perfil",$datos["perfil"],PDO::PARAM_STR);
        $sql ->bindParam(":foto",$datos["foto"],PDO::PARAM_STR);

        if ($sql->excute()) {
            return "ok";
            # code...
        } else {
            return "error";
        }
        $sql ->closeCursor();
        $sql = null;
        
        
    }
    static public function modeloEditarUsuario($tabla,$datos){
        $sql = Conexion:: conectar()->prepare("UPDATE $tabla SET nombre = :nombre, password = :password, perfil = :perfil");
        $sql ->bindParam(":nombre",$datos["nombre"],PDO::PARAM_STR);
        $sql ->bindParam(":password",$datos["password"],PDO::PARAM_STR);
        $sql ->bindParam(":perfil",$datos["perfil"],PDO::PARAM_STR);

        $sql ->bindParam(":foto",$datos["foto"],PDO::PARAM_STR);
        $sql ->bindParam(":usuario",$datos["usuario"],PDO::PARAM_STR);
        if ($sql->execute()) {
            return "ok";
            # code...
        } else {
            return "error";
        }
        $sql ->closeCursor();
        $sql = null;
        


    }
}
