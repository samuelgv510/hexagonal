<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Str; 

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($index=0;$index<11;$index++){
            DB::table('users')->insert([
                'user_name'=>'default '.$index,
                'first_name'=>'default',
                'last_name'=>'default',
                'email'=>Str::random(10).'@default.com',
                'password'=>password_hash('default',PASSWORD_DEFAULT),
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]);
        }
    }
}
