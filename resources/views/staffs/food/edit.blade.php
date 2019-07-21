@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{url('staffs/food/'. $foods->id)}}" method ="POST" enctype="multipart/form-data">
        <h2>Edit Food Menu</h2>
            @csrf

	<div class="form-group" style="font-size:18px;"> <!-- Name field -->
		<label class="control-label " for="name">Name</label>
		<input class="form-control" id="name" name="name" type="text" value="{{$foods->name}}" required style="font-size:19px;"/>
	</div>

    <div class="form-group">
        <label class="control-label" for="image">Image</label>
        <td><img src="{{asset('storage/images/foods/'. $foods->image)}}" alt="" height="100" width="150"></td>
        <input class="form-control" type="file" name="image" id="image">
        </div>

        <div class="form-group" style="font-size:18px;"> <!-- Subject field -->
            <label class="control-label " for="class">Category</label>
         {{-- <input class="form-control" id="class" name="class" type="text" value="{{$students->class_id}}" required style="font-size:19px;"/> --}}
        <select name="category_id">

             @foreach($categories as $category)
             <option value="{{$category->id}}"
             @if($category->id == $foods->category_id) selected="selected"
             @endif
             >{{$category->name}}

             </option>
             @endforeach
             </select>

        </div>


    <div class="form-group">
        <button class="btn btn-primary " name="save" type="submit" value="save">Save</button>
    </div>

    </form>
    </div>

@endsection

