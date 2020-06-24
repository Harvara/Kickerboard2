<?php

namespace DTO;

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


}