<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{

    protected $fillable = [
        'id',
        'title',
        'alias',
        'parent_id',
        'keywords',
        'description',
    ];





}
