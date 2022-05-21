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

    {{-- ########################3#33# --}}
    {{-- errors code --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {{-- ############################3 --}}




	<div class="col-lg-12">
									<div class="card">
										<div class="card-header">
											<h4>Basic Table</h4>
										</div>
										<div class="card-body">
											<div class="table-responsive">
											  <table class="table table-bordered mb-0 text-nowrap">
												<tr>
														<th>#</th>
														<th>Name</th>
														<th>Position</th>
														<th>Date of joining</th>
														<th>Date of Re leaving</th>
														<th>projects</th>
														<th>Experience</th>
													</tr>
													<tr>
														<td>1</td>
														<td>Joshua Welch</td>
														<td>Web Designer</td>
														<td>19-6-2014</td>
														<td>19-6-2018</td>
														<td>14</td>
														<td>4 yrs</td>
													</tr>
													<tr>
														<td>2</td>
														<td>Alan	Randall</td>
														<td>Accountant</td>
														<td>21-5-2015</td>
														<td>21-5-2018</td>
														<td>10</td>
														<td>3 yrs</td>
													</tr>
													<tr>
														<td>3</td>
														<td>Jack	Greene</td>
														<td>App Developer</td>
														<td>21-3-2010</td>
														<td>21-3-2018</td>
														<td>24</td>
														<td>8 yrs</td>
													</tr>
													<tr>
														<td>4</td>
														<td>Sean Lawrence</td>
														<td>Jr.Developer</td>
														<td>25-8-2015</td>
														<td>25-8-2015</td>
														<td>10</td>
														<td>3 yrs</td>
													</tr>
													<tr>
														<td>5</td>
														<td>Oliver Welch</td>
														<td>HR</td>
														<td>15-10-2012</td>
														<td>15-10-2018</td>
														<td>20</td>
														<td>6 yrs</td>
													</tr>
											  </table>
											</div>
										</div>
									</div>
								</div>


    <div style="margin-top: 70px">
        <h4 class="editp">welcome to this page that show product details55555555555555555555555</h4>


        {{--    for testing--}}
        <div class="card1">
            <h6>OVERALL PROGRESS </h6>
            <div  class="card-header1">
                <h1> {{$booking->created_at}}</h1>
                <h1> {{$booking->check_in}}</h1>
                <p class="card-text">{{$booking->check_out}}</p>
                    <p class="card-text"> {{$booking->total_price}}</p>
               <p>    {{$booking->remaining_price}}    </p>

               {{-- <p>    {{$booking->payment_status}}    </p> --}}

                                  
               
                        <div>

                            <div>

                                    @if($booking->payment_status == 1)
                                    <span class="badge bg-info">Pending</span>                    

                                    @else
                                    <span class="badge bg-success">Approved</span>
                                        @endif

                                    
                                    </div>
                                    

                                </div>

            </div>
        
        
        </div>


    </div>





{{-- </div>
</div> --}}






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
