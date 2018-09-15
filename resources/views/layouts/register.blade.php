<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Register Sertifikasi K3</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('/css/register/bootstrap.min.css')}}" rel = "stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('/css/register/register.css')}}" rel="stylesheet">
  </head>

  <body>
    <form class="form-register" method="POST" action="{{ route ('register')}}">
      {{ csrf_field() }}
      <div class="text-center mb-4">
        <img class="mb-4" src="{{asset('/img/logo.png')}}" alt="Logo PT PETROKIMIA GRESIK" width="120" height="120">
        <h1 class="h3 mb-3 font-weight-normal">Register</h1>
      </div>

      <div class="form-label-group">
        <input type="text" name="username" id="inputUsername" class="form-control {{$errors->has('username') ? 'is-invalid' : ''}}" placeholder="Username" value="{{ old('username')}}" required autofocus>
        <label for="inputUsername">Username</label>
        @if ($errors->has('username'))
        <div class="invalid-feedback">
          {{$errors->first('username')}}
        </div>
        @endif                
      </div>

      <div class="form-label-group">
        <input type="password" name="password" id="inputPassword" class="form-control {{$errors->has('password') ? 'is-invalid' : ''}}" placeholder="Password" required>
        <label for="inputPassword">Password</label>
         @if ($errors->has('password'))
        <div class="invalid-feedback">
          {{$errors->first('password')}}
        </div>
        @endif  
      </div>

      <div class="form-label-group">
        <input type="password" name="password_confirmation" id="inputPassword" class="form-control {{$errors->has('password_confirmation') ? 'is-invalid' : ''}}" placeholder="Password Confirmation" required>
        <label for="inputPassword">Password Confirmation</label>
         @if ($errors->has('password_confirmation'))
        <div class="invalid-feedback">
          {{$errors->first('password_confirmation')}}
        </div>
        @endif  
      </div>

      <button href="{{asset('login')}}" class="btn btn-lg btn-secondary btn-block" type="submit">Register</button>
      <p class="mt-5 mb-3 text-muted text-center">&copy; Kathy&Fera</p>
    </form>    
  </body>
</html>