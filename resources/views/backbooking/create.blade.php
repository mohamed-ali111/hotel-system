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

        <form enctype="multipart/form-data" method="post" action="{{ route('booking.save') }}" class="container1"
            style="margin: auto;margin-bottom: 50px" onchange="myFunction()">
            @csrf


            <div class="form-group">
                <label>booking date</label>
                <input type="date" class="form-control" name="created_at" value="{{ date('Y-m-d') }}">
            </div>

            <div class="form-group">
                <label>check-in</label>
                <input type="date" class="form-control" id="check_in" name="check_in" value="{{ date('Y-m-d') }}"
                    required>
            </div>


            <div class="form-group">
                <label>check_out</label>
                <input type="date" class="form-control" id="check_out" name="check_out" onChange="myFunction()">
            </div>


            <div class="form-group">
                <label>total_price</label>
                <input type="number" class="form-control" id="total_price" name="total_price" readonly>
            </div>


            <div class="form-group">
                <label>remaining_price</label>
                <input type="number" class="form-control" name="remaining_price" id="remaining_price">
            </div>


            <div class="form-group">
                <label>payment_status</label>
                <input type="number" class="form-control" name="payment_status">
            </div>





            {{-- ######################################################################################################## --}}

            <div class="col">
                <label for="inputName" class="control-label">room_type</label>
                <select name="room_type" class="form-control SlectBox" onclick="console.log($(this).val())"
                    onchange="console.log('change is firing')">
                    <!--placeholder-->
                    <option value="" selected disabled>حدد القسم</option>
                    @foreach ($roomType0s as $roomType0)
                        <option value="{{ $roomType0->id }}"> {{ $roomType0->room_type_name }}</option>
                        {{-- //there put section->id to get value by id and show value by name of id --}}
                    @endforeach
                </select>
            </div>



            <div class="col">
                <label for="inputName" class="control-label">room_id</label>
                <select id="room_id" name="room_id" class="form-control">
                </select>
            </div>

            {{-- ########################################################################################################### --}}
            <div class="form-group">
                <label>customer</label>
                <br>
                <select class="form-control" name="customer_id">

                    <option value="" selected disabled>main category</option>

                    @foreach ($customers as $customer2)
                        <option value="{{ $customer2->id }}"> {{ $customer2->customer_name }}</option>
                    @endforeach




                </select>
            </div>
            {{-- ############################################################################################################### --}}
            <input type="submit" class="btn btn-primary" value="save">
        </form>
    </div>











@endsection







<script>
    function myFunction() {
        var check_in = document.getElementById('check_in').value; //there give the value of مبلغ العمولة

        var check_out = document.getElementById('check_out').value;
        const dateOne = new Date(check_in);
        const dateTwo = new Date(check_out);

        //console.log(dateOne.getDate() - dateTwo.getDate()); // 10

        //  const total_day = Math.abs(dateTwo - dateOne ); //total
        // const days = Math.ceil(total_day / (1000 * 60 * 60 * 24));
        const days = ((dateTwo.getTime() - dateOne.getTime()) / (1000 * 60 * 60 * 24)); //total


        //console.log(Math.abs(check_out.getDate() - check_in.getDate())); // 8
        //return total_day / 1000;
        //   var total_day = (check_out.getDate()  - check_in.getDate() ); //total

        //   var total = days  ; // THIS == VALUE_VATE
        var total2 = days + 200; // THIS == VALUE_VATE
        //   {{-- sumt = parseFloat(total).toFixed(2); --}}

        // {{-- sumq = parseFloat(total_day).toFixed(2); --}}

        //  document.getElementById("Value_VAT").value = sumq;

        document.getElementById("total_price").value = days; //ارقام عشريه
        document.getElementById("remaining_price").value = total2; //ارقام عشريه



    }
</script>





<script>

    $(document).ready(function() {
        $('select[name="room_type"]').on('change', function() {
            var roomId = $(this).val();
            if (roomId) {
                $.ajax({
                    url: "{{ URL::to('Room') }}/" +
                        roomId, //Section in this line refere to route Route::get('/Section/{id}','InvoicesController@getproducts');
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                            $('select[name="room_id"]').empty();
                            $.each(data, function(key, value) {
                                $('select[name="room_id"]').append('<option value="' +
                                    value + '">' + value + '</option>');
                            });
                    },
                });

            } else {
                console.log('AJAX load did not work');
            }
        });

    });
</script>
