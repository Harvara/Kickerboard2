<?php

namespace Domain\Player;

use DTO\CityDTO\CityDTO;

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
}