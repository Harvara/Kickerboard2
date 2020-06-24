<?php


namespace DAO;

use DTO\CityDTO;

class CityDAO implements DAOInterface
{

    public function select($identifier)
    {
        // get Connection
        // select city with id
        // return false
        return false;
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