<?php

namespace Persistence;

use Config\ConnectionSettings;
use PDO;
use PDOStatement;

class DatabaseConnection implements DatabaseConnectionInterface
{

    /**
     * @var PDO
     */
    private $pdo;

    /**
     * @var PDOStatement
     */
    private $statement;

    public function __construct()
    {
        $this->createPDO();
    }

    public function createPDO(): void
    {
        try {
            $host = ConnectionSettings::host;
            $this->pdo = new PDO(
                "mysql:host='".ConnectionSettings::host."';dbname='".ConnectionSettings::database."'",
                ConnectionSettings::user,
                ConnectionSettings::password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("SLQ Connection Error" . $e);
        }
    }



    public function createSelectStatement(string $table, array $args): void
    {
        $sql = "select * from $table where" . $this->createWhereCondition($args);
        $this->statement = $this->pdo->prepare($sql);
    }


    public function executeSelectStatement(array $values): array
    {
        $this->statement->execute($values);
        return $this->statement->fetchAll(PDO::FETCH_ASSOC);
    }

    private function createWhereCondition(array $args):string {
        $returnString = "";
        foreach ($args as $key => $value){
            if (strlen($returnString==0)){
                $returnString  = "$key = :$key";
            }else{
                $returnString = "$returnString and $key = :$key";
            }
        }
        return $returnString;
    }

}