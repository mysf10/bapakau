<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/loginstyle.css">
  <title>Digilab | {{ $title }}</title>
</head>
<body id="loginbox">
  <form action="/login" method="post">
    @csrf
  <h1>Welcome to Digilab!</h1>
  <h3>Username</h3>
  <input type="text" name="username_akun" id="roundedinputbox">
  <h3>Password</h3>
  <input type="password" name="password_akun" id="roundedinputbox">
    <br>
    <a href="https://www.youtube.com/watch?v=M3Keg5XKJO8"><h5>Forgot your password? Click here!<h5></a>

          
             <button type="submit" id="loginbutton">LOGIN</button> 
          </form>

          <form action="/signup" method="get">
            <button type="submit" id="signupbutton">SIGN UP</button> 
          </form>
</body>
</html>