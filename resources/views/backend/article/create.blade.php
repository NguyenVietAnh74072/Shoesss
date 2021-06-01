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
    <form   action="{{route("get_backend.article.store")}}"  method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-form-label">Tên<span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name='a_name'>
                    @if($errors->first('a_name'))
                    <small class="form-text text-danger">{{$errors->first('a_name')}}</small>
                    @endif
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-form-label">Danh mục<span class="text-danger">*</span></label>
                    <select class="form-control" name="a_menu_id"  >
                    <option   >__Chọn Danh Mục__</option>
                    @foreach($menus as $item)
                    <option value="{{$item->id}}" {{old('a_menu_id',$article->a_menu_id ??0)==$item->id? "selected":""}}>{{$item->mn_name}}</option>
                    @endforeach
                    </select>
                    @if($errors->first('a_category_id'))
                    <small class="form-text text-danger">{{$errors->first('a_category_id')}}</small>
                    @endif
                </div>
            </div>
          
         
              
                <div class="col-md-6">
                <div class="form-group">
                    <label class="col-form-label">Miêu tả<span class="text-danger">*</span></label>
                    <textarea class="form-control" name='a_description' cols="30" rows="10"></textarea>
                    @if($errors->first('a_description'))
                    <small class="form-text text-danger">{{$errors->first('a_description')}}</small>
                    @endif
                </div>
            </div>
                <div class="col-md-6">
                <div class="form-group">
                    <label class="col-form-label">Nội dung<span class="text-danger">*</span></label>
                    <textarea class="form-control" name='a_content' cols="30" rows="10"></textarea>
                    @if($errors->first('a_content'))
                    <small class="form-text text-danger">{{$errors->first('a_content')}}</small>
                    @endif
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
            <button class="btn btn-primary submit-btn" type="submit">Thêm</button>
        </div>
    </form>
</div>
</div>
</div>
</div>

</div>
