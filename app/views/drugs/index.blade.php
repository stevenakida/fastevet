@extends('master')

@section('content')

@include('layouts.subnav')


<div class="container">
	<div class="row">
		<div class="widget">
            <div class="widget-header"> <i class="icon-signal"></i>
              <h3> Drugs</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">

              <table class="table table-striped table-bordered">
                <tbody>
                <tr class="nopadding">

                	<th>Drug's Name</th>
                	<th>Quantity</th>
                	<th>Company</th>
                  <th>Availability</th>
                	<th>Expiry Date</th>

                </tr>
                  @foreach ($drugs as $drug)
                  <tr>
                    <td>{{$drug->drugname}}</td>
                    <td>{{$drug->quantity}}</td>
                    <td>{{$drug->availability}}</td>
                    <td>{{$drug->company}}</td>
                    <td>{{$drug->expirydate}}</td>
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