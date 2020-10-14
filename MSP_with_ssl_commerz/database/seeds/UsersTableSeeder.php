<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role_id' => 1,
                'name' => 'FARNAN',
                'email' => 'mh.farnan@gmail.com',
                'avatar' => 'users\\September2020\\k6OnCZGTPfedsWSlhBDe.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$c8YarG8/af2HegkAVQ6NHuG2UxRD6go.b9/DyXm4ygXRYYr4of7XC',
                'remember_token' => 'P0rl2PhzZXE4oUmdTuYmSUBosrtpo0tp5jkeuNVcS2NI19YlyH9U0tCAAhrE',
                'settings' => '{"locale":"en"}',
                'created_at' => '2020-09-22 05:21:51',
                'updated_at' => '2020-09-28 20:42:31',
            ),
            1 => 
            array (
                'id' => 2,
                'role_id' => NULL,
                'name' => 'Rabinsoncruso',
                'email' => 'Robinsoncruso@example.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$l5tJrS92h39OSipnyoZqYOA0PYFpCtCTgW.cmM/xSyY5ziDiBrpbq',
                'remember_token' => 'ICLGWprXRXYCMYk1nJhFGHAOnnJnQs8OgaztecICR5UHfBfUVG82LYBCXT9E',
                'settings' => NULL,
                'created_at' => '2020-09-26 17:31:27',
                'updated_at' => '2020-09-26 17:31:27',
            ),
            2 => 
            array (
                'id' => 3,
                'role_id' => NULL,
                'name' => 'testuser',
                'email' => 'testuser@example.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$LMVEJTG49iI/ETUmwhtBcOL8SlHCPFrh1C6vDOnbF9q9PhHqSXH8y',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-09-26 21:24:43',
                'updated_at' => '2020-09-26 21:24:43',
            ),
        ));
        
        
    }
}