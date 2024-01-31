<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KaryawanModel;
use App\Exports\KaryawanExport;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;

class KaryawanController extends Controller
{
    public function index()
    {
        $karyawanmodel = KaryawanModel::all();
        return view('karyawan',compact('karyawanmodel'));    
    }

    public function tambah(){
        return view('tambahkaryawan');
    }

    public function post(Request $request)
    {
        $input = new KaryawanModel;
        $input->nama_lengkap = $request->input('nama');
        $input->jabatan = $request->input('jabatan');
        $input->gaji_pokok = $request->input('gaji_pokok');
        $input->insentif = $request->input('insentif');

        $input->save();

        return redirect()->route('karyawanpage');
    }

    public function edit($id)
    {
        $editable = KaryawanModel::findOrFail($id);
        return view('editkaryawan',compact('editable'));
    }

    public function update(Request $request, $id)
    {
        $input = KaryawanModel::find($id);
        $input->nama = $request->nama;
        $input->jabatan = $request->jabatan;
        $input->gaji_pokok = $request->gaji_pokok;
        $input->insentif = $request->insentif;
        $input->updated_at = Carbon::now();

        return redirect()->route('karyawanpage');
    }

    public function export()
    {
        return Excel::download(new KaryawanExport, 'karyawan.xlsx');    
    }

    public function delete($id)
    {
        KaryawanModel::where('id',$id)->delete();
        return redirect()->route('karyawanpage');    
    }


}
