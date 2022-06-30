@extends('admin.layout.layout')

@section('content')

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>S.no</th>
            <th>Service Name</th>
            <th>Category Name</th>
            <th>Price</th>
            <th>Created Date</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($service as $key=>$data)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$data->name}}</td>
            <td>{{$data->category->category_name}}</td>
            <td>{{$data->price}}</td>
            <td>{{$data->created_at}}</td>
    
            <td>
                <a href="{{route('service.edit' , $data->id)}}" style="font-size: 17px; padding:5px;" ><i  class="fa fa-edit"></i></a>
                <a href="javaseript::void(0)" style="font-size: 17px; padding:5px;" data-id="{{$data->id}}"
                class="service_delete"><i class="fa fa-trash" ></i></a>
            </td> 
        </tr>
        @endforeach
    </tbody>
</table>

@endsection

@push('footer-script')
    <script>
        $('.service_delete').on('click',function(){
            if(confirm('Are You Delete This Service.')){
                var id = $(this).data('id');
                $.ajax({
                    url:'{{route("service.delete")}}',
                    mathod:'post',
                    data:{
                        _token: "{{ csrf_token() }}",
                        'id':id
                    },
                    success: function(data){
                        location.reload();
                    }   
                });  
            }
        });
    </script>
@endpush