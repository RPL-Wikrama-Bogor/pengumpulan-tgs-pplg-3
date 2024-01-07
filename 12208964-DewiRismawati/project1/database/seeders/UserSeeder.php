<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    //     user::create([
    //         'name' => 'Administrator',
    //         'email' => 'apotek_admin@gmail.com',
    //         'password' => Hash::make('adminapotek'),
    //         'role' => 'admin',
    //     ]);
    // }

    $data = [
        [
            'nama' => 'Kasir',
            'email' => 'apotek_kasir@gmail.com',
            'password' => Hash::make('kasirapotek'),
            'role' => 'cashier',
        ],
    ];
    User::insert($data);
    }
}
