@extends('layouts.app')
@section('content')

<div class="container">
    {{-- <h3><a href ="{{url('staffs/category/create')}}">Create Category</a></h3> --}}

    {{-- <div class="row">
            <div class="col-md-4">
                    <h3><a href ="{{url('staffs/category/create')}}" button type="button" class="btn btn-success a"> Create Category</a></button></h3>
            </div>

            <div class="col-md-4">
                    <h3><a href ="{{url('staffs/food')}}" button type="button" class="btn btn-success a">View Menu</a></button></h3>
                </div>

                <div class="col-md-4">
                    <h3><a href ="{{url('staffs/food/create')}}" button type="button" class="btn btn-success a">Create Menu</a></button></h3>
                </div>
        </div> --}}
        <br>

        <div class="container">
                <div class="row">

                    <h3 style="background-color:orange; text-align:center;">List of Categories</h3>

                </div>
            </div>

<table border="1" class="table table-striped" >

<thead  style="background-color:grey; font-size:18px;">
<tr>
    <th>id</th>
    <th>Name</th>
    <th>Status</th>
    <th>Action</th>
</tr>
</thead>


<tbody style="font-size:18px;">
    @foreach($categories as $category)
        <tr>
            <td>{{$category->id}}</td>
            <td> <a href="{{url('staffs/category/'.$category->id)}}">{{$category->name}}</a></td>
            <td> {{$category->status}}</td>


            <td>
    <div class="row">
        <div class="col-md-3">
            <a href="{{url('staffs/category/' .$category->id. '/edit')}}" button type="button" class="btn btn-info a">Edit</a></button>
        </div>

        <div class="col-md-9">
            <form action="{{url('staffs/category/'.$category->id)}}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>

        </div>
    </div>

    </td>
</tr>

    @endforeach

</table>
</div>
@endsection
