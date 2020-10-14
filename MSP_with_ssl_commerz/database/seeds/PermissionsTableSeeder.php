<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2020-09-28 20:28:01',
                'updated_at' => '2020-09-28 20:28:01',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2020-09-28 20:28:01',
                'updated_at' => '2020-09-28 20:28:01',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2020-09-28 20:28:01',
                'updated_at' => '2020-09-28 20:28:01',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2020-09-28 20:28:02',
                'updated_at' => '2020-09-28 20:28:02',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2020-09-28 20:28:02',
                'updated_at' => '2020-09-28 20:28:02',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2020-09-28 20:28:02',
                'updated_at' => '2020-09-28 20:28:02',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2020-09-28 20:28:02',
                'updated_at' => '2020-09-28 20:28:02',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2020-09-28 20:28:03',
                'updated_at' => '2020-09-28 20:28:03',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2020-09-28 20:28:03',
                'updated_at' => '2020-09-28 20:28:03',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2020-09-28 20:28:03',
                'updated_at' => '2020-09-28 20:28:03',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2020-09-28 20:28:03',
                'updated_at' => '2020-09-28 20:28:03',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2020-09-28 20:28:04',
                'updated_at' => '2020-09-28 20:28:04',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2020-09-28 20:28:04',
                'updated_at' => '2020-09-28 20:28:04',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2020-09-28 20:28:05',
                'updated_at' => '2020-09-28 20:28:05',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2020-09-28 20:28:05',
                'updated_at' => '2020-09-28 20:28:05',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2020-09-28 20:28:05',
                'updated_at' => '2020-09-28 20:28:05',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2020-09-28 20:28:06',
                'updated_at' => '2020-09-28 20:28:06',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2020-09-28 20:28:06',
                'updated_at' => '2020-09-28 20:28:06',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2020-09-28 20:28:06',
                'updated_at' => '2020-09-28 20:28:06',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2020-09-28 20:28:06',
                'updated_at' => '2020-09-28 20:28:06',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2020-09-28 20:28:07',
                'updated_at' => '2020-09-28 20:28:07',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2020-09-28 20:28:07',
                'updated_at' => '2020-09-28 20:28:07',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2020-09-28 20:28:07',
                'updated_at' => '2020-09-28 20:28:07',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2020-09-28 20:28:07',
                'updated_at' => '2020-09-28 20:28:07',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2020-09-28 20:28:08',
                'updated_at' => '2020-09-28 20:28:08',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'browse_categories',
                'table_name' => 'categories',
                'created_at' => '2020-09-28 20:28:38',
                'updated_at' => '2020-09-28 20:28:38',
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'read_categories',
                'table_name' => 'categories',
                'created_at' => '2020-09-28 20:28:38',
                'updated_at' => '2020-09-28 20:28:38',
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'edit_categories',
                'table_name' => 'categories',
                'created_at' => '2020-09-28 20:28:39',
                'updated_at' => '2020-09-28 20:28:39',
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'add_categories',
                'table_name' => 'categories',
                'created_at' => '2020-09-28 20:28:39',
                'updated_at' => '2020-09-28 20:28:39',
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'delete_categories',
                'table_name' => 'categories',
                'created_at' => '2020-09-28 20:28:39',
                'updated_at' => '2020-09-28 20:28:39',
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'browse_posts',
                'table_name' => 'posts',
                'created_at' => '2020-09-28 20:28:44',
                'updated_at' => '2020-09-28 20:28:44',
            ),
            31 => 
            array (
                'id' => 32,
                'key' => 'read_posts',
                'table_name' => 'posts',
                'created_at' => '2020-09-28 20:28:45',
                'updated_at' => '2020-09-28 20:28:45',
            ),
            32 => 
            array (
                'id' => 33,
                'key' => 'edit_posts',
                'table_name' => 'posts',
                'created_at' => '2020-09-28 20:28:45',
                'updated_at' => '2020-09-28 20:28:45',
            ),
            33 => 
            array (
                'id' => 34,
                'key' => 'add_posts',
                'table_name' => 'posts',
                'created_at' => '2020-09-28 20:28:45',
                'updated_at' => '2020-09-28 20:28:45',
            ),
            34 => 
            array (
                'id' => 35,
                'key' => 'delete_posts',
                'table_name' => 'posts',
                'created_at' => '2020-09-28 20:28:45',
                'updated_at' => '2020-09-28 20:28:45',
            ),
            35 => 
            array (
                'id' => 36,
                'key' => 'browse_pages',
                'table_name' => 'pages',
                'created_at' => '2020-09-28 20:28:49',
                'updated_at' => '2020-09-28 20:28:49',
            ),
            36 => 
            array (
                'id' => 37,
                'key' => 'read_pages',
                'table_name' => 'pages',
                'created_at' => '2020-09-28 20:28:50',
                'updated_at' => '2020-09-28 20:28:50',
            ),
            37 => 
            array (
                'id' => 38,
                'key' => 'edit_pages',
                'table_name' => 'pages',
                'created_at' => '2020-09-28 20:28:50',
                'updated_at' => '2020-09-28 20:28:50',
            ),
            38 => 
            array (
                'id' => 39,
                'key' => 'add_pages',
                'table_name' => 'pages',
                'created_at' => '2020-09-28 20:28:50',
                'updated_at' => '2020-09-28 20:28:50',
            ),
            39 => 
            array (
                'id' => 40,
                'key' => 'delete_pages',
                'table_name' => 'pages',
                'created_at' => '2020-09-28 20:28:50',
                'updated_at' => '2020-09-28 20:28:50',
            ),
            40 => 
            array (
                'id' => 41,
                'key' => 'browse_hooks',
                'table_name' => NULL,
                'created_at' => '2020-09-28 20:29:00',
                'updated_at' => '2020-09-28 20:29:00',
            ),
            41 => 
            array (
                'id' => 42,
                'key' => 'browse_product_orders',
                'table_name' => 'product_orders',
                'created_at' => '2020-09-29 11:29:23',
                'updated_at' => '2020-09-29 11:29:23',
            ),
            42 => 
            array (
                'id' => 43,
                'key' => 'read_product_orders',
                'table_name' => 'product_orders',
                'created_at' => '2020-09-29 11:29:23',
                'updated_at' => '2020-09-29 11:29:23',
            ),
            43 => 
            array (
                'id' => 44,
                'key' => 'edit_product_orders',
                'table_name' => 'product_orders',
                'created_at' => '2020-09-29 11:29:23',
                'updated_at' => '2020-09-29 11:29:23',
            ),
            44 => 
            array (
                'id' => 45,
                'key' => 'add_product_orders',
                'table_name' => 'product_orders',
                'created_at' => '2020-09-29 11:29:23',
                'updated_at' => '2020-09-29 11:29:23',
            ),
            45 => 
            array (
                'id' => 46,
                'key' => 'delete_product_orders',
                'table_name' => 'product_orders',
                'created_at' => '2020-09-29 11:29:23',
                'updated_at' => '2020-09-29 11:29:23',
            ),
            46 => 
            array (
                'id' => 47,
                'key' => 'browse_orders',
                'table_name' => 'orders',
                'created_at' => '2020-09-29 13:01:43',
                'updated_at' => '2020-09-29 13:01:43',
            ),
            47 => 
            array (
                'id' => 48,
                'key' => 'read_orders',
                'table_name' => 'orders',
                'created_at' => '2020-09-29 13:01:43',
                'updated_at' => '2020-09-29 13:01:43',
            ),
            48 => 
            array (
                'id' => 49,
                'key' => 'edit_orders',
                'table_name' => 'orders',
                'created_at' => '2020-09-29 13:01:43',
                'updated_at' => '2020-09-29 13:01:43',
            ),
            49 => 
            array (
                'id' => 50,
                'key' => 'add_orders',
                'table_name' => 'orders',
                'created_at' => '2020-09-29 13:01:43',
                'updated_at' => '2020-09-29 13:01:43',
            ),
            50 => 
            array (
                'id' => 51,
                'key' => 'delete_orders',
                'table_name' => 'orders',
                'created_at' => '2020-09-29 13:01:43',
                'updated_at' => '2020-09-29 13:01:43',
            ),
            51 => 
            array (
                'id' => 52,
                'key' => 'browse_order_items',
                'table_name' => 'order_items',
                'created_at' => '2020-09-29 13:09:40',
                'updated_at' => '2020-09-29 13:09:40',
            ),
            52 => 
            array (
                'id' => 53,
                'key' => 'read_order_items',
                'table_name' => 'order_items',
                'created_at' => '2020-09-29 13:09:40',
                'updated_at' => '2020-09-29 13:09:40',
            ),
            53 => 
            array (
                'id' => 54,
                'key' => 'edit_order_items',
                'table_name' => 'order_items',
                'created_at' => '2020-09-29 13:09:40',
                'updated_at' => '2020-09-29 13:09:40',
            ),
            54 => 
            array (
                'id' => 55,
                'key' => 'add_order_items',
                'table_name' => 'order_items',
                'created_at' => '2020-09-29 13:09:40',
                'updated_at' => '2020-09-29 13:09:40',
            ),
            55 => 
            array (
                'id' => 56,
                'key' => 'delete_order_items',
                'table_name' => 'order_items',
                'created_at' => '2020-09-29 13:09:40',
                'updated_at' => '2020-09-29 13:09:40',
            ),
        ));
        
        
    }
}