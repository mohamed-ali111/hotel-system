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



















{{-- ########################type_room #################################  --}}
       






                             <div class="row">
								<div class="col-lg-12">
									<div class="card">
										<div class="card-header">
                                            <h5 class="">room type<span  class="badge badge-primary m-1">{{$room_types->count()}}</span></h5>
                                               <a href="{{route('roomtype.create')}}" class="btn btn-info">add new room_type</a>
											<h4>Hover Table</h4>
										</div>
										<div class="card-body">
											<div class="table-responsive">
												<table class="table table-bordered table-hover mb-0 text-nowrap">
													<tbody><tr>
														<th>#</th>
														<th>room_type_name</th>
														<th>price</th>
														<th>max_person</th>
														<th>created_at</th>
														<th>updated_at</th>
                                                        <th>Controlles</th>
													</tr>
                                                       @if($room_types->count()>0)
                                                        @foreach($room_types as $type)
													<tr>
														<td>1</td>
														<td>{{$type->room_type_name}}</td>
														<td>{{$type->price}}</td>
														<td>{{$type->max_person}}</td>
														<td>{{$type->created_at}}</td>
														<td>{{$type->updated_at}}</td>



                                                             <td>
                                            {{-- @can('تعديل قسم') --}}
                                                <a class="modal-effect btn btn-sm btn-info" data-effect="effect-scale"
                                                    data-toggle="modal" data-id="{{ $type->id }}"
                                                    data-room_type_name="{{ $type->room_type_name }}"
                                                  href="#modaldemo2">
                                                    <i class="fa fa-pencil"></i></a>
                                            {{-- @endcan --}}
                                     
                                            {{-- @can('حذف قسم') --}}
                                                <a class="modal-effect btn btn-sm btn-danger" data-effect="effect-scale"
                                                    data-id="{{ $type->id }}"
                                                    data-room_type_name="{{ $type->room_type_name }}" data-toggle="modal"
                                                    href="#modaldemo9" title="حذف"><i class="fa fa-trash"></i></a>
                                            {{-- @endcan --}}
                                        </td>



													</tr>
												   @endforeach
                                                    @endif
									
												</tbody>
                                                </table>
											</div>
										</div>
									</div>
								</div>
							


 <!-- delete -->
    <div class="modal" id="modaldemo9">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">حذف القسم</h6><button aria-label="Close" class="close"
                        data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                </div>
                <form action="#" method="post">
                    {{ method_field('delete') }}
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <p>هل انت متاكد من عملية الحذف ؟</p><br>
                        <input type="text" name="id" id="id" value="">
                       <input class="form-control" name="room_type_name" id="room_type_name" type="text"  readonly>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>
                        <button type="submit" class="btn btn-danger">تاكيد</button>
                    </div>
            </div>
            </form>
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



          {{-- JAVASCRIPT DELETE --}}
<script src="{{ URL::asset('/js/room.js') }}"></script>

    {{-- END JAVASCRIPT DELETE --}}

@endsection