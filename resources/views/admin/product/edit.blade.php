@extends('layouts.admin')
@section('content')
<div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">main</a>
                                </li>
                                <li class="breadcrumb-item"><a href=""> product</a>
                                </li>
                                <li class="breadcrumb-item active">Add product
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic form layout section start -->
                <section id="basic-form-layouts">
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="basic-layout-form"> Add product</h4>
                                    <a class="heading-elements-toggle"><i
                                            class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                @include('admin.includes.alerts.success')
                                @include('admin.includes.alerts.errors')
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                    @isset($data)
                                        <form class="form" action="{{route('admin.product.update',$data->id)}}" method="POST">
@csrf

                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-home"></i> product form</h4>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> name</label>
                                                            <input type="text" value="{{$data->name}}" id="name"
                                                                   class="form-control"
                                                                   placeholder="name "
                                                                   name="name">
                                                                   @error('name')
                                                            <span class="text-danger">{{$message}} </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                              
                                                

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                          <label for="projectinput1">duscription</label>
                                                            <input type="text" value="{{$data->dusc}}" id="duscription"
                                                                   class="form-control"
                                                                   placeholder="duscription "
                                                                   name="dusc">
                                                                   @error('dusc')
                                                            <span class="text-danger">{{$message}} </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                

                                                </div>
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <div class="form-group mt-1">
                                                         <label for="projectinput1">price</label>
                                                            <input type="number" value="{{$data->price}}" id="price"
                                                                   class="form-control"
                                                                   placeholder="price "
                                                                   name="price" />
                                                                   @error('price')
                                                                 
                                                            <span class="text-danger">{{$message}} </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group mt-1">
                                                        <label for="projectinput1">sale_price</label>
                                                            <input type="number" value="{{$data->sale_price}}" id="sale_price"
                                                                   class="form-control"
                                                                   placeholder="sale_price "
                                                                   name="sale_price">
                                                                   @error('sale_price')
                                                            <span class="text-danger">{{$message}} </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="form-actions">
                                                <button type="button" class="btn btn-warning mr-1"
                                                        onclick="history.back();">
                                                    <i class="ft-x"></i> تراجع
                                                </button>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="la la-check-square-o"></i> حفظ
                                                </button>
                                            </div>
                                        </form>
                                        @endisset
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic form layout section end -->
            </div>
        </div>
    </div>
    @endsection