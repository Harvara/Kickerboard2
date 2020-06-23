<?php


class PlayerFactory implements FactoryInterface
{

    public function __construct()
    {
    }

    public function createFromDB()
    {
        // TODO: Implement createFromDB() method.
    }

    public function createNew(array $args)
    {
        return new Domain\Player\Player($args["playername"]);
    }
}