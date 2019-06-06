<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogCategory extends Model
{
    //потому что есть поле delete_at
    use SoftDeletes;

    //обязательно такое название и тот массив тех полей которая fill() может заполнить, т.е.
// какие поля я доверяю методу fill() записать
    protected $fillable = [
        'id',
        'title',
        'slug',
        'parent_id',
        'description',
    ];

}
