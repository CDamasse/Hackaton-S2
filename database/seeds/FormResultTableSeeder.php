<?php

use Illuminate\Database\Seeder;

class FormResultTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\FormResult::class, 50)->create();
    }
}
