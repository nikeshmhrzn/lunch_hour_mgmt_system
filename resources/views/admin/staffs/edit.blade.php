 @extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{url('admin/staffs/'.$staffs->id)}}" method ="POST">
              <h2>Edit Category</h2>

                    @csrf
                @method('patch')

        <div class="form-group" style="font-size:18px;"> <!-- Name field -->
            <label class="control-label " for="name">Name</label>
            <input class="form-control" id="name" name="name" type="text"  value="{{$staffs->name}}" required style="font-size:19px;"/>
        </div>


    <div class="form-group" style="font-size:18px;"> <!-- Email field -->
		<label class="control-label requiredField" for="email">Email</label>
		<input class="form-control" id="email" name="email" type="text" value="{{$staffs->email}}" required style="font-size:19px;"/>
    </div>


    <div class="form-group" style="font-size:18px;"> <!-- Email field -->
		<label class="control-label requiredField" for="password">Password</label>
		<input class="form-control" id="password" name="password" type="password" value="{{$staffs->password}}" required style="font-size:19px;"/>
    </div>



        <div class="form-group">
            <button class="btn btn-primary " name="save" type="submit" value="save">Save</button>
        </div>

    </form>
    </div>
@endsection
