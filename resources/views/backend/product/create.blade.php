<div id="add_client" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Thêm Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
     <div class="modal-body">
    <form   action="{{route("get_backend.product.store")}}"  method="POST" enctype="multipart/form-data">
       {{csrf_field()}}
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-form-label">Tên<span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name='pro_name' >
                    @if($errors->first('pro_name'))
                    <small class="form-text text-danger">{{$errors->first('pro_name')}}</small>
                    @endif
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-form-label">Danh mục<span class="text-danger">*</span></label>
                    <select class="form-control" name="pro_category_id"  >
                    <option   >__Chọn Danh Mục__</option>
                    @foreach($categories as $item)
                    <option value="{{$item->id}}" {{old('pro_category_id',$product->pro_category_id ??0)==$item->id? "selected":""}}>{{$item->c_name}}</option>
                    @endforeach
                    </select>
                    @if($errors->first('pro_category_id'))
                    <small class="form-text text-danger">{{$errors->first('pro_category_id')}}</small>
                    @endif
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-form-label">Gía tiền<span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name='pro_price' >
                    @if($errors->first('pro_price'))
                    <small class="form-text text-danger">{{$errors->first('pro_price')}}</small>
                    @endif
                </div>
            </div>
                <div class="col-md-6">
                <div class="form-group">
                    <label class="col-form-label">Số lượng<span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name='pro_number' >
                    @if($errors->first('pro_number'))
                    <small class="form-text text-danger">{{$errors->first('pro_number')}}</small>
                    @endif
                </div>
            </div>
              
                <div class="col-md-6">
                <div class="form-group">
                    <label class="col-form-label">Miêu tả<span class="text-danger">*</span></label>
                    <textarea class="form-control" name='pro_description' cols="30" rows="10"></textarea>
                    @if($errors->first('pro_description'))
                    <small class="form-text text-danger">{{$errors->first('pro_description')}}</small>
                    @endif
                </div>
            </div>
                <div class="col-md-6">
                <div class="form-group">
                    <label class="col-form-label">Nội dung<span class="text-danger">*</span></label>
                    <textarea class="form-control" name='pro_content' cols="30" rows="10"></textarea>
                    @if($errors->first('pro_content'))
                    <small class="form-text text-danger">{{$errors->first('pro_content')}}</small>
                    @endif
                </div>
                <div class="col-md-6">
                    <div class ="form-group">
                        <form>
                            <div class="form-group">
                              <label for="exampleFormControlFile1">Chọn ảnh từ máy tính bạn</label>
                              <input type="file" class="form-control-file" id="exampleFormControlFile1" accept="image/*" name="pro_avatar">
                            </div>
                          </form>
                    </div>
                </div>
           
                        
               
           
        
                
                  
                
           
        </div>
        <div class="submit-section">
            <button class="btn btn-primary submit-btn" type="submit">Thêm</button>
        </div>
    </form>
</div>
</div>
</div>
</div>

</div>
