<?php


namespace Controller;


use Factories\PlayerFactory;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;


class PlayerController implements ControllerInterface
{
    const MODES = array ("getPlayer");

    public function __construct()
    {

    }

    public function indexAction(string $mode, Response $response, Request $request): Response
    {
        if ($this->validateMode($mode)){
            return $this->getModeResponse($mode, $response, $request);
        }
    }


    private function getModeResponse(string $mode, Response $response, Request $request): Response
    {
        switch ($mode){
            case self::MODES[0]:
                return $this->getPlayerAction($request, $response);
        }
    }

    public function validateMode(string $mode): bool
    {
        return in_array( $mode, self::MODES);
    }

    private function getPlayerAction(Request $request, Response $response){
        $player = (new PlayerFactory())->createNew($request->getQueryParams());
        $response->getBody()->write($player->getDataAsJson());
        return $response;
    }

}