<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasFiles;
use A17\Twill\Models\Model;

class Menu extends Model 
{
    use HasFiles;

    protected $fillable = [
        'published',
        'title',
        'menu_link',
        'footer_widget',
    ];

    protected $casts = [
        'menu_link' => 'array',
        'footer_widget' => 'array'
    ];
    
    public $filesParams = ['web_logo','footer_logo'];
}
