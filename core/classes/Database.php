<?php
include('../config.php');

class Database{
    private $connection;
    private function start(){
        $this->connection = new PDO(
            'mysql:host='.MYSQL_SERVER.';'.
            'dbname='.MYSQL_DATABASE.';'.
            'charset='.MYSQL_CHARSET,
            MYSQL_USER,
            MYSQL_PASS,
            array(PDO::ATTR_PERSISTENT => true)
        );
        $this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
    }
    private function end(){
        $this->connection = null;
    }
    public function select($sql,$parameters=null){
        $this->start();

        try{
           $run = $this->connection->prepare($sql);
           !empty($parameters)? $run->execute($parameters) : $run->execute();
           $response = $run->fetchAll(PDO::FETCH_CLASS); 
            
        }
        catch(PDOException $e){
            return false;
        }

        $this->end();

        return $response;
    }
}