<?php

namespace App\Controllers;

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
}
