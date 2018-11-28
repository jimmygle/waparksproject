<?php

use Illuminate\Database\Seeder;

class ParksTableSeeder extends Seeder
{

	public static $parksCsvFile = '/parks.csv';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$parks = $this->getParksFromCsv();

        foreach ($parks as $park) {

        	// Insert park record
        	try {
		    	$parkId = DB::table('parks')->insertGetId([
		    		'name' => $park['park-name'],
		    		'slug' => str_slug($park['park-name']),
		    		'acres' => $park['acres'],
		    		'created_at' => \Carbon\Carbon::now(),
		    		'updated_at' => \Carbon\Carbon::now()
		    	]);
		    } catch (\Exception $e) {
		    	// dd($park);
		    	dd($e->getMessage());
		    }

	    	// Insert county relationship
	    	$counties = (array) explode(',', $park['county']);
	    	foreach ($counties as $countyName) {
	    		$countyId = $this->fetchCountyId(trim(str_slug($countyName)));
	    		DB::table('park_county')->insert([
	    			'park_id' => (int) $parkId,
	    			'county_id' => (int) $countyId
	    		]);
	    	}
        }
    }

    /**
     * Import parks from CSV file for database insertion.
     *
     * @return array
     */
    public static function getParksFromCsv()
    {
    	$rows = str_getcsv(file_get_contents(__DIR__ . static::$parksCsvFile), "\r");
    	$parsed = [];
    	$header = [];

    	$i = 0;
    	foreach ($rows as $key => $row) {
    		$row = str_getcsv($row, ',');

    		// Header row
    		if ($i == 0) {
    			foreach ($row as $col) {
    				$header[] = str_slug($col);
    			}
    		} else {
    			foreach ($header as $key => $colName) {
    				$parsed[$i][$colName] = $row[$key];
    			}
    		}
    		$i++;
    	}

    	return $parsed;
    }

    /**
     * Get the county ID from the county seeder.
     *
     * @param str
     * @return void
     */
	protected function fetchCountyId($countySlug)
	{
		$counties = CountiesTableSeeder::$counties;

		$county = array_first($counties, function ($county, $key) use ($countySlug) {
			return $county[2] == $countySlug;
		});

		if (is_null($county)) {
			throw new Exception("Error finding county: '{$countySlug}'");
		}

		return $county[0];
	}
}
