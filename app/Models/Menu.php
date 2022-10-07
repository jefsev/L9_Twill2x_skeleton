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
    ];

    protected $casts = [
        'menu_link' => 'array'
    ];
    
    public $filesParams = ['web_logo'];
}
