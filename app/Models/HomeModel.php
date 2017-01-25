<?php

namespace App\Models;

use App\Models\BluePrints\Home;

class HomeModel
{
    public function setConnection()
    {
        $oModel = new Home();
        $oModel->setConnection('default');
        $aUsers = $oModel->all();
        return $aUsers;
    }
}
