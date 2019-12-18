@include ('/frontEnd/partials/header')  
<link href="{{asset('frontEnd/css/animate.css')}}" rel="stylesheet">
<link href="{{asset('frontEnd/css/main.css')}}" rel="stylesheet">
<link href="{{asset('frontEnd/css/responsive.css')}}" rel="stylesheet">
@include ('/frontEnd/partials/nav')  
@section ('container')


<body>

    
    
</body>
<script src="{{asset('frontEnd/js/jquery.js')}}"></script>
<script src="{{asset('frontEnd/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontEnd/js/jquery.scrollUp.min.js')}}"></script>
<script src="{{asset('frontEnd/js/price-range.js')}}"></script>
<script src="{{asset('frontEnd/js/jquery.prettyPhoto.js')}}"></script>
<script src="{{asset('frontEnd/js/main.js')}}"></script>

@endsection ('container')
@include ('/frontEnd/partials/footer') 