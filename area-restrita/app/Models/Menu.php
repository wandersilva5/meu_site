<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
        'nome', 
        'menu_pai', 
        'password',
        'menu_filho',
        'ordem',
        'url',
        'icone'
    ];


}
