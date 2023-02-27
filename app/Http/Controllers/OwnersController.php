<?php

namespace App\Http\Controllers;

use App\Models\Owners;
use Illuminate\Http\Request;

class OwnersController extends Controller
{
    public function owners(){
        $owners=Owners::all();
        return view("owners.list",[
            "owners"=>$owners
        ]);
    }

    public function create(){
        return view("owners.create");
    }

    public function store(Request $request){
        $owner=new Owners();
        $owner->name=$request->name;
        $owner->surname=$request->surname;
        $owner->save();
        return redirect()->route("owners.list");
    }

    public function update(Request $request, $id){
        $owner=Owners::find($id);
        return view("owners.update",[
            'owner'=>$owner
        ]);
    }

    public function save(Request $request, $id){
        $owner=Owners::find($id);
        $owner->name=$request->name;
        $owner->surname=$request->surname;
        $owner->save();
        return redirect()->route("owners.list");
    }

    public function delete($id){
        Owners::destroy($id);
        return redirect()->route("owners.list");
    }


}
