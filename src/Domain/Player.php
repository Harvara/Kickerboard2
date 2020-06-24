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


    public function __construct(array $args)
    {
        $this->playername = $args["playername"];
        $this->firstname = $args["firstname"];
        $this->lastname = $args["lastname"];
        // Refactor to Plugin later
        $this->city = new CityDTO(
            array(
                "id"=>$args["cityid"],
                "name" => $args["cityname"]
            )
        );
    }

    public function getDataAsJson():string {
        $encodedPlayerData = json_encode(get_object_vars($this));
        $decodedPlayerData = json_decode($encodedPlayerData, true);
        if ($this->city){$decodedPlayerData["city"] = json_decode($this->city->getDataAsJson());}
        return json_encode($decodedPlayerData);
    }
}