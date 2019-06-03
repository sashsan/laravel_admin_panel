<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{

    use SoftDeletes;

    protected $fillable = [
        'id',
        'title',
        'alias',
        'parent_id',
        'keywords',
        'description',
        'created_at',
        'updated_at',
        'deleted_at',
    ];



}
