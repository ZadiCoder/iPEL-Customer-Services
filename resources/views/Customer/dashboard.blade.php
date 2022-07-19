@extends('customer.layout.layout')

@section('content')
          <!-- top tiles -->
          <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Pending Requests</span>
              <div class="count">4</div>
              <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Assigned Requests</span>
              <div class="count">2</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Done Requests</span>
              <div class="count">1</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>
          </div>
          <!-- /top tiles -->
          <!-- top tiles -->
<div class="container">
    <div class="row">
        <div class="col-md-6 mt-5">
            <h4 class="text-center">
                @if (session()->has('status'))
                    <div class="alert alert-success mt-3">
                        {{session('status')}}
                    </div>
                @endif
            </h4>
        </div>
    </div>
</div>
          <!-- /top tiles -->
@endsection