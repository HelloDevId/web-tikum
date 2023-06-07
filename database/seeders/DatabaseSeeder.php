<?php

namespace Database\Seeders;

use App\Models\Meja;
use App\Models\Product;
use App\Models\Role;
use App\Models\User;
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
        Role::create([
            'nama' => 'admin',
        ]);

        Role::create([
            'nama' => 'user',
        ]);

        User::create([
            'nama' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'no_hp' => '081111111111',
            'id_role' => 1,
        ]);

        User::create([
            'nama' => 'user',
            'email' => 'user@gmail.com',
            'password' => bcrypt('user'),
            'no_hp' => '081222222222',
            'id_role' => 2,
        ]);

        Meja::create([
            'no_meja' => '1'
        ]);

        Meja::create([
            'no_meja' => '2'
        ]);

        Meja::create([
            'no_meja' => '3'
        ]);

        Meja::create([
            'no_meja' => '4'
        ]);

        Meja::create([
            'no_meja' => '5'
        ]);

        Meja::create([
            'no_meja' => '6'
        ]);

        Meja::create([
            'no_meja' => '7'
        ]);

        Meja::create([
            'no_meja' => '8'
        ]);

        Meja::create([
            'no_meja' => '9'
        ]);

        Meja::create([
            'no_meja' => '10'
        ]);

        Product::create([
            'nama' => 'Food 1',
            'image' => 'product1.jpg',
            'deskripsi' => 'jenis konsumsi yang terdiri dari bahan-bahan yang dapat dikonsumsi manusia untuk memenuhi kebutuhan gizi dan memberikan energi bagi tubuh. Makanan tidak hanya berfungsi sebagai sumber energi, tetapi juga mengandung zat-zat yang diperlukan oleh tubuh untuk menjalankan berbagai fungsi fisiologis.',
            'harga' => 20000,
            'jumlah_terjual' => 200,
            'rating' => 4,
        ]);
        Product::create([
            'nama' => 'Food 2',
            'image' => 'product2.jpg',
            'deskripsi' => 'jenis konsumsi yang terdiri dari bahan-bahan yang dapat dikonsumsi manusia untuk memenuhi kebutuhan gizi dan memberikan energi bagi tubuh. Makanan tidak hanya berfungsi sebagai sumber energi, tetapi juga mengandung zat-zat yang diperlukan oleh tubuh untuk menjalankan berbagai fungsi fisiologis.',
            'harga' => 17000,
            'jumlah_terjual' => 288,
            'rating' => 5,
        ]);
        Product::create([
            'nama' => 'Food 3',
            'image' => 'product3.jpg',
            'deskripsi' => 'jenis konsumsi yang terdiri dari bahan-bahan yang dapat dikonsumsi manusia untuk memenuhi kebutuhan gizi dan memberikan energi bagi tubuh. Makanan tidak hanya berfungsi sebagai sumber energi, tetapi juga mengandung zat-zat yang diperlukan oleh tubuh untuk menjalankan berbagai fungsi fisiologis.',
            'harga' => 23000,
            'jumlah_terjual' => 10,
            'rating' => 3,
        ]);
        Product::create([
            'nama' => 'Food 4',
            'image' => 'product4.jpg',
            'deskripsi' => 'jenis konsumsi yang terdiri dari bahan-bahan yang dapat dikonsumsi manusia untuk memenuhi kebutuhan gizi dan memberikan energi bagi tubuh. Makanan tidak hanya berfungsi sebagai sumber energi, tetapi juga mengandung zat-zat yang diperlukan oleh tubuh untuk menjalankan berbagai fungsi fisiologis.',
            'harga' => 24000,
            'jumlah_terjual' => 200,
            'rating' => 1,
        ]);
        Product::create([
            'nama' => 'Food 5',
            'image' => 'product5.jpg',
            'deskripsi' => 'jenis konsumsi yang terdiri dari bahan-bahan yang dapat dikonsumsi manusia untuk memenuhi kebutuhan gizi dan memberikan energi bagi tubuh. Makanan tidak hanya berfungsi sebagai sumber energi, tetapi juga mengandung zat-zat yang diperlukan oleh tubuh untuk menjalankan berbagai fungsi fisiologis.',
            'harga' => 3000,
            'jumlah_terjual' => 800,
            'rating' => 0,
        ]);
        Product::create([
            'nama' => 'Drink 1',
            'image' => 'product6.jpg',
            'deskripsi' => 'jenis konsumsi yang terdiri dari bahan-bahan yang dapat dikonsumsi manusia untuk memenuhi kebutuhan gizi dan memberikan energi bagi tubuh. Makanan tidak hanya berfungsi sebagai sumber energi, tetapi juga mengandung zat-zat yang diperlukan oleh tubuh untuk menjalankan berbagai fungsi fisiologis.',
            'harga' => 12000,
            'jumlah_terjual' => 80,
            'rating' => 3,
        ]);
        Product::create([
            'nama' => 'Drink 2',
            'image' => 'product7.jpg',
            'deskripsi' => 'jenis konsumsi yang terdiri dari bahan-bahan yang dapat dikonsumsi manusia untuk memenuhi kebutuhan gizi dan memberikan energi bagi tubuh. Makanan tidak hanya berfungsi sebagai sumber energi, tetapi juga mengandung zat-zat yang diperlukan oleh tubuh untuk menjalankan berbagai fungsi fisiologis.',
            'harga' => 22000,
            'jumlah_terjual' => 70,
            'rating' => 2,
        ]);
        Product::create([
            'nama' => 'Drink 3',
            'image' => 'product8.jpg',
            'deskripsi' => 'jenis konsumsi yang terdiri dari bahan-bahan yang dapat dikonsumsi manusia untuk memenuhi kebutuhan gizi dan memberikan energi bagi tubuh. Makanan tidak hanya berfungsi sebagai sumber energi, tetapi juga mengandung zat-zat yang diperlukan oleh tubuh untuk menjalankan berbagai fungsi fisiologis.',
            'harga' => 21000,
            'jumlah_terjual' => 800,
            'rating' => 1,
        ]);
        Product::create([
            'nama' => 'Drink 4',
            'image' => 'product9.jpg',
            'deskripsi' => 'jenis konsumsi yang terdiri dari bahan-bahan yang dapat dikonsumsi manusia untuk memenuhi kebutuhan gizi dan memberikan energi bagi tubuh. Makanan tidak hanya berfungsi sebagai sumber energi, tetapi juga mengandung zat-zat yang diperlukan oleh tubuh untuk menjalankan berbagai fungsi fisiologis.',
            'harga' => 12500,
            'jumlah_terjual' => 80,
            'rating' => 1,
        ]);
        Product::create([
            'nama' => 'Drink 10',
            'image' => 'product10.jpg',
            'deskripsi' => 'jenis konsumsi yang terdiri dari bahan-bahan yang dapat dikonsumsi manusia untuk memenuhi kebutuhan gizi dan memberikan energi bagi tubuh. Makanan tidak hanya berfungsi sebagai sumber energi, tetapi juga mengandung zat-zat yang diperlukan oleh tubuh untuk menjalankan berbagai fungsi fisiologis.',
            'harga' => 16000,
            'jumlah_terjual' => 10,
            'rating' => 5,
        ]);

    }
}
