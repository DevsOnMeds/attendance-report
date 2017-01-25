<?php

namespace App\Services;

use App\Models\HomeModel as HomeDB;

class HomeService
{
    private $aUserList;

    public function run()
    {
        $sResult = HomeDB::setConnection();
        foreach ($sResult as $sUser) {
            $this->aUserList .= '<br>' . $sUser->username;
        }
        return '<br>This is the Service Running.' .
            '<br>Succesfully Connected to Database<br>' .
            '<br>Active Users:' . $this->aUserList;
    }
}
