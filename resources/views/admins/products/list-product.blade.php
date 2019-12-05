@include('/admins/partials/header')
@include('/admins/partials/nav')
@include('/admins/partials/sidebar')

<div class="container-fluid"><br>
  <div class="card mb-3">
    <div class="card-header">
      <li class="pagination justify-content-end">
        <a href="{{url('add-product')}}" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Add Product</a>
      </li>
    </div>
  </div>
  @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
  <p>
  <a class="btn btn-secondary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Motherboard</a>
  <a class="btn btn-secondary" data-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">VGA</a>
  <a class="btn btn-secondary" data-toggle="collapse" href="#multiCollapseExample3" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Fan</a>
</p>

<div class="row">
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample1">
      <div class="card card-body">
      <table class="table">
        <thead class="thead-light">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Product</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
          <tr>
            <th scope="row"></th>
            <td>{{ $product->nama }}</td>
            <td><a href="/list-product/{{ $product->id }}" class="badge badge-info">Detail</a></td>
          </tr>
        </tbody>
        @endforeach
      </table>
      </div>
    </div>
  </div>
</div>














  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
  <script src="js/sb-admin.min.js"></script>
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>
</body>
</html>