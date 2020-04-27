<?php

namespace App\Http\Controllers;

use App\Phone;
use Illuminate\Http\Request;
use DB;

class PhoneController extends Controller
{  /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
       $phone = DB::table('phones') 
       ->join('contacts','phones.contact_id','contacts.id') 
       ->select('phones.*','contacts.*') 
        ->get();
       return view ('phone.index',compact('phone'));
       
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
       $contact = DB::table('contacts')->get();
       return view('phone.create',['contact' => $contact]);
       // dd($contact);
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
       $request->validate([
           'contact_number_1' => 'required|max:50',
           'contact_number_2' => 'max:50|nullable',

       ]);


       $data = array();
       $data['contact_id'] = $request->contact_id;
       $data['contact_number_1'] = $request->contact_number_1;
       $data['contact_number_2'] = $request->contact_number_2;

       $address = DB::table('phones')->insert($data); 

       if($address){
           $notification = array(
               'message'=>'Successfully Address inserted',
               'alert-type'=>'success'
           );
           return Redirect()->route('phone')->with($notification); 
       }else{
           $notification = array(
               'message'=>'Something Went wrong',
               'alert-type'=>'Error'
           );
           return Redirect()->back()->with($notification); 
       }
           

   }
}
