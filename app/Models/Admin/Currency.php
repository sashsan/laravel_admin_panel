<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'title',
        'code',
        'symbol_left',
        'symbol_right',
        'value',
        'base',
    ];


}
