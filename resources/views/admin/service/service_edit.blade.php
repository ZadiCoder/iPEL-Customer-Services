@extends('admin.layout.layout')

@section('content')

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Service Update <small>iPEL Cusstom Services</small></h2>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <br>
          <form id="demo-form2" action="{{route('service.update', $service->id)}}" method="POST"
           class="form-horizontal form-label-left" >
            @csrf
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
                    Category Name 
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text"  readonly
                     class="form-control col-md-7 col-xs-12" value="{{$service->category->category_name}}">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
                    Product Name <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="name" required="required"
                     class="form-control col-md-7 col-xs-12" value="{{$service->name}}">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
                    Product Price <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="number" name="price" required="required"
                     class="form-control col-md-7 col-xs-12" value="{{$service->price}}">
                </div>
            </div>
            <div>
                <h5>{{$service->category_id}}</h5>
            </div>
            <div class="ln_solid"></div>
            <div class="form-group">
              <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                <input type="submit" class="btn btn-success" value="Submit">
              </div>
            </div>
          </form>
        </div>
    </div>
  </div>
</div>

@endsection