@extends('layouts.layout')
@section('navitem')

@endsection
@section('content')

        <!-- Products Start -->
        <div id="products">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="product-single">
                            <div class="product-img">
                            <img src="{{asset('asset/img/product-1.png')}}" alt="Product Image">
                            </div>
                            <div class="product-content">
                                @isset($data)
                                <h2>{{$data->name}}</h2>
                                <h3>${{$data->price}}</h3>
                                <a class="btn" href="{{ route('add-in-cart',$data->id) }}">
                                      
                                       buy now
                                    </a>

                                   
                                @endisset
                            </div>
                        </div>
                    </div>
                  
                </div>

            </div>
        </div>
        <!-- Products End -->
        
@endsection