<?php

namespace core;

use PDO;


class Database
{
    public $connection;

    public $statement;

    public function __construct($config, $user = 'root', $password = '')
    {

        $dsn = "mysql:" . http_build_query($config, "", ";");

        $pdo = new pdo($dsn, $user, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);

        $this->connection = $pdo;
    }

    public function query($query, $params = [])
    {
        $this->statement = $this->connection->prepare($query);

        $this->statement->execute($params);

        return $this;
    }

    public function find(){
        return $this->statement->fetch();
    }

    public function findOrFail(){
        $result = $this->find();
        
        if (! $result){
            //abort(Response::NOT_FOUND);
        }
        return $result;
     }
     
    public function findAll(){
        return $this->statement->fetchAll();
    }
      
}
