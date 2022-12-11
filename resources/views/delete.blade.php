<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/loginstyle.css">
  <title>Digilab | {{ $title }}</title>
</head>
<body>
  
  <h3>Apakah anda yakin ingin menghapus akun?</h3>
          <form action="/login">
             <button type="submit" id="yesbutton">YES</button> 
          </form>

          <form action="/profile">
            <button type="submit" id="nobutton">NO</button> 
          </form>
</body>
</html>