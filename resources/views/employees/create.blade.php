@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{url('employee')}}" method ="POST">
        <h2>Order here</h2>
        @csrf

	    <div class="form-group" style="font-size:18px;"> <!-- Name field -->
		    <label class="control-label " for="date">date</label>
		    <input class="form-control" id="date" name="date" type="date" required style="font-size:19px;"/>
        </div>

	    <div class="form-group">
		    <button class="btn btn-primary " name="save" type="submit" value="save">Save</button>
	    </div>


    </form>
</div>
@endsection
