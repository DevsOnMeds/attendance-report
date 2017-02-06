<?php
namespace App\Controllers;

use App\Models\HomeModel;

class IndexController extends BaseController
{
    public function index($request, $response, $args)
    {
        $sResult = HomeModel::getAllUsers();
        $aTest = [
            'test1' => 'This is',
            'test2' => 'a Sample View.',
            'test3' => $sResult
        ];
        $this->view($response, 'index.php', $aTest);
    }
}
