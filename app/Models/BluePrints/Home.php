<?php

namespace App\Models\BluePrints;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Home extends Eloquent
{
    protected $table = 'users';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = ['username', 'password'];
}
