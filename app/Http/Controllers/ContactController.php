<?php

namespace App\Http\Controllers;

use App\Contact;
use DB;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('contacts')->get();
        return view('contact.index',['contacts'  => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * 
     * 
     * 
     * Storing Data
     */
    public function store(request $Request)
    {
        $validatedData = $Request->validate([
            'f_name' => 'required|max:255',
            'f_name' => 'required|max:255',
            'email' => 'required|unique:contacts|max:255',
        ]);


        $data = array();

        $data['f_name'] = $Request->f_name;
        $data['l_name'] = $Request->l_name;
        $data['email'] = $Request->email;
       


        $contact = DB::table('contacts')->insert($data);

// condition 
        if($contact){
            $notification = array(
                'message'=>'Successfully Contact Inserted',
                'alert-type'=>'success'
            );
            return Redirect()->route('contact.index')->with($notification); 
        }else{
            $notification = array(
                'message'=>'Something Went wrong',
                'alert-type'=>'Error'
            );
            return Redirect()->back()->with($notification); //redirect(পেইজ এর নাম)
        }
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     * 
     * 
     * 
    * Single view show
     */
    public function show(Contact $contact,$id)
    {
        $data = DB::table('contacts')->where('id',$id)->first();
        
        return view('contact.view',['contacts' => $data]);
    }




    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     * 
     * 
     * 
     * Edit Contact
     */
    public function edit(Contact $contact,$id)
    {
        $data = DB::table('contacts')->where('id',$id)->first();
        return view('contact.edit',['contacts' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     * 
     * 
     * Update COntact
     */
    public function update(Request $Request, Contact $contact,$id)
    {
        $validatedData = $Request->validate([
            'f_name' => 'required|max:255',
            'f_name' => 'required|max:255',
            'email' => 'required|unique:contacts|max:255',
        ]);


        $data = array();

        $data['f_name'] = $Request->f_name;
        $data['l_name'] = $Request->l_name;
        $data['email'] = $Request->email;
       


        $contact = DB::table('contacts')->where('id',$id)->update($data);

// condition 
        if($contact){
            $notification = array(
                'message'=>'Successfully Contact Updated',
                'alert-type'=>'success'
            );
            return Redirect()->route('contact.index')->with($notification); 
        }else{
            $notification = array(
                'message'=>'Something Went wrong',
                'alert-type'=>'Error'
            );
            return Redirect()->back()->with($notification); //redirect(পেইজ এর নাম)
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact,$id)
    {
        $contact = DB::table('contacts')->where('id',$id)->delete();

        if($contact){
            $notification = array(
                'message' => 'Contact is successfully deleted',
                'alert-type' =>'success'
            );
        }


        return back()->with($notification);
    }
}
