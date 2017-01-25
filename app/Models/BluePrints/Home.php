<?php

namespace App\Models\BluePrints;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Home extends Eloquent
{
    protected $table = 't_app_config';

    protected $primaryKey = 'app_config_no';

    public $timestamps = false;

    protected $fillable = ['mall_id', 'shop_no', 'display_shop_move_menu', 'ins_datetime', 'upd_datetime'];
}