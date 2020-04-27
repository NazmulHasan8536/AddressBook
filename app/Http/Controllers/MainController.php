<?php

namespace App\Http\Controllers;

use App\Address;
use App\Phone;
use App\Contact;
use Illuminate\Http\Request;
use DB;

class MainController extends Controller
{
    public function index(){
        $data = DB::table('contacts')->get();
        return view('contact.index',['contacts'  => $data]);
    }
    
    public function about(){
        return view('frontend.about');
    }
    
    
    public function contact(){
        return view('frontend.contact');
    }




    public function allData()
    {
        $contact = Contact::all();
        $phone = Phone::all();
        $address = Address::all();
        
        // dd($address);
      return view('contact.alldata',['contact' => $contact,'phone' => $phone,'address' => $address]);
    }
    
}
