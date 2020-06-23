<?php


namespace Controller\PlayerController;


class PlayerController implements ControllerInterface
{

    const MODES = array ("getPlayer");

    public function __construct()
    {

    }

    public function action(string $mode): \Psr\Http\Message\ResponseInterface
    {
        if ($this->validateMode());
    }

    public function validateMode(string $mode): bool
    {
        return in_array(self::MODES, $mode);
    }
}