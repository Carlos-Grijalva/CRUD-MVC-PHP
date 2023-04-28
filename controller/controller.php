<?php
include "./model/db.php";

//El metodo GET se usa solamente para que el navegador retorne algo cuando detecte una nueva conexion
//El metodo POST se usa cuando el usuario envia datos al servidor

class Controller {

    public static function main($request, $post) {
        if ($request == 'GET') {
            $query = "SELECT * FROM personas";
            $con = Model::conect();
            $resultado = $con->query($query);
            $con = null;
            require_once "./view/listar.php";
        } else if ($request == 'POST') {
            //Si detecta un POST de la barra de busqueda
            $nombre = $post['nombre'];
            $query = "SELECT * FROM personas WHERE nombre LIKE '%$nombre%' OR id LIKE '$nombre' OR apellidoP LIKE '%$nombre%' OR apellidoM LIKE '%$nombre%' OR tel LIKE '%$nombre%'";
            $con = Model::conect();
            $resultado = $con->query($query);
            $con = null;
            require_once "./view/listar.php";
        }
    }

    public static function editarMenu($request, $post) {
        if ($request == 'POST') {
            $id = $post['id'];
            $query = "SELECT * FROM personas WHERE id=$id";
            $con = Model::conect();
            $resultado = $con->prepare($query);
            $resultado->execute();
            $lista = $resultado->fetch(PDO::FETCH_ASSOC);
            $con = null;
            require_once "./view/editar.php";
        } else {
            require_once "./view/editar.php";
        }
    }

    public static function editar($request, $post) {
        if ($request == 'POST') {
            $id = $post['id'];
            $nombre = $post['nombre'];
            $apellido1 = $post['apellido1'];
            $apellido2 = $post['apellido2'];
            $tel = $post['tel'];
            $query = "UPDATE personas set nombre='$nombre', apellidoP='$apellido1', apellidoM='$apellido2', tel='$tel' WHERE id=$id";
            $con = Model::conect();
            $resultado = $con->query($query);
            $con = null;
            header('Location: /speedrun/');
        }
    }

    public static function registrar($request, $post) {
        if ($request == 'GET') {
            require_once "./view/registro.php";
        } else if ($request == 'POST') {
            $id = $post['id'];
            $nombre = $post['nombre'];
            $apellidoP = $post['apellido1'];
            $apellidoM = $post['apellido2'];
            $tel = $post['tel'];
            $query = "INSERT INTO personas values (".$id.", '".$nombre."', '".$apellidoP."', '".$apellidoM."', '".$tel."')";
            $con = Model::conect();
            $con->query($query);
            $con = null;
            header('Location: /speedrun/');
        }
    }

    public static function eliminar($request, $post) {
        if ($request == 'POST') {
            $id = $post['id'];
            $query = "DELETE FROM personas WHERE id=$id";
            $con = Model::conect();
            $con->query($query);
            $con = null;
            header('Location: /speedrun/');
        } else {
            header('Location: /speedrun/');
        }
    }

    public static function error($request) {
        echo "ERROR, RUTA NO ENCONTRADA";
    }

}