@extends('layouts.app')

@section('content')


<div class="container">
    <form action="{{url('admin/staffs')}}" method ="POST">
        <h2>Add Kitchen Staff</h2>
            @csrf

	<div class="form-group" style="font-size:18px;"> <!-- Name field -->
		<label class="control-label " for="name">Name</label>
		<input class="form-control" id="name" name="name" type="text" required style="font-size:19px;"/>
	</div>

    <div class="form-group" style="font-size:18px;"> <!-- Email field -->
		<label class="control-label requiredField" for="email">Email</label>
		<input class="form-control" id="email" name="email" type="text" required style="font-size:19px;"/>
    </div>


    <div class="form-group" style="font-size:18px;"> <!-- Email field -->
		<label class="control-label requiredField" for="password">Password</label>
		<input class="form-control" id="password" name="password" type="password" required style="font-size:19px;"/>
    </div>

    <div class="form-group">
        <button class="btn btn-primary " name="save" type="submit" value="save">Save</button>
    </div>

    </form>
    </div>

@endsection
