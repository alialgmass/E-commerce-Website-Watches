@extends('layouts.layout')
@section('navitem')
<nav id="nav-menu-container">
                    <ul class="nav-menu">
                      
                        <li class="menu-active"><a href="{{route('index')}}">Home</a></li>
                        <li><a href="#products">Products</a></li>
                        <li><a href="">Cart</a></li>
                  
                 
                    @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  {{explode(" ",Auth::user()->name)[0] }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </nav>

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
                                <a class="btn" href="{{ route('add-in-cart',$data->id) }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('add-in-cart').submit();">
                                       buy now
                                    </a>

                                    <form id="add-in-cart" action="{{ route('add-in-cart',$data->id) }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                @endisset
                            </div>
                        </div>
                    </div>
                  
                </div>

            </div>
        </div>
        <!-- Products End -->
        
@endsection