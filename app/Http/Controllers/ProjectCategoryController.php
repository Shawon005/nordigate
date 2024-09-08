<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;

class ProjectCategoryController extends Controller
{
    public function index()
    {
        //
        $categories=DB::table('project_categories')->get();
        return view('backend.project_category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.project_category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_name'=>'required',
           
        ]);
        //dd($request->all());
        DB::table('project_categories')->insert([
        'category_name'=>request()->category_name,
        'status'=>(request()->status)==null?0:1,
        
    ]);
    
    return redirect()->route('admin.project_category.index')->with('message' , 'Store was successful!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $category=DB::table('project_categories')->where('id',$id)->first();
        return view('backend.project_category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
      
        DB::table('project_categories')->where('id',$id)->update([
            'category_name'=>request()->category_name,
            'status'=>(request()->status)==null?0:1,
            
        ]);
        return redirect()->route('admin.project_category.index')->with('message' , 'Update was successful!');
    }
    public function status(Request $request,string $id)
    {
        $client=DB::table('project_categories')->where('id',$id)->first();
        if($client->status==1){
        DB::table('project_categories')->where('id',$id)->update([
            'status'=>0,
        ]);
        }
        else{
            DB::table('project_categories')->where('id',$id)->update([
                'status'=>1,
            ]);
        }
        response()->json(['Successfully update']);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request,string $id)
    {
        //
        DB::table('project_categories')->where('id',$id)->delete();
        
        return redirect()->route('admin.project_category.index')->with('message' , 'Delete was successful!');

    }
}
