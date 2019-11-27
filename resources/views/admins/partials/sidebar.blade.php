<div id="wrapper">
    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="{{url('/')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Statistics</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Products</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="{{url('list-product')}}">Products</a>
          <a class="dropdown-item" href="{{url('add-product')}}">Add Product</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">
          <i class="fas fa-fw fa-credit-card"></i>
          <span>Orders</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">
          <i class="fas fa-fw fa-tag"></i>
          <span>Coupons</span></a>
      </li>
    </ul>