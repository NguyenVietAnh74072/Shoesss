@extends('layouts.app_Backend')
@section('title','Danh sách San Pham')
@section('content')
<div class="page-wrapper">
			
    <!-- Page Content -->
    <div class="content container-fluid">
    
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title"> Danh sách Product</h3>
                     
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
                        <li class="breadcrumb-item active">Product</li>
                    
                    </ul>
                    <h3 class="page-title"> 
                        @if($errors->first('pro_name'))
                        <small class="form-text text-danger">{{$errors->first('pro_name')}}</small>
                        @endif
                    </h3>
                </div>
                <div class="col-auto float-right ml-auto">
                    <a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_client"><i class="fa fa-plus"></i> Thêm Product</a>
                   
                </div>
            </div>
        </div>
        <!-- /Page Header -->
        
        <!-- Search Filter -->
        <div class="row filter-row">
            <div class="col-sm-6 col-md-3">  
                <div class="form-group form-focus">
                    <input type="text" class="form-control floating">
                    <label class="focus-label">Product ID</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">  
                <div class="form-group form-focus">
                    <input type="text" class="form-control floating">
                    <label class="focus-label">Product Name</label>
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
                      
                        <thead>
                       
                            <tr>
                                <th>ID</th>
                                <th>Tên</th>
                                <th>Slug</th>
                                <th>Miêu tả</th>
                                <th>Giá</th>
                                <th>Thời gian</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $item)
                          
                            <tr>
                                <td>
                                    <h2 class="table-avatar">
                                       
                                        <a href="client-profile">{{$item->id}}</a>
                                    </h2>
                                </td>
                                <td>{{$item->pro_name}}</td>
                                <td>{{$item->pro_slug}}</td>
                                <td>{{$item->pro_description}}</td>
                                <td class="text-danger">{{number_format($item->pro_price,0,',','.')}}</td>
                                <td>{{$item->created_at}}</td>
                                <td>
                                    <div class="dropdown ">
                                        <a href="#" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-success"></i> Bật </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Bật</a>
                                            <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Tắt</a>
                                        </div>
                                    </div>
                                </td>
                                <td class="">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="{{route('get_backend.product.update',$item->id)}}" data-toggle="" data-target="#edipro_client"><i class="fa fa-pencil m-r-5"></i> Sửa</a>
                                            <a class="dropdown-item" href="{{route('get_backend.product.delete',$item->id)}}"  data-id="{{$item->id}}" data-toggle="" data-target="#delete_client"><i class="fa fa-trash-o m-r-5"></i> Xóa</a>
                                            
                                        </div>
                                    </div>
                                </td>
                               
                            </tr>
                         
                            @endforeach
                           
                           
                           
                           
                          
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
  
 
           @include('backend.product.create')
              
 
    

@endsection