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
                    <h3 class="page-title"> Danh sách Tag</h3>
                      @if($errors->first('t_name'))
                                    <small class="form-text text-danger">{{$errors->first('t_name')}}</small>
                                    @endif
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
                        <li class="breadcrumb-item active">Tag</li>
                    </ul>
                </div>
                <div class="col-auto float-right ml-auto">
                    <a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_client"><i class="fa fa-plus"></i> Thêm Tag</a>
                   
                </div>
            </div>
        </div>
        <!-- /Page Header -->
        
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
                       @include('backend.tag.list')
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Content -->

    <!-- Add Client Modal -->
    <div id="add_client" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Thêm Tag</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form   action="{{route('get_backend.tag.store')}}"  method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">Tên<span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name='t_name' >
                                    @if($errors->first('t_name'))
                                    <small class="form-text text-danger">{{$errors->first('t_name')}}</small>
                                    @endif
                                </div>
                            </div>   
                           
                        </div>
                        <div class="table-responsive m-t-15">
                           <h2></h2>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary submit-btn" type="submit">Thêm</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Client Modal -->
    
    <!-- Edit Client Modal -->
<<<<<<< HEAD
    
=======
   
>>>>>>> 43b78938e5dadb512e95aad86be53c96bcd84b37
    <!-- /Edit Client Modal -->
    
    <!-- Delete Client Modal -->
    
    <!-- /Delete Client Modal -->
    
</div>
<!-- /Page Wrapper -->

@endsection