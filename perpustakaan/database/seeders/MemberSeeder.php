<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Import Model BOOK
use App\Models\Member;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Member::create([
            'name' => 'Siti Nurhalizah',
            'email' => 'halizahhhh@gmail.com',
            'gender' => 'Wanita',
            'status' => 'Mahasiswa',
            'address' => 'Bogor',
        ]);
    }
}
