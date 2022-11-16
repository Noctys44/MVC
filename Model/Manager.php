<?php


class Manager
{
    protected function getPdo()
    {
        try{
    $bdd = new PDO(
        "mysql:host=localhost;dbname=tp_poo","root","",
        array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
        }catch(PDOexception $e)
    {
        echo "Connexion à la bdd" . $e->getMessage();
        echo "information : " . $e->getFile();
        echo "Code : " . $e->getCode();
    }
    return $bdd;
}
}
    
