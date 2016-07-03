<?php
namespace App\Action;

use App\Mobile\V1\User\UserResourceFactory;
use Rest\Action;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

final class HomeAction
{

    public function __invoke(Request $request, Response $response, $args)
    {
        $id = isset($args['id']) ? $args['id'] : null;

        $factory = new UserResourceFactory();

        $action = new Action($factory());

        return $action->run($request->withAttribute(Action::PK, $id), $response);
    }

}