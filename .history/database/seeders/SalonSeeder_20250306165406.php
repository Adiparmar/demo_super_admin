<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Salon;

class SalonSeeder extends Seeder {
    public function run() {
        Salon::create([
            'slug' => 'elite-salon',
            'name' => 'Elite Salon',
            'description' => 'Luxury salon for premium beauty services.',
            'owner_id' => 1,
            'package_id' => 1,
            'address' => '123 Main St, NY',
            'contact_number' => '1234567890',
            'contact_email' => 'elite@example.com',
            'opening_time' => '09:00:00',
            'closing_time' => '21:00:00',
            'gender' => 'unisex',
            'status' => 1
        ]);
    }
}

