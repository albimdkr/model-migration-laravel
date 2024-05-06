<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// panggil modelnya yang tadi telah dibuat
use App\Models\Products;

class DummyProducts extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataProducts = [
            [
                'title' => 'Router Cisco',
                'price' => '150.0000',
                'product_code' => '001',
                'description' => 'This is Router',
                'category' => 'Electronic',
            ],
            [
                'title' => 'Fiber Optic Tester KIT',
                'price' => '50.0000',
                'product_code' => '002',
                'description' => 'Testing Fiber Optic',
                'category' => 'Tool',
            ],
            [
                'title' => 'Plant',
                'price' => '30.0000',
                'product_code' => '003',
                'description' => 'This is Plant Nature',
                'category' => 'Furniture',
            ]
        ];

        foreach ($dataProducts as $key => $val) {
            Products::create($val);
        }
    }
}
