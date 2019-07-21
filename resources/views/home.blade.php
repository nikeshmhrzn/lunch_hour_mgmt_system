@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    {{-- <div class="row">
                        <div class="col-md-6">
                                <h4><a href ="{{url('staffs/category')}}">View Category</a></h4>
                        </div>

                        <div class="col-md-6">
                                <h4><a href ="{{url('staffs/food')}}">view Menu</a></h4>
                            </div>
                    </div> --}}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
