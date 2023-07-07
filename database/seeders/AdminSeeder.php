<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create Admin Seeder
        $admin = Admin::where('email','admin@gmail.com')->first();

        if(is_null($admin)){
            $admin = new Admin();
            $admin->username = "Admin";
            $admin->email = "admin@gmail.com";
            $admin->password = Hash::make('admin');

            $admin->save();
        }
    }
}
