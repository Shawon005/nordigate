@extends('backend.layout.master')
  @section('content')
  <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Service </h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashbord')}}">Home</a></li>
                    <li class="breadcrumb-item">Service </li>
                    <li class="breadcrumb-item active">Service Details</li>
                </ol>
            </div>
          
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Create New Service </h4>
                        
                        <form class="floating-labels m-t-40" action="{{route('admin.service_up.update',$service->id)}}" method ="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group m-b-40">
                                
                                <input type="text" class="form-control" id="exampleInputuname1" name="title" value="{{$service->title}}"  required="">
                                <label for="exampleInputuname1">Title</label>
                            </div>
                            <div class="form-group m-b-40">
                                <input type="file" class="form-control text-right" id="exampleInputuname2" name="image2">
                                <label for="exampleInputuname2">Thumbnail Image</label> 
                            </div> 
                            <div class="form-group m-b-40">
                                <input type="file" class="form-control text-right" id="exampleInputuname3" name="logo" >
                                <label for="exampleInputuname3">Logo</label> 
                              
                            </div> 
                            <div class="form-group m-b-40">
                                <input type="file" class="form-control text-right" id="exampleInputuname4" name="logo1" >
                                <label for="exampleInputuname4">Logo_inverse</label> 
                            </div> 
                            <div class="form-group m-b-40">

                                <label for="exampleInputuname1">Description</label><br><br>
                                <textarea id="mymce" name="details" required="">{{$service->details}}</textarea>
                                <!-- <input type="text" class="form-control" id="exampleInputuname5" name="details" value="{{$service->details}}"required="">
                                <label for="exampleInputuname5">Description</label> -->
                            </div>
                            <div class="form-group m-b-40">
                                <input type="text" class="form-control" id="exampleInputuname6" name="sub_title" value="{{$service->sub_title}}" required="">
                                <label for="exampleInputuname6">Sub Title</label>
                            </div>
                            <div class="form-group m-b-40">
                                <input type="text" class="form-control " id="exampleInputuname7" name="sub_details" value="{{$service->sub_details}}">
                                <label for="exampleInputuname7">Sub Description</label> 
                            </div> 
                            <div class="form-group m-b-40">
                                <input type="file" class="form-control text-right" id="exampleInputuname8" name="image">
                                <label for="exampleInputuname8">Image</label> 
                            </div> 
                            <div class="form-group m-b-40">
                                <input type="file" class="form-control text-right" id="exampleInputuname9" name="image1" >
                                <label for="exampleInputuname9">Sub_Image</label> 
                            </div> 
                            <div class="form-group m-b-40">
                                <div class="checkbox checkbox-success ">
                                    <input id="checkbox1" type="checkbox" name="status"class="form-control" {{$service->status==1?'checked':''}}>
                                    <label for="checkbox1">Is Published </label>
                                </div>
                            </div>
                            <div class="mt-5 text-right">
                                <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                                <a href="{{route('admin.service_up.index')}}"class="btn btn-inverse waves-effect waves-light">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
  </div>
  @endsection