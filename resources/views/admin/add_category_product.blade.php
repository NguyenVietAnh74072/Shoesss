@extends('admin_layout');
@section('admin_content');
<div class="form-w3layouts">
    <!-- page start-->
    <!-- page start-->
    <div class="row">
        <div class="col-lg-12">
        <!---728x90--->

                <section class="panel">
                    <header class="panel-heading">
                        Thêm danh mục sản phẩm
                    </header>
                    <div> <?php
                        $message = Session::get('message');
                        if($message)
                        {
                            echo'<span class="text-alert">'.$message.'</span>';
                            Session::put('message',null);
                        }
                        ?></div>
                    <div class="panel-body">
                        <div class="position-center">
                            <form role="form" action="{{URL::to('/save-category-product')}}" method="POST">
                                             {{ csrf_field() }}
                                
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên danh mục</label>
                                <input type="text" name="category_product_name"class="form-control" id="exampleInputEmail1" placeholder="Tên sản phẩm">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Mô tả danh mục</label>
                                <textarea style="resize:none" rows="8"name="category_product_desc" type="password" class="form-control" id="exampleInputPassword1" placeholder="Mô tả danh mục">
                                </textarea>
                            </div>
                            <div class="form-group">
                            <label for="exampleInputPassword1">Hiển thị</label>
                                <select name="category_product_status"class="form-control input-sm m-bot15">
                                    <option value="0">Ẩn</option>
                                    <option value="1">Hiện thị</option>
                                    
                                </select>
                            </div>
                            <button type="submit" name="add_category_product" class="btn btn-info">Thêm danh mục</button>
                        </form>
                        </div>

                    </div>
                </section>

        </div>
        <div class="col-lg-12">
        <!---728x90--->
            <section class="panel">
                <header class="panel-heading">
                    Horizontal Forms
                </header>
                <div class="panel-body">
                    <div class="position-center">
                        <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Email</label>
                            <div class="col-lg-10">
                                <input type="email" class="form-control" id="inputEmail1" placeholder="Email">
                                <p class="help-block">Example block-level help text here.</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword1" class="col-lg-2 col-sm-2 control-label">Password</label>
                            <div class="col-lg-10">
                                <input type="password" class="form-control" id="inputPassword1" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Remember me
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button type="submit" class="btn btn-danger">Sign in</button>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </section>

        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
        <!---728x90--->
            <section class="panel">
                <header class="panel-heading">
                    Inline form
                </header>
                <div class="panel-body">
                    <div class="position-center">
                        <form class="form-inline" role="form">
                        <div class="form-group">
                            <label class="sr-only" for="exampleInputEmail2">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="exampleInputPassword2">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Remember me
                            </label>
                        </div>
                        <button type="submit" class="btn btn-success">Sign in</button>
                    </form>
                    </div>
                </div>
            </section>

        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Modal form
                </header>
                <div class="panel-body">
                    <div class="position-center ">
                        <div class="text-center">
                            <a href="#myModal" data-toggle="modal" class="btn btn-success">
                                Form in Modal
                            </a>
                            <a href="#myModal-1" data-toggle="modal" class="btn btn-warning">
                                Form in Modal 2
                            </a>
                            <a href="#myModal-2" data-toggle="modal" class="btn btn-danger">
                                Form in Modal 3
                            </a>
                        </div>

                        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                    <h4 class="modal-title">Form Tittle</h4>
                                </div>
                                <div class="modal-body">

                                    <form role="form">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Enter email">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">File input</label>
                                            <input type="file" id="exampleInputFile3">
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"> Check me out
                                            </label>
                                        </div>
                                        <button type="submit" class="btn btn-default">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal-1" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                    <h4 class="modal-title">Form Tittle</h4>
                                </div>
                                <div class="modal-body">

                                    <form class="form-horizontal" role="form">
                                        <div class="form-group">
                                            <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Email</label>
                                            <div class="col-lg-10">
                                                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword1" class="col-lg-2 col-sm-2 control-label">Password</label>
                                            <div class="col-lg-10">
                                                <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-lg-offset-2 col-lg-10">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox"> Remember me
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-lg-offset-2 col-lg-10">
                                                <button type="submit" class="btn btn-default">Sign in</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>

                            </div>
                        </div>
                    </div>
                        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal-2" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                    <h4 class="modal-title">Form Tittle</h4>
                                </div>
                                <div class="modal-body">
                                    <form class="form-inline" role="form">
                                        <div class="form-group">
                                            <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                            <input type="email" class="form-control sm-input" id="exampleInputEmail5" placeholder="Enter email">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="exampleInputPassword2">Password</label>
                                            <input type="password" class="form-control sm-input" id="exampleInputPassword5" placeholder="Password">
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"> Remember me
                                            </label>
                                        </div>
                                        <button type="submit" class="btn btn-default">Sign in</button>
                                    </form>

                                </div>

                            </div>
                        </div>
                    </div>

                    </div>
                </div>
            </section>
        </div>
    </div>

    <div class="row">
    <div class="col-lg-12">
        @endsection