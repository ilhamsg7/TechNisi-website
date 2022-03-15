<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $admin = [
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'username' => 'admin',
            'id_role' => 1,
            'password' => bcrypt('admin123'),
        ];
        DB::table('user')->insert($admin);
        User::factory(70)->create();
    }
}