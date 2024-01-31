<?php

namespace App\Exports;

use App\Models\KaryawanModel;
use Maatwebsite\Excel\Concerns\FromCollection;

class KaryawanExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return KaryawanModel::all();
    }

    public function headings(): array {
        return [
            'Kode NIK',
            'Nama Lengkap',
            'Jabatan',
            'Gaji Pokok',
            'Insentif',
            'Created At',
            'Updated At',
        ];
    }
}
