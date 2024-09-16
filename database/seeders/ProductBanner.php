<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductBanner extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0; $i < 6; $i++) { 
            $banner = new Banner();
            $banner->type = 'product';
            $banner->save();
        }
    }
}
