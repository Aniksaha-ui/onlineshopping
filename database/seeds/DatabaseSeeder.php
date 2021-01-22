<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\support\Str;
use App\catagory;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        	$faker=Faker::create();

            for($i=100;$i<300;$i++){
            App\catagory::create([
              'id'=>$i,
              'c_name'=>$faker->firstName

            ]);
          }
    }
}
