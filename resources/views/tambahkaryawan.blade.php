@extends('template.main')

@section('title','Halaman Utama')

@section('content')
<div class="container">
    <h1>Form Tambah Data Karyawan</h1>
    <form action="{{route('post')}}" method="post">
        @csrf
        <label for="">Nama</label>
        <input type="text" name="nama" id="" class="form-control">
        <br>
        <label for="">Jabatan</label>
        <input type="text" name="jabatan" id="" class="form-control">
        <br>
        <label for="">Gaji Pokok</label>
        <input type="number" name="gaji_pokok" id="" class="form-control" >
        <br>
        <label for="">Insentif</label>
        <input type="number" name="insentif" id="" class="form-control" >
        <br>
        <button type="submit" class="btn btn-success">Tambahkan</button>
    </form>

</div>
@endsection