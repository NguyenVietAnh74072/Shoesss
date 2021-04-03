@extends('layouts.app_Backend')
@section('title','Danh sách TAG')
@section('content')
 <!-- Page Wrapper -->
 <div class="page-wrapper">
			
    <!-- Page Content -->
    <div class="content container-fluid">
    
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title"> SửaTag</h3>
                      @if($errors->first('t_name'))
                                    <small class="form-text text-danger">{{$errors->first('t_name')}}</small>
                                    @endif
                   
                </div>
                <div class="col-auto float-right ml-auto">
                   
                        <a href="{{route('get_backend.tag.index')}}" class="btn add-btn" data-toggle="" data-target="#add_client"><i class="fa fa-plus"></i>Quay lại</a>
                       
                   
                   
                </div>
            </div>
        </div>
       
        <form action="{{route('get_backend.tag.update',$tag->id)}}"  method="POST">
            @csrf
            <div class="form-group">
                <label ><h3>Số ID {{$tag->id}}</h3></label>
                
              </div>
              <div class="form-group">
                <label class="col-form-label">Tên<span class="text-danger">*</span></label>
                <input class="form-control" type="text" name='t_name' value='{{old('t_name',$tag->t_name ??'')}}'>
                @if($errors->first('t_name'))
                <small class="form-text text-danger">{{$errors->first('t_name')}}</small>
                @endif
            </div>
           
            
            <button type="submit" class="btn btn-primary">Sửa</button>
          </form>
          <label class="col-form-label"><span >Danh sách</span></label>
        
        <!-- Search Filter -->
        <div class="row filter-row">
            <div class="col-sm-6 col-md-3">  
                <div class="form-group form-focus">
                    <input type="text" class="form-control floating">
                    <label class="focus-label">Tag ID</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">  
                <div class="form-group form-focus">
                    <input type="text" class="form-control floating">
                    <label class="focus-label">Tag Name</label>
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
                                <th>Thời gian</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tags as $item)
                            
                            <tr>
                                <td>
                                    <h2 class="table-avatar">
                                       
                                        <a href="client-profile">{{$item->id}}</a>
                                    </h2>
                                </td>
                                <td>{{$item->t_name}}</td>
                                <td>{{$item->t_slug}}</td>
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
                                
                            </tr>
                            @endforeach
                           
                           
                           
                           
                          
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Content -->

    <!-- Add Client Modal -->
    
    <!-- /Add Client Modal -->
    
    <!-- Edit Client Modal -->
    
    <!-- /Edit Client Modal -->
    
    <!-- Delete Client Modal -->
    <div class="modal custom-modal fade" id="delete_client" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Xóa Tag</h3>
                        <p>Bạn chắc chắn muốn xóa chứ</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                               
                                <a href="{{route('get_backend.tag.delete',$item->id)}}" class="btn btn-primary continue-btn">Xóa</a>
                               
                            </div>
                            <div class="col-6">
                                <a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Hoãn</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Client Modal -->
    
</div>
<!-- /Page Wrapper -->

@endsection