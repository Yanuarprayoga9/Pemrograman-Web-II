<?php

namespace Database\Seeders;

use App\Models\Officer;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OfficersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Officer::create(['officer_name' => 'John Doe']);
        Officer::create(['officer_name' => 'Jane Smith']);
    }
}
