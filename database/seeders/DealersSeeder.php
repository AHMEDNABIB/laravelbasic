<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dealers;
class DealersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
         for ($i = 1; $i < 11; $i++) {
            Dealers::create([
                'brand_id' => $i,
                'name' => "Dealer Name $i",
                'description' => "Dealer Description $i",
                'location' => "Dealer Location $i",
            ]);
        }
        
    }
}
