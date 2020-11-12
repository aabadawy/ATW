<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\User;

class MainUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $admin = User::create(['name' => 'Ahmed Badawy',
        //             'email' => 'ahmed@example.com',
        //             'email_verified_at' => now(),
        //             'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        //             'remember_token' => Str::random(10),])->role('admin');
        // $reqular = User::create(['name' => 'Ahmed Badawy',
        //         'email' => 'ahmed@example.com',
        //         'email_verified_at' => now(),
        //         'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        //         'remember_token' => Str::random(10),])->role('admin');

                $user = \App\User::create([
                    'name' => 'Ahmed Badawy',
                    'email' => 'ahmedbadawy@atw.com',
                    'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                ]);
                $user->assignRole('admin');
        
                $user = \App\User::create([
                    'name' => 'Fares',
                    'email' => 'fares@atw.com',
                    'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                ]);
                $user->assignRole('regular');
        
                $user = \App\User::create([
                    'name' => 'Arafa',
                    'email' => 'arafa@atw.com',
                    'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                ]);
                $user->assignRole('regular');
    }
}
