<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartmentsController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news=\App\Department::all();
        
       return view('departments.index',["news"=>$news]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('departments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
            $item=new \App\Department();

            $item->title=$request->get("title");
            //$item->body=$request->get("body");
            $item->status=1;
            $item->save();


        return redirect('/departments');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
          
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
        $item= \App\Department::find($id);        
        return view('departments.edit',["item"=>$item]);
    }

   
    public function update(Request $request, $id)
    {
        
            $item= \App\Department::find($id);            
            $item->title=$request->get("title");
            //$item->body=$request->get("body");
            $item->status=1;
            $item->save();


        return redirect('/departments');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $item= \App\Department::find($id); 
         $item->delete();
         return redirect('/departments');
    }
}
