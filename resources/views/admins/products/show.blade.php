@extends('layout/main')
@section ('title', 'Detail Product')
@section ('container')

<div class="container">
    <div class="row">
      <div class="col-8">
    <h2 class="mt-3">Detail Product </h2>

    <div class="card" style="width: 18rem;">
      <img src="{{ $product->image }}" width="" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">{{ $product->nama }}</h5>
        <p class="card-text">{{ $product->spesifikasi }}</p>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">Harga : {{ $product->harga }}</li>
        <li class="list-group-item">Stok Barang : {{ $product->stok }}</li>
      </ul>
      <div class="card-body">

      <a href="{{ $product->id }}/add-product" class="btn btn-success">Edit</a>
      <form action="{{ $product->id }}" method="post" class="d-inline">
      @method('delete')
      @csrf
      <button type="submit" class="btn btn-danger">Delete</button>
      <a href="/list-product" class="card-link">Kembali</a>
      </div>
    </div>

  </div>
  </div>
  </div>
@endsection

