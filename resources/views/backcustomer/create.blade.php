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

        <form enctype="multipart/form-data" method="post" action="{{route('customer.save')}}"  class="container1" style="margin: auto;margin-bottom: 50px">
            @csrf


            <div class="form-group">
                <label >customer_name</label>
                <input type="text" class="form-control" name="customer_name">
            </div>

            <div class="form-group">
                <label >contact_no</label>
                <input type="text" class="form-control" name="contact_no">
            </div>


            <div class="form-group">
                <label >email</label>
                <input type="email" class="form-control" name="email">
            </div>


            <div class="form-group">
                <label >id_card_no</label>
                <input type="text" class="form-control" name="id_card_no">
            </div>


            <div class="form-group">
                <label >address</label>
                <input type="text" class="form-control" name="address" >
            </div>


         
            
            <div class="form-group">
                <label >id_card_type_id</label>
                <br>
                <select class="form-control" name="id_card_type_id">
                    <option readonly>---choose--</option>
                    <!-- <option  value="0">main category</option> -->
                    @if($id_card_types->count() > 0)
                        @foreach($id_card_types as $id_card_type1)
                    <option  value="{{$id_card_type1->id}}"> {{$id_card_type1->id_card_type}}</option>
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
