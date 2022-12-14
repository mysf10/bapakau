<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/signupstyle.css">
  <title>Digilab | {{ $title }}</title>
</head>
  <body id="signupbox">

    <form action="/signup" method="post">
      @csrf
      <h1>Welcome to Digilab!</h1>
      <h3>NIM</h3>
      <input type="text" name="nim" id="roundedinputbox">
      <h3>Telephone</h3>
      <input type="text" name="nomor_telephone" id="roundedinputbox">
      <h3>Email</h3>
      <input type="email" name="email_akun" id="roundedinputbox">
      <h3>Username</h3>
      <input type="text" name="username_akun" id="roundedinputbox">
      <h3>Password</h3>
      <input type="password" name="password_akun" id="roundedinputbox">
      <br>
      <button type="submit" id="signupbutton">SIGN IN</button> 
    </form>
    
  </body>
</html>