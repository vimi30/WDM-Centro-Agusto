<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use DB;

class ProjectController extends Controller
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

    public function afterloginview(){
        
        return view('frontend.postLoginProjectView');
    }

    public function displayform()
    {
        return view('frontend.projectView');

    } 
    public function index()
    {
       // $project = DB::select('select * from projects');
        $project = Project::all()->toArray(); 
        return view('frontend.postLoginProjectView', compact('project'));
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

       /* $project_name = $request->input('project_Name');
        $project_description = $request->input('project_Description');
        $project_date = $request->input('date');

        DB::insert('insert into projects (project_Name,project_Description,date) values (?,?,?)',[$project_name, $project_description,$project_date]);

        */
        $this->validate($request,['project_Name' => 'required','project_Description' => 'required','date'=>'required']);

        $project = new Project(['project_Name'=> $request->get('project_Name'),
        'project_Description'=> $request->get('project_Description'),
        'date'=> $request->get('date')]);
        $project->save();
        
        return redirect('postLoginProjectView')->with('success','Project Saved');

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
        $project = Project:: find($id);

        //$project = DB::select('select * from projects where project_Id = ?',[$id]);
        //return view('frontend.editProject',['project'=>$project]);
        return view('frontend.editProject',compact('project'));
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
       /* */
        $this->validate($request,[
        'project_Name' => 'required',
        'project_Description' => 'required',
        'date'=>'required']);

        $project = Project::find($id);
        $project->project_Name = $request->get('project_Name');
        $project->project_Description = $request->get('project_Description');
        $project->date = $request->get('date');
        $project->save();
        //DB:: update('update projects set project_Name=?,project_Description=?,date=? where project_Id=? ',[$project_name,$project_description,$project_date,$id]);

        return redirect('postLoginProjectView')->with('success','Project Updated');
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
        //DB::delete('delete from projects where project_Id = ?',[$id]);
        $project = Project::find($id);
        $project->delete();
        return redirect('postLoginProjectView')->with('success','Project Deleted');
    }
}
