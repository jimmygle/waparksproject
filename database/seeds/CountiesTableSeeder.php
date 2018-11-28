<?php

use Illuminate\Database\Seeder;

class CountiesTableSeeder extends Seeder
{

	public static $counties = [
		[1, 'Adams', 'adams'],
		[2, 'Asotin', 'asotin'],
		[3, 'Benton', 'benton'],
		[4, 'Chelan', 'chelan'],
		[5, 'Clallam', 'clallam'],
		[6, 'Clark', 'clark'],
		[7, 'Columbia', 'columbia'],
		[8, 'Cowlitz', 'cowlitz'],
		[9, 'Douglas', 'douglas'],
		[10, 'Ferry', 'ferry'],
		[11, 'Franklin', 'franklin'],
		[12, 'Garfield', 'garfield'],
		[13, 'Grant', 'grant'],
		[14, 'Grays Harbor', 'grays-harbor'],
		[15, 'Island', 'island'],
		[16, 'Jefferson', 'jefferson'],
		[17, 'King', 'king'],
		[18, 'Kitsap', 'kitsap'],
		[19, 'Kittitas', 'kittitas'],
		[20, 'Klickitat', 'klickitat'],
		[21, 'Lewis', 'lewis'],
		[22, 'Lincoln', 'lincoln'],
		[23, 'Mason', 'mason'],
		[24, 'Okanogan', 'okanogan'],
		[25, 'Pacific', 'pacific'],
		[26, 'Pend Oreille', 'pend-oreille'],
		[27, 'Pierce', 'pierce'],
		[28, 'San Juan', 'san-juan'],
		[29, 'Skagit', 'skagit'],
		[30, 'Skamania', 'skamania'],
		[31, 'Snohomish', 'snohomish'],
		[32, 'Spokane', 'spokane'],
		[33, 'Stevens', 'stevens'],
		[34, 'Thurston', 'thurston'],
		[35, 'Wahkiakum', 'wahkiakum'],
		[36, 'Walla Walla', 'walla-walla'],
		[37, 'Whatcom', 'whatcom'],
		[38, 'Whitman', 'whitman'],
		[39, 'Yakima', 'yakima']
	];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	foreach (static::$counties as $county) {
	    	DB::table('counties')->insert([
	    		'id' => $county[0],
	    		'name' => $county[1],
	    		'slug' => $county[2]
	    	]);
    	}
    }
}
