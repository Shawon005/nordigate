<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()
    {
        //
        $testimonials=DB::table('testimonial')->get();
        return view('backend.testimonial.index',compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.testimonial.create');
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
        DB::table('testimonial')->insert([
        'name'=>request()->name,
        'title'=>request()->title,
        'image'=>saveFile($request,'image'),
        'description'=>request()->description,
        'status'=>(request()->status)==null?0:1,
        
    ]);
    
    return redirect()->route('admin.testimonial.index')->with('message' , 'Store was successful!');
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
        $testimonial=DB::table('testimonial')->where('id',$id)->first();
        return view('backend.testimonial.edit',compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $client=DB::table('testimonial')->where('id',$id)->first();
        if($request->image==null)
        {
            $img=$client->image;
        }
        else{
            $img=saveFile($request,'image');
        }
        DB::table('testimonial')->where('id',$id)->update([
            'name'=>request()->name,
            'title'=>request()->title,
            'image'=>$img,
            'description'=>request()->description,
            
            'status'=>(request()->status)==null?0:1,
            
        ]);
        return redirect()->route('admin.testimonial.index')->with('message' , 'Update was successful!');
    }
    public function status(Request $request,string $id)
    {
        $client=DB::table('testimonial')->where('id',$id)->first();
        if($client->status==1){
        DB::table('testimonial')->where('id',$id)->update([
            'status'=>0,
        ]);
        }
        else{
            DB::table('testimonial')->where('id',$id)->update([
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
        DB::table('testimonial')->where('id',$id)->delete();
        
        return redirect()->route('admin.testimonial.index')->with('message' , 'Delete was successful!');

    }
}
