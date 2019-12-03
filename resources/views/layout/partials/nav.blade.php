<nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
    <div class="container">
        <h3><i class="fas fa-cart-plus text-success"></i></h3>
        <a class="navbar-brand font-weight-bold" href="{{url('/layout')}}"><img src="{{url('img/cau.png')}}">KOMPUTER.IN</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Kategori
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Processor</a>
                <a class="dropdown-item" href="#">Motherboard</a>
                <a class="dropdown-item" href="#">VGA</a>
                <a class="dropdown-item" href="#">RAM</a>
                <a class="dropdown-item" href="#">SSD</a>
                <a class="dropdown-item" href="#">Hardisk</a>
                <a class="dropdown-item" href="#">Water Cooler</a>
                <a class="dropdown-item" href="#">Power Suply</a>
                <a class="dropdown-item" href="#">Casing</a>
                <a class="dropdown-item" href="#">FAN</a>
              </div>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#"> <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Status Pemesanan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pembayaran</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Cara Pemesanan</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>

            <div class="col-sm">
            <!-- <button class="btn btn-outline-primary mt-3 my-sm-0" href="{{url('login')}}" type="button">Logout</button> -->
            <a class="dropdown-item" href="{{url('login')}}" data-toggle="modal" data-target="#logoutModal">Logout</a>
            </div>

          </form>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">Settings</a>
          <a class="dropdown-item" href="#">Activity Log</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{url('login')}}" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
          <br>
        </div>
          
        </div>
      </nav>