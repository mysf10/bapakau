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

    <form action="/list">
      <button type="submit" class="btn btn-secondary btn-sm">Back</button> 
    </form>

    {{-- INI BAGIAN YANG DIMODIFIKASI DARI ISI WEBSITE --}}
  
    @foreach ($books as $buku)

    <article class="mb-3">
      <h2><a href="/book/{{ $buku->judul_buku }}">{{ $buku->judul_buku }}</a></h2>
      <p>{{ $buku->genre_buku }}</p>
      <p>{{ $buku->pengarang_buku }}</p>
      <p>{{ $buku->penerbit_buku }}</p>
      <p>{{ $buku->bahasa_buku }}</p>
    </article>
        
    @endforeach
  
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>