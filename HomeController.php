<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Medicine;
use App\Models\Cart;
use App\Models\Order;


class HomeController extends Controller
{
    public function index(){

        if(Auth::id()){

            return redirect('redirects');
        }else{
        $data= medicine::all();
        return view("home",compact("data"));
        }
    }
    public function redirects(){
        $data= medicine::all();
        $usertype= Auth::user()->usertype;
        if ($usertype=="1"){
            return view("admin.adminhome");
        }
        else{

            $user_id=Auth::id();
            $count=cart::where('user_id',$user_id)->count();

            return view("userhome",compact("data",'count'));
        }
    }

    public function addtocart(Request $request,$id){

        if(Auth::id()){
            $user_id=Auth::id();
            $medicine_id=$id;
            $quantity=$request->quantity;
            
            $cart= new cart;
            $cart->user_id=$user_id;
            $cart->medicine_id=$medicine_id;
            $cart->quantity=$quantity;

            $cart->save();

            return redirect()->back();
        }
        
    }

    public function showcart(Request $request,$id){
        $count=cart::where('user_id',$id)->count();
        if(Auth::id()==$id){
        $d=cart::select('*')->where('user_id','=',$id)->get();
        
        $data=cart::where('user_id',$id)->join('medicines','carts.medicine_id','=','medicines.id')->get();


        return view('showcart',compact('count','data','d'));
        }
        else{
            return redirect()->back();
        }
    }

    public function remove($id){
        $data=cart::find($id);
        $data->delete();

        return redirect()->back();
    }

    public function taketologin(){

        
        return redirect('/login');
        
    }

    public function placeorder(Request $request){


        foreach($request->medname as $key=>$medname)
        {

            $data=new order;
            $data->medicine=$medname;
            $data->price=$request->price[$key];
            $data->quantity=$request->quantity[$key];
            $data->username=$request->name;
            $data->phone=$request->phone;
            $data->address=$request->address;
            $data->save();
        }
        return redirect()->back();
        
        
    }
}
