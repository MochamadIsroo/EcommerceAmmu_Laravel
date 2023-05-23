@extends('layouts.app')

@section('title', 'Ammu Collection | Home Page')

@section('content')

<section class="hero">
  <div class="container d-flex justify-content-around">
    <div class="hero-text align-middle">
      <h1 class="fw-bold">
        Tampil Menarik <br />
        Untuk <br />
        Momen Terbaikmu
      </h1>
      <br />
      <a href="#" class="btn-detail">Lihat Detail</a>
    </div>
    <div class="hero-image">
      <img src="{{ asset('assets/image/koko.png') }}" style="width: 500px; height: 500px;" alt="" />
    </div>
  </div>
</section>

@endsection