<?php

namespace App\Http\Controllers;

use App\Category;
use App\Translator\GoogleTranslate;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::all();
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
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
        ]);
        $category=new Category();
        $translator=new GoogleTranslate();
        $title_sp=$translator->translate("en","fr",$request->title_en);

        return $title_sp;
        $category->title_en=$request->title_en;
        $category->title_sp=$request->title_sp;
        $category->slug=Str::slug($request->title_en);
        if($category->save()){
            return redirect()->route('category.index')->with('success',' Category Added successfully.');
        }
        else{
            return redirect()->back()->with('unsuccess','Failed try again.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category=Category::where('id', $id)->first();
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title_en'=>'required',
            'title_sp'=>'required'



        ]);
        $category=Category::where('id', $id)->first();
        $category->title_en=$request->title_en;
        $category->title_sp=$request->title_sp;
        $category->slug=Str::slug($request->title_en);
        if($category->save()){
            return redirect()->route('category.index')->with('success',' Category Added successfully.');
        }
        else{
            return redirect()->back()->with('unsuccess','Failed try again.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $category=Category::findOrFail($id);
        if($category::where('id',$id)->delete()){
            return redirect()->back()->with('success',' Category deleted successfully.');
        }
        else{
            return redirect()->back()->with('unsuccess','Failed try again.');
        }
    }
}
