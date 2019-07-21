@extends('layouts.app')
@section('content')

<div class="container">

<div class="container">
        <div class="row">

            <h3 style="background-color:orange; text-align:center;">Report for Menu of the day</h3>

        </div>
    </div>
<table border="1" class="table table-striped" >

<thead  style="background-color:grey; font-size:18px;">
<tr>
    <th>id</th>
    <th>Name</th>
    <th>Photo</th>
    <th>Category</th>
    <th>created</th>

</tr>
</thead>

<tbody style="font-size:18px;">
    @foreach($foods as $food)
        <tr>
    <td>{{$food->id}}</td>
    <td>{{$food->name}}</td>
    <td><img src="{{asset('storage/images/foods/'. $food->image)}}" alt="" height="100" width="150"></td>

    <td>  {{optional($food->category)->name}}</td>
        <td>{{$food->created_at}}</td>



@endforeach

</table>
</div>
@endsection
