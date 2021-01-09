<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class tovarseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\tovar::factory()->count(50)->create();
    }
}
