<?php

namespace app\core;


class Connect
{
    private $_host;
    private $_dbName;
    private $_user;
    private $_pass;
    // private $_db;
    // 2RaM58IvpCHmSxit 
    // USER 'Kiliroy-PC' 

    public function __construct()
    {
        $this->_host = "localhost";
        $this->_dbName = "kiliroy_shop";
        $this->_user = "kiliroy";
        $this->_pass = "N4rutokado";
    }

    public function dataBase()
    {

        try {
            $pdo = new PDO('mysql:host=' . $this->_host . ';dbname=' . $this->_dbName, $this->_user, $this->_pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    // try {
    //     $this->_db = new PDO('mysql:host=' . $this->_host . ';dbname=' . $this->_dbName, $this->_user, $this->_pass);
    //     $this->_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // } catch (PDOException $e) {
    //     die("Impossible d'acceder à la base de donnée");
    // }


    // public function ()
    // {
    //     $req = $this->_db->query('select * from articles');
    //     return $req->fetchAll(PDO::FETCH_ASSOC);
    // }

    // public function prepare($sql)
    // {
    //     $req = $this->_db->prepare($sql);
    // }
}
$DBC = new Connect();
$pdo = $DBC->dataBase();
