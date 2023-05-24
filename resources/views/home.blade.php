@extends('layouts.master')
@section('title')
  Home-news programme
@stop
@section('css')
  <!--  Owl-carousel css-->
  <link href="{{ URL::asset('assets/plugins/owl-carousel/owl.carousel.css') }}" rel="stylesheet" />
  <!-- Maps css -->
  <link href="{{ URL::asset('assets/plugins/jqvmap/jqvmap.min.css') }}" rel="stylesheet">
@endsection
@section('page-header')
  <!-- breadcrumb -->
  <div class="breadcrumb-header justify-content-between">
    <div class="left-content">
      <div>
        <h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">
          INTERNATIONAL NEWS AGENCY
        </h2>
        <p class="mg-b-0">Trending News </p>
      </div>
    </div>
    <div class="main-dashboard-header-right">
      <div>
        <label class="tx-13">Customer Ratings</label>
        <div class="main-star">
          <i class="typcn typcn-star active"></i> <i class="typcn typcn-star active"></i> <i
            class="typcn typcn-star active"></i> <i class="typcn typcn-star active"></i> <i class="typcn typcn-star"></i>
          <span>(14,873)</span>
        </div>
      </div>
      <div>
        <label class="tx-13">Online Sales</label>
        <h5>563,275</h5>
      </div>
      <div>
        <label class="tx-13">Offline Sales</label>
        <h5>783,675</h5>
      </div>
    </div>
  </div>
  <!-- /breadcrumb -->
@endsection
@section('content')
  <!-- row -->
  <div class="row row-sm">


    {{-- Get All About News --}}

    @foreach ($news as $ne)
      <div class="col-12  col-lg-12 col-xl-4">
        <div class="card">
          <div class="card-body">

            <h5 class="card-title">{{ $ne->title }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ $ne->category['cate_name'] }}</h6>
            <p class="card-text">
              .{{ $ne->content }}</p>
            <span>
              @foreach ($ne->tags as $tag)
                <span class="tag tag-blue">{{ $tag['tag_name'] }}</span>
              @endforeach
            </span>
            <div class="card-footer bd-t tx-left">
              Share <i class="icon ion-logo-facebook mg-l-5 mg-r-5"></i>
              <i class="icon ion-logo-twitter"></i>
            </div>
            <span>{{ date('d-m-Y H:i:s', strtotime($ne->date_to_publish)) }}</span>


          </div>
        </div>
      </div>
    @endforeach

  </div>
  <!-- row closed -->

  <!-- row opened -->

  <!-- row closed -->

  <!-- /row -->
  </div>
  </div>
  <!-- Container closed -->
@endsection
@section('js')
  <!--Internal  Chart.bundle js -->
  <script src="{{ URL::asset('assets/plugins/chart.js/Chart.bundle.min.js') }}"></script>
  <!-- Moment js -->
  <script src="{{ URL::asset('assets/plugins/raphael/raphael.min.js') }}"></script>
  <!--Internal  Flot js-->
  <script src="{{ URL::asset('assets/plugins/jquery.flot/jquery.flot.js') }}"></script>
  <script src="{{ URL::asset('assets/plugins/jquery.flot/jquery.flot.pie.js') }}"></script>
  <script src="{{ URL::asset('assets/plugins/jquery.flot/jquery.flot.resize.js') }}"></script>
  <script src="{{ URL::asset('assets/plugins/jquery.flot/jquery.flot.categories.js') }}"></script>
  <script src="{{ URL::asset('assets/js/dashboard.sampledata.js') }}"></script>
  <script src="{{ URL::asset('assets/js/chart.flot.sampledata.js') }}"></script>
  <!--Internal Apexchart js-->
  <script src="{{ URL::asset('assets/js/apexcharts.js') }}"></script>
  <!-- Internal Map -->
  <script src="{{ URL::asset('assets/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
  <script src="{{ URL::asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
  <script src="{{ URL::asset('assets/js/modal-popup.js') }}"></script>
  <!--Internal  index js -->
  <script src="{{ URL::asset('assets/js/index.js') }}"></script>
  <script src="{{ URL::asset('assets/js/jquery.vmap.sampledata.js') }}"></script>
@endsection
