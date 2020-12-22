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
                'created_at' => '2020-09-28 20:28:01',
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'updated_at' => '2020-09-28 20:28:01',
            ),
            1 => 
            array (
                'created_at' => '2020-09-28 20:28:01',
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'updated_at' => '2020-09-28 20:28:01',
            ),
            2 => 
            array (
                'created_at' => '2020-09-28 20:28:01',
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'updated_at' => '2020-09-28 20:28:01',
            ),
            3 => 
            array (
                'created_at' => '2020-09-28 20:28:02',
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'updated_at' => '2020-09-28 20:28:02',
            ),
            4 => 
            array (
                'created_at' => '2020-09-28 20:28:02',
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'updated_at' => '2020-09-28 20:28:02',
            ),
            5 => 
            array (
                'created_at' => '2020-09-28 20:28:02',
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'updated_at' => '2020-09-28 20:28:02',
            ),
            6 => 
            array (
                'created_at' => '2020-09-28 20:28:02',
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'updated_at' => '2020-09-28 20:28:02',
            ),
            7 => 
            array (
                'created_at' => '2020-09-28 20:28:03',
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'updated_at' => '2020-09-28 20:28:03',
            ),
            8 => 
            array (
                'created_at' => '2020-09-28 20:28:03',
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'updated_at' => '2020-09-28 20:28:03',
            ),
            9 => 
            array (
                'created_at' => '2020-09-28 20:28:03',
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'updated_at' => '2020-09-28 20:28:03',
            ),
            10 => 
            array (
                'created_at' => '2020-09-28 20:28:03',
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'updated_at' => '2020-09-28 20:28:03',
            ),
            11 => 
            array (
                'created_at' => '2020-09-28 20:28:04',
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'updated_at' => '2020-09-28 20:28:04',
            ),
            12 => 
            array (
                'created_at' => '2020-09-28 20:28:04',
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'updated_at' => '2020-09-28 20:28:04',
            ),
            13 => 
            array (
                'created_at' => '2020-09-28 20:28:05',
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'updated_at' => '2020-09-28 20:28:05',
            ),
            14 => 
            array (
                'created_at' => '2020-09-28 20:28:05',
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'updated_at' => '2020-09-28 20:28:05',
            ),
            15 => 
            array (
                'created_at' => '2020-09-28 20:28:05',
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'updated_at' => '2020-09-28 20:28:05',
            ),
            16 => 
            array (
                'created_at' => '2020-09-28 20:28:06',
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'updated_at' => '2020-09-28 20:28:06',
            ),
            17 => 
            array (
                'created_at' => '2020-09-28 20:28:06',
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'updated_at' => '2020-09-28 20:28:06',
            ),
            18 => 
            array (
                'created_at' => '2020-09-28 20:28:06',
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'updated_at' => '2020-09-28 20:28:06',
            ),
            19 => 
            array (
                'created_at' => '2020-09-28 20:28:06',
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'updated_at' => '2020-09-28 20:28:06',
            ),
            20 => 
            array (
                'created_at' => '2020-09-28 20:28:07',
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'updated_at' => '2020-09-28 20:28:07',
            ),
            21 => 
            array (
                'created_at' => '2020-09-28 20:28:07',
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'updated_at' => '2020-09-28 20:28:07',
            ),
            22 => 
            array (
                'created_at' => '2020-09-28 20:28:07',
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'updated_at' => '2020-09-28 20:28:07',
            ),
            23 => 
            array (
                'created_at' => '2020-09-28 20:28:07',
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'updated_at' => '2020-09-28 20:28:07',
            ),
            24 => 
            array (
                'created_at' => '2020-09-28 20:28:08',
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'updated_at' => '2020-09-28 20:28:08',
            ),
            25 => 
            array (
                'created_at' => '2020-09-28 20:28:38',
                'id' => 26,
                'key' => 'browse_categories',
                'table_name' => 'categories',
                'updated_at' => '2020-09-28 20:28:38',
            ),
            26 => 
            array (
                'created_at' => '2020-09-28 20:28:38',
                'id' => 27,
                'key' => 'read_categories',
                'table_name' => 'categories',
                'updated_at' => '2020-09-28 20:28:38',
            ),
            27 => 
            array (
                'created_at' => '2020-09-28 20:28:39',
                'id' => 28,
                'key' => 'edit_categories',
                'table_name' => 'categories',
                'updated_at' => '2020-09-28 20:28:39',
            ),
            28 => 
            array (
                'created_at' => '2020-09-28 20:28:39',
                'id' => 29,
                'key' => 'add_categories',
                'table_name' => 'categories',
                'updated_at' => '2020-09-28 20:28:39',
            ),
            29 => 
            array (
                'created_at' => '2020-09-28 20:28:39',
                'id' => 30,
                'key' => 'delete_categories',
                'table_name' => 'categories',
                'updated_at' => '2020-09-28 20:28:39',
            ),
            30 => 
            array (
                'created_at' => '2020-09-28 20:28:44',
                'id' => 31,
                'key' => 'browse_posts',
                'table_name' => 'posts',
                'updated_at' => '2020-09-28 20:28:44',
            ),
            31 => 
            array (
                'created_at' => '2020-09-28 20:28:45',
                'id' => 32,
                'key' => 'read_posts',
                'table_name' => 'posts',
                'updated_at' => '2020-09-28 20:28:45',
            ),
            32 => 
            array (
                'created_at' => '2020-09-28 20:28:45',
                'id' => 33,
                'key' => 'edit_posts',
                'table_name' => 'posts',
                'updated_at' => '2020-09-28 20:28:45',
            ),
            33 => 
            array (
                'created_at' => '2020-09-28 20:28:45',
                'id' => 34,
                'key' => 'add_posts',
                'table_name' => 'posts',
                'updated_at' => '2020-09-28 20:28:45',
            ),
            34 => 
            array (
                'created_at' => '2020-09-28 20:28:45',
                'id' => 35,
                'key' => 'delete_posts',
                'table_name' => 'posts',
                'updated_at' => '2020-09-28 20:28:45',
            ),
            35 => 
            array (
                'created_at' => '2020-09-28 20:28:49',
                'id' => 36,
                'key' => 'browse_pages',
                'table_name' => 'pages',
                'updated_at' => '2020-09-28 20:28:49',
            ),
            36 => 
            array (
                'created_at' => '2020-09-28 20:28:50',
                'id' => 37,
                'key' => 'read_pages',
                'table_name' => 'pages',
                'updated_at' => '2020-09-28 20:28:50',
            ),
            37 => 
            array (
                'created_at' => '2020-09-28 20:28:50',
                'id' => 38,
                'key' => 'edit_pages',
                'table_name' => 'pages',
                'updated_at' => '2020-09-28 20:28:50',
            ),
            38 => 
            array (
                'created_at' => '2020-09-28 20:28:50',
                'id' => 39,
                'key' => 'add_pages',
                'table_name' => 'pages',
                'updated_at' => '2020-09-28 20:28:50',
            ),
            39 => 
            array (
                'created_at' => '2020-09-28 20:28:50',
                'id' => 40,
                'key' => 'delete_pages',
                'table_name' => 'pages',
                'updated_at' => '2020-09-28 20:28:50',
            ),
            40 => 
            array (
                'created_at' => '2020-09-28 20:29:00',
                'id' => 41,
                'key' => 'browse_hooks',
                'table_name' => NULL,
                'updated_at' => '2020-09-28 20:29:00',
            ),
            41 => 
            array (
                'created_at' => '2020-09-29 11:29:23',
                'id' => 42,
                'key' => 'browse_product_orders',
                'table_name' => 'product_orders',
                'updated_at' => '2020-09-29 11:29:23',
            ),
            42 => 
            array (
                'created_at' => '2020-09-29 11:29:23',
                'id' => 43,
                'key' => 'read_product_orders',
                'table_name' => 'product_orders',
                'updated_at' => '2020-09-29 11:29:23',
            ),
            43 => 
            array (
                'created_at' => '2020-09-29 11:29:23',
                'id' => 44,
                'key' => 'edit_product_orders',
                'table_name' => 'product_orders',
                'updated_at' => '2020-09-29 11:29:23',
            ),
            44 => 
            array (
                'created_at' => '2020-09-29 11:29:23',
                'id' => 45,
                'key' => 'add_product_orders',
                'table_name' => 'product_orders',
                'updated_at' => '2020-09-29 11:29:23',
            ),
            45 => 
            array (
                'created_at' => '2020-09-29 11:29:23',
                'id' => 46,
                'key' => 'delete_product_orders',
                'table_name' => 'product_orders',
                'updated_at' => '2020-09-29 11:29:23',
            ),
            46 => 
            array (
                'created_at' => '2020-09-29 13:01:43',
                'id' => 47,
                'key' => 'browse_orders',
                'table_name' => 'orders',
                'updated_at' => '2020-09-29 13:01:43',
            ),
            47 => 
            array (
                'created_at' => '2020-09-29 13:01:43',
                'id' => 48,
                'key' => 'read_orders',
                'table_name' => 'orders',
                'updated_at' => '2020-09-29 13:01:43',
            ),
            48 => 
            array (
                'created_at' => '2020-09-29 13:01:43',
                'id' => 49,
                'key' => 'edit_orders',
                'table_name' => 'orders',
                'updated_at' => '2020-09-29 13:01:43',
            ),
            49 => 
            array (
                'created_at' => '2020-09-29 13:01:43',
                'id' => 50,
                'key' => 'add_orders',
                'table_name' => 'orders',
                'updated_at' => '2020-09-29 13:01:43',
            ),
            50 => 
            array (
                'created_at' => '2020-09-29 13:01:43',
                'id' => 51,
                'key' => 'delete_orders',
                'table_name' => 'orders',
                'updated_at' => '2020-09-29 13:01:43',
            ),
            51 => 
            array (
                'created_at' => '2020-09-29 13:09:40',
                'id' => 52,
                'key' => 'browse_order_items',
                'table_name' => 'order_items',
                'updated_at' => '2020-09-29 13:09:40',
            ),
            52 => 
            array (
                'created_at' => '2020-09-29 13:09:40',
                'id' => 53,
                'key' => 'read_order_items',
                'table_name' => 'order_items',
                'updated_at' => '2020-09-29 13:09:40',
            ),
            53 => 
            array (
                'created_at' => '2020-09-29 13:09:40',
                'id' => 54,
                'key' => 'edit_order_items',
                'table_name' => 'order_items',
                'updated_at' => '2020-09-29 13:09:40',
            ),
            54 => 
            array (
                'created_at' => '2020-09-29 13:09:40',
                'id' => 55,
                'key' => 'add_order_items',
                'table_name' => 'order_items',
                'updated_at' => '2020-09-29 13:09:40',
            ),
            55 => 
            array (
                'created_at' => '2020-09-29 13:09:40',
                'id' => 56,
                'key' => 'delete_order_items',
                'table_name' => 'order_items',
                'updated_at' => '2020-09-29 13:09:40',
            ),
            56 => 
            array (
                'created_at' => '2020-12-16 14:22:28',
                'id' => 57,
                'key' => 'browse_shops',
                'table_name' => 'shops',
                'updated_at' => '2020-12-16 14:22:28',
            ),
            57 => 
            array (
                'created_at' => '2020-12-16 14:22:28',
                'id' => 58,
                'key' => 'read_shops',
                'table_name' => 'shops',
                'updated_at' => '2020-12-16 14:22:28',
            ),
            58 => 
            array (
                'created_at' => '2020-12-16 14:22:28',
                'id' => 59,
                'key' => 'edit_shops',
                'table_name' => 'shops',
                'updated_at' => '2020-12-16 14:22:28',
            ),
            59 => 
            array (
                'created_at' => '2020-12-16 14:22:28',
                'id' => 60,
                'key' => 'add_shops',
                'table_name' => 'shops',
                'updated_at' => '2020-12-16 14:22:28',
            ),
            60 => 
            array (
                'created_at' => '2020-12-16 14:22:28',
                'id' => 61,
                'key' => 'delete_shops',
                'table_name' => 'shops',
                'updated_at' => '2020-12-16 14:22:28',
            ),
            61 => 
            array (
                'created_at' => '2020-12-16 17:04:30',
                'id' => 62,
                'key' => 'browse_products',
                'table_name' => 'products',
                'updated_at' => '2020-12-16 17:04:30',
            ),
            62 => 
            array (
                'created_at' => '2020-12-16 17:04:30',
                'id' => 63,
                'key' => 'read_products',
                'table_name' => 'products',
                'updated_at' => '2020-12-16 17:04:30',
            ),
            63 => 
            array (
                'created_at' => '2020-12-16 17:04:30',
                'id' => 64,
                'key' => 'edit_products',
                'table_name' => 'products',
                'updated_at' => '2020-12-16 17:04:30',
            ),
            64 => 
            array (
                'created_at' => '2020-12-16 17:04:30',
                'id' => 65,
                'key' => 'add_products',
                'table_name' => 'products',
                'updated_at' => '2020-12-16 17:04:30',
            ),
            65 => 
            array (
                'created_at' => '2020-12-16 17:04:30',
                'id' => 66,
                'key' => 'delete_products',
                'table_name' => 'products',
                'updated_at' => '2020-12-16 17:04:30',
            ),
        ));
        
        
    }
}