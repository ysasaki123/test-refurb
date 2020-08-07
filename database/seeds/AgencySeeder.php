<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AgencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('agencies')->insert([
            'name' => 'some-fake-agency',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('agencies')->insert([
            'name' => 'some-other-fake-agency',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        
        DB::table('agencies')->insert([
            'name' => 'yet-another-fake-agency',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
