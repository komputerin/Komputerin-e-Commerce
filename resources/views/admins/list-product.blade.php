@include('/admins/partials/header')
@include('/admins/partials/nav')
@include('/admins/partials/sidebar')

<div class="container-fluid"><br>
<div class="card mb-3">
        <div class="card-header">
                <li class="pagination justify-content-end">
                <a href="{{url('add-product')}}" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Add Product</a>
                </li>
            </nav>
         
        </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Produk</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th></th>
                  </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>
                            <input type="checkbox" aria-label="Checkbox for following text input">
                            <td scop="row"><img src="{{url('img/logo.png')}}">
                                MSI GTX 2080 Ti Overcloack Edition
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 80%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">Skor Produk</div>
                                </div>
                            </td>
                        </td>
                  
                        <td>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Rp</span>
                            </div>
                            <input type="" class="form-control">
                        </div>
                        </td>

                        <td>12</td>

                        <td>Icon</td>
                    </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

@include('/admins/partials/footer')