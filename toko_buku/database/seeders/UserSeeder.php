<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'nama' => 'Admin',
            'alamat' => 'Pasir muncang',
            'telpon' => '081398878540',
            'status' => 'aktif',
            'username' => 'admin',
            'password' => bcrypt('admin123'),
            'akses' => 'admin',
        ]);

        User::insert([
            'nama' => 'Manager',
            'alamat' => 'sukabumi',
            'telpon' => '085187362581',
            'status' => 'aktif',
            'username' => 'manager',
            'password' => bcrypt('manager123'),
            'akses' => 'manager',
        ]);

        User::insert([
            'nama' => 'kasir',
            'alamat' => 'caringin',
            'telpon' => '087870332',
            'status' => 'aktif',
            'username' => 'kasir',
            'password' => bcrypt('kasir123'),
            'akses' => 'kasir',
        ]);

    }
}
