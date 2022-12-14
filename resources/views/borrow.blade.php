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

    <form action="/home">
      <button type="submit" class="btn btn-secondary btn-sm m-3">Back</button>
    </form>

    <div class="row justify-content-center">
      <div class= "col-md-3">  
        <div class="input-group mb-3">
          <form action="/list">
            <div class="col-md-12 text-center">   
              <input type="text" class="form-control" placeholder="Search.." name="search">         
              <button class="btn btn-primary mt-3 text-center" type="submit" id="button-addon2">SEARCH</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
