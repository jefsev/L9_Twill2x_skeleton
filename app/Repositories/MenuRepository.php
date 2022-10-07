<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleFiles;
use A17\Twill\Repositories\Behaviors\HandleJsonRepeaters;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Menu;

class MenuRepository extends ModuleRepository
{
    use HandleFiles;
    use HandleJsonRepeaters;

    protected $jsonRepeaters = [
        'menu_link',
    ];

    public function __construct(Menu $model)
    {
        $this->model = $model;
    }
}
