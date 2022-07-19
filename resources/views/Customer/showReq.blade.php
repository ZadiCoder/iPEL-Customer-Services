@extends('customer.layout.layout')

@section('content')

<table class="table">
    <thead>
        <tr>
            <th>S.no</th>
            <th>Customer Name</th>
            <th>Technician ID</th>
            <th>Price</th>
            <th>Service Name</th>
            <th>Status</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach ($request as $key=>$data)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{Auth::user()->name}}</td>
            <td>{{$data->technician_id}}</td>
            <td>{{$data->price}}</td>
            <td>{{$data->service_id}}</td>
            <td>{{$data->status}}</td>
            
        </tr>
        @endforeach
    </tbody>
</table>
@endsection