<!DOCTYPE html>
<html lang="en">
 <head>
 <meta charset="utf-8">
 <title>@yield('title', 'default title')</title>
	@yield('meta')

 <!-- stylesheets -->
{{ HTML::style('/css/bootstrap.min.css') }}
{{ HTML::style('/css/bootstrap-responsive.min.css') }}
{{ HTML::style('http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600') }}
{{ HTML::style('/css/font-awesome.css') }}
{{ HTML::style('/css/style.css') }}
{{ HTML::style('/css/pages/dashboard.css') }}

{{ HTML::style('//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.min.css') }}
@yield('styles')
{{ HTML::style('public/css/app.css') }}

 <script>
 var URL = {
 'base' : '{{ URL::to('/') }}',
 'current' : '{{ URL::current() }}',
 'full' : '{{ URL::full() }}'
 };
 </script>


 </head>
 <body>


@include('layouts.navbar')



@yield('content')

 </div>
 </div>




@include('layouts.footer')


 <!-- scripts -->
{{ HTML::script('js/jquery-1.7.2.min.js') }}
{{ HTML::script('js/excanvas.min.js') }}
{{ HTML::script('js/chart.min.js') }}
{{ HTML::script('js/bootstrap.js') }}
{{ HTML::script('js/full-calendar/fullcalendar.min.js') }}
{{ HTML::script('js/base.js') }}
@yield('scripts')



 </body>
</html>
