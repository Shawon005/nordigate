<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class SliderBoxController extends Controller
{
    public function index()
    {
        //
        $boxs=DB::table('slider_box')->get();
        return view('backend.slider_box.index',compact('boxs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.slider_box.create');
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
        DB::table('slider_box')->insert([
        'title'=>request()->title,
        'image'=>saveFile($request,'image'),
        'description'=>request()->description,
        'link'=>request()->link,
        'status'=>(request()->status)==null?0:1,
        
    ]);
    
    return redirect()->route('admin.slider_box.index')->with('message' , 'Store was successful!');
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
        $box=DB::table('slider_box')->where('id',$id)->first();
        return view('backend.slider_box.edit',compact('box'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $client=DB::table('slider_box')->where('id',$id)->first();
        if($request->image==null)
        {
            $img=$client->image;
        }
        else{
            $img=saveFile($request,'image');
        }
        DB::table('slider_box')->where('id',$id)->update([
            'title'=>request()->title,
            'image'=>$img,
            'description'=>request()->description,
            'link'=>request()->link,
            'status'=>(request()->status)==null?0:1,
            
        ]);
        return redirect()->route('admin.slider_box.index')->with('message' , 'Update was successful!');
    }
    public function status(Request $request,string $id)
    {
        $client=DB::table('slider_box')->where('id',$id)->first();
        if($client->status==1){
        DB::table('slider_box')->where('id',$id)->update([
            'status'=>0,
        ]);
        }
        else{
            DB::table('slider_box')->where('id',$id)->update([
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
        DB::table('slider_box')->where('id',$id)->delete();
        
        return redirect()->route('admin.slider_box.index')->with('message' , 'Delete was successful!');

    }
}
