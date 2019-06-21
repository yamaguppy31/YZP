<?php

use Illuminate\Database\Seeder;

class AdminMenuSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        DB::table('admin_menu')->truncate();
        $data_list = [
            //Admin デフォルト
//            [1, 0, 1, "Dashboard", "fa-bar-chart", "/", NULL],
            [2, 0, 99, "Admin", "fa-tasks", NULL, NULL],
            [3, 2, 3, "Users,fa-users", "auth/users", NULL],
            [4, 2, 4, "Roles", "fa-user", "auth/roles", NULL],
            [5, 2, 5, "Permission", "fa-ban", "auth/permissions", NULL],
            [6, 2, 6, "Menu", "fa-bars", "auth/menu", NULL],
            [7, 2, 7, "Operation log", "fa-history", "auth/logs", NULL],


        ];
        foreach ($data_list as $data) {
            DB::table('admin_menu')->insert([
                'id' => $data[0],
                'parent_id' => $data[1],
                'order' => $data[2],
                'title' => $data[3],
                'icon' => $data[4],
                'uri' => $data[5],
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL
            ]);
        }
    }
}