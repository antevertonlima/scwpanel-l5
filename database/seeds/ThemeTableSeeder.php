<?php

use Illuminate\Database\Seeder;

class ThemeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Theme::class)->create([
            'name' => 'default',
            'type' => 'back',
            'active' => 'N',
        ]);

        factory(\App\Theme::class)->create([
            'name' => 'scwpanel',
            'type' => 'back',
            'active' => 'A',
        ]);
    }
}
