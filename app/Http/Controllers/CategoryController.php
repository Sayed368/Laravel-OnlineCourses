<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;   

class CategoryController extends Controller
{
    public function __construct(){
           
        $this->middleware("auth");
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories= Category::all();
         
        return view('admin.all_categeries',["categories"=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        //
        return view('admin.add_categeries');

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
        $request->validate([
            "name"=>"required" ,
            "image"=>"required|image|mimes:jpeg,png,jpg,gif,svg|max:2048"
            
            
            ]);
            if($request->hasFile('image')) {
                $image = $request->file('image');
                $filename =rand() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('categoryimg/'), $filename);
                $filename='categoryimg/'.$filename;
                
            }
       Category::create([
        "name"=>$request["name"],
        "image"=>$filename

        
       ]);
    
       return redirect(route("categories.index"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
        return view("admin.viewcateg",["category"=>$category]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
        return view("admin.edit_categeries",["category"=>$category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
        
        
        if($request->hasFile('image')) {
            $image = $request->file('image');
            $filename =rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('categoryimg/'), $filename);
            $filename='categoryimg/'.$filename;
            
        }
        $category->update([
            "name"=>$request["name"],
        "image"=>$filename

        ]);
        return redirect(route("categories.index",["category"=>$category]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
        $category->delete();
        return redirect(route("categories.index"));
    }
}
