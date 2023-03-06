<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Owner;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $ownerSearch=$request->session()->get('ownerSearch');
        $reg_numberSearch=$request->session()->get('reg_numberSearch');
        $brandSearch=$request->session()->get('brandSearch');
        $modelSearch=$request->session()->get('modelSearch');

        $cars=Car::with('owner');
        if ($ownerSearch!=null){
            $cars->where('owner_id','Like',"$ownerSearch");
        }
        if ($reg_numberSearch!=null){
            $cars->where('reg_number','Like',"%$reg_numberSearch%");
        }
        if ($brandSearch!=null){
            $cars->where('brand','Like',"%$brandSearch%");
        }
        if ($modelSearch!=null){
            $cars->where('model','Like',"%$modelSearch%");
        }
        $cars=$cars->get();

        return view("cars.index",[

//            'cars'=>Car::all()
            'cars'=>$cars,
            'owners'=>Owner::orderBy('name')->get(),
            'ownerSearch'=>$ownerSearch,
            'reg_numberSearch'=>$reg_numberSearch,
            'brandSearch'=>$brandSearch,
            'modelSearch'=>$modelSearch

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("cars.create",[
//            'owners'=>Owner::all()
            'owners'=>Owner::orderBy('name')->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
//        dd($request->all());
        Car::create($request->all());
        return redirect()->route("cars.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        return view("cars.edit",[
            "car"=>$car,
//            "owners"=>Owner::all()
            'owners'=>Owner::orderBy('name')->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {
        $car->fill($request->all());
        $car->save();
        return redirect()->route("cars.index");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        $car->delete();
        return redirect()->route("cars.index");

    }

    public function search(Request $request){
        $request->session()->put('ownerSearch',$request->ownerSearch);
        $request->session()->put('reg_numberSearch',$request->reg_numberSearch);
        $request->session()->put('brandSearch',$request->brandSearch);
        $request->session()->put('modelSearch',$request->modelSearch);

        return redirect()->route('cars.index');
    }

    public function forget(Request $request){
        $request->session()->forget('ownerSearch');
        $request->session()->forget('reg_numberSearch');
        $request->session()->forget('brandSearch');
        $request->session()->forget('modelSearch');

        return redirect()->route('cars.index');

    }

}
