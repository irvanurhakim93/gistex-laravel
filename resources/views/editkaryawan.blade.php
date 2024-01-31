@extends('template.main')

@section('title','Edit Data Karyawan')

@section('content')
<div class="container">
    <h1>Form Tambah Data</h1>
    <form action="{{route('updatekaryawan',$editable->id)}}" method="post">
        @csrf
        <label for="">Nama</label>
        <input type="text" name="nama" id="" class="form-control" value="{{$editable->nama}}">
        <br>
        <label for="">Jabatan</label>
        <input type="text" name="jabatan" id="" class="form-control" value="{{$editable->jabatan}}">
        <br>
        <label for="">Gaji Pokok</label>
        <input type="number" name="gaji_pokok" id="" class="form-control" value="{{$editable->gaji_pokok}}">
        <br>
        <label for="">Insentif</label>
        <input type="number" name="insentif" id="" class="form-control" value="{{$editable->insentif}}">
        <br>
        <button type="submit" class="btn btn-success">Ubah</button>
    </form>

</div>
@endsection