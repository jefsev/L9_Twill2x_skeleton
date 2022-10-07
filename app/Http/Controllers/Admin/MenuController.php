<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\SingletonModuleController as BaseModuleController;

class MenuController extends BaseModuleController
{
    protected $moduleName = 'menus';

    protected $indexOptions = [
        'permalink' => false,
    ];
}
