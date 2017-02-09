<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news=\App\News::all();
        
       return view('news.index',["news"=>$news]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
            $item=new \App\News();

            $item->title=$request->get("title");
            $item->body=$request->get("body");
            $item->status=1;
            $item->save();


        return redirect('/news');
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
       
        $item= \App\News::find($id);        
        return view('news.edit',["item"=>$item]);
    }

   
    public function update(Request $request, $id)
    {
        
            $item= \App\News::find($id);            
            $item->title=$request->get("title");
            $item->body=$request->get("body");
            $item->status=1;
            $item->save();


        return redirect('/news');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $item= \App\News::find($id); 
         $item->delete();
         return redirect('/news');
    }
}
