<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Blog;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $blogs = [
            [
                'title' => 'Tips Ngopi Anti Deg-Degan',
                'slug' => 'tips-ngopi-anti-deg-degan',
                'excerpt' => 'Cara menikmati kopi tanpa deg-degan, cocok buat kamu yang jantungnya agak sensi.',
                'content' => '<h3>1. Pilih Kopi dengan Kadar Kafein Lebih Rendah</h3>
<p>Bukan semua kopi punya kandungan kafein yang sama. Kalau kamu sensitif, coba:</p>
<ul>
<li>Arabica (lebih rendah kafein daripada Robusta)</li>
<li>Cold brew (konsentrat bisa tinggi, tapi bisa diencerkan)</li>
</ul>

<h3>2. Hindari Minum Saat Perut Kosong</h3>
<p>Ngopi sebelum sarapan = badan kaget. Mending isi dulu perut dengan yang ringan supaya kopi nggak langsung ngegas ke sistem pencernaan dan jantungmu.</p>

<h3>3. Batasi Gula dan Susu Berlebih</h3>
<p>Terlalu banyak gula bisa bikin efek \'crash\' setelahnya. Coba pesan kopi susu less sugar atau minta versi low-fat — tetap nikmat, tetap aman.</p>

<h3>4. Coba Menu Non-Kopi</h3>
<p>Kalau kamu udah coba semua dan masih deg-degan — mungkin memang perlu break dari kafein. Di Dugg, kamu bisa nikmatin menu lain yang tetap enak:</p>
<ul>
<li>Charcoal mocktail (Baby on Black)</li>
<li>Peach tea</li>
<li>Chocolate drink</li>
</ul>

<p><strong>Intinya:</strong> Ngopi itu buat dinikmatin, bukan buat bikin panik. Kenali tubuhmu, pilih menu yang sesuai, dan jangan ragu eksplor opsi lain. Kopi aman = hati tenang.</p>',
                'image' => null,
                'is_active' => true,
            ],
            [
                'title' => 'Sejarah Kopi di Indonesia',
                'slug' => 'sejarah-kopi-di-indonesia',
                'excerpt' => 'Perjalanan kopi dari Belanda hingga menjadi bagian penting budaya Indonesia.',
                'content' => '<h3>Awal Mula Kopi Masuk Indonesia</h3>
<p>Kopi pertama kali masuk ke Indonesia pada abad ke-17 melalui VOC (Vereenigde Oostindische Compagnie). Tanaman kopi arabica pertama ditanam di Jawa pada tahun 1696.</p>

<h3>Perkembangan Perkebunan Kopi</h3>
<p>Indonesia berkembang menjadi salah satu penghasil kopi terbesar di dunia. Daerah-daerah seperti Jawa, Sumatera, dan Sulawesi menjadi pusat perkebunan kopi yang terkenal.</p>

<h3>Kopi dalam Budaya Indonesia</h3>
<p>Kopi tidak hanya minuman, tapi sudah menjadi bagian dari budaya sosial masyarakat Indonesia. Dari warung kopi tradisional hingga coffee shop modern, semua punya tempat di hati pecinta kopi.</p>

<p><strong>Hari ini:</strong> Indonesia bangga sebagai produsen kopi keempat terbesar di dunia, dengan berbagai varietas unik yang diakui internasional.</p>',
                'image' => null,
                'is_active' => true,
            ],
            [
                'title' => 'Cara Seduh Kopi Manual yang Sempurna',
                'slug' => 'cara-seduh-kopi-manual-yang-sempurna',
                'excerpt' => 'Panduan lengkap untuk membuat kopi manual brewing di rumah dengan alat sederhana.',
                'content' => '<h3>Alat yang Dibutuhkan</h3>
<ul>
<li>V60 atau dripper manual</li>
<li>Filter paper</li>
<li>Grinder manual atau elektrik</li>
<li>Timbangan digital</li>
<li>Gooseneck kettle</li>
</ul>

<h3>Langkah-langkah Brewing</h3>
<p><strong>1. Persiapan:</strong> Panaskan air hingga 90-96°C. Giling kopi dengan tekstur medium-fine.</p>
<p><strong>2. Rinse filter:</strong> Basuh filter paper dengan air panas untuk menghilangkan rasa kertas.</p>
<p><strong>3. Blooming:</strong> Tuang air 2x berat kopi, tunggu 30-45 detik.</p>
<p><strong>4. Brewing:</strong> Tuang air secara perlahan dengan gerakan melingkar dari tengah ke luar.</p>

<h3>Tips Pro</h3>
<ul>
<li>Ratio kopi:air = 1:15 hingga 1:17</li>
<li>Total waktu brewing 3-4 menit</li>
<li>Gunakan kopi yang fresh roasted (1-2 minggu setelah roasting)</li>
</ul>

<p>Dengan latihan, kamu bisa bikin kopi rumahan yang nggak kalah sama coffee shop favorit!</p>',
                'image' => null,
                'is_active' => true,
            ],
            [
                'title' => 'Mengenal Berbagai Jenis Roasting Kopi',
                'slug' => 'mengenal-berbagai-jenis-roasting-kopi',
                'excerpt' => 'Dari light roast hingga dark roast, setiap tingkat roasting punya karakteristik rasa yang unik.',
                'content' => '<h3>Light Roast</h3>
<p>Warna coklat muda dengan permukaan kering. Mempertahankan karakter asli biji kopi dengan keasaman yang tinggi dan rasa fruity yang menonjol.</p>

<h3>Medium Roast</h3>
<p>Warna coklat sedang dengan sedikit minyak di permukaan. Balance antara keasaman dan body, cocok untuk semua metode brewing.</p>

<h3>Medium-Dark Roast</h3>
<p>Warna coklat gelap dengan permukaan agak berminyak. Rasa roasting mulai dominan, keasaman berkurang, body lebih full.</p>

<h3>Dark Roast</h3>
<p>Warna sangat gelap dengan permukaan berminyak. Rasa roasting sangat dominan, hampir tidak ada keasaman, body sangat full dan bold.</p>

<h3>Pilih Sesuai Selera</h3>
<p>Tidak ada yang benar atau salah dalam memilih tingkat roasting. Semuanya tergantung preferensi personal dan metode brewing yang digunakan.</p>

<p><strong>Di Dugg Coffee,</strong> kami menggunakan berbagai tingkat roasting untuk memberikan pengalaman rasa yang beragam sesuai selera kamu.</p>',
                'image' => null,
                'is_active' => true,
            ],
            [
                'title' => 'Coffee Shop Culture di Indonesia',
                'slug' => 'coffee-shop-culture-di-indonesia',
                'excerpt' => 'Bagaimana coffee shop menjadi ruang sosial baru di era modern Indonesia.',
                'content' => '<h3>Evolusi dari Warung Kopi</h3>
<p>Dari warung kopi tradisional yang jadi tempat ngobrol bapak-bapak, kini coffee shop modern menjadi ruang sosial lintas generasi.</p>

<h3>Third Place Concept</h3>
<p>Coffee shop berfungsi sebagai "third place" - tempat antara rumah dan kantor di mana orang bisa bersantai, bekerja, atau bersosialisasi.</p>

<h3>Generasi Milenial dan Gen Z</h3>
<p>Coffee shop menjadi favorite workspace untuk freelancer, tempat meeting informal, atau sekadar hang out sambil nikmati specialty coffee.</p>

<h3>Dugg Coffee sebagai Community Space</h3>
<p>Di Dugg, kami menciptakan atmosfer yang welcoming untuk semua kalangan. Dengan fasilitas seperti:</p>
<ul>
<li>WiFi kencang untuk yang mau kerja</li>
<li>Game corner untuk yang mau santai</li>
<li>Meeting room untuk diskusi grup</li>
<li>Fish pond untuk yang butuh suasana tenang</li>
</ul>

<p>Karena buat kami, coffee shop bukan cuma tentang kopi - tapi tentang menciptakan ruang di mana semua orang merasa nyaman.</p>',
                'image' => null,
                'is_active' => true,
            ]
        ];

        foreach ($blogs as $blog) {
            Blog::create($blog);
        }
    }
}
