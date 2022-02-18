<?php

namespace App\Http\Controllers;

use App\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $topics=Topic::all();
        return view('admin.topics.index', compact('topics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.topics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title_en'=>'required',
            'title_sp'=>'required'
            

            
            

        ]);
        $topic= new Topic();
        $topic->parent_id=$request->parent_id;
        $topic->title_en=$request->title_en;
        $topic->title_sp=$request->title_sp;
        $topic->slug=Str::slug($request->title_en);
        if($topic->save()){
            return redirect()->route('topic.index')->with('success',' Topic Added successfully.');
        }
        else{
            return redirect()->back()->with('unsuccess','Failed try again.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $topic=Topic::where('id', $id)->first();
        return view('admin.topics.edit', compact('topic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title_en'=>'required',
            'title_sp'=>'required'
            

            
            

        ]);
        $topic=Topic::where('id', $id)->first();
        $topic->parent_id=$request->parent_id;
        $topic->title_en=$request->title_en;
        $topic->title_sp=$request->title_sp;
        $topic->slug=Str::slug($request->title_en);
        if($topic->update()){
            return redirect()->route('topic.index')->with('success',' Topic Update successfully.');
        }
        else{
            return redirect()->back()->with('unsuccess','Failed try again.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $topic=Topic::findOrFail($id);
        if($topic::where('id',$id)->delete()){
            return redirect()->back()->with('success',' Topic deleted successfully.');
        }
        else{
            return redirect()->back()->with('unsuccess','Failed try again.');
        }
    }
}
