@extends('layouts.app_Backend')
@section('title','Danh sách Article')
@section('content')
<div class="page-wrapper">
			
    <!-- Page Content -->
    <div class="content container-fluid">
    
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title"> Danh sách Article</h3>
                      @if($errors->first('a_name'))
                                    <small class="form-text text-danger">{{$errors->first('a_name')}}</small>
                                    @endif
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
                        <li class="breadcrumb-item active">Article</li>
                    </ul>
                </div>
                <div class="col-auto float-right ml-auto">
                    <a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_client"><i class="fa fa-plus"></i> Thêm Article</a>
                   
                </div>
            </div>
        </div>
        <!-- /Page Header -->
        
        <!-- Search Filter -->
        <div class="row filter-row">
            <div class="col-sm-6 col-md-3">  
                <div class="form-group form-focus">
                    <input type="text" class="form-control floating">
                    <label class="focus-label">Article ID</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">  
                <div class="form-group form-focus">
                    <input type="text" class="form-control floating">
                    <label class="focus-label">Article Name</label>
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
                                <th>Image</th>
                                <th>Menu</th>
                                
                            
                                <th>Thời gian</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($articles as $item)
                            
                            <tr>
                                <td>
                                    <h2 class="table-avatar">
                                       
                                        <a href="client-profile">{{$item->id}}</a>
                                    </h2>
                                </td>
                                <td>{{$item->a_name}}</td>
                                <td>{{$item->a_slug}}</td>
                                <td><a>
                                    <img src={{asset("public/uploads/article/$item->a_avatar")}} width="60px"height="60px"></a></td>
                                <td>{{$item->menu->mn_name??"[N\A"}}</td>
                               
                                <td>{{$item->created_at}}</td>
                                <td>
                                    <div class="dropdown ">
                                        @if($item->a_active ==1)
                                        <a href="{{route('get_backend.article.active',$item->id)}}" class="btn btn-white btn-sm btn-rounded dropdown-toggle"  aria-expanded="false"><i class="fa fa-dot-circle-o text-success"></i> Bật </a>
                                        @else
                                        <a href="{{route('get_backend.article.active',$item->id)}}" class="btn btn-white btn-sm btn-rounded dropdown-toggle"  aria-expanded="false"><i class="fa fa-dot-circle-o text-unsuccess"></i> Tat </a>
                                        @endif
                                      
                                    </div>
                                </td>
                                <td class="">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="{{route('get_backend.article.update',$item->id)}}" data-toggle="" data-target="#edia_client"><i class="fa fa-pencil m-r-5"></i> Sửa</a>
                                            <a class="dropdown-item" href="{{route('get_backend.article.delete',$item->id)}}"  data-id="{{$item->id}}" data-toggle="" data-target="#delete_client"><i class="fa fa-trash-o m-r-5"></i> Xóa</a>
                                            
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
        @include('backend.article.create')
    </div>
  

@endsection