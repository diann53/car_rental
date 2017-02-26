<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Vehicle;

use App\UserVehicle;

class AdminController extends Controller
{
    //
    public function vehicle(){
        $vehicles  = UserVehicle::with('users','vehicles')->where('users_id', auth()->user()->id)->latest()->get();
        return view('Admin.vehicle',compact('vehicles'));
    }
     public function request(){
        $requests = \App\Request::with('userName','vehicles')
        ->where('owner_id', auth()->user()->id)
        ->get();
        return view('Admin.request',compact('requests'));
    }
    public function addVehicle(Request $request){
        $file = $request->file('image');
        $file_dest = 'vehicles';
        $file_name = auth()->user()->name.'_'.$request->name.'_'.$file->getClientOriginalExtension();
        $file->move($file_dest, $file_name);

        
        $v = Vehicle::create([
            'name' => $request->name,
            'image' => $file_dest.'/'.$file_name
        ]);

        UserVehicle::create([
            'users_id' => auth()->user()->id,
            'vehicles_id' => $v->id
        ]);

        return back();
    }
    public function deleteVehicle(UserVehicle $v){
        $v->delete();
        return back();
    }

    public function approve(\App\Request $request){
        $request->status = 1;
        $request->update();
        return back();
    }

    public function reject(\App\Request $request){
        $request->status = 0;
        $request->update();
        return back();
    }
}
