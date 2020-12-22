<?php

use Illuminate\Database\Seeder;

class DataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            0 => 
            array (
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',
                'created_at' => '2020-09-28 20:27:53',
                'description' => '',
                'details' => NULL,
                'display_name_plural' => 'Users',
                'display_name_singular' => 'User',
                'generate_permissions' => 1,
                'icon' => 'voyager-person',
                'id' => 1,
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'name' => 'users',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'server_side' => 0,
                'slug' => 'users',
                'updated_at' => '2020-09-28 20:27:53',
            ),
            1 => 
            array (
                'controller' => '',
                'created_at' => '2020-09-28 20:27:53',
                'description' => '',
                'details' => NULL,
                'display_name_plural' => 'Menus',
                'display_name_singular' => 'Menu',
                'generate_permissions' => 1,
                'icon' => 'voyager-list',
                'id' => 2,
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'name' => 'menus',
                'policy_name' => NULL,
                'server_side' => 0,
                'slug' => 'menus',
                'updated_at' => '2020-09-28 20:27:53',
            ),
            2 => 
            array (
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController',
                'created_at' => '2020-09-28 20:27:53',
                'description' => '',
                'details' => NULL,
                'display_name_plural' => 'Roles',
                'display_name_singular' => 'Role',
                'generate_permissions' => 1,
                'icon' => 'voyager-lock',
                'id' => 3,
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'name' => 'roles',
                'policy_name' => NULL,
                'server_side' => 0,
                'slug' => 'roles',
                'updated_at' => '2020-09-28 20:27:53',
            ),
            3 => 
            array (
                'controller' => '',
                'created_at' => '2020-09-28 20:28:35',
                'description' => '',
                'details' => NULL,
                'display_name_plural' => 'Categories',
                'display_name_singular' => 'Category',
                'generate_permissions' => 1,
                'icon' => 'voyager-categories',
                'id' => 4,
                'model_name' => 'TCG\\Voyager\\Models\\Category',
                'name' => 'categories',
                'policy_name' => NULL,
                'server_side' => 0,
                'slug' => 'categories',
                'updated_at' => '2020-09-28 20:28:35',
            ),
            4 => 
            array (
                'controller' => '',
                'created_at' => '2020-09-28 20:28:40',
                'description' => '',
                'details' => NULL,
                'display_name_plural' => 'Posts',
                'display_name_singular' => 'Post',
                'generate_permissions' => 1,
                'icon' => 'voyager-news',
                'id' => 5,
                'model_name' => 'TCG\\Voyager\\Models\\Post',
                'name' => 'posts',
                'policy_name' => 'TCG\\Voyager\\Policies\\PostPolicy',
                'server_side' => 0,
                'slug' => 'posts',
                'updated_at' => '2020-09-28 20:28:40',
            ),
            5 => 
            array (
                'controller' => '',
                'created_at' => '2020-09-28 20:28:46',
                'description' => '',
                'details' => NULL,
                'display_name_plural' => 'Pages',
                'display_name_singular' => 'Page',
                'generate_permissions' => 1,
                'icon' => 'voyager-file-text',
                'id' => 6,
                'model_name' => 'TCG\\Voyager\\Models\\Page',
                'name' => 'pages',
                'policy_name' => NULL,
                'server_side' => 0,
                'slug' => 'pages',
                'updated_at' => '2020-09-28 20:28:46',
            ),
            6 => 
            array (
                'controller' => NULL,
                'created_at' => '2020-09-29 11:29:23',
                'description' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'display_name_plural' => 'Product Orders',
                'display_name_singular' => 'Product Order',
                'generate_permissions' => 1,
                'icon' => 'voyager-window-list',
                'id' => 7,
                'model_name' => 'App\\ProductOrder',
                'name' => 'product_orders',
                'policy_name' => NULL,
                'server_side' => 1,
                'slug' => 'product-orders',
                'updated_at' => '2020-10-13 06:19:30',
            ),
            7 => 
            array (
                'controller' => NULL,
                'created_at' => '2020-09-29 13:01:43',
                'description' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'display_name_plural' => 'Orders',
                'display_name_singular' => 'Order',
                'generate_permissions' => 1,
                'icon' => 'voyager-basket',
                'id' => 8,
                'model_name' => 'App\\Order',
                'name' => 'orders',
                'policy_name' => NULL,
                'server_side' => 1,
                'slug' => 'orders',
                'updated_at' => '2020-09-29 13:08:08',
            ),
            8 => 
            array (
                'controller' => NULL,
                'created_at' => '2020-09-29 13:09:40',
                'description' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'display_name_plural' => 'Order Items',
                'display_name_singular' => 'Order Item',
                'generate_permissions' => 1,
                'icon' => NULL,
                'id' => 10,
                'model_name' => NULL,
                'name' => 'order_items',
                'policy_name' => NULL,
                'server_side' => 1,
                'slug' => 'order-items',
                'updated_at' => '2020-09-29 13:09:40',
            ),
            9 => 
            array (
                'controller' => 'App\\Http\\Controllers\\Admin\\ShopController',
                'created_at' => '2020-12-16 14:22:28',
                'description' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'display_name_plural' => 'Shops',
                'display_name_singular' => 'Shop',
                'generate_permissions' => 1,
                'icon' => NULL,
                'id' => 11,
                'model_name' => 'App\\Shop',
                'name' => 'shops',
                'policy_name' => '\\App\\Policies\\ShopPolicy',
                'server_side' => 0,
                'slug' => 'shops',
                'updated_at' => '2020-12-16 15:04:07',
            ),
            10 => 
            array (
                'controller' => 'App\\Http\\Controllers\\Admin\\ProductController',
                'created_at' => '2020-12-16 17:04:30',
                'description' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'display_name_plural' => 'Products',
                'display_name_singular' => 'Product',
                'generate_permissions' => 1,
                'icon' => NULL,
                'id' => 12,
                'model_name' => 'App\\Product',
                'name' => 'products',
                'policy_name' => '\\App\\Policies\\ProductPolicy',
                'server_side' => 0,
                'slug' => 'products',
                'updated_at' => '2020-12-16 17:50:00',
            ),
        ));
        
        
    }
}