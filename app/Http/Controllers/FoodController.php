<?php

namespace App\Http\Controllers;

use App\Food;
use App\Category;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foods = Food::all();
        $categories = Category::all();
        return view('staffs.food.index',compact('foods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where('status',1)->get();
        return view('staffs.food.create',compact('categories'));
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
        if($request->hasFile('image'))

        {

            $destination_path='public/images/foods';
              $image = $request->file('image');
            $image_name= time(). '_' . $image->getClientOriginalName();

            $request->file('image')->storeAs($destination_path, $image_name);
            $input['image'] = $image_name;

        }
        Food::create($input);
        return redirect(url('staffs/food'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function show(Food $food)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function edit($foods)
    {
        $foods = Food::find($foods);
        $categories = Category::all();
        return view('staffs.food.edit')->with('foods',$foods)->with('categories',$categories);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $foods)
    {
        $foods = Food::find($ $foods);
        $ $foods->name = $request->get('name');
        $ $foods->category_id = $request->get('category_id');

        if($request->hasFile('image'))

        {
            $userImage = public_path("storage/images/foods/{$foods->image}");

            if(File::exist($userImage))
            {
                File::delete($userImage);
            }

            $destination_path='public/images/foods';
              $image = $request->file('image');
            $image_name= time(). '_' . $image->getClientOriginalName();

            $request->file('image')->storeAs($destination_path, $image_name);
            $foods->image = $image_name;

        }
         $foods->save();

        return redirect(url('staffs/food'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function destroy($foods)
    {
        $foods = Food::find($foods);
        $foods->delete();
        return redirect(url('staffs/food'));
    }
}
