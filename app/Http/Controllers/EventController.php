<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use DB;

class EventController extends Controller
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

    public function showEventview(){
        return view('frontend.postLoginEventView');
    }

    public function showAddEvent(){
        return view('frontend.addEventView');
    }

    public function index()
    {
        //
        $event = Event::all()->toArray(); 
        return view('frontend.postLoginEventView', compact('event'));
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
            'event_Type' => 'required',
            'event_Description' => 'required',
            'date'=>'required']);

        $event = new Event(['event_type'=> $request->get('event_Type'),
        'event_description'=> $request->get('event_Description'),
        'date'=> $request->get('date')]);
        $event->save();
        
        return redirect('postLoginEventView')->with('success','Event Saved');

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
        
        $event = Event::find($id);
        return view('frontend.editEvent',compact('event'));
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
            'event_type' => 'required',
            'event_description' => 'required',
            'date'=>'required']);
        
        $event = Event::find($id);
        $event->event_type = $request->get('event_type');
        $event->event_description = $request->get('event_description');
        $event->date = $request->get('date');
        $event->save();

       // DB:: update('update events set event_type=?,event_description=?,date=? where event_id=? ',[$event_type,$event_description,$event_date,$id]);

        return redirect('postLoginEventView')->with('success','Event Updated');
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
        //DB::delete('delete from events where event_id = ?',[$id]);
        $event = Event::find($id);
        $event->delete();
        return redirect('postLoginEventView')->with('success','Event Deleted');
    }
}
