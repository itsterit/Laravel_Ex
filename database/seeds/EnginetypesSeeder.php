<?php

use Illuminate\Database\Seeder;

class EnginetypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\enginetypes::class, 3)->create();
    }
}
