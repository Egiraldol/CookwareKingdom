<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SuperUserSeeder extends Seeder
{
    public function run(): void
    {
        $email = 'admin@gmail.com';
        
        // Check if the user exists
        $user = User::where('email', $email)->first();

        if ($user) {
            // Check if the user has dependent records in the orders table
            $hasDependencies = DB::table('orders')->where('user_id', $user->id)->exists();
            if ($hasDependencies) {
                $this->command->info("User with email $email has dependent records in the orders table. Skipping deletion.");
            } else {
                $user->delete();
            }
        }

        // Create or update the super user
        User::updateOrCreate(
            ['email' => $email],
            [
                'name' => 'Admin',
                'password' => Hash::make('12345678'), // Change the password accordingly
                'role' => 'admin',
                'balance' => 5000,
            ]
        );
    }
}
