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
                'avatar' => 'users\\September2020\\k6OnCZGTPfedsWSlhBDe.png',
                'created_at' => '2020-09-22 05:21:51',
                'email' => 'mh.farnan@gmail.com',
                'email_verified_at' => NULL,
                'id' => 1,
                'name' => 'FARNAN',
                'password' => '$2y$10$c8YarG8/af2HegkAVQ6NHuG2UxRD6go.b9/DyXm4ygXRYYr4of7XC',
                'remember_token' => 'l68JsfebcXKTVHV347Not59T7tUMNkS5MAvs9wAO1j23FT2pikS56qbrCzFE',
                'role_id' => 1,
                'settings' => '{"locale":"en"}',
                'updated_at' => '2020-09-28 20:42:31',
            ),
            1 => 
            array (
                'avatar' => 'users/default.png',
                'created_at' => '2020-09-26 17:31:27',
                'email' => 'Robinsoncruso@example.com',
                'email_verified_at' => NULL,
                'id' => 2,
                'name' => 'Rabinsoncruso',
                'password' => '$2y$10$l5tJrS92h39OSipnyoZqYOA0PYFpCtCTgW.cmM/xSyY5ziDiBrpbq',
                'remember_token' => 'Ln96vBCIizT7MeJF8V833D6nRb4tjGvMQdEdcGeOCK2CLVQv19XH29pzr8XA',
                'role_id' => 3,
                'settings' => NULL,
                'updated_at' => '2020-12-16 14:50:45',
            ),
            2 => 
            array (
                'avatar' => 'users/default.png',
                'created_at' => '2020-09-26 21:24:43',
                'email' => 'testuser@example.com',
                'email_verified_at' => NULL,
                'id' => 3,
                'name' => 'testuser',
                'password' => '$2y$10$LMVEJTG49iI/ETUmwhtBcOL8SlHCPFrh1C6vDOnbF9q9PhHqSXH8y',
                'remember_token' => NULL,
                'role_id' => 2,
                'settings' => NULL,
                'updated_at' => '2020-09-26 21:24:43',
            ),
            3 => 
            array (
                'avatar' => 'users/default.png',
                'created_at' => '2020-09-26 21:24:43',
                'email' => 'customer1@example.com',
                'email_verified_at' => NULL,
                'id' => 4,
                'name' => 'cutomer 1',
                'password' => '$2y$10$LMVEJTG49iI/ETUmwhtBcOL8SlHCPFrh1C6vDOnbF9q9PhHqSXH8y',
                'remember_token' => NULL,
                'role_id' => 2,
                'settings' => NULL,
                'updated_at' => '2020-09-26 21:24:43',
            ),
            4 => 
            array (
                'avatar' => 'users/default.png',
                'created_at' => '2020-09-26 21:24:43',
                'email' => 'customer2@example.com',
                'email_verified_at' => NULL,
                'id' => 5,
                'name' => 'cutomer 2',
                'password' => '$2y$10$LMVEJTG49iI/ETUmwhtBcOL8SlHCPFrh1C6vDOnbF9q9PhHqSXH8y',
                'remember_token' => NULL,
                'role_id' => 2,
                'settings' => NULL,
                'updated_at' => '2020-09-26 21:24:43',
            ),
            5 => 
            array (
                'avatar' => 'users/default.png',
                'created_at' => '2020-09-26 21:24:43',
                'email' => 'seller1@example.com',
                'email_verified_at' => NULL,
                'id' => 6,
                'name' => 'seller 1',
                'password' => '$2y$10$LMVEJTG49iI/ETUmwhtBcOL8SlHCPFrh1C6vDOnbF9q9PhHqSXH8y',
                'remember_token' => 'GHVya99IWLF0vZqmu3TaQt2iAnNnXrscaotIGpc0F9U6fLwy6HPIbFxlAPBp',
                'role_id' => 3,
                'settings' => NULL,
                'updated_at' => '2020-09-26 21:24:43',
            ),
            6 => 
            array (
                'avatar' => 'users/default.png',
                'created_at' => '2020-09-26 21:24:43',
                'email' => 'seller2@example.com',
                'email_verified_at' => NULL,
                'id' => 7,
                'name' => 'seller 2',
                'password' => '$2y$10$LMVEJTG49iI/ETUmwhtBcOL8SlHCPFrh1C6vDOnbF9q9PhHqSXH8y',
                'remember_token' => NULL,
                'role_id' => 3,
                'settings' => NULL,
                'updated_at' => '2020-09-26 21:24:43',
            ),
            7 => 
            array (
                'avatar' => 'users/default.png',
                'created_at' => '2020-09-26 21:24:43',
                'email' => 'mspadmin@example.com',
                'email_verified_at' => NULL,
                'id' => 8,
                'name' => 'mspadmin',
                'password' => '$2y$10$LMVEJTG49iI/ETUmwhtBcOL8SlHCPFrh1C6vDOnbF9q9PhHqSXH8y',
                'remember_token' => NULL,
                'role_id' => 1,
                'settings' => NULL,
                'updated_at' => '2020-09-26 21:24:43',
            ),
        ));
        
        
    }
}