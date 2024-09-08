<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    function index(){
        $reviews=DB::table('testimonial')->where('status',1)->get();
        $technologys=DB::table('technology')->where('status',1)->get();
        $boxes=DB::table('slider_box')->where('status',1)->get();
        $process=DB::table('process')->where('status',1)->get();
        $service_up=DB::table('service_up')->where('status',1)->get();
        $services=DB::table('services')->where('status',1)->get();
        $sliders=DB::table('slider')->where('type',0)->get();
        return view('frontend.index',compact('sliders','services','service_up','boxes','process',
        'technologys','reviews'));
    }
    function service_details($slug){
        $services=DB::table('service_up')->where('status',1)->get();
        $service=DB::table('service_up')->where('slug',$slug)->first();
        return view('frontend.service-detail',compact('service','services'));
    }
    function services(){
        $services=DB::table('service_up')->where('status',1)->get();
        return view('frontend.services',compact('services'));
    }
    function projects()
    {
        $categories=DB::table('project_categories')->where('status',1)->get();
        $projects=DB::table('projects')->where('status',1)->get();
        return view('frontend.project',compact('projects','categories'));
    }
    function project_details($id){
        
        $project=DB::table('projects')->where('slug',$id)->first();
        $projects=DB::table('projects')->where('status',1)->where('category_id',$project->category_id)->get();
        return view('frontend.project-detail',compact('project','projects'));
    }
    
}
