<?php

namespace App\Models;

use App\Models\BluePrints\Users;
use Illuminate\Database\Capsule\Manager as DB;
use App\Lib\ArrayLib;

class UsersModel
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

    public function getUser($aParam)
    {
        $aUser = Users::where('username', '=', $aParam['username'])
                    ->where('password', '=', $aParam['password'])
                    ->first();
        return ArrayLib::result($aUser);
    }
}
