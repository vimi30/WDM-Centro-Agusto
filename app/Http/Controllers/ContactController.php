<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use DB;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
       $this->middleware('auth');
    }

    public function showContactview(){
        return view('frontend.postLoginContactView');
    }

    public function showAddContact(){
        return view('frontend.addContactView');
    }
    public function index()
    {
        //
        $contact = Contact::all()->toArray();
        return view('frontend.postLoginContactView', compact('contact'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $this->validate($request,[
            'contact_Name' => 'required',
            'contact_Description' => 'required',
            'contact_Number'=>'required']);

         

        $contact = new Contact(['contact_Name'=> $request->get('contact_Name'),
        'contact_Description'=> $request->get('contact_Description'),
        'contact_Number'=> $request->get('contact_Number')]);
        $contact->save();

        return redirect('postLoginContactView')->with('success','Contact Saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $contact = Contact::find($id);//DB::select('select * from contacts where contact_Id = ?',[$id]);

        return view('frontend.editContact',compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request,[
            'contact_Name' => 'required',
            'contact_Description' => 'required',
            'contact_Number'=>'required']);

            $contact = Contact:: find($id);
            $contact->contact_Name = $request->get('contact_Name');
            $contact->contact_Description = $request->get('contact_Description');
            $contact->contact_Number = $request->get('contact_Number');
            $contact->save();
       
        return redirect('postLoginContactView')->with('success','Contact Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $contact = Contact::find($id);
        $contact->delete();
        
        return redirect('postLoginContactView')->with('success','Contact Deleted');
    }
}
