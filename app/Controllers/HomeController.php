<?php
namespace App\Controllers;

use Slim\Views\PhpRenderer as View;

class HomeController
{
    protected $oView;

    public function __construct(View $view)
    {
        $this->oView = $view;
    }

    public function home($request, $response, $args)
    {
        $test = [
            'test1' => 'This is',
            'test2' => 'a Sample View.',
            'test3' => 'Have fun.'
        ];
        $this->oView->render($response, 'index.php', $test);
    }
}

