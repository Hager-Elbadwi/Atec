<?php

use Illuminate\Database\Seeder;
use App\Models\Consignee;
class ConsigneesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $consignees = [
            //row1
            [
                
                ['name'    => 'Izoneeeee'],
                ['status'  => '1']
            ],

           
           
        ];

        foreach($consignees as $consignee){ Consignee::create($consignee); }
    }
}
