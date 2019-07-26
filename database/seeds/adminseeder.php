<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class adminseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('logins')->insert([
           'username' => 'admin',
           'email' => 'admin@gmail.com',
           'password' => 'admin',
           'role'=>'admin',
       ]);
    }
}
