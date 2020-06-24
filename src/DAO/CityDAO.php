<?php


namespace DAO;

use DTO\CityDTO;
use Persistence\DatabaseConnection;


class CityDAO implements DAOInterface
{

    public function select($identifier):array
    {
        $databaseConnection = new DatabaseConnection();
        $databaseConnection->createSelectStatement("Cities",array("ID"=>$identifier));
        return $databaseConnection->executeSelectStatement();
        // get Connection
        // select city with id
    }

    public function update($attributes)
    {
        // TODO: Implement update() method.
    }

    public function delete($identifier)
    {
        // TODO: Implement delete() method.
    }


    private function getDatabaseConnection() : PDO{
    }
}