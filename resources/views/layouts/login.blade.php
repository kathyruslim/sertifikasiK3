<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Login Sertifikasi K3</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('/css/login/bootstrap.min.css')}}" rel = "stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('/css/login/login.css')}}" rel="stylesheet">
  </head>

  <body>
    <form class="form-login" method="POST" action="{{route('login')}}">
      {{ csrf_field() }}
      <div class="text-center mb-4">
        <img class="mb-4" src="{{asset('/img/logo.png')}}" alt="Logo PT PETROKIMIA GRESIK" width="120" height="120">
        <h1 class="h3 mb-3 font-weight-normal">Login</h1>
      </div>

      <div class="form-label-group">
        <input type="username" name="username" id="inputUsername" class="form-control" placeholder="username" required autofocus>
        <label for="username">Username</label>
      </div>

      <div class="form-label-group">
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <label for="inputPassword">Password</label>
      </div>

      <!--<div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      -->
      <button href="/layouts/admin" class="btn btn-lg btn-secondary btn-block" type="submit">Login</button>
      <p class="mt-5 mb-3 text-muted text-center">Sertifikasi K3 by kathy&fera.</p>
    </form>    
  </body>
</html>