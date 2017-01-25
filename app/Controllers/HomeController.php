<?php
namespace App\Controllers;

use Slim\Views\PhpRenderer as View;
use App\Services\HomeService;

class HomeController
{
    protected $oView;

    public function __construct(View $view)
    {
        $this->oView = $view;
    }

    public function home($request, $response, $args)
    {
        $sService = HomeService::run();
        $aTest = [
            'test1' => 'This is',
            'test2' => 'a Sample View.',
            'test3' => $sService
        ];
        $this->oView->render($response, 'index.php', $aTest);
    }
}

