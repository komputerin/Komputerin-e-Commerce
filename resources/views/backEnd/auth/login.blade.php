<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Komputerin Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="{{url('/css/sb-admin.css')}}" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
       {{ csrf_field() }}
      <div class="card-header">Login {{ config('app.name') }}</div>
      <div class="card-body">
     
        <form class="form-signin" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
        <div class="form-group">
               <input type="text" id="role_id" name="role_id" value="1" hidden>
          <div class="label-group">
               <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required autofocus>
                <label for="inputEmail" class="sr-only">Email address</label>

          </div>
        </div>

        <div class="form-group">
          <div class="label-group">
              <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required autofocus>   
              <label for="inputPassword" class="sr-only">Password</label>
             <div class="checkbox mb-3">
        </div>
      </div>
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="{{url('register')}}">Register an Account</a>
          <a class="d-block small" href="{{url('forgot-password')}}">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
