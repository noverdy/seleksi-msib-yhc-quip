<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::where('username', '=', 'admin')->first();
        if (is_null($admin)) {
            User::create([
                'username' => 'admin',
                'password' => Hash::make('admin'),
            ]);
        }
    }
}
