<?php

namespace App\Http\Controllers\Admin;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
        $employees = User::where('user_type',3)->get();
        return view('admin.employee', compact('employees'));
    }

    public function approve(User $employee){
        $employee->update(['approved_at' => now()]);
        return redirect(url('admin/employees'))->withMessage('Employee approved successfully');

    }


}
