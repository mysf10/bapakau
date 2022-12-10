<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Digilab | {{ $title }}</title>
    <link rel="stylesheet" href="css/background.css">
  </head>
  <body>
  <div class="container mt-4">

    {{-- INI BAGIAN YANG DIMODIFIKASI DARI ISI WEBSITE --}}
  
    @foreach ($books as $buku)

    <article class="mb-3">
      <h2>{{ $buku["judul"] }}</h2>
      <p>{{ $buku["genre"] }}</p>
      <p>{{ $buku["pengarang"] }}</p>
      <p>{{ $buku["penerbit"] }}</p>
      <p>{{ $buku["bahasa"] }}</p>
    </article>
        
    @endforeach
  
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>