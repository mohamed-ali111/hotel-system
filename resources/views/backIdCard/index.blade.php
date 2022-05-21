{{-- @extends('Layouts.app') --}}

@extends('layouts.master')
@section('title')
    الافسام
@stop
@section('css')
    <!-- Internal Data table css -->
    		<link rel="icon" href="favicon.ico" type="image/x-icon"/>

    <link href="{{ URL::asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />

    <link href="{{ URL::asset('assets/css/icons.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/style.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/plugins/scroll-bar/jquery.mCustomScrollbar.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/toggle-menu/sidemenu.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/morris/morris.css') }}" rel="stylesheet">

        <link href="{{ URL::asset('assets/plugins/fullcalendar/stylesheet1.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/chartist/chartist.css') }}">
    <link href="{{ URL::asset('assets/plugins/chartist/chartist-plugin-tooltip.css') }}">

@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">الاعدادات</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                   ffffff المنتجات</span>
            </div>
        </div>

    </div>
    <!-- breadcrumb -->
@endsection
@section('content')










dddddddddddddddd





















{{-- ################################################# --}}
        </div>
    </div>
@endsection
@section('js')
    <!-- Internal Data tables -->
    <script src="{{ URL::asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/popper.js') }}"></script>
    <script src="{{ URL::asset('assets/js/tooltip.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/nicescroll/jquery.nicescroll.min.js') }}"></script>

    <script src="{{ URL::asset('assets/plugins/scroll-up-bar/dist/scroll-up-bar.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/toggle-menu/sidemenu.js') }}"></script>
    <script src="{{ URL::asset('assets/js/chart.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/othercharts/jquery.knob.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/othercharts/jquery.sparkline.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/morris/morris.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/morris/raphael.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/fullcalendar/calendar.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/apexcharts.js') }}"></script>
    <script src="{{ URL::asset('assets/js/scripts.js') }}"></script>
    <!--Internal  Datatable js -->
    <script src="{{ URL::asset('assets/js/dashboard2.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/echarts/echarts.js') }}"></script>
        <script src="{{ URL::asset('assets/js/othercharts.js') }}"></script>

@endsection
