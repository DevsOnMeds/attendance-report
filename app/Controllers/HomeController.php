<?php
namespace App\Controllers;

use App\Models\UsersModel;

class HomeController extends BaseController
{
    public function home($request, $response, $args)
    {
        $sResult = HomeModel::getAllUsers();
        $aTest = [
            'test1' => 'This is',
            'test2' => 'a Sample View.',
            'test3' => $sResult
        ];
        $this->view($response, 'home.php', $aTest);
    }
}
