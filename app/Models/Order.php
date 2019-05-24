<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{


    protected $fillable = [
        'id',
        'user_id',
        'status',
        'created_at',
        'update_at',
        'currency',
        'note',
    ];




}
