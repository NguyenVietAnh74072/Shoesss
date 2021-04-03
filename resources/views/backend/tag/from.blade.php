<form   action="{{$route}}"  method="POST">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="col-form-label">Tên Tag<span class="text-danger">*</span></label>
                <input class="form-control" type="text" name='t_name'value="{{old('t_name,'$tag->t_name)}}" >
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