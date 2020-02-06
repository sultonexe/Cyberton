<?php

use Carbon\Carbon;
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
        
        factory(App\Models\User::class,40)->create();

        $users = [
            [
                'name' => 'admin',
                'email' => 'admin@cyberton.com',
                'username' => 'admin',
                'password' => bcrypt('admin0101'),
                'email_verified_at' => Carbon::now(),
                'api_token' => str_random(18),
                'is_admin' => true,
                'created_at' => Carbon::now(),    
            ],
            [
                'name' => 'user',
                'email' => 'user@cyberton.com',
                'username' => 'user',
                'password' => bcrypt('user0101'),
                'email_verified_at' => Carbon::now(),
                'api_token' => str_random(18),
                'is_admin' => false,
                'created_at' => Carbon::now(),    
            ],
            [
                'name' => 'Sulton Randovlsky',
                'email' => 'sultonexe@cyberton.com',
                'username' => 'sultonexe',
                'password' => bcrypt('olivialp'),
                'email_verified_at' => Carbon::now(),
                'api_token' => str_random(18),
                'is_admin' => true,
                'created_at' => Carbon::now(),    
            ]
        ];

        \App\Models\User::insert($users);

    }
}
