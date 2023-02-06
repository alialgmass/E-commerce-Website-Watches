@extends('layouts.layout') 

 @section('content')

<div id="products">
    <div class="container">
        <div class="section-header">
            <h2>Get Your Products</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
                viverra at massa sit amet ultricies
            </p>
        </div>

        <div class="row align-items-center">
            @isset($data)
             @foreach($data as $d)
            <a href="{{route('show-product',$d->id)}}">
                <div class="col-md-3">
                    <div class="product-single">
                        <div class="product-img">
                            <img
                                src="{{asset('asset/img/product-1.png')}}"
                                alt="Product Image"
                            />
                        </div>
                        <div class="product-content">
                            <h2>{{$d->name}}</h2>
                            <h3>${{$d->price}}</h3>
                            <a
                                class="btn"
                                href="{{ route('add-in-cart',$d->id) }}"
                            >
                                buy now
                            </a>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
             @endisset
        </div>
    </div>
</div>
<!-- Products End -->

@endsection
