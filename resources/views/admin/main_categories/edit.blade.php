@extends('layouts.admin')
@section('content')
<div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">الرئيسية </a>
                                </li>
                                <li class="breadcrumb-item"><a href="">المتاجر الرئيسية </a>
                                </li>
                                <li class="breadcrumb-item active">تعديل المتاجر
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
                                    <h4 class="card-title" id="basic-layout-form"> تعديل المتاجر </h4>
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
                                        <form class="form" action="{{route('admin.main_categories.update',$data->id)}}" method="POST" enctype="multipart/form-data">
@csrf
<div class="row">
<div class="col-md-12">
    <img style="width:100px; 
    border-radius: 50%;
    class="center"
    " src="{{asset($data->photo)}}"/>
</div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput1">الصورة</label>
                                                            <input type="file" value="{{$data->file}}" id="file"
                                                                   class="form-control"
                                                                  
                                                                   name="Maincategories[0][photo]"/>
                                                                    
                                                                   @error('Maincategories.0.photo')
                                                            <span class="text-danger">{{$message}} </span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                   
                                                   
                                                </div>
                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-home"></i> بيانات الاقسام </h4>
                                            
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> اسم القسم </label>
                                                            <input type="text" value="{{$data->name}}" id="name"
                                                                   class="form-control"
                                                                   placeholder="تعديل القسم "
                                                                   name="Maincategories[0][name]"/>
                                                                    
                                                                    @error('Maincategories.0.name')
                                                                  
                                                            <span class="text-danger">{{$message}} </span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                   
                                                   
                                                </div>


                                               
                                                   

                                                                                                     


                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group mt-1">
                                                            <input type="checkbox"  name="Maincategories[0][active]"
                                                                   id="switcheryColor4"
                                                                   class="switchery" data-color="success"
                                                                  value="1"
                                                               @if($data->active==1)   checked @endif/>
                                                            <label for="switcheryColor4"
                                                                   class="card-title ml-1">الحالة </label>
                                                              
                                                                    
                                                                    @error('Maincategories.0.active')
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