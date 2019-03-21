<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'Admin',
            'email' => 'admin@nontontivi.id',
            'password' => password_hash("paswot", PASSWORD_DEFAULT),
        ]);

        DB::table('channels')->insert([
            'name' => 'SCTV',
            'description' => "SCTV (singkatan dari Surya Citra Televisi) adalah sebuah stasiun televisi swasta nasional di Indonesia. SCTV merupakan stasiun televisi swasta kedua di Indonesia setelah RCTI. SCTV lahir pada tanggal 24 Agustus 1990 sebagai stasiun televisi lokal di Surabaya yang berpusat di Jl. Darmo Permai, Surabaya, Jawa Timur. Meski tanggal itu ditetapkan sebagai tanggal lahir SCTV, namun baru tanggal 1 Januari 1993, SCTV mendapatkan izin sebagai stasiun televisi nasional di Jakarta. Kantor operasional SCTV pun secara bertahap dipindahkan dari Surabaya ke Jakarta, namun studio SCTV tetap berada di Surabaya. Awalnya, mayoritas saham SCTV dimiliki oleh Bimantara Citra melalui anak usahanya, Sindo Citra Media (kini menjadi Surya Citra Media, dengan melakukan merger bersama PT Cipta Aneka Selaras).",
            'website' => "http://www.sctv.co.id",
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('channels')->insert([
            'name' => 'RCTI',
            'description' => "RCTI (singkatan dari Rajawali Citra Televisi Indonesia) adalah stasiun televisi swasta Indonesia pertama. Pada awalnya didirikan sebagai perusahaan patungan dengan kepemilikan saat itu adalah Bimantara Citra (69,82%) dan Rajawali Wirabhakti Utama (30,18%). RCTI pertama mengudara pada 13 November 1988 dan diresmikan 24 Agustus 1989 dan pada waktu itu, siaran RCTI hanya dapat ditangkap oleh pelanggan yang memiliki dekoder dan membayar iuran setiap bulannya. RCTI melepas dekodernya pada akhir 1989. Pemerintah mengizinkan RCTI melakukan siaran bebas secara nasional sejak tahun 1990 tetapi baru terwujud pada akhir 1991 setelah membuat RCTI Bandung pada 1 Mei 1991. Sejak Oktober 2003, RCTI dimiliki oleh Media Nusantara Citra, kelompok perusahaan media yang juga memiliki GTV dan MNCTV. Pada tahun 2004, RCTI termasuk stasiun televisi yang besar di Indonesia. RCTI telah memiliki hak siar atas ajang sepak bola bergengsi Eropa, Euro 2008 bersama GTV dan MNCTV.",
            'website' => "http://www.rcti.tv",
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('channels')->insert([
            'name' => 'MNCTV',
            'description' => "MNCTV (sebelumnya bernama TPI) adalah sebuah stasiun televisi swasta terestrial nasional di Indonesia. Namanya yang sekarang dipergunakan sejak 20 Oktober 2010. MNCTV merupakan stasiun televisi swasta ketiga di Indonesia setelah RCTI dan SCTV. MNCTV didirikan oleh Mbak Tutut dan dulu sebagian besar sahamnya dimiliki oleh PT Cipta Lamtoro Gung Persada.",
            'website' => "http://www.mnctv.com",
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('channels')->insert([
            'name' => 'GTV',
            'description' => "GTV (singkatan dari Global Televisi, sebelumnya bernama Global TV) adalah salah satu stasiun televisi swasta nasional di Indonesia. Berawal dari sebuah stasiun televisi lokal di Jakarta, GTV belakangan meluaskan siaran ke 5 kota besar lainnya. Mulanya, GTV hanya menayangkan acara dari MTV Indonesia dengan durasi 24 jam. Namun sejak 15 Januari 2005, GTV mulai menayangkan acaranya sendiri dengan membagi jam tayang siaran MTV Indonesia menjadi 12 jam.",
            'website' => "http://www.gtv.id",
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('channels')->insert([
            'name' => 'NET',
            'description' => "NET. (singkatan dari News and Entertainment Television) adalah sebuah stasiun televisi swasta terestrial nasional di Indonesia yang didirikan pada 18 Mei 2013 dan resmi diluncurkan pada 26 Mei 2013. NET. menggantikan siaran terestrial Spacetoon yang sebagian sahamnya telah diambil alih oleh Indika Group. Berbeda dengan Spacetoon yang acaranya ditujukan untuk anak-anak, program-program NET. ditujukan kepada keluarga dan pemirsa muda.",
            'website' => "http://www.netmedia.co.id",
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('actors')->insert([
            'name' => 'Baim Wong',
            'biodata' => 'Pria yang bernama asli Muhammad Ibrahim dan bertinggi 176 cm ini adalah anak bungsu dari 5 bersaudara dari pasangan pengusaha Johnny Wong dan Kartini Marta Atmadja. Pada 21 Juli 2018 Baim Wong bertunangan dengan Paula Verhoeven lalu menikah dengannya pada 22 November 2018. ',
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('actors')->insert([
            'name' => 'Kirana Larasati',
            'biodata' => 'Kirana Larasati (lahir di Jakarta, 29 Agustus 1987; umur 31 tahun) adalah aktris Indonesia. Kirana Larasati mulai populer setelah membintangi sinetron Azizah yang ditayangkan SCTV. Ia menjadi Duta Artis Pemberantas Narkoba sejak tahun 2012.',
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('actors')->insert([
            'name' => 'Raffi Ahmad',
            'biodata' => 'Anak sulung dari 3 bersaudara pasangan Munawar Ahmad (alm) dan Amy Qanita ini mengawali kariernya sebagai aktor. Hingga saat ini, Raffi telah terlibat di sejumlah sinetron, FTV dan film layar lebar. Selain menjadi aktor, Raffi mengembangkan kariernya menjadi bintang iklan, presenter dan penyanyi.',
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('productionhouses')->insert([
            'name' => 'Tripar MVP',
            'description' => "Tripar Multivision Plus (sekarang dikenal sebagai MVP Indonesia) adalah perusahaan perfilman didirikan oleh Raam Punjabi. Raam mendirikan MVP pada 18 April 1988 di Jakarta dengan modal 250 juta Rupiah. Produksi pertama MVP adalah serial sinetron komedi Gara-Gara yang diproduksi pada tahun 1991. MVP berdiri sebagai antisipasi perkembangan industri pertelevisian di Indonesia. Hadirnya televisi swasta RCTI menjadi pemikiran MVP untuk menjadi rumah produksi pelopor yang mendukung perkembangan siaran televisi swasta dengan program-programnya.",
            'website' => "http://www.mvpindonesia.com/",
            'address' => "Jakarta, Indonesia",
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('productionhouses')->insert([
            'name' => 'MD Entertainment',
            'description' => "Multi Dimensia Entertainment (atau MD Entertainment; IDX: FILM) adalah sebuah rumah produksi di Indonesia. Multi Dimensia Entertainment didirikan oleh Dhamoo Punjabi yang merupakan adik dari Raam Punjabi bersama putranya Manoj Punjabi.[butuh rujukan] Dhamoo dan Manoj mendirikannya setelah hengkang dari Multivision Plus (sekarang lebih dikenal sebagai MVP Entertainment Indonesia) pada 7 Desember 2002",
            'address' => "Jakarta, Indonesia",
            'website' => "http://www.mdentertainment.co/",
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('productionhouses')->insert([
            'name' => 'Indika Entertainment',
            'description' => "Indika Entertainment merupakan sebuah rumah produksi sinetron dan film di Indonesia. Indika Entertainment didirikan pada tahun 1996 di Jakarta. Indika Entertainment dikenal dengan beberapa sinetronnya yang diadaptasi dari novel karangan Mira W. seperti Cinta dan Cinta Dara Kembar. Saat ini Indika Entertainment menghasilkan pemeran-pemeran di film utamanya seperti Sheila Marcia, Andhika Gumilang, Kamidia Radisti, Julia Perez, dan masih banyak lagi.",
            'address' => "Graha Mitra Lantai 9, Jl. Jendral Gatot Subroto Kav. 21, Jakarta Selatan 12930",
            'created_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
