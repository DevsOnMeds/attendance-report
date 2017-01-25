<?php

namespace App\Services;

use App\Models\HomeModel as HomeDB;

class HomeService
{
    public function run()
    {
        $sResult = HomeDB::setConnection();
        return '<br>This is the Service Running.' . $sResult;
    }
}