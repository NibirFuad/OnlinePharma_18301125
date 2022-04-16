<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Medicine;
use App\Models\Order;
class AdminController extends Controller
{
    public function user(){
        $data=user::all();
        return view("admin.users",compact("data"));
    }
    public function deleteuser($id){
        $data=user::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function inventory(){
        $data=medicine::all(); 
        return view("admin.inventory",compact("data"));
    }
    public function deletemed($id){
        $data=medicine::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function updatemed($id){
        $data=medicine::find($id);
        return view("admin.updatemed",compact("data"));
    }
    public function update(Request $request,$id){
        $data=medicine::find($id);
        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;
        $data->save();
        return redirect()->back();
    }
    public function upload(Request $request){
        $data=new medicine;

        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;
        $data->save();
        return redirect()->back();
    }
    public function orders(){
        $data=order::all();
        return view('admin.orders',compact('data'));
    }
    public function search(Request $request){
        
        $s=$request->search;
        $data=order::where('username','Like','%'.$s.'%')->orWhere('medicine','Like','%'.$s.'%')->get();
        return view('admin.orders',compact('data'));
    }
}
