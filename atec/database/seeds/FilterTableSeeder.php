<?php

use Illuminate\Database\Seeder;
use App\Models\Filter;

class FilterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $options = [
            ['name' => 'Filter','parent_id' => 0],
            ['name' => 'Focal type','parent_id' => 0],
            ['name' => 'Category','parent_id' => 0],
            ['name' => 'Material','parent_id' => 0],
            ['name' => 'Index','parent_id' => 0],
            ['name' => 'Variant','parent_id' => 0],
            ['name' => 'Color','parent_id' => 0],
            ['name' => 'Favorites','parent_id' => 1],
            ['name' => 'Stock','parent_id' => 1],
            ['name' => 'Sport','parent_id' => 1],
            ['name' => 'Sun','parent_id' => 2],
            ['name' => 'Single Vison','parent_id' => 2],
            ['name' => 'Bifocal','parent_id' => 2],
            ['name' => 'Progressive','parent_id' => 2],
            ['name' => 'Digital/Relax','parent_id' => 2],
            ['name' => 'Office','parent_id' => 2],
            ['name' => 'Individual','parent_id' => 3],
            ['name' => 'Superb','parent_id' => 3],
            ['name' => 'DriveSafe','parent_id' => 3],
            ['name' => 'AS','parent_id' => 3],
            ['name' => 'SPH','parent_id' => 3],
            ['name' => 'EnergizeMe','parent_id' => 3],
            ['name' => 'Material','parent_id' => 4],
            ['name' => 'Organic','parent_id' => 4],
            ['name' => 'Trivex','parent_id' => 4],
            ['name' => '1.5','parent_id' => 5],
            ['name' => '1.53','parent_id' => 5],
            ['name' => '1.6','parent_id' => 5],
            ['name' => '1.67','parent_id' => 5],
            ['name' => '1.7','parent_id' => 5],
            ['name' => '1.8','parent_id' => 5],
            ['name' => '1.9','parent_id' => 5],
            ['name' => '1.74','parent_id' => 5],
            ['name' => 'Clear','parent_id' => 6],
            ['name' => 'Photochromic','parent_id' => 6],
            ['name' => 'Polarized','parent_id' => 6],
            ['name' => 'AdaptiveSun','parent_id' => 6],
            ];
            foreach ($options as $option) { Filter::create($option); }
        
    }
}
