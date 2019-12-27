@extends('frontEnd.layouts.master')
@section('title','Search Products')
@section('slider')
@endsection
@section('content')
    <div class="search-container container">
        <h1>Search Result</h1>
        <p>{{ $products->count() }} result(s) for '{{ request()->input('query') }}'</p>

        <div class="col-sm-12">
                    <div class="features_items"><!--features_items-->
                        <h2 class="title text-center">
                            {{ request()->input('query') }}
                        </h2>
                        @foreach($products as $product)
                            @if($product->category->status==1)
                                <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <a href="{{url('/product-detail',$product->id)}}"><img src="{{url('products/small/',$product->image)}}" alt="" /></a>
                                        <h2>Rp. {{$product->price}}</h2>
                                        <p>{{$product->p_name}}</p>
                                        <a href="{{url('/product-detail',$product->id)}}" class="btn btn-default add-to-cart">View Product</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                            @endif
                        @endforeach
                    </div><!--features_items-->

                </div>

    </div>
@endsection