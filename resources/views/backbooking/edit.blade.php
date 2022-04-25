@extends('layouts.app')
@section('content')




<h4 class="editp">Edit your back_room</h4>
    <div class="container">
        <div class="row">
            <div class="container1 col-md-6">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form enctype="multipart/form-data" method="post" action="#" >
            @csrf


            <input type="hidden" value="{{$edit->id}}" name="book_id">


          
            <div class="form-group">
                <label >booking date</label>
                <input type="text" class="form-control" value="{{$edit->created_at}}" >
            </div>
    
            <div class="form-group">
                <label >check-in</label>
                <input type="date" value="{{$edit->check_in}}" class="form-control" name="check_in">
            </div>
    
    
            <div class="form-group">
                <label >check_out</label>
                <input type="date" value="{{$edit->check_out}}" class="form-control" name="check_out">
            </div>
    
    
            <div class="form-group">
                <label >total_price</label>
                <input type="number" value="{{$edit->total_price}}" class="form-control" name="total_price">
            </div>
    
    
            <div class="form-group">
                <label >remaining_price</label>
                <input type="number" value="{{$edit->remaining_price}}" class="form-control" name="remaining_price">
            </div>
    
    
            <div class="form-group">
                <label >payment_status</label>
                <input type="number" value="{{$edit->payment_status}}" class="form-control" name="payment_status">
            </div>
            {{-- ############################################# --}}
            {{-- ################################################ --}}
            <div class="form-group">
                <label >room</label>
                    <select class="form-control" name="category_id">
                        
                         <option  value="{{$edit->rooms2->id}}">
                            {{ $edit->rooms2->room_no }}

                        </option> 
                       
                            @foreach($rooms as $room)
    
                                <option   value="{{$room->id}}"> {{$room->room_no}}</option>
                            @endforeach
                    </select>
                </div>
 {{-- ############################################# --}}
            {{-- ################################################ --}}
      


         



       

            <input type="submit" class="btn btn-primary" value="save posts">
        </form>

    
    </div>
           
        </div>
    </div>




@endsection
