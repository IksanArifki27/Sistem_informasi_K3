<?php

namespace Database\Seeders;

use App\Models\Departemen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartemenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Departemen::create([
        //     ""
        // ])

        // DB::table('departemens')->insert([
        //     ["nama" => "Accounting"],
        //     ["nama" => "Civil"],
        //     ["nama" => "IT"],
        //     ["nama" => "Finance"],
        //     ["nama" => "GA"],
        //     ["nama" => "HRD"],
        //     ["nama" => "HSE"],
        //     ["nama" => "PPIC"],
        //     ["nama" => "Produksi"],
        //     ["nama" => "Purchasing"],
        //     ["nama" => "QA"],
        //     ["nama" => "QC"],
        //     ["nama" => "R&D"],
        //     ["nama" => "Registration"],
        //     ["nama" => "Teknik"],
            
        // ]);
        Departemen::create([
           [ 'nama' => 'R&D',
            'lok_id' => 1],
            ['nama' => 'QC',
            'lok_id' => 2],
            ['nama' => 'QA',
            'lok_id' => 3]
        ]);
    }
}
