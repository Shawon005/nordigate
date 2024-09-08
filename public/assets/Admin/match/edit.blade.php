@extends('Admin.layout.master')
  @section('content')
  <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Match/Event</h3>
            </div>
            @if ($errors->any())
                <div class="alert alert-success">
                    <span class="close" data-dismiss="alert"></span>
                    @foreach ($errors->all() as $error)
                    <strong>{{$error}}</strong><br>
                    @endforeach
                </div>
                @endif
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashbord')}}">Home</a></li>
                    <li class="breadcrumb-item">Match/Event</li>
                    <li class="breadcrumb-item active">Match/Event Details</li>
                </ol>
            </div>
          
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Create New Match/Event</h4>
                        <h6 class="card-subtitle">made with bootstrap elements</h6>
                        <form class="floating-labels m-t-40" action="{{route('admin.match.update',$match->id)}}" method ="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group m-b-40">
                                
                                <input type="text" class="form-control" id="exampleInputuname1" name="title" value="{{$match->title}}">
                                <label for="exampleInputuname1">Match/Event Title</label>
                            </div>
                            @error('title')
                            <span class="small text-danger">{{$message}}</span>
                            @enderror
                            <div class="form-group m-b-40">
                                <label for="exampleInputuname">Type</label><br><br>
                                <select name="type" id="inlineFormCustomSelect"class="custom-select col-12 m-b-40">
                                    <option value="">Select Type</option>
                                    <option value="pooltip" {{($match->type=='pooltip')?'selected':''}}>Pooltip</option>
                                    <option value="speltip" {{($match->type=='speltip')?'selected':''}}>Speltip</option>
                                </select>
                            </div>  
                            <div class="form-group m-b-40">
                                <label for="exampleInputuname">Tipstar</label><br><br>
                                <select name="tipstar_id" id="inlineFormCustomSelect"class="custom-select col-12 m-b-40">
                                    <option value="">Select Tipstar</option>
                                    @foreach($tipstars as $tipstar)
                                    @if($match->tipstar_id==$tipstar->id)
                                    <option value="{{$tipstar->id}}" selected>{{$tipstar->nickname}}</option>
                                    @else
                                    <option value="{{$tipstar->id}}">{{$tipstar->nickname}}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group m-b-40">
                                <label for="exampleInputuname">Category</label><br><br>
                                <select name="category_id" id="inlineFormCustomSelect"class="custom-select col-12 m-b-40">
                                    <option value="">Select Category</option>
                                    @foreach($categories as $category)
                                    @if($match->category_id==$category->id)
                                    <option value="{{$category->id}}" selected>{{$category->name}}</option>
                                    @else
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="card form-group m-b-40">
                                <div class="card-body">
                                    <h4 class="card-title">Match/Event Details</h4>
                                    <textarea id="mymce" name="details">{{$match->details}}</textarea>
                                </div>
                            </div>
                            <div class="form-group m-b-40">
                                <input type="file" class="form-control text-right" id="exampleInputuname2" name="banner">
                                <label for="exampleInputuname2">Match/Event Banner Image</label>
                            </div>   
                            <div class="form-group m-b-40">
                                
                                <input type="text" class="form-control" id="exampleInputuname1" name="company_name" value="{{$match->company_name}}">
                                <label for="exampleInputuname1">Company Name</label>
                            </div> 
                            <div class="form-group m-b-40">
                                
                                <input type="url" class="form-control" id="exampleInputuname1" name="company_link" value="{{$match->company_link}}">
                                <label for="exampleInputuname1">Company link</label>
                            </div>
                            <div class="form-group m-b-40">
                                <input type="file" class="form-control text-right" id="exampleInputuname2" name="company_logo">
                                <label for="exampleInputuname2">Company Image</label>
                            </div> 
                            <br><br>
                            <div class="form-group m-b-40">
                                <div class="checkbox checkbox-success ">
                                    <input id="checkbox1" type="checkbox" name="status"class="form-control"{{$match->status==1?'checked':''}}>
                                    <label for="checkbox1">Is Published </label>
                                </div>
                            </div>
                            <div class="mt-5 text-right">
                                <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                                <a href="{{route('admin.match.index')}}"class="btn btn-inverse waves-effect waves-light">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
  </div>
  @endsection