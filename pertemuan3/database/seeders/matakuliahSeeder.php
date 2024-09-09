<?php

namespace Database\Seeders;
use Faker\Factory as Faker;
use App\Models\User;
use illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class matakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
      
            \DB::table('mata_kuliahs')->insert([
                'kodeMataKuliah' => 'SYS001',
                'namaMataKuliah' => 'Komputer dan Masyarakat',
                'sks' => '3'
            ]);
            \DB::table('mata_kuliahs')->insert([
                'kodeMataKuliah' => 'SYS002',
                'namaMataKuliah' => 'Algoritma dan Pemrograman',
                'sks' => '3'
            ]);
            \DB::table('mata_kuliahs')->insert([
                'kodeMataKuliah' => 'SYS003',
                'namaMataKuliah' => 'Pemrograman Web',
                'sks' => '3'
            ]);
            \DB::table('mata_kuliahs')->insert([
                'kodeMataKuliah' => 'SYS004',
                'namaMataKuliah' => 'Basis Data',
                'sks' => '3'
            ]);
        
        //
    }
}
