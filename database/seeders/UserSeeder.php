<?php

namespace Database\Seeders;

use App\Models\AnakMagang;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
public function run(): void
    {
        // Pastikan direktori penyimpanan tersedia
        Storage::disk('public')->makeDirectory('profile_pictures');

        // Copy dummy.jpg ke folder storage/public/profile_pictures
        $dummyPath = 'profile_pictures/dummy.jpg';
        if (!Storage::disk('public')->exists($dummyPath)) {
            $sourcePath = public_path('dummy.jpg');
            if (file_exists($sourcePath)) {
                Storage::disk('public')->put($dummyPath, file_get_contents($sourcePath));
            }
        }

        // Buat user dummy
         User::create([
            'id' => 1,
            'name'=> 'Admin Kominfo',
            'email'=> 'admin@gmail.com',
            'password'=> 'password',
            'university'=> 'Admin Kominfo',
            'field_of_study'=> 'kominfo',
            'bidang'=>'bidang komunikasi dan teknologi',
            'status'=> 'approved',
            'role_id' => '1',
        ]);
        User::create([
            'name' => 'Mehta Pradnyatama',
            'email' => 'mehta@gmail.com',
            'password' => Hash::make('password'),
            'university' => 'Universitas Teknologi',
            'field_of_study' => 'Teknologi Informasi',
            'bidang' => 'bidang komunikasi dan teknologi',
            'profile_picture' => $dummyPath,
            'role_id' => 2,
            'status' => 'approved',
        ]);
    }
}
