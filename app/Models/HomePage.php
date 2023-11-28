<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomePage extends Model
{
    use HasFactory;

    protected $table = "home_pages";

    protected $fillable = 
    [

        'toolImage',
        'toolimg',
        'image',
        'cvFile',
        'counter',
        'text',
        'labelText',
        'header',
        'samll_description',
        'paragph',
        'textbutton',
    ];
}
