<?php

namespace App\Http\Controllers;

use App\Classes;
use App\School;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Utils;

class ClassesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
        $school = School::find($request->school_id);
        $class = Classes::where("school_id",$request->school_id)->get();
        Classes::create([
            'grade'=>$request->grade,
            'capacity'=>$request->capacity,
            'reserved'=>0,
            'school_id'=>$request->school_id,
        ]);
        return view("class")->with("success","You have added the class successfully")->with("school",$school)->with("classes",$class);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Classes  $classes
     * @return \Illuminate\Http\Response
     */
    public function show(Classes $classes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Classes  $classes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $school = School::find($id);
        $class = Classes::where("school_id",$id)->get();
        return view("class")->with("school",$school)->with("classes",$class)->with("success","");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Classes  $classes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $schools = School::get();
        $reserved = Classes::where("school_id",$request->school)->where("grade",$request->class)->pluck("reserved");
        $total = 0;
        foreach($reserved as $key=>$value)
        {
            $total=$value+1;
        }
        $class = array(
            'reserved'=>$total,
        );


        Classes::where("school_id",$request->school)->where("grade",$request->class)->update($class);

        return view('user-settings')->with('schools',$schools)->with("success","You have successfully reserved a place in ".$request->class)->with("passwordsuccess","You have Successfully changed your password");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Classes  $classes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classes $classes)
    {
        //
    }

    public  function reserveClass($id,$school_id)
    {
        $school = School::find($school_id);
        $classes = Classes::where("school_id",$school_id)->get();
        $reserved = Classes::where("school_id",$school_id)->pluck("reserved");
        $total = 0;
        foreach($reserved as $key=>$value)
        {
            $total=$value+1;
        }
        $class = array(
            'reserved'=>$total,
        );


        Classes::where("id",$id)->update($class);

        return view('school-details')->with("success","You have successfully reserved a place.")->with("school",$school)->with("classes",$classes);

    }
}
