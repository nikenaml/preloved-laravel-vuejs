<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class GuestbookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // ini contoh untuk seeder, yaitu mengirinkan data ke database yang nantinya disimpen sebagai bahan contoh oleh Faker
        //insert data ke table pegawai
        // insert data pertama ke database yang nantinya akan di contoh oleh faker
        // DB::table('guestbooks')->insert([
        //     'nama_tamu' => 'Hayyu Safitri',
        //     'email_tamu' => 'hayyusafitri@gmail.com',
        //     'asal_tamu' => 'Universitas Mercu Buana Manajemen 2017',
        //     'nohp_tamu' => '087773334569',
        //     'komentar_tamu' => 'Website interaktif dan sangat mudah untuk diakses, memberikan pengalaman yang asyik saat berbelanja',
        //     'nilai_tamu' => '95'
        // ]);

        // id_ID adalah isi kode negara, sehingga nantinya data data yang diberikan oleh si Faker adalah data dari negara Indonesia, misal nama orang indonesia.
            $faker = Faker::create('id_ID');
            for ($i=1; $i <= 5; $i++){
                DB::table('guestbooks')->insert([
                    'nama_tamu' => $faker->name,
                    'email_tamu' => $faker->unique()->email,
                    'asal_tamu' => $faker->company,
                    'nohp_tamu' => $faker->phoneNumber,
                    'komentar_tamu' => $faker->text,
                    'nilai_tamu' => $faker->numberBetween(80,95)
                ]);
            }
}}