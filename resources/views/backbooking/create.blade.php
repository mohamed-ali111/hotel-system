@extends('layouts.app')

@section('content')




<h4 class="editp">create new booking</h4>
<div class="container ">
    {{-- ################################# --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {{-- ########################### --}}

    <form enctype="multipart/form-data" method="post" action="{{route('booking.save')}}"  class="container1" style="margin: auto;margin-bottom: 50px">
        @csrf


        <div class="form-group">
            <label >booking date</label>
            <input type="date" class="form-control" name="created_at"  value="{{ date('Y-m-d') }}">
        </div>

        <div class="form-group">
            <label >check-in</label>
            <input type="date" class="form-control" name="check_in">
        </div>


        <div class="form-group">
            <label >check_out</label>
            <input type="date" class="form-control" name="check_out">
        </div>


        <div class="form-group">
            <label >total_price</label>
            <input type="number" class="form-control" name="total_price">
        </div>


        <div class="form-group">
            <label >remaining_price</label>
            <input type="number" class="form-control" name="remaining_price">
        </div>


        <div class="form-group">
            <label >payment_status</label>
            <input type="number" class="form-control" name="payment_status">
        </div>



    

{{-- ######################################################################################################## --}}
<div class="form-group">
    <label >room number</label>
    <br>
    <select class="form-control" name="room_id">
        <option readonly>---choose--</option>
        <!-- <option  value="0">main category</option> -->
        @if($rooms->count() > 0)
            @foreach($rooms as $room)
        <option  value="{{$room->id}}"> {{$room->room_no}}</option>
            @endforeach
        @else
            <option disabled readonly>there is not id_card_type here</option>
            @endif

    </select>
</div>
{{-- ########################################################################################################### --}}
<div class="form-group">
    <label >customer</label>
    <br>
    <select class="form-control" name="customer_id">
        <option readonly>---choose--</option>
        <!-- <option  value="0">main category</option> -->
        @if($customers->count() > 0)
            @foreach($customers as $customer2)
        <option  value="{{$customer2->id}}"> {{$customer2->customer_name}}</option>
            @endforeach
        @else
            <option disabled readonly>there is not id_card_type here</option>
            @endif

    </select>
</div>
{{-- ############################################################################################################### --}}
        <input type="submit" class="btn btn-primary" value="save">
    </form>
</div>











@endsection








