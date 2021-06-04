<?php

class Database{
    public static function StartUp(){
        $db = new PDO('mysql:host=localhost;dbname=ugel;charset=utf8', 'root', '');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
        return $db;
    }
}