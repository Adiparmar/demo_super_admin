<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Package;

class PackageSeeder extends Seeder
{
    public function run()
    {
        Package::insert([
            ['name' => 'Basic', 'price' => 29.99, 'description' => 'Basic package with limited features', 'duration' => 30],
            ['name' => 'Premium', 'price' => 59.99, 'description' => 'Premium package with extra benefits', 'duration' => 60],
            ['name' => 'Enterprise', 'price' => 99.99, 'description' => 'Enterprise package with all features', 'duration' => 90],
        ]);
    }
}
