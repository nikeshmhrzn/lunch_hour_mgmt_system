@extends('layouts.app')

@section('content')
<div class="container">


    {{-- <h3><a href ="{{url('admin/employee')}}">view employee</a></h3> --}}

    <div class="container">
        <div class="row">

                <h3 style="background-color:orange; text-align:center;">List of Orders</h3>

        </div>
    </div>

    <table border="1" class="table table-striped" >

    <thead  style="background-color:grey; font-size:18px;">
        <tr>
            <th>id</th>
            <th>date</th>
            <th>user_id</th>
            <th>food_id</th>
            {{-- <th>user_type</th> --}}
            <th>Action</th>
        </tr>
    </thead>

    <tbody style="font-size:18px;">
         @foreach($orders as $order)
            <tr>
                <td> {{$order->id}}</td>
                <td> {{$order->date}}</td>
                <td> {{$order->user_id}}</td>
                <td> {{$order->food_id}}</td>
                    <td>
                            <div class="row">
                                    <div class="col-md-12">
                                            <script>
                                                    function myFunction() {
                                                     alert("Order Complete notification has been send to the employee!!");
                                                    // document.getElementById("demo").innerHTML = "Completed";
                                                    }
                                                    </script>
                                                    <p id="demo"></p>
                                            <button onclick="this.style.visibility= 'hidden'; myFunction()">Complete</button>


                                </div>
                                </div>
                    </td>


            </tr>

        @endforeach

    </table>
    </div>
    @endsection
