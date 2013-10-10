<?php
namespace app\api\v1;

use \app\inc\Response;
use \app\conf\Connection;
use app\inc\Session;

class Meta extends \app\inc\Controller
{
    private $layers;

    function __construct()
    {
        $this->layers = new \app\models\Layer();
    }

    public function get_index()
    {
        return Response::json($this->layers->getAll(\app\conf\Connection::$param["postgisschema"], Session::isAuth()));
    }
}