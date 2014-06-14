
@section('content')

@include('layouts.subnav')


<div class="container">
	<div class="row">
		<div class="widget">
            <div class="widget-header"> <i class="icon-signal"></i>
              <h3> Appointments</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">

              <table class="table table-striped table-bordered">
                <tbody>
                <tr class="nopadding">
                	<th>Pet's Name</th>
                	<th>Owner's Name</th>
                	<th>Appointment Date</th>

                </tr>
                  @foreach ($Appointment as $Appointment)
                  <tr>
                    <td>{{$Appointment->petname}}</td>
                    <td>{{$Appointment->ownersname}}</td>
                    <td>{{$Appointment->dateTime}}</td>
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