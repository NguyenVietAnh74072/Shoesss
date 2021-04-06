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
        <td class="">
            <div class="dropdown dropdown-action">
                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="{{route('get_backend.tag.update',$item->id)}}" data-toggle="" data-target="#edik_client"><i class="fa fa-pencil m-r-5"></i> Sửa</a>
                    <a class="dropdown-item" href="{{route('get_backend.tag.delete',$item->id)}}"  data-id="{{$item->id}}" data-toggle="" data-target="#delete_client"><i class="fa fa-trash-o m-r-5"></i> Xóa</a>
                    
                </div>
            </div>
        </td>
        
    </tr>
    @endforeach
   
   
   
   
  
   
</tbody>
