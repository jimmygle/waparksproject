<?php

use Illuminate\Database\Seeder;

class ReferencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('references')->insert([
    		'park_id' => 1,
    		'name' => 'Wikipedia: Alta Lake State Park',
    		'url' => 'https://en.wikipedia.org/wiki/Alta_Lake_State_Park'
    	]);

    	DB::table('references')->insert([
    		'park_id' => 1,
    		'name' => 'WA State Parks: Alta Lake State Park',
    		'url' => 'https://parks.state.wa.us/239/Alta-Lake',
    		'description' => 'Official WA State Park website.'
    	]);

    }
}
