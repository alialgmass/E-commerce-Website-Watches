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
                                <li class="breadcrumb-item"><a href=""> الاقسام الرئيسية </a>
                                </li>
                                <li class="breadcrumb-item active">إضافة الاقسام الرئيسية 
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
                                    <h4 class="card-title" id="basic-layout-form"> إضافة الاقسام الرئيسية  </h4>
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
                                        <form class="form" action="{{route('admin.main_categories.store')}}" method="POST" enctype="multipart/form-data">
@csrf
<div class="col-md-5">
                                                        <div class="form-group">
                                                            <label for="projectinput1">    </label>
                                                            <input type="file" value="" id="name"
                                                                   class="form-control"
                                                                   placeholder=" "
                                                                   name="img">
                                                                   @error('img')
                                                            <span class="text-danger">{{$message}} </span>
                                                            @enderror
                                                        </div>
</div>
@foreach($data as $index=>$lang)
                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-home"></i> بيانات القسم الرئيسى بالغة {{$lang->name}}  </h4>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="projectinput1">    اسم القسم الرئيسى بالغة{{" ".$lang->name." "}}   </label>
                                                            <input type="text" value="" id="name"
                                                                   class="form-control"
                                                                   placeholder="ادخل الاقسام الرئيسية  اللغة  "
                                                                   name="Maincategories[{{$index}}][name]">
                                                                   @error("Maincategories.$index.name")
                                                            <span class="text-danger">مطلوب </span>
                                                            @enderror
                                                        </div>
                                                    </div>
<input type="hidden"  value="{{$lang->abbr}}" name="Maincategories[{{$index}}][translate_lang]"/>
                                                


                                             

</div>


                                       


                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group mt-1">
                                                            <input type="checkbox" name="Maincategories[{{$index}}][active]"
                                                                   id="switcheryColor4"
                                                                   class="switchery" data-color="success"
                                                                  value="1"
                                                                   checked/>
                                                            <label for="switcheryColor4"
                                                                   class="card-title ml-1">الحالة </label>
                                                                   @error('Maincategories.$index.active')
                                                            <span class="text-danger">{{$message}} </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
@endforeach

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