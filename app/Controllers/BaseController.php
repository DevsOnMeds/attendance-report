<?php
namespace App\Controllers;

use Slim\Views\PhpRenderer as View;

abstract class BaseController
{
    protected $oContainer;

    public function __construct($oContainer)
    {
        $this->oContainer = $oContainer;
    }

    public function __get($oProperty)
    {
         
        if ($this->oContainer->{$oProperty}) {
            return $this->oContainer->{$oProperty};
        }
    }

    public function view($aResponse, $sPage, $aData = [])
    {
        $this->view->render($aResponse, 'header.php');
        $this->view->render($aResponse, $sPage, $aData);
        $this->view->render($aResponse, 'footer.php');
    }
}
