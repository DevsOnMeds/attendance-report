<?php
namespace App\Controllers;

use Slim\Views\PhpRenderer as View;
use App\Models\HomeModel;

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
        $this->view->render($response, 'header.php');
        $this->view->render($response, 'index.php', $aTest);
        $this->view->render($response, 'footer.php');
    }
}
