<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'menu'=>'Cumi Tepung',
            'harga'=>'30000',
            'gambar'=>'image/cumi tepung.jpg',
        ]); 

        User::create([
            'menu'=>'Cumi Bakar',
            'harga'=>'35000',
            'gambar'=>'image/cumi bakar.jpg',
        ]); 

        User::create([
            'menu'=>'Cumi Cabe Garam',
            'harga'=>'35000',
            'gambar'=>'image/cumi cabe garam.jpg',
        ]); 

        User::create([
            'menu'=>'Cah Kailan',
            'harga'=>'20000',
            'gambar'=>'image/cah kailan.jpg',
        ]); 

        User::create([
            'menu'=>'Tahu Goreng',
            'harga'=>'10000',
            'gambar'=>'image/tahu-goreng.jpg',
        ]); 

        User::create([
            'menu'=>'Cah Taoge',
            'harga'=>'15000',
            'gambar'=>'image/cah toge.jpg',
        ]); 

        User::create([
            'menu'=>'Kerang Bambu',
            'harga'=>'25000',
            'gambar'=>'image/kerang-bambu.jpg',
        ]); 

        User::create([
            'menu'=>'Kepiting Padang',
            'harga'=>'40000',
            'gambar'=>'image/kepiting padang.jpg',
        ]); 

        User::create([
            'menu'=>'Gurame Asam Manis',
            'harga'=>'69000',
            'gambar'=>'image/gurame asam manis.jpg',
        ]); 

        User::create([
            'menu'=>'Udang Bakar',
            'harga'=>'35000',
            'gambar'=>'image/udang-bakar.jpg',
        ]); 
        
        User::create([
            'menu'=>'Udang Saos Padang',
            'harga'=>'35000',
            'gambar'=>'image/udang-saos-padang.jpg',
        ]); 

        User::create([
            'menu'=>'Udang Mayo',
            'harga'=>'35000',
            'gambar'=>'image/udang-mayo.jpg',
        ]); 

        User::create([
            'menu'=>'Iced Tea',
            'harga'=>'5000',
            'gambar'=>'image/iced tea.jpg',
        ]); 

        User::create([
            'menu'=>'Es Jeruk Nipis',
            'harga'=>'10000',
            'gambar'=>'image/es jeruk nipis.jpg',
        ]); 

        User::create([
            'menu'=>'Nasi Putih',
            'harga'=>'0',
            'gambar'=>'image/nasi-putih.jpg',
        ]); 

        
    }
}
