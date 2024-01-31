<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'kode_nik' => 'P001',
                'nama_lengkap' => 'Karyawan A',
                'jabatan' => 'Operator',
                'gaji_pokok' => 12000.00,
                'insentif' => 200000.00
            ],
    
            [
                'kode_nik' => 'P002',
                'nama_lengkap' => 'Karyawan B',
                'jabatan' => 'Operator',
                'gaji_pokok' => 12000.00,
                'insentif' => 200000.00
            ],
    
            [
                'kode_nik' => 'P003',
                'nama_lengkap' => 'Karyawan C',
                'jabatan' => 'Leader',
                'gaji_pokok' => 13000.00,
                'insentif' => 250000.00
            ],
    
            [
                'kode_nik' => 'P004',
                'nama_lengkap' => 'Karyawan D',
                'jabatan' => 'Leader',
                'gaji_pokok' => 13000.00,
                'insentif' => 250000.00
            ],
    
            [
                'kode_nik' => 'P005',
                'nama_lengkap' => 'Karyawan E',
                'jabatan' => 'Leader',
                'gaji_pokok' => 13000.00,
                'insentif' => 250000.00
            ],
    
        ];
        foreach ($data as $d) {
            DB::table('karyawan')->insert($d);
        }
    }
}
