<?php

use Psr\Http\Message\ResponseInterface as Response;


interface ControllerInterface
{
    public function action(string $mode): Response;
    public function validateMode(string $mode): bool ;
}