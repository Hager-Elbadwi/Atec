<?php

use Illuminate\Database\Seeder;
use App\Models\Information;

class InformationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $informations = [
            //row1
            [
                
                "en" => [
                    "name"=> "mame",
                    "text"=> "795 Folsom Ave, Suite 600 San Francisco, CA 9410711111111111111111111"
                    ],
    
                "ar"=> [
                    "name"=> "الاسم",
                    "text"=> "شارع بفلي هيلز"
                    ],
    
                "status"=> "1"
            ],
            //row2
            [
                "en" => [
                    "name"=> "mame",
                    "text"=> "795 Folsom Ave, Suite 600 San Francisco, CA 9410711111111111111111111"
                    ],
    
                "ar"=> [
                    "name"=> "الاسم",
                    "text"=> "شارع بفلي هيلز"
                    ],
    
                "status"=> "1"
            ],
            //row3
            [
                "en" => [
                    "name"=> "mame",
                    "text"=> "795 Folsom Ave, Suite 600 San Francisco, CA 9410711111111111111111111"
                    ],
    
                "ar"=> [
                    "name"=> "الاسم",
                    "text"=> "شارع بفلي هيلز"
                    ],
    
                "status"=> "1"
            ],
            //row4
            [
                "en" => [
                    "name"=> "mame",
                    "text"=> "795 Folsom Ave, Suite 600 San Francisco, CA 9410711111111111111111111"
                    ],
    
                "ar"=> [
                    "name"=> "الاسم",
                    "text"=> "شارع بفلي هيلز"
                    ],
    
                "status"=> "1"
            ],
            //row5
            [
                "en" => [
                    "name"=> "mame",
                    "text"=> "795 Folsom Ave, Suite 600 San Francisco, CA 9410711111111111111111111"
                    ],
    
                "ar"=> [
                    "name"=> "الاسم",
                    "text"=> "شارع بفلي هيلز"
                    ],
    
                "status"=> "1"
            ],
            //row6
            [
                "en" => [
                    "name"=> "mame",
                    "text"=> "795 Folsom Ave, Suite 600 San Francisco, CA 9410711111111111111111111"
                    ],
    
                "ar"=> [
                    "name"=> "الاسم",
                    "text"=> "شارع بفلي هيلز"
                    ],
    
                "status"=> "1"
            ],
        ];

        foreach($informations as $information){ Information::create($information); }

    }
}
