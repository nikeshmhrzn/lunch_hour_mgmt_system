@extends('layouts.app')

@section('content')
<div class="container">

{{-- <div class="container">

    <div class="row">
        <div class="col-md-4">
                <h3><a href ="{{url('admin/staffs/create')}}" button type="button" class="btn btn-success a"> Add Kitchen Staff</a></button></h3>
        </div>

        <div class="col-md-4">
                <h3><a href ="{{url('admin/employees')}}" button type="button" class="btn btn-success a">view employee</a></button></h3>
            </div>

            <div class="col-md-4">
                    <h3><a href ="{{url('admin/employees')}}" button type="button" class="btn btn-success a">Order History</a></button></h3>
                </div>
    </div>

</div> --}}
<br>
<div class="container">
        <div class="row">

            <h3 style="background-color:orange; text-align:center;">List of Kitchen Staffs</h3>

        </div>
    </div>

    <table border="1" class="table table-striped" >

    <thead style="background-color:grey; font-size:18px;">

        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            {{-- <th>user_type</th> --}}
            <th>Action</th>
        </tr>
    </thead>

    <tbody style="font-size:18px;">
         @foreach($staffs as $staff)
            <tr>
                <td> {{$staff->id}}</td>
                <td> {{$staff->name}}</td>
                <td> {{$staff->email}}</td>
                {{-- <td> {{$staff->user_type}}</td> --}}

                <td>
                    <div class="row">
                        <div class="col-md-3">
                          <a href=" {{url('admin/staffs/'.$staff->id. '/edit')}}" button type="button" class="btn btn-info a">Edit</a></button>
                        </div>

                        <div class="col-md-9">
                            <form action="{{url('admin/staffs/'.$staff->id)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>

                        </div>
                    </div>
                            </div>
                </td>

            </tr>

        @endforeach

    </table>
    </div>
    @endsection
