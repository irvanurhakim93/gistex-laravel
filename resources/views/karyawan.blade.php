@extends('template.main')

@section('title','Master Karyawan')

@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      @guest
      <li class="nav-item active">
        <a class="nav-link" href=" ">Login <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Register</a>
      </li>
      @else
      <li class="nav-item">
      <a href="" class="nav-link">Profil Saya</a>
      </li>
      <li class="nav-item">
        <a href="" class="nav-link">Data Karyawan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Logout</a>
      </li>
      @endguest
      @if(auth()->user()->isAdmin == 1)
      <li class="nav-item">
        <a href="" class="nav-link">Admin Panel</a>
      </li>
      @endif
    </ul>
  </div>
</nav>
<div class="container">
    <h1>Halaman Karyawan</h1>
    <br>
    <h3>Daftar karyawan</h3>
    <a href="{{route('tambah')}}" class="btn btn-primary">Tambah Data</a>
    <a href="{{route('export')}}" class="btn btn-success">Export Data</a>
    <br>
    <br>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Kode Nik</th>
                <th>Nama Lengkap</th>
                <th>Jabatan</th>
                <th>Gaji Pokok</th>
                <th>Insentif</th>
                
                <th colspan="2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($karyawanmodel as $km)
            <tr>
            <td>{{ $km->kode_nik }}</td>
            <td>{{ $km->nama_lengkap }}</td>
            <td>{{ $km->jabatan }}</td>
            <td>{{ $km->gaji_pokok }}</td>
            <td>{{ $km->insentif }}</td>
            <td><a href="{{route('editkaryawan',$km->id)}}" class="btn btn-primary">Ubah</a></td>
            <td>
            @csrf
            @method('DELETE')
            <form action="{{ route('hapuskaryawan',$km->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Apakah yakin anda akan menghapus data karyawan ini ?');" class="btn btn-danger">Hapus</button>
            </form>
            </tr>
        </tbody>
        @endforeach
    </table>
    <!-- Akhir dari div container -->
    </div>
@endsection('content')