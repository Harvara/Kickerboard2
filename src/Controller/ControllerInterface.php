<?php


namespace Controller;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;


interface ControllerInterface
{
    public function indexAction(string $mode, Response $response, Request $request): Response;
    public function validateMode(string $mode): bool ;
}