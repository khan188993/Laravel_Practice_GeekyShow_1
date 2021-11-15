<?php

/* 
?Faker.php using process,
*)use class faker\factory as faker 
*)faker::create() class this static function and store in variable,
*)$faker->name(),
*/

/* 
?create table into database by migration,
*)php artisan make:migration create_student_table
*)create table by schema usingn,
*)add your column and migrate it after then,

?)seed data into column by seeder,
*)type php artisam make:seeder StudentSeeder
*)run column will work after typing php artisan db:seed --class=StudentSeeder
*)db insert code use kore column add korbo and run korbo,
*)
*/

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class commerceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create();

        foreach(range(1,10) as $value){
            DB::table('commerce')->insert([
                'name' => $faker->name(),
                'city' => $faker->city(),
                'phone' => $faker->phoneNumber(),
            ]);
        }
        
    }
}
