@extends('layouts.app')
@section('content')




    <h4 class="editp">create new product</h4>
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

        <form enctype="multipart/form-data" method="post" action="{{route('room.save')}}"  class="container1" style="margin: auto;margin-bottom: 50px">
            @csrf

          

            <div class="form-group">
                <label >room_no</label>
                <input type="text" class="form-control" name="room_no">
            </div>

            <div class="form-group">
                <label >status</label>
                <input type="number" class="form-control" name="status">
            </div>


            <div class="form-group">
                <label >check_in_status</label>
                <input type="number" class="form-control" name="check_in_status">
            </div>


            <div class="form-group">
                <label >check_out_status</label>
                <input type="number" class="form-control" name="check_out_status">
            </div>


            <div class="form-group">
                <label >delete_status</label>
                <input type="number" class="form-control" name="delete_status" >
            </div>


         
            
            <div class="form-group">
                <label >room_type_id</label>
                <br>
                <select class="form-control" name="roomtype_id">
                    <option readonly>---choose--</option>
                    <!-- <option  value="0">main category</option> -->
                    @if($roomType0s->count() > 0)
                        @foreach($roomType0s as $roomType02)
                    <option  value="{{$roomType02->id}}"> {{$roomType02->room_type_name}}</option>
                        @endforeach
                    @else
                        <option disabled readonly>there is not id_card_type here</option>
                        @endif

                </select>
            </div>


            <input type="submit" class="btn btn-primary" value="save">
        </form>
    </div>


@endsection
