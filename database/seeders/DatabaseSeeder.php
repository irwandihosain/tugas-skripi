<?php

namespace Database\Seeders;

use App\Models\Dosen;
use App\Models\Fakultas;
use App\Models\Hari;
use App\Models\Kelas;
use App\Models\Matakuliah;
use App\Models\Pertemuan;
use App\Models\RealMatakuliah;
use App\Models\Ruangan;
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
        User::create([
            "nama" => "irwandi hosain",
            "email" => "irwandihhosain@gmail.com",
            "password" => bcrypt('12345'),
        ]);

        User::create([
            "nama" => "tom cruise",
            "email" => "tomcruise@gmail.com",
            "password" => bcrypt('12345'),
        ]);

        User::create([
            "nama" => "jennifer anniston",
            "email" => "jenniferanniston@gmail.com",
            "password" => bcrypt('12345'),
        ]);

        Ruangan::create([
            "nama" => "401",
        ]);
        Ruangan::create([
            "nama" => "402",
        ]);
        Ruangan::create([
            "nama" => "403",
        ]);

        Dosen::create([
            "nama" => "axel",
            "email" => "axel@gmail.com",
            "password" => bcrypt('12345'),
        ]);

        Dosen::create([
            "nama" => "irwandi",
            "email" => "irwandi@gmail.com",
            "password" => bcrypt('12345'),
        ]);

        Dosen::create([
            "nama" => "tom",
            "email" => "tom@gmail.com",
            "password" => bcrypt('12345'),
        ]);

        Kelas::create([
            "nama" => "Teknik Elektro 1",
        ]);

        Kelas::create([
            "nama" => "Teknik Elektro 2",
        ]);

        Kelas::create([
            "nama" => "Teknik Elektro 3",
        ]);

        Pertemuan::create([
            "nama" => "1",
        ]);

        Pertemuan::create([
            "nama" => "2",
        ]);

        Pertemuan::create([
            "nama" => "3",
        ]);

        Hari::create([
            "nama" => "Senin",
        ]);

        Hari::create([
            "nama" => "Selasa",
        ]);

        Hari::create([
            "nama" => "Rabu",
        ]);

        RealMatakuliah::create([
            "nama" => "Bahasa Indonesia",
        ]);

        RealMatakuliah::create([
            "nama" => "Matematika",
        ]);
        RealMatakuliah::create([
            "nama" => "Programming",
        ]);

        Fakultas::create([
            "nama" => "Teknik",
        ]);

        Fakultas::create([
            "nama" => "Ekonomi dan Ilmu Sosial",
        ]);
    }
}
