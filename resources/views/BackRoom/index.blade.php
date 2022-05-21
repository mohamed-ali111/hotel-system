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















      {{-- ###################### room ##############################  --}}
               <div class="col-md-6 mt-3">
                <div class="card ">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="">room<span  class="badge badge-primary m-1">{{$rooms->count()}}</span></h5>
                        <a href="{{route('room.create')}}" class="btn btn-success">add new room</a>
                        </div>
                    <div class="card-body">
                        <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">number room</th>
                                            <th scope="col">typeroom</th>
                                            <th scope="col">created at</th>
                                            <th scope="col"> room_type_name</th>


                                        </tr>
                                    </thead>
                                    <tbody>

                                        @if($rooms->count()>0)
                                        @foreach($rooms as $room)
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>{{$room->status}}</td>
                                            <td>{{$room->check_in_status}}</td>
                                            <td>{{$room->check_out_status}}</td>

                                            <td>{{$room->room_no}}</td>
                                     
                                        </tr>
                                        @endforeach
                                        @else
                                        <div class="alert alert-danger m-1">
                                            there is no data......
                                        </div>
                                        @endif



                                    </tbody>
                                </table>
                        </div>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
  























    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="">booking<span class="badge badge-primary m-1">{{ $rooms->count() }}</span>
                        <span class="badge badge-danger m-1">that booking--</span>
                    </h5>
                    <a href="{{ route('booking.create') }}" class="btn btn-success">add new bookings</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover mb-0 text-nowrap">
                            <tbody>
                                <tr>
                                    <th>#</th>
                                    <th>check_in</th>
                                    
                                    <th>check_out</th>
                                    <th>total_price</th>
                                    <th>remaining_price</th>
                                    <th>payment_status</th>
                                    <th>customer_id</th>
                                    <th>room_id</th>

                                    <th>Controlles</th>
                                </tr>
                                   @if($rooms->count()>0)
                                        @foreach($rooms as $room)
                                        <tr>
                                            <td>1</td>
                                            <td>{{$room->check_in}}</td>
                                            <td>{{$room->check_out}}</td>
                                            <td>{{$room->total_price}}</td>
                                            <td>{{$room->remaining_price}}</td>

                                            <td>{{$room->payment_status}}</td>
                                            <td>{{$room->customer_id}}</td>
                                            <td>{{$room->room_id}}</td>





                                        </tr>
                                    @endforeach
                                @endif

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>























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
