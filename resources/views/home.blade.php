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
    <form action="/login">
      <button type="submit" id="logoutbutton">LOG OUT</button> 
    </form>
<form action="/profile">
  <button type="submit" id="profilebutton">PROFILE</button> 
</form>
<form action="/borrow">
  <button type="submit" id="borrowbutton">BORROW</button> 
</form>
<form action="/history">
  <button type="submit" id="historybutton">HISTORY</button> 
</form>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>


