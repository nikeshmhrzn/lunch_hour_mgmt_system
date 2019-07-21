<?php

namespace App\Http\Controllers;
use App\Food;
use App\User;
use App\Order;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    public function index(){
        $foods = Food::all();
        return view('employees.index',compact('foods'));

    }
    public function edit($staffs)
    {
        $staffs = User::where('user_type',3)->find($staffs);

        // dd($staffs);
        return view('employees.changepassword', compact('staffs'));
    }

    public function create(){
        return view('employees.create');

    }
    public function store(Request $request)
    {
        $input = $request->all();
        Order::create($input);

        return redirect(url('employee'));

    }



}
