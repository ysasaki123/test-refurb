<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            'name' => 'some-fake-team',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        
        DB::table('teams')->insert([
            'name' => 'some-other-fake-team',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('teams')->insert([
            'name' => 'yet-another-fake-team',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
