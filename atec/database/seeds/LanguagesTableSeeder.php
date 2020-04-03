<?php

use Illuminate\Database\Seeder;

class LanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $languages = [
            //row1
            [
                
                "locale"  => ["en"],
                "name"    => ["englis"],
                "dir"     => ["ltr"],
                "status"  => ["1"]
            ],

            [
                
                "locale"  => ["ar"],
                "name"    => ["Arabic"],
                "dir"     => ["ltr"],
                "status"  => ["1"]
            ],

           
        ];

        foreach($languages as $language){ Language::create($language); }
    }
}
