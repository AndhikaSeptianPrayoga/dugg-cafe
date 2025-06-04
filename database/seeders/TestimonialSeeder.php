<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Testimonial;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testimonials = [
            [
                'name' => 'Sate Bangkong',
                'rating' => 5,
                'description' => 'lokasinya pinggir jalan tempatnya adem ada kolam ikan, rekomendasi kalau kesini harus banget pesen ice coffee strawberry woii💖💖',
                'is_active' => true,
            ],
            [
                'name' => 'Ghiffarin Kintan',
                'rating' => 5,
                'description' => 'Tempat yang bagus untuk hangout atau bahkan sekedar bersantai. Minuman yang direkomendasikan : Susu Aren, Latte, Arang, Es Kopi Strawberry. Matchanya juga enak.',
                'is_active' => true,
            ],
            [
                'name' => 'Hana Muthia Izzaty',
                'rating' => 5,
                'description' => 'Es kopi originalnya enak, creamy. kalo boleh saran, untuk menunya dibikin lebih bold, terus qr codenya di print-out aja supaya lebih gampang. thank you!',
                'is_active' => true,
            ],
            [
                'name' => 'M Alfin Fauzi Akbar',
                'rating' => 5,
                'description' => 'Tempat kopi yang nyaman deh di gerlong! Ada parkiran juga ga susah parkir, strategis deket kampus juga cocok buat ngopi santai atau nugas.',
                'is_active' => true,
            ],
            [
                'name' => 'Dinda Permata',
                'rating' => 4,
                'description' => 'Suasana cozy banget, makanannya juga enak. Cuma agak lama aja nunggu ordernya. Overall recommended!',
                'is_active' => true,
            ],
            [
                'name' => 'Rizky Pratama',
                'rating' => 5,
                'description' => 'Perfect place buat WFH! WiFi kenceng, tempat nyaman, dan kopinya mantap. Sering banget kesini sama tim.',
                'is_active' => true,
            ],
            [
                'name' => 'Sari Dewi',
                'rating' => 4,
                'description' => 'Dessertnya juara! Tiramisu sama browniesnya recommended banget. Kopinya juga ga kalah enak.',
                'is_active' => false,
            ],
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }
    }
}
