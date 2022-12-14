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

    <form action="/borrow">
      <button type="submit" class="btn btn-secondary btn-sm">Back</button> 
    </form>

    <div class="container mt-4">
      @foreach ($address as $alamat)
        <h1><a href="/book">{{ $alamat->nama_perpustakaan }}</a></h1>
        <h2>{{ $alamat->alamat_perpustakaan }}</h2>
      @endforeach
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>