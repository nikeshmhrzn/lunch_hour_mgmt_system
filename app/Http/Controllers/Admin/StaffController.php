<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staffs = User::where('user_type',2)->get();

        // dd($employees);

        return view('admin.staffs.index', compact('staffs'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $kitchenstaffs = User::get();

        return view('admin.staffs.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $input['user_type']=2;

        $input['password']= \Hash::make($input['password']);
        User::create($input);
        return redirect(url('admin/staffs'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($staffs)
    {
        $staffs = User::find($staffs);

        // dd($staffs);
        return view('admin.staffs.edit', compact('staffs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $staffs)
    {
        $staffs = User::find($staffs);
        $staffs->name = $request->get('name');
        $staffs->email = $request->get('email');
        $staffs->password = $request->get('password');

        $staffs->save();

        return redirect(url('admin/staffs'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($staffs)
    {
        $staffs = User::find($staffs);
        $staffs->delete();
        return redirect(url('admin/staffs'));
    }
}
