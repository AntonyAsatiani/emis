<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $Table = "categories";
    protected $PrimaryKey = 'id';
    protected $fillable = [
        'title'
    ];



   

}
