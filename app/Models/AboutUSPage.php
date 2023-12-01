<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUSPage extends Model
{
    use HasFactory;

    protected $table = "about_pages";

    protected $fillable =
    [
        'about_us_title',
        'about_description',
        'image',
        'infolabel',
        'info',
        'button_text',
        'number_of_Experience',
        'Experience_text',
        'EXPERICNCE_AND_EDUCATION',
        'EXPERICNCE_AND_EDUCATION_header' ,
        'EXPERICNCE_AND_EDUCATION_desc' ,
        'EXPERICNCE_json',
        'SKILLs_title',
        'SKILLs_header',
        'Skills_description',
        'tools',
        'beanners',
    ]
    ;

    protected $casts = 
    [
        'tools'=>'json',
        'EXPERICNCE_json'=>'json',
        'beanners'=>'json',
        'info'=>'json',
    ]
    ;
}
