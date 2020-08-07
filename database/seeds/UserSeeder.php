<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'test',
            'email' => 'f@ke',
            'password' => Hash::make('password'),
            'blue_tag' => '1000000000',
            'agency_id' => 1,
            'team_id' => 1,
            'start_date' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('users')->insert([
            'name' => 'test-A',
            'email' => 'f@keA',
            'password' => Hash::make('password'),
            'blue_tag' => '1000000001',
            'agency_id' => 1,
            'team_id' => 1,
            'start_date' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('users')->insert([
            'name' => 'test-B',
            'email' => 'f@keB',
            'password' => Hash::make('password'),
            'blue_tag' => '1000000002',
            'agency_id' => 1,
            'team_id' => 1,
            'start_date' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
