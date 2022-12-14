<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Digilab | {{ $title }}</title>
    <link rel="stylesheet" href="css/checkout.css">
  </head>
  <body>
  <div class="container mt-4">

    <form action="/book">
      <button type="submit" class="btn btn-secondary btn-sm">Back</button> 
    </form>

      {{-- INI BAGIAN YANG DIMODIFIKASI DARI ISI WEBSITE --}}

    <h2>{{ $slug->judul_buku }}</h2>
    <p>{{ $slug->genre_buku }}</p>
    <p>{{ $slug->pengarang_buku }}</p>
    <p>{{ $slug->penerbit_buku }}</p>
    <p>{{ $slug->bahasa_buku }}</p>

    <form action="/history">
      <button type="submit" id="loginbutton">Checkout</button> 
   </form>

  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>