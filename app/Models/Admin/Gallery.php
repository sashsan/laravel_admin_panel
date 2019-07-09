<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'product_id',
        'img',
    ];


}
