<?php

namespace Database\Seeders;

use App\Models\Lokasi;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LokasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lokasis')->insert([
            ["nama" => "Boiler"],
           ["nama" => "Cuci botol"],
           ["nama" => "Gudang Bahan 1"],
           ["nama" => "Gudang Bahan 2"],
           ["nama" => "Gudang Jadi"],
           ["nama" => "Gudang Kemas"],
           ["nama" => "Gudang Policello"],
           ["nama" => "Household"],
           ["nama" => "Kantin"],
           ["nama" => "Kantor Lt 1"],
           ["nama" => "Kantor Lt 2"],
           ["nama" => "Lab WWTP"],
           ["nama" => "NBL (Campur)"],
           ["nama" => "NBL (Injeksi)"],
           ["nama" => "NBL (Kapsul, coating, cetak, tablet)"],
           ["nama" => "NBL (R. Timbang)"],
           ["nama" => "NBL (Semisolid)"],
           ["nama" => "NBL Ged baru Lt 1 (kemas)"],
           ["nama" => "NBL Ged baru Lt 1 (Produksi)"],
           ["nama" => "Pengemas sirup"],
           ["nama" => "Pengepakan Injeksi"],
           ["nama" => "Pengepakan Padat"],
           ["nama" => "Penisiilin (Steril)"],
           ["nama" => "Penisiilin (Kemas)"],
           ["nama" => "Pos Security"],
           ["nama" => "Produksi Sirup"],
           ["nama" => "QA"],
           ["nama" => "QC Lt 2"],
           ["nama" => "QC Lt 5"],
           ["nama" => "QC Lt 6"],
           ["nama" => "R&D lama Lt1"],
           ["nama" => "R&D lama Lt1"],
           ["nama" => "R&D lama Lt1"],
           ["nama" => "R&D Lt7"],
           ["nama" => "R&D Lt9"],
           ["nama" => "Ruang Panel Listrik"],
           ["nama" => "Sefa Kemas (Lt 2)"],
           ["nama" => "Sefa Steril (Lt 2)"],
           ["nama" => "Teknik (Kantor)"],
           ["nama" => "Teknik (Workshop)"],
           ["nama" => "TPS LB3"],
        ]);
        // Lokasi::insert([
        //    ["nama" => "Boiler"],
        //    ["nama" => "Cuci botol"],
        //    ["nama" => "Gudang Bahan 1"],
        //    ["nama" => "Gudang Bahan 2"],
        //    ["nama" => "Gudang Kemas"],
        //    ["nama" => "Gudang Policello"],
        //    ["nama" => "Household"],
        //    ["nama" => "Kantin"],
        //    ["nama" => "Kantor Lt 1"],
        //    ["nama" => "Kantor Lt 2"],
        //    ["nama" => "Lab WWTP"],
        //    ["nama" => "NBL (Campur)"],
        //    ["nama" => "NBL (Injeksi)"],
        //    ["nama" => "NBL (Kapsul, coating, cetak, tablet)"],
        //    ["nama" => "NBL (R. Timbang)"],
        //    ["nama" => "NBL (Semisolid)"],
        //    ["nama" => "NBL Ged baru Lt 1 (kemas)"],
        //    ["nama" => "NBL Ged baru Lt 1 (Produksi)"],
        //    ["nama" => "Pengemas sirup"],
        //    ["nama" => "Pengepakan Injeksi"],
        //    ["nama" => "Pengepakan Padat"],
        //    ["nama" => "Penisiilin (Steril)"],
        //    ["nama" => "Penisiilin (Kemas)"],
        //    ["nama" => "Pos Security"],
        //    ["nama" => "Produksi Sirup"],
        //    ["nama" => "QA"],
        //    ["nama" => "QC Lt 2"],
        //    ["nama" => "QC Lt 5"],
        //    ["nama" => "QC Lt 6"],
        //    ["nama" => "R&D lama Lt1"],
        //    ["nama" => "R&D lama Lt1"],
        //    ["nama" => "R&D lama Lt1"],
        //    ["nama" => "R&D Lt7"],
        //    ["nama" => "R&D Lt9"],
        //    ["nama" => "Ruang Panel Listrik"],
        //    ["nama" => "Sefa Kemas (Lt 2)"],
        //    ["nama" => "Sefa Steril (Lt 2)"],
        //    ["nama" => "Teknik (Kantor)"],
        //    ["nama" => "Teknik (Workshop)"],
        //    ["nama" => "TPS LB3"],
        //    ["nama" => "Gudang Jadi"],
        // ]);
    }
}
