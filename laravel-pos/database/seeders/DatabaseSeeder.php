<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Customer::insert([
            ['full_name' => 'Juan Dela Cruz', 'email' => 'juan@example.com', 'phone' => '09123456789', 'created_at' => now(), 'updated_at' => now()],
            ['full_name' => 'Maria Santos', 'email' => 'maria@example.com', 'phone' => '09234567890', 'created_at' => now(), 'updated_at' => now()],
            ['full_name' => 'Pedro Reyes', 'email' => 'pedro@example.com', 'phone' => '09345678901', 'created_at' => now(), 'updated_at' => now()],
            ['full_name' => 'Ana Garcia', 'email' => 'ana@example.com', 'phone' => '09456789012', 'created_at' => now(), 'updated_at' => now()],
            ['full_name' => 'Mark Flores', 'email' => 'mark@example.com', 'phone' => '09567890123', 'created_at' => now(), 'updated_at' => now()],
        ]);

        User::insert([
            ['username' => 'admin', 'full_name' => 'Admin User', 'created_at' => now(), 'updated_at' => now()],
            ['username' => 'cashier1', 'full_name' => 'Cashier One', 'created_at' => now(), 'updated_at' => now()],
            ['username' => 'cashier2', 'full_name' => 'Cashier Two', 'created_at' => now(), 'updated_at' => now()],
            ['username' => 'manager', 'full_name' => 'Manager User', 'created_at' => now(), 'updated_at' => now()],
            ['username' => 'staff', 'full_name' => 'Staff User', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
