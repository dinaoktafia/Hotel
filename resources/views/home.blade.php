@extends('layouts.home')

@section('container')
<div class="py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
            <img src="assets/app-img/home02.jpg" class="d-block mx-lg-auto img-fluid" alt="Hotel Image 02" width="700" height="500" loading="lazy">
        </div>
        <div class="col-lg-6">
            <h2 class="display-5 fw-bold lh-1 mb-3">Tentang Kami</h2>
            <p class="lead">Terinspirasi oleh sejuknya suasana alam yang ada di Nusantara dan Mewahnya fasilitas Hotel. Dengan menyatukan element-element tersebut, maka terciptalah sebuah hotel berkelas dan nyaman. Semua ada di Hotel Rainbow.
Hotel yang menghadap langsung ke lautan luas seakan memberikan pengalaman yang indah untuk Anda dan keluarga Anda.
Semua kemewahan dan kenyamanan itu bisa Anda dapatkan sekaligus di Hotel Rainbow.</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <a href="register" class="btn btn-primary btn-lg px-4 me-md-2">Daftar</a>
                <a href="login" class="btn btn-outline-secondary btn-lg px-4">Login</a>
            </div>
      </div>
    </div>
</div>
@endsection