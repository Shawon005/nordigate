<?php

namespace App\Http\Controllers;
use DB;
use Str;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        //
        $projects=DB::table('projects')->get();
        return view('backend.project.index',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories=DB::table('project_categories')->get();
        return view('backend.project.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'image'=>'required',
        ]);
        //dd($request->all());
        DB::table('projects')->insert([
        'title'=>request()->title,
        'image'=>saveFile($request,'image'),
        'thumbnail'=>saveFile($request,'thumbnail'),
        'category_id'=>request()->category_id,
        'description'=>request()->description,
        'designation'=>request()->designation,
        'status'=>(request()->status)==null?0:1,
        'slug'=>Str::of(request()->title)->slug('-'),
    ]);
    
    return redirect()->route('admin.project.index')->with('message' , 'Store was successful!');
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
        $categories=DB::table('project_categories')->get();
        $project=DB::table('projects')->where('id',$id)->first();
        return view('backend.project.edit',compact('project','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $client=DB::table('projects')->where('id',$id)->first();
        if($request->image==null)
        {
            $img=$client->image;
        }
        else{
            $img=saveFile($request,'image');
        }
        if($request->thumbnail==null)
        {
            $img1=$client->thumbnail;
        }
        else{
            $img1=saveFile($request,'thumbnail');
        }
        DB::table('projects')->where('id',$id)->update([
            'title'=>request()->title,
            'image'=>$img,
            'thumbnail'=>$img1,
            'category_id'=>request()->category_id,
            'description'=>request()->description,
            'designation'=>request()->designation,
            'status'=>(request()->status)==null?0:1,
            'slug'=>Str::of(request()->title)->slug('-'),
            
        ]);
        return redirect()->route('admin.project.index')->with('message' , 'Update was successful!');
    }
    public function status(Request $request,string $id)
    {
        $client=DB::table('projects')->where('id',$id)->first();
        if($client->status==1){
        DB::table('projects')->where('id',$id)->update([
            'status'=>0,
        ]);
        }
        else{
            DB::table('projects')->where('id',$id)->update([
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
        DB::table('projects')->where('id',$id)->delete();
        
        return redirect()->route('admin.project.index')->with('message' , 'Delete was successful!');

    }
}
