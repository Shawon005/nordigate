<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class SettingController extends Controller
{
    public function index()
    {
        $setting=DB::table('settings')->where('id',1)->first();
        return view('backend.setting.edit',compact('setting'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $footer=DB::table('settings')->where('id',1)->first();
       
        if(request()->header_logo==null)
        {
            $logo=$footer->header_logo;
        }
        else{
            $logo=saveFile($request,'header_logo');
        }
      
        if(request()->about_image==null)
        {
            $img=$footer->about_image;
        }
        else{
            $img=saveFile($request,'about_image');
        }
       
        if(request()->fav_logo==null)
        {
            $fav=$footer->fav_logo;
        }
        else{
            $fav=saveFile($request,'fav_logo');
        }
        if(request()->foot_logo==null)
        {
            $logo1=$footer->foot_logo;
        }
        else{
            $logo1=saveFile($request,'foot_logo');
        }
        DB::table('settings')->where('id',1)->update([
            'header_logo'=>$logo,
            'fav_logo'=>$fav,
            'facebook'=>request()-> facebook,	
            'twitter'=>request()->twitter, 	
            'instragram'=>request()->instragram, 	
            'linkind'=>request()->linkind,	
            'about_title'=>request()->about_title, 	
            'about_description'=>request()->about_description, 	
            'about_image'=>$img, 	
            'mobile'=>request()->mobile, 	
            'email'=>request()-> email,	
            'whatapp'=>request()->whatapp, 	
            'site_title'=>request()->site_title, 	
            'address'=>request()->address ,	
            'our_mission'=>request()->our_mission, 	
            'our_vission'=>request()->our_vission, 	
            'location'=>request()->location, 	
            'copy_right_year'=>request()->copy_right_year,
            'about_video'=>request()->about_video,
            'foot_logo'=>$logo1,
            'open_hour'=>request()->open_hour,
        ]);
  
        return redirect()->back()->with('message' , 'Update was successful!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
