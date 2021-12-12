

@extends('layouts.main')


@section('container')
    <center>
        <h2> About us</h2>
    </center>
    <div class="container  row mt-4">
        <div class="col-2 offset-2">
            <img  src="img/{{ $image }}" alt="" width="300px">
        </div>
        <div class="col-6 offset-2 mt-5">
            Vaksinasi Covid-19 merupakan salah satu upaya pemerintah Indonesia dalam menangani masalah Covid-19. Vaksinasi Covid-19 bertujuan untuk menciptakan kekebalan kelompok (herd immunity) agar masyarakat menjadi lebih produktif dalam menjalankan aktivitas kesehariannya. Kegiatan Vaksinasi Covid-19 di Indonesia saat ini sudah memasuki tahap kedua.
        </div>

    </div>


@endsection
