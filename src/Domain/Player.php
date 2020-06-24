<?php

namespace Domain;

use DTO\CityDTO;

class Player implements PlayerInterface
{
    /**
     * @var string
     */
    private $playername;

    /**
     * @var string
     */
    private $firstname;

    /**
     * @var string
     */
    private $lastname;

    /**
     * @var CityDTO
     */
    private $city;

    /**
     * @var int
     */
    private $databaseID;


    public function __construct(string $playername)
    {
        $this->playername=$playername;
    }

    public function getDataAsJson():string {
        return json_encode(get_object_vars($this));
    }
}