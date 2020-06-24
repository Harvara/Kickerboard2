<?php

namespace Factories;

use Domain\Player;

class PlayerFactory implements FactoryInterface
{

    public function __construct()
    {
    }

    public function createFromDB()
    {
        // TODO: Implement createFromDB() method.
    }

    public function createNew(array $args) : Player
    {
        return new Player($args);
    }
}