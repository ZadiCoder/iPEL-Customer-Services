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
                    <th scope="col">Service ID</th>
                    <th scope="col">Select</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($details as $item)
                    <tr>
                        <td>{{$item->service_name}}</td>
                        <td>{{$item->price}}</td>
                        <td>{{$item->id}}</td>

              <form  action="{{route('store')}}" method="post">
                @csrf
                          <td><input type="checkbox" class="option" name="services[]" 
                          value="{{$item->id}}" data-price="{{$item->price}}"></td>
                        </tr>     
                      @endforeach 
                  </tbody> 
                </table>
              
                  <div class="text-right">
                      <button class="btn btn-primary buy_product">Done</button></div>

                      <div class="text-center">
                    Total Price :  <span class="total" name="total_price" id="total_price">Rs-/ 0</span></br></br>
                  </div>
              </form>

        </div>
    </div>
</div>

@endsection

@push('footer-script')
	<script>
$(document).ready(function(){
    $('.option').click(function(){
    	var total = 0;
        $('.option:checked').each(function(){
            total += parseInt($(this).data('price'));
        });

        $('.total').html('Rs-/ ' + total);
    });

   
});
/*
function buy_product(){
            var languages = [];
            var total = 0;  
            $('.option').each(function(){  
                if($(this).is(":checked"))  
                {  
                     languages.push($(this).val());
                     total += parseInt($(this).data('price'));
                }  
           }); 
            if(languages == ""){
              alert('please select atleast one product.');
            }else{
              $.ajax({
                  url:'{{route("store")}}',
                  type:'post',
                  data:{
                    languages:languages,
                    total:total,
                    _token: "{{ csrf_token() }}",
                  },
                  success:function(data)
                  {
                    location.reload();

                  }
            });
            }
  }


	 	$('.buy_product').on('click',function(){
			var service_id = [];
			jQuery('input[name="select_services[]"]:checkbox:checked').each(function(i){
				service_id[i] = $(this).attr('service-id');
			});
			if(service_id.length == 0){
				alert('please select atleast one product.')
			}
			else{
				$.ajax({
					url:'{{route("store")}}',
					type: 'post',
					data:{
            service_id:service_id,
						_token: "{{ csrf_token() }}",
                    },
					success: function(data){
						location.reload();
            } 
				});
			}
		});
*/    
   	</script>
@endpush