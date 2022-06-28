@extends('admin.layout.layout')

@section('content')

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Service Create <small>iPEL Cusstom Services</small></h2>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <br>
          <form id="demo-form2" action="{{route('service.store')}}" method="POST"
           class="form-horizontal form-label-left" enctype="multipart/form-data" >
            @csrf
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Select Category Name <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                  <select name="category_id" class="form-control col-md-7 col-xs-12">
                      <option value="">Category Name</option>
                      @foreach ($categories as $categorie)
                      <option value="{{$categorie->id}}">{{$categorie->category_name}}</option>
                      @endforeach
                  </select>
              </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
                    Service Name <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="name" required="required"
                     class="form-control col-md-7 col-xs-12">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
                    Service Price <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="number" name="price" required="required"
                     class="form-control col-md-7 col-xs-12">
                </div>
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