<?php

namespace DTO;

use DAO\CityDAO;

class CityDTO
{
    /**
     * @var string
     */
    private $cityName;

    /**
     * @var int
     */
    private $databaseID;

    /**
     * @return string
     */
    public function getCityName(): string
    {
        return $this->cityName;
    }

    /**
     * @param string $cityName
     */
    public function setCityName(string $cityName)
    {
        $this->cityName = $cityName;
    }

    /**
     * @return int
     */
    public function getDatabaseID(): int
    {
        return $this->databaseID;
    }

    /**
     * @param int $databaseID
     */
    public function setDatabaseID(int $databaseID)
    {
        $this->databaseID = $databaseID;
    }

    public function __construct(array $args)
    {
        $cityDAO = new CityDAO();
        $cityInstance = $cityDAO->select($args["id"]);
        if (!$cityInstance){
            $this->cityName=$args["name"];
        }else{
            $this->cityName = $cityInstance->getCityName();
            $this->databaseID = $cityInstance->getDatabaseID();
        }
    }

    public function getDataAsJson():string {
        return json_encode(get_object_vars($this));
    }

}