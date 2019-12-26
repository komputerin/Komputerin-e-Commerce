<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Register</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">


    <div class="card card-register mx-auto mt-5">
      {{ csrf_field() }}
       <form class="form-signin reg-form" method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}

      <div class="card-header mb-3">Register {{ config('app.name') }}</div>
       <!--  <h1 class="h3 mb-3 font-weight-normal text-center">Register {{ config('app.name') }}</h1> -->

      <body class="text-center">

          <div class="form-group">
            <div class="col-md-12">
              <div class="form-label-group">
                <input type="text" name="name" id="inputName" placeholder="your name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" required autofocus value="{{ old('name') }}">
                <label for="inputName">your name</label>
          @if ($errors->has('name')) 
            <div class="invalid-feedback">
              {{ $errors->first('name') }}
            </div> 
          @endif

              </div>
            </div>
          </div>


    <div class="form-group">
            <div class="col-md-12">
              <div class="form-label-group">
        <input type="text" name="email" id="inputEmail" placeholder="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" required autofocus value="{{ old('name') }}">
       <label for="inputEmail">E-mail</label>
          @if ($errors->has('email')) 
            <div class="invalid-feedback">
              {{ $errors->first('email') }}
            </div> 
          @endif
              </div>
            </div>
          </div>
          

          <div class="form-group">
            <div class="col-md-12">
              <div class="form-label-group">         
                <input type="password" name="password" id="inputPassword" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }} " placeholder="Password" required autofocus>
                 <label for="inputPassword">Password</label>
          @if ($errors->has('password')) 
            <div class="invalid-feedback">
              {{ $errors->first('password') }}
            </div> 
          @endif
              </div>
            </div>
          </div>
         

<!--         <div class="checkbox mb-3"> -->

          <div class="form-group">
            <div class="col-md-12">
              <div class="form-label-group">
                <input type="password" name="password_confirmation" id="inputPassword" class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}" placeholder="Password Confirmation"required="required" autofocus="autofocus">
                <label for="inputPassword">Password confirmation</label>
          @if ($errors->has('password')) 
            <div class="invalid-feedback">
              Tolong isi nama anda.
              {{ $errors->first('password') }}
            </div> 
          @endif
              </div>
            </div>
          </div>
         
        </body>

        <button class="btn btn-lg btn-primary btn-block text-center reg-btn" type="submit" >Register</button>
      

      </form>


        <div class="text-center">
          <a class="d-block small mt-3" href="{{url('login')}}">Login Page</a>
          <a class="d-block small" href="{{url('forgot-password')}}">Forgot Password?</a>
            <p class="mt-2 text-muted reg-copy">&copy; 2017-2019</p>
        </div>
      </div>



  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
