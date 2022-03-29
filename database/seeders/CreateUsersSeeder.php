<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;



class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'is_admin' => '1',
                'role' => 'Super Admin',
                'no_hp' => '082216136564',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Cahyo',
                'email' => 'cahyo@gmail.com',
                'is_admin' => '1',
                'role' => 'Moservicer',
                'no_hp' => '082216136564',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Brahim',
                'email' => 'brahim@gmail.com',
                'is_admin' => '1',
                'role' => 'Moservicer',
                'no_hp' => '082216136564',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Fitria',
                'email' => 'fitria@gmail.com',
                'is_admin' => '1',
                'role' => 'Moservicer',
                'no_hp' => '082216136564',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Dewi',
                'email' => 'dewi@gmail.com',
                'is_admin' => '1',
                'role' => 'Real Lander',
                'no_hp' => '082216136564',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Wulandari',
                'email' => 'wulandari@gmail.com',
                'is_admin' => '1',
                'role' => 'Real Lander',
                'no_hp' => '082216136564',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Muhammad Rizal Bimantoro',
                'email' => 'rebimantoro@gmail.com',
                'is_admin' => '0',
                'role' => 'Customer',
                'no_hp' => '082216136564',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Edbert Salim',
                'email' => 'edbertsalim@gmail.com',
                'is_admin' => '0',
                'role' => 'Customer',
                'no_hp' => '082216136564',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Kanza Azzahra',
                'email' => 'kanza@gmail.com',
                'is_admin' => '0',
                'role' => 'Customer',
                'no_hp' => '082216136564',
                'password' => bcrypt('123456'),
            ],


        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
