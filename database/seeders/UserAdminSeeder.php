<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Administrator',
            'email' => 'admin@admin.com',
            'password' => $this->generatePassword(),
        ];

        $user = User::updateOrCreate(['email' => $data['email']], $data);

        // assign to super admin role
        $user->assignRole('super admin');
    }

    /**
     * Generate the password for the admin.
     */
    private function generatePassword()
    {
        $password = app()->isProduction()
            ? \Illuminate\Support\Str::random(16)
            : 'password';

        return Hash::make($password);
    }
}
