@extends('template.main')

@section('title','Halaman Utama')

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
        <a class="nav-link" href="">Login <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Register</a>
      </li>
      @else
      <li class="nav-item">
      <a href="" class="nav-link">Profil Saya</a>
      </li>
      <li class="nav-item">
        <a href="{{route('karyawan')}}" class="nav-link">Data Karyawan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('logout')}}">Logout</a>
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
    <h1>Selamat datang di halaman dashboar  
  </h1>
    </div>
@endsection('content')