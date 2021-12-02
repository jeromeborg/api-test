<?php

namespace Database\Seeders;

use App\Models\Reactblog;
use Illuminate\Database\Seeder;

class ReactblogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Reactblog::factory(10)->create();
    }
}
