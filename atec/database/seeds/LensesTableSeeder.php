<?php

use Illuminate\Database\Seeder;
use App\Models\Lenses;

class LensesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lenses = [
            ['name' => 'ZEISS'],
            ['name' => 'Local'],
            ['name' => 'Nova'],
        ];
        foreach ($lenses as $lens) { Lenses::create($lens); }
    }
}
