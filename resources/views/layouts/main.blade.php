<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title> EAD </title>
  </head>
  <body >

      @include('partials.navbar')




     {{-- untuk menghubungkan dengan child file yang lain agar navbar dan footer yang digunakan dari file inin saja --}}
     <div class="container mt-5" style="min-height: calc(107vh - 106px - 96px)">
         @yield('container')

     </div>

     <footer class="text-center" style="padding-top: 1rem;">
        <a href="" class="text-muted" data-bs-toggle="modal" data-bs-target="#exampleModal" style="text-decoration: none"> Nama-Nim </a>
    </footer>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>
