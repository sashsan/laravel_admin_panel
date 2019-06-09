<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{

    use SoftDeletes;

    protected $fillable = [
        'title',
        'category_id',
        'keywords',
        'description',
        'price',
        'old_price',
        'content',
        'status',
        'hit',
        'alias',
    ];






}
