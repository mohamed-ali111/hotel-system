@extends('layouts.app')
@section('content')

<h4 class="editp">create new room type</h4>
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

    <form enctype="multipart/form-data" method="post" action="{{route('roomtype.save')}}"  class="container1" style="margin: auto;margin-bottom: 50px">
        @csrf


        <div class="form-group">
            <label >room type name</label>
            <input type="text" class="form-control" name="room_type_name">
        </div>

        <div class="form-group">
            <label >price</label>
            <input type="number" class="form-control" name="price">
        </div>


        <div class="form-group">
            <label >max-person</label>
            <input type="number" class="form-control" name="max_person">
        </div>


      


        <input type="submit" class="btn btn-primary" value="save">
    </form>
</div>




@endsection
