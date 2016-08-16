<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //Create ten completely random users for fun tests
        factory(App\User::class, 'admin')->create([
            'name' => 'Stu Mason',
            'email' => 'stu@stuartmason.co.uk',
            'password' => bcrypt('secret')
        ]);

        factory(App\User::class)->create([
            'name' => 'Brian Cox',
            'email' => 'brian@cox.com',
            'password' => bcrypt('secret')
        ]);

        //Create ten completely random users for fun tests
        factory(App\User::class, 10)->create();

    }
}
