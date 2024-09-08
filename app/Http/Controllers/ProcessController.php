<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class ProcessController extends Controller
{
    public function index()
    {
        //
        $process=DB::table('process')->get();
        return view('backend.process.index',compact('process'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.process.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
        ]);
        //dd($request->all());
        DB::table('process')->insert([
        'title'=>request()->title,
        'description'=>request()->description,
        'status'=>(request()->status)==null?0:1,
        
    ]);
    
    return redirect()->route('admin.process.index')->with('message' , 'Store was successful!');
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
        $process=DB::table('process')->where('id',$id)->first();
        return view('backend.process.edit',compact('process'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       
        DB::table('process')->where('id',$id)->update([
            'title'=>request()->title,
            'description'=>request()->description,
            'status'=>(request()->status)==null?0:1,
            
        ]);
        return redirect()->route('admin.process.index')->with('message' , 'Update was successful!');
    }
    public function status(Request $request,string $id)
    {
        $process=DB::table('process')->where('id',$id)->first();
        if($process->status==1){
        DB::table('process')->where('id',$id)->update([
            'status'=>0,
        ]);
        }
        else{
            DB::table('process')->where('id',$id)->update([
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
        DB::table('process')->where('id',$id)->delete();
        
        return redirect()->route('admin.process.index')->with('message' , 'Delete was successful!');

    }
}
