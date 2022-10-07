<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Repositories\MenuRepository;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Create the database record for this singleton module.
     *
     * @return void
     */
    public function run()
    {
        if (Menu::count() > 0) {
            return;
        }

        app(MenuRepository::class)->create([
            'title' => 'Menu',
            'description' => '',
            'published' => false,
        ]);
    }
}
