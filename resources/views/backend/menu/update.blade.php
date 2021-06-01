@extends('layouts.app_Backend')
@section('title','Danh sách Bài Viết')
@section('content')
<div class="page-wrapper">
			
    <!-- Page Content -->
    <div class="content container-fluid">
    
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title"> Sủa Menu</h3>    
                </div>
                <div class="col-auto float-right ml-auto">
                        <a href="{{route('get_backend.menu.index')}}" class="btn add-btn" data-toggle="" data-target="#add_client"><i class="fa fa-plus"></i>Quay lại</a>
                </div>
            </div>
        </div>
       
        
          <form   action="{{route('get_backend.menu.update',$menu->id)}}"  method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <label ><h3>Số ID {{$menu->id}}</h3></label>
                    <div class="form-group">
                        <label class="col-form-label">Tên<span class="text-danger">*</span></label>
                        <input class="form-control" type="text" name='mn_name' value='{{old('mn_name',$menu->mn_name ??'')}}' >
                        @if($errors->first('mn_name'))
                        <small class="form-text text-danger">{{$errors->first('mn_name')}}</small>
                        @endif
                    </div>
                </div>   
               
            </div>
          
            <div class="submit-section">
                <button class="btn btn-primary submit-btn" type="submit">Sửa</button>
            </div>
        </form>
          <label class="col-form-label"><span >Danh sách</span></label>
        
        <!-- Search Filter -->
        <div class="row filter-row">
            <div class="col-sm-6 col-md-3">  
                <div class="form-group form-focus">
                    <input type="text" class="form-control floating">
                    <label class="focus-label">Menu ID</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">  
                <div class="form-group form-focus">
                    <input type="text" class="form-control floating">
                    <label class="focus-label">Menu Name</label>
                </div>
            </div>
         
            <div class="col-sm-6 col-md-3">  
                <a href="#" class="btn btn-success btn-block">Tìm kiếm </a>  
            </div>     
        </div>
        <!-- Search Filter -->

        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped custom-table datatable">
                       @include('backend.menu.list')
                </div>
            </div>
        </div>
    </div>

@endsection