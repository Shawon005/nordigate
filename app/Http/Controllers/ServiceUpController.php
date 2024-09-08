<?php

namespace App\Http\Controllers;
use DB;
use Str;
use Illuminate\Http\Request;

class ServiceUpController extends Controller
{
    public function index()
    {
        //
        $services=DB::table('service_up')->get();
        return view('backend.service_up.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.service_up.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'image'=>'required',
            'image1'=>'required',
            'image2'=>'required',
            'logo'=>'required',
            'logo1'=>'required',
        ]);
        //dd($request->all());
        DB::table('service_up')->insert([
        'title'=>request()->title,
        'image'=>saveFile($request,'image'),
        'image1'=>saveFile($request,'image1'),
        'image2'=>saveFile($request,'image2'),
        'details'=>request()->details,
        'sub_title'=>request()->sub_title,
        'logo'=>saveFile($request,'logo'),
        'logo1'=>saveFile($request,'logo1'),
        'sub_details'=>request()->sub_details,
        'status'=>(request()->status)==null?0:1,
        'slug'=>Str::of(request()->title)->slug('-'),
        
    ]);
    
    return redirect()->route('admin.service_up.index')->with('message' , 'Store was successful!');
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
        $service=DB::table('service_up')->where('id',$id)->first();
        return view('backend.service_up.edit',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $client=DB::table('service_up')->where('id',$id)->first();
        if($request->image==null)
        {
            $img=$client->image;
        }
        else{
            $img=saveFile($request,'image');
        }

        if($request->logo==null)
        {
            $img1=$client->logo;
        }
        else{
            $img1=saveFile($request,'logo');
        }
        if($request->logo1==null)
        {
            $img2=$client->logo1;
        }
        else{
            $img2=saveFile($request,'logo1');
        }
        if($request->image1==null)
        {
            $img3=$client->image1;
        }
        else{
            $img3=saveFile($request,'image1');
        }
        if($request->image2==null)
        {
            $img4=$client->image2;
        }
        else{
            $img4=saveFile($request,'image2');
        }
        DB::table('service_up')->where('id',$id)->update([
            'title'=>request()->title,
            'image'=>$img,
            'image1'=>$img3,
            'image2'=>$img4,
            'details'=>request()->details,
            'sub_title'=>request()->sub_title,
            'logo'=>$img1,
            'logo1'=>$img2,
            'sub_details'=>request()->sub_details,
            'status'=>(request()->status)==null?0:1,
            'slug'=>Str::of(request()->title)->slug('-'),
            
        ]);
        return redirect()->route('admin.service_up.index')->with('message' , 'Update was successful!');
    }
    public function status(Request $request,string $id)
    {
        $client=DB::table('service_up')->where('id',$id)->first();
        if($client->status==1){
        DB::table('service_up')->where('id',$id)->update([
            'status'=>0,
        ]);
        }
        else{
            DB::table('service_up')->where('id',$id)->update([
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
        DB::table('service_up')->where('id',$id)->delete();
        
        return redirect()->route('admin.service_up.index')->with('message' , 'Delete was successful!');

    }
}
