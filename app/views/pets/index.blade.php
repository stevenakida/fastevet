@extends('master')

@section('content')

@include('layouts.subnav')


<div class="container">
	<div class="row">
		<div class="widget">
            <div class="widget-header"> <i class="icon-signal"></i>
              <h3> Pets</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">

              <table class="table table-striped table-bordered">
                <tbody>
                <tr class="nopadding">
                	<th>#</th>
                	<th>Pet's Name</th>
                	<th>Owner's Name</th>
                	<th>Email</th>
                	<th>Phone Number</th>
                	<th>Address</th>
                </tr>
                  @foreach ($pets as $pet)
                  <tr>
                    <td>{{$pet->petname}}</td>
                    <td>{{$pet->ownersname}}</td>
                    <td>{{$pet->email}}</td>
                    <td>{{$pet->phonenum}}</td>
                    <td>{{$pet->address}}</td>
                  </tr>
                  @endforeach

              </table>

              <!-- /area-chart -->
            </div>
            <!-- /widget-content -->
          </div>
          <!-- /widget -->
	</div>
</div>
@stop