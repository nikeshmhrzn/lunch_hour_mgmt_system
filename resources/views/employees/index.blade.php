@extends('layouts.app')
@section('content')

<div class="container">
{{-- <h3><a href ="{{url('staffs/food/create')}}">Add Food</a></h3> --}}

<div class="container">
    <div class="row">

        <h3 style="background-color:orange; text-align:center;">Menu of the day</h3>

    </div>
</div>
<table border="1" class="table table-striped" >

<thead  style="background-color:grey; font-size:18px;">
<tr>
    <th>id</th>
    <th>Name</th>
    <th>Image</th>
    <th>Category</th>
    <th>Action</th>
</tr>
</thead>

<tbody style="font-size:18px;">
    @foreach($foods as $food)
        <tr>
    <td>{{$food->id}}</td>
    <td>{{$food->name}}</td>
    <td><img src="{{asset('storage/images/foods/'. $food->image)}}" alt="" height="100" width="150"></td>

    <td>  {{optional($food->category)->name}}</td>
    <td>

            <div class="row">
            <div class="col-md-3">

                    {{-- <div class="col-md-4">
                            <h3><a href ="{{url('employee/create')}}" button type="button" class="btn btn-success a"> order</a></button></h3>
                    </div> --}}
                    <div class="col-md-12">
                            <script>
                                    function myFunction() {
                                     alert("Your Order request has been added!!");
                                    // document.getElementById("demo").innerHTML = "Completed";
                                    }
                                    </script>
                                    <p id="demo"></p>
                            <button onclick="this.style.visibility= 'hidden'; myFunction()">Order</button>
                     {{-- <a href=" {{url('order/create')}}" class="btn btn-info a">Done</a></button> --}}

                </div>
            </div>


                </div>
             </td>


@endforeach


</table>
</div>
@endsection
