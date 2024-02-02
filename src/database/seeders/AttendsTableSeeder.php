<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Attend;

class AttendsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Attend::factory()->count(3)->create();
    }
}
