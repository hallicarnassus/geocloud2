<?php
namespace app\api\v1;

use \app\inc\Response;
use \app\inc\Input;
use \app\inc\Session;

class Senti extends \app\inc\Controller
{
    private $settings;

    function __construct()
    {
    }

    public function post_index()
    {
        $data = json_decode(Input::get(), true);
        $senti = new \app\models\Senti();
        return $senti->insert($data,Input::getPath()->part(5));
    }
}