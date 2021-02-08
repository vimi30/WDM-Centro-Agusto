<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use DB;

class VideoController extends Controller
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
    public function showVideoview(){
        return view('frontend.postLoginVideoView');
    }

    public function showAddVideo(){
        return view('frontend.addVideoView');
    }
    public function index()
    {
        //

        $video = Video::all()->toArray();
        return view('frontend.postLoginVideoView', compact('video'));
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
            'vidoe_type' => 'required',
            'vidoe_description' => 'required',
            'vidoe_url' => 'required', 
            'date'=>'required']);

        $video = new Video(['video_Type'=> $request->get('vidoe_type'),
            'video_Description'=> $request->get('vidoe_description'),
            'video_URL' => $request->get('vidoe_url'),
            'date'=> $request->get('date')]);
        $video->save();
  
        return redirect('postLoginVideoView')->with('success','Video Saved');
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
        $video = Video::find($id);//select('select * from videos where video_Id = ?',[$id]);
        return view('frontend.editVideo',compact('video'));
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
            'video_type' => 'required',
            'video_description' => 'required',
            'video_url' => 'required', 
            'date'=>'required']);
        
        $video = Video::find($id);

        $video->video_Type = $request->get('video_type');
        $video->video_Description = $request->get('video_description');
        $video->video_URL = $request->get('video_url');
        $video_date = $request->get('date');
        $video->save();

        return redirect('postLoginVideoView')->with('success','video Updated');
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
        $video = Video::find($id);
        $video->delete();
        
        return redirect('postLoginVideoView')->with('success','Video Deleted');
    }
}
