<?php

class Model {

    public static function conect() {
        $con = new PDO('mysql:host=localhost; dbname=personas', 'root', '');
        return $con;
    }
}