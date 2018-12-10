<?php

use Illuminate\Database\Seeder;
use App\Balance;


class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        DB::table('roles')->truncate();
        DB::table('role_users')->truncate();
        $role = [
            'name' => 'Admin',
            'slug' => 'admin',
            'permissions' => [
                'admin' => true,
            ]
        ];
        $adminRole = Sentinel::getRoleRepository()->createModel()->fill($role)->save();
        $subscribersRole = [
            'name' => 'Subscribers',
            'slug' => 'subscribers',
        ];
        Sentinel::getRoleRepository()->createModel()->fill($subscribersRole)->save();

        $admin = [
            'username' => 'admin',
            'email'    => 'admin@admin.com',
            'first_name' => 'admin',
            'last_name' => 'admin',
            'phone' => '07067875047',
            'password' => 'admin111222',
        ];


        $adminUser = Sentinel::registerAndActivate($admin);
        $adminUser->roles()->attach($adminRole);

    }
}
