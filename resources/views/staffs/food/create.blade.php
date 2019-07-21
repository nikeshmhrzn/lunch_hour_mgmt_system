@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{url('staffs/food')}}" method ="POST" enctype="multipart/form-data">
        <h2>Add Food Menu</h2>
            @csrf

	<div class="form-group" style="font-size:18px;"> <!-- Name field -->
		<label class="control-label " for="name">Name</label>
		<input class="form-control" id="name" name="name" type="text" required style="font-size:19px;"/>
	</div>

    <div class="form-group">
        <label class="control-label" for="image">Image</label>
        <input class="form-control" type="file" name="image" id="image">
        </div>

    <div class="form-group" style="font-size:18px;"> <!-- Description field -->
		<label class="control-label requiredField" for="class">Category</label>
	 {{-- <input class="form-control" id="class" name="class" type="number" required style="font-size:19px;"/> --}}

<!-- yo 'status'col-name chai classes ko db ko status ho -->
<select name="category_id" id="">

		 @foreach($categories as $category)
		 <option value="{{$category->id}}">{{ $category->name}}</option>
		 @endforeach
		 </select>

    </div>


    <div class="form-group">
        <button class="btn btn-primary " name="save" type="submit" value="save">Save</button>
    </div>

    </form>
    </div>

@endsection

