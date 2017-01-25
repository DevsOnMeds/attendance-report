<?php

namespace App\Models;

use App\Models\BluePrints\Home;

class HomeModel
{
    public function setConnection()
    {
        $oModel = new Home();
        if (isset($oModel) === true) {
            return '<br>Succesfully Connected to Database';
        }
    }
}