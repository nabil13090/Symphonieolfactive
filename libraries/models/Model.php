<?php

namespace Models;

use Database;

abstract class Model
{
    
    protected $pdo;
    protected $table;

    public function __construct()
    {
        $this->pdo = Database::getPdo();
    }
    public function getBeginTransaction()
    {
        return $this->pdo->beginTransaction();
    }

    public function getLastinsert()
    {
        return $this->pdo->lastInsertId();
    }

    public function getCommit()
    {
        return $this->pdo->commit();
    }

    public function getRoll()
    {
        return  $this->pdo->rollBack();
    }



}

