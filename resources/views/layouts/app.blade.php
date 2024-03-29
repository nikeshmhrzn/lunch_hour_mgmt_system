<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                            @else


                        {{-- @else --}}
                                @if(auth()->user()->user_type==1)

                                 <li>
                                    <a class="nav-link" href="{{url('admin/staffs/create')}}">Add Kitchen staff</a>
                                </li>

                                <li>
                                    <a class="nav-link" href="{{url('admin/staffs')}}">View Kitchen Staff</a>
                                </li>

                                <li>
                                    <a class="nav-link" href="{{url('admin/employees')}}">View Employees</a>
                                </li>

                                <li>
                                    <a class="nav-link" href="{{url('order/view')}}">Order's History</a>
                                </li>
                                @endif

                                @if(auth()->user()->user_type==2)
                                <li>
                                    <a class="nav-link" href="{{url('staffs/category/create')}}">Create category</a>
                                </li>

                                <li>
                                    <a class="nav-link" href="{{url('staffs/category')}}">View Category</a>
                                </li>

                                <li>
                                    <a class="nav-link" href="{{url('staffs/food')}}">View Menu</a>
                                </li>

                                    <li>
                                        <a class="nav-link" href="{{url('staffs/food/create')}}">Create Menu</a>
                                    </li>
                                    <li>
                                            <a class="nav-link" href="{{url('order/food')}}">View Orders</a>
                                        </li>

                                @endif


                                @if(auth()->user()->user_type==3)

                                <li>
                                    <a class="nav-link" href="{{url('employee')}}">View Menu</a>
                                </li>

                                <li>
                                    <a class="nav-link" href="{{url('/changePassword')}}">Change Password</a>
                                </li>

                                @endif


                                {{-- @elseif(auth()->user_type == 2) --}}



                                    {{-- </div> --}}


                                {{-- @elseif(auth()->user_type == 3) --}}

                                {{-- @endif --}}



                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}">
                                        {{ __('Logout') }}
                                    </a>

                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
                @if (session('message'))
                <div class="alert alert-success" role="alert">
                    {{ session('message') }}
                </div>
            @endif
            @yield('content')
        </main>
    </div>
</body>
</html>
