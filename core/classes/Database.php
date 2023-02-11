<?php
//require('../config.php');

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
    public function execute($sql,$parameters=null){
        $this->start();

        try{
           $run = $this->connection->prepare($sql);
           !empty($parameters)? $run->execute() : $run->execute($parameters);
           if(preg_match("/^SELECT/i",$sql)){
             $response = $run->fetchAll(PDO::FETCH_CLASS); 
           }
          else{
            $response = 'success';
          }
            
        }
        catch(PDOException $e){
            return false;
        }

        $this->end();

        return $response;
    }
}