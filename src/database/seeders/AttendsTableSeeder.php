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
        $attend_date = new DateTime();
        for ($i = 0; $i < 5; $i++) {
            factory(App\Models\Attend::class, 1)
                ->create([
                    'attend' => $attend_date->modify('+1day')->format('Y-m-d')
                ]);
        }
    }
}
