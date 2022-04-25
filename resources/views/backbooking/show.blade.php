@extends('Layouts.app')
@section('content')


    <div style="margin-top: 70px">
        <h4 class="editp">welcome to this page that show product details</h4>


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


@endsection
