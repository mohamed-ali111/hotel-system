{{-- @extends('Layouts.app') --}}

@extends('layouts.master')
@section('title')
    الرئيسيه
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





















































































































































































































<div class="container ">
        <div class="row">
          {{-- ###################### booking ##############################  --}}
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="">booking<span  class="badge badge-primary m-1">{{$bookings->count()}}</span>
                            <span  class="badge badge-danger m-1">that booking--{{$actors->count()}}</span>
                        </h5>
                        <a href="{{route('booking.create')}}" class="btn btn-success">add new bookings</a>
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
                                            <th scope="col">Status</th>

                                            <th scope="col">Controlles</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        @if($bookings->count()>0)
                                        @foreach($bookings as $booking)
                                        <tr>
                                            <th scope="row">{{$booking->id}}</th>
                                            <td>{{$booking->check_in}}</td>
                                            <td>{{$booking->check_out}}</td>
                                            <td>{{$booking->remaining_price}}</td>
                                            <td>    
                                                  <div>
                    
                                                @if($actors->count() > 0)
                                                <div>
                    
                                                        @if($booking->payment_status == 1)
                                                        <span class="badge bg-info">Pending</span>                    
                    
                                                        @else
                                                        <span class="badge bg-success">Approved</span>
                                                            @endif
                    
                                                        
                                                        </div>
                                                        @endif
                    
                                                    </div>
                                                </td>
                                                <!-- delete form  -->
                                <td>
                                               <form method="POST" action="{{ route('booking.delete', $booking->id) }}">
                                                        @csrf
                                    <!-- {{--                       @method('delete')--}} -->
                                                        <input type="hidden" value="{{$booking->id}}" name="booking_id">
                                                        <button class="btn btn-sm btn-warning" type="submit">   <i class="fas fa-trash"></i>
                                                        </button>
                                                 </form>    
                                             </td>   
                                             {{-- edit operation        --}}
                                             <td>
                                                <a class="btn btn-sm btn-info" href="{{route('booking.edit', $booking->id)}}">
                                                    <i class="fas fa-pencil"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="btn btn-sm btn-success" href="{{route('booking.show', $booking->id)}}">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                            </td>
                             
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




               {{-- ###################### customers ##############################  --}}
               <div class="col-md-6 mt-3">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="">customers<span  class="badge badge-primary m-1">{{$customers->count()}}</span></h5>
                        <a href="{{route('customer.create')}}" class="btn btn-success">add new customer</a>
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
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @if($customers->count()>0)
                                        @foreach($customers as $customer)
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>{{$customer->customer_name}}</td>
                                            <td>{{$customer->contact_no}}</td>
                                            <td>{{$customer->email}}</td>
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


              {{-- ###################### staff_types ##############################  --}}
              <div class="col-md-6 mt-3">
                <div class="card">
                    <div class="card-header ">
                      staff_types
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">number room</th>
                                            <th scope="col">typeroom</th>
                                            <th scope="col">name</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        @if($staff_types->count()>0)
                                        @foreach($staff_types as $staff_type)
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>{{$staff_type->id}}</td>
                                            <td>{{$staff_type->staff_type}}</td>
                                            <td>{{$staff_type->name}}</td>

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
   {{-- ################################################# --}}
          {{-- ###################### staff ##############################  --}}
          <div class="col-md-6 mt-3">
            <div class="card">
                <div class="card-header ">
                  staff
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">number room</th>
                                        <th scope="col">typeroom</th>
                                        <th scope="col">typeroom</th>
                                        <th scope="col">typeroom</th>
                                        <th scope="col">typeroom</th>
                                        <th scope="col">staff_type_id</th>
                                        <th scope="col">id_card_type</th>


                                    </tr>
                                </thead>
                                <tbody>

                                    @if($staffs->count()>0)
                                    @foreach($staffs as $staff)
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>{{$staff->employ_name}}</td>
                                        <td>{{$staff->id_card_no}}</td>
                                        <td>{{$staff->address}}</td>
                                        <td>{{$staff->contact_no}}</td>
                                        <td>{{$staff->salary}}</td>
                                        
                                        <td>{{$staff->name}}</td>
                                         {{-- //$staff->stafftype->name --}}

                                        
                                        <td>{{$staff->id_card_typeid}}</td>

                                        

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
{{-- ################################################# --}}
   {{-- ###################### shifts ##############################  --}}
   <div class="col-md-6 mt-3">
    <div class="card">
        <div class="card-header ">
            shifts
        </div>
        <div class="card-body">
            <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">shift </th>
                                <th scope="col">shift_timing</th>
                          

                            </tr>
                        </thead>
                        <tbody>

                            @if($shifts->count()>0)
                            @foreach($shifts as $shift)
                            <tr>
                                <th scope="row">1</th>
                                <td>{{$shift->shift}}</td>
                                <td>{{$shift->shift_timing}}</td>
                               

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
