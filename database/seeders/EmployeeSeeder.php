<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            'project_name' => 'Pembuatan SI Keuangan',
            'client' => 'amang',
            'project_leader' => 'utuh',
            'foto' => 'P.png',
            'email' => 'Pem@gamil.com',
            'start_date' => '1 juli 2022',
            'end_date' => '4 desember 2022',
            'progress' => '80%'
        ]);
    }
}
