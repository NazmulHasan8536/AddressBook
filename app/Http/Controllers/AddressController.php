<?php

namespace App\Http\Controllers;

use App\Address;
use DB;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $address = DB::table('addresses') 
        ->join('contacts','addresses.contact_id','contacts.id') 
        ->select('addresses.*','contacts.*') 
         ->get();
        return view ('address.index',['address'=> $address]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contact = DB::table('contacts')->get();
        return view('address.create',['contact' => $contact]);
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
            'c_address' => 'required|max:50',
            'c_address' => 'required|max:50',
        ]);


        $data = array();
        $data['contact_id'] = $request->contact_id;
        $data['c_address'] = $request->c_address;
        $data['p_address'] = $request->p_address;

        $address = DB::table('addresses')->insert($data); 

        if($address){
            $notification = array(
                'message'=>'Successfully Address inserted',
                'alert-type'=>'success'
            );
            return Redirect()->route('address')->with($notification); 
        }else{
            $notification = array(
                'message'=>'Something Went wrong',
                'alert-type'=>'Error'
            );
            return Redirect()->back()->with($notification); 
        }
            

    }

}