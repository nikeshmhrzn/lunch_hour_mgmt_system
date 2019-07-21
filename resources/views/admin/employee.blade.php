@extends('layouts.app')

@section('content')
<div class="container">


    {{-- <h3><a href ="{{url('admin/employee')}}">view employee</a></h3> --}}

    <div class="container">
        <div class="row">

                <h3 style="background-color:orange; text-align:center;">List of Employees</h3>

        </div>
    </div>

    <table border="1" class="table table-striped" >

    <thead  style="background-color:grey; font-size:18px;">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            {{-- <th>user_type</th> --}}
            <th>Action</th>
        </tr>
    </thead>

    <tbody style="font-size:18px;">
         @foreach($employees as $employee)
            <tr>
                <td> {{$employee->id}}</td>
                <td> {{$employee->name}}</td>
                <td> {{$employee->email}}</td>
                {{-- <td> {{$employee->user_type}}</td> --}}

                <td>
                    <div class="row">
                        <div class="col-md-12">
                         @if($employee->approved_at == null)
                         <a href=" {{url('admin/employees/'.$employee->id. '/approve')}}" class="btn btn-info a">Approve</a></button>
                        @endif
                    </div>
                    </div>
                            </div>
                </td>

            </tr>

        @endforeach

    </table>
    </div>
    @endsection
