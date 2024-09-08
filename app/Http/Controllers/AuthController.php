<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
       return view('login');
    }

    /**tr
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.index2');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       session('auth');
       session('id');
       $admin=DB::table('admin')->where('email',$request->username)->where('password',$request->password)->first();
       if($admin!=null)
        {
            session(['auth' => 'true']);  
            session(['id'=>$admin->id]);
            return redirect()->route('admin.dashbord');
        }
        else{
            session(['auth' => 'flase']);  
            return redirect()->back();
        }
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
    }

    /**
     * Remove the specified resource from storage.
     */
    public function logout()
    {
        session(['auth' => 'flase']);
        return redirect()->route('admin.login'); 
    }
}
