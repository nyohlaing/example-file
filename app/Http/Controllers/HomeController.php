<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class HomeController extends Controller
{
    public function welcome(){
        return view('welcome');
    }
    public function index(){
        return view('home');
    }

    public function upload(Request $request){
        $property = new property;

        $image = $request->file;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->file->move('property',$imagename);
        $property->image = $imagename;

        $property->owner = $request->owner;
        $property->unit = $request->unit;
        $property->bedroom = $request->bedroom;
        $property->bathroom = $request->bathroom;
        $property->carparking = $request->carparking;
        $property->cctv = $request->cctv;
        $property->address = $request->address;
        $property->price = $request->price;

        $property->save();
        return redirect("/view");
    }

    public function view(){
        $data = property::all();
        return view('display',compact('data'));
    }

    public function delete($id){
        $data = property::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function update($id){
        $property = property::find($id);
        return view('update_page',compact('property'));
    }

    public function update_new(Request $request,$id){
        $property = property::find($id);

        $image = $request->file;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->file->move('property',$imagename);
        $property->image = $imagename;
        
        $property->owner = $request->owner;
        $property->unit = $request->unit;
        $property->bedroom = $request->bedroom;
        $property->bathroom = $request->bathroom;
        $property->carparking = $request->carparking;
        $property->cctv = $request->cctv;
        $property->address = $request->address;
        $property->price = $request->price;

        $property->save();
        return redirect('/view');
    }
}
