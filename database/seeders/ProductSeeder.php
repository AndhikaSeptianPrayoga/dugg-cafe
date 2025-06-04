<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            // Seasoning
            [
                'name' => 'Gula Aren',
                'description' => 'Gula aren asli untuk mempermanis minuman Anda dengan rasa yang khas dan alami',
                'price' => 5000,
                'category' => 'seasoning',
                'is_active' => true,
            ],
            [
                'name' => 'Sirup Vanilla',
                'description' => 'Sirup vanilla premium untuk menambah aroma dan rasa manis pada minuman',
                'price' => 8000,
                'category' => 'seasoning',
                'is_active' => true,
            ],
            [
                'name' => 'Matcha Powder',
                'description' => 'Bubuk matcha original dari Jepang untuk minuman yang segar dan sehat',
                'price' => 12000,
                'category' => 'seasoning',
                'is_active' => true,
            ],

            // Signature
            [
                'name' => 'Ice Coffee Milk',
                'description' => 'Perpaduan sempurna antara espresso pilihan dengan susu segar yang creamy',
                'price' => 20000,
                'category' => 'signature',
                'is_active' => true,
            ],
            [
                'name' => 'Baby on Black',
                'description' => 'Kopi hitam dengan sentuhan susu yang lembut, cocok untuk pecinta kopi sejati',
                'price' => 17000,
                'category' => 'signature',
                'is_active' => true,
            ],
            [
                'name' => 'Dugg Special Latte',
                'description' => 'Signature latte dengan racikan spesial ala Dugg Coffee yang tidak akan Anda temukan di tempat lain',
                'price' => 25000,
                'category' => 'signature',
                'is_active' => true,
            ],
            [
                'name' => 'Aren Milk Coffee',
                'description' => 'Kombinasi unik kopi pilihan dengan gula aren yang memberikan rasa manis alami',
                'price' => 22000,
                'category' => 'signature',
                'is_active' => true,
            ],

            // Beverages
            [
                'name' => 'Ice Chocolate',
                'description' => 'Minuman cokelat dingin yang creamy dan menyegarkan',
                'price' => 15000,
                'category' => 'beverages',
                'is_active' => true,
            ],
            [
                'name' => 'Hot Americano',
                'description' => 'Kopi hitam panas klasik untuk Anda yang menyukai rasa kopi murni',
                'price' => 18000,
                'category' => 'beverages',
                'is_active' => true,
            ],
            [
                'name' => 'Iced Matcha Latte',
                'description' => 'Minuman matcha segar dengan susu yang creamy, sempurna untuk cuaca panas',
                'price' => 23000,
                'category' => 'beverages',
                'is_active' => true,
            ],
            [
                'name' => 'Fresh Orange Juice',
                'description' => 'Jus jeruk segar yang diperas langsung untuk kesegaran maksimal',
                'price' => 16000,
                'category' => 'beverages',
                'is_active' => true,
            ],

            // Main Course
            [
                'name' => 'Nasi Goreng Spesial',
                'description' => 'Nasi goreng dengan bumbu rahasia dan telur ceplok, dilengkapi acar segar',
                'price' => 28000,
                'category' => 'main-course',
                'is_active' => true,
            ],
            [
                'name' => 'Pasta Aglio Olio',
                'description' => 'Pasta dengan bumbu bawang putih, cabai, dan olive oil yang harum',
                'price' => 32000,
                'category' => 'main-course',
                'is_active' => true,
            ],
            [
                'name' => 'Chicken Katsu Curry',
                'description' => 'Ayam katsu renyah dengan saus kari Jepang yang kaya rasa',
                'price' => 35000,
                'category' => 'main-course',
                'is_active' => true,
            ],
            [
                'name' => 'Fish and Chips',
                'description' => 'Ikan dori crispy dengan kentang goreng dan saus tartar',
                'price' => 30000,
                'category' => 'main-course',
                'is_active' => true,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
