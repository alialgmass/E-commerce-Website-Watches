@extends('layouts.admin')
@section('content')
<div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title"> الاقسام الرئيسيه </h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">الرئيسية</a>
                                </li>
                                <li class="breadcrumb-item active"> الاقسام الرئيسية
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- DOM - jQuery events table -->
                <section id="dom">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">جميع الاقسام الرئيسية  للموقع </h4>
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
                                    <div class="card-body card-dashboard">
                                        <table
                                            class="table display nowrap table-striped table-bordered scroll-horizontal">
                                            <thead>
                                           
                                            <tr>
                                                <th> الاسم</th>
                                                <th>لغه الترجمه</th>
                                                <th>الصورة</th>
                                                <th>الوصف</th>
                                                <th>مفعل او غير مفعل</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                         
   
    
                                          
                                           @isset($data)
                                         
                                           @foreach($data as $d)
                                                    <tr>
                                                        <td>{{$d->name}} </td>
                                                        <td> {{$d->translate_lang}}</td>
                                                        <td><img class="small" src="{{asset($d->photo)}}"/></td>
                                                        <td>{{$d->description}}</td>
                                                        <td>{{$d->active}}</td>
                                                        <td>
                                                            <div class="btn-group" role="group"
                                                                 aria-label="Basic example">
                                                                <a href="{{route('admin.main_categories.edit',$d->id)}}"
                                                                   class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">تعديل</a>
                                                                   <a href="{{route('admin.main_categories.delete',$d->id)}}"
                                                                   class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">حذف</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach

                                                <div class="justify-content-center d-flex">
                                         
                                        </div>
                                                 
@endisset


                                            </tbody>
                                        </table>
                                       
                               
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
   
    @endsection