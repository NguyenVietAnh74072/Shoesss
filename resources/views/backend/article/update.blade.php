@extends('layouts.app_Backend')
@section('content')
<div class="page-wrapper">
			
    <!-- Page Content -->
    <div class="content container-fluid">
    
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title"> Sủa Sản Phẩm</h3>    
                </div>
                <div class="col-auto float-right ml-auto">
                    <a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_client"><i class="fa fa-plus"></i> Sửa Sản Phẩm</a>
                   
                </div>
                <div class="col-auto float-right ml-auto">
                        <a href="{{route('get_backend.article.index')}}" class="btn add-btn" data-toggle="" data-target="#add_client"><i class="fa fa-plus"></i>Quay lại</a>
                </div>
            </div>
        </div>
       
        
          
            <div class="row">
                <div class="col-md-2">
                    <label ><h3>Số ID : {{$article->id}}</h3></label>
                    <div class="form-group">
                        <label class="col-form-label">Tên :<span class="text-danger">*</span> <h3> {{$article->a_name}}</h3></label>
                   
                       
                    </div>
                </div>   
                
               
            </div>
          
            <div class="submit-section">

            </div>
      
          <label class="col-form-label"><span >Danh sách</span></label>
        
        <!-- Search Filter -->
        <div class="row filter-row">
            <div class="col-sm-6 col-md-3">  
                <div class="form-group form-focus">
                    <input type="text" class="form-control floating">
                    <label class="focus-label">Sản Phẩm ID</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">  
                <div class="form-group form-focus">
                    <input type="text" class="form-control floating">
                    <label class="focus-label">Sản Phẩm Name</label>
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
                                
                                <th>menu_id</th>
                                <th>Miêu tả</th>
                                <th>Noi dung</th>
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
                            
                               
                                <td>{{$item->a_menu_id}}</td>
                                

                                <td>{{$item->a_description}}</td>
                                <td>{{$item->a_content}}</td>
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
        
        <div id="add_client" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Sua San Pham</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
             <div class="modal-body">
            <form   action="{{route("get_backend.article.update",$article->id)}}"  method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-form-label">Tên<span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name='a_name' value='{{old('a_name',$article->a_name ??'')}}' >
                           
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-form-label">Danh mục<span class="text-danger">*</span></label>
                            <select class="form-control" name="a_menu_id" id=""  >
                            <option   >__Chọn Danh Mục__</option>
                            @foreach($menus as $item)
                            <option value="{{$item->id}}" {{old('a_menu_id',$article->a_menu_id ??0)==$item->id? "selected":""}} >{{$item->mn_name}}</option>
        
                            @endforeach
        
                            </select>
                            @if($errors->first('a_menu_id'))
                            <small class="form-text text-danger">{{$errors->first('a_menu_id')}}</small>
                            @endif
                        </div>
                    </div>
                
                 
                      
                        <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-form-label">Miêu tả<span class="text-danger">*</span></label>
                            <textarea class="form-control" name='a_description' cols="30" rows="10" >{{old('a_name',$article->a_description ??'')}}</textarea>
                          
                        </div>
                    </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-form-label">Nội dung<span class="text-danger">*</span></label>
                            <textarea class="form-control" name='a_content' cols="30" rows="10" >{{old('a_content',$article->a_content ??'')}}</textarea>
                           
                        </div>
                        <div class="col-md-6">
                            <div class ="form-group">
                                <form>
                                    <div class="form-group">
                                      <label for="exampleFormControlFile1">Chọn ảnh từ máy tính bạn</label>
                                      <input type="file" class="form-control-file" id="exampleFormControlFile1" accept="image/*" name="a_avatar">
                                    </div>
                                  </form>
                            </div>
                        </div>
                   
                                
                       
                   
                
                        
                          
                        
                   
                </div>
                <div class="submit-section">
                    <button class="btn btn-primary submit-btn" type="submit">Sửa sản phẩm</button>
                </div>
            </form>
        </div>
        </div>
        </div>
        </div>
        
    </div>



@endsection