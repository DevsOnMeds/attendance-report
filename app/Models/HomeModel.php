<?php

namespace App\Models;

use App\Models\BluePrints\Home;
use Illuminate\Database\Capsule\Manager as DB;
use App\Lib\ArrayLib;

class HomeModel
{
    public function setConnection()
    {
        $oModel = new Home();
        $oModel->setConnection('default');
        $aUsers = $oModel->all();
        return $aUsers;
    }

    public function getAllUsers()
    {
        $aUsers = DB::select('select * from users');
        $aResults = ArrayLib::result($aUsers);
        $sNameList = '';
        foreach ($aResults as $aUser) {
            $sNameList .= '<br>' . $aUser['username']. '<br>';
        }
        return $sNameList;
    }
}
