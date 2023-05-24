<!-- Title -->
<title> @yield('title') </title>
<!-- Favicon -->
<link rel="icon" href="{{ URL::asset('assets/img/brand/favicon.png') }}" type="image/x-icon" />
<!-- Icons css -->
<link href="{{ URL::asset('assets/css/icons.css') }}" rel="stylesheet">

@yield('css')

@if (App::getLocale() == 'en')
  <link href="{{ URL::asset('assets/css/style.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/sidemenu.css') }}">
  <link href="{{ URL::asset('assets/css/style.css') }}" rel="stylesheet">
@else
  <link href="{{ URL::asset('assets/css-rtl/style.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ URL::asset('assets/css-rtl/sidemenu.css') }}">
  <link href="{{ URL::asset('assets/css-rtl/style.css') }}" rel="stylesheet">
@endif
