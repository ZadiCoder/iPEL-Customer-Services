@extends('front.layout.layout1')

@section('content')

<div class="container mt-5">
    <div class="text-center bg-dark">
        <h2>Add Service And Repaire</h2>
    </div>
    <div class="row">
        <div class="col-sm-6 mt-3">
            <img class="details-img" style="height: 300px;" src="{{asset('images/'.$image->image)}}" alt="">
        </div>

        <div class="col-sm-6 mt-3">
            <table class="table">
                <thead class="thead-dark">
                  <tr class="text-white text-uppercase">
                    
                    <th scope="col">Services</th>
                    <th scope="col">Price</th>
                    <th scope="col">Select</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($details as $item)
                    <tr>
                        <td>{{$item->name}}</td>
                        <td>{{$item->price}}</td>
                        <td><input type="checkbox" name="name" id=""></td>
                      </tr>     
                    @endforeach
                </tbody>
              </table>
            <form action="" method="post">
                @csrf
                <input type="hidden" name="product_id" value="">
                <div class="text-right">
                    <button class="btn btn-primary">Done</button></div>
                
            </form>

        </div>
    </div>
</div>

@endsection