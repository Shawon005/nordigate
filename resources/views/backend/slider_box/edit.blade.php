@extends('backend.layout.master')
  @section('content')
  <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Slider Box </h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashbord')}}">Home</a></li>
                    <li class="breadcrumb-item">Slider Box  </li>
                    <li class="breadcrumb-item active">Slider Box </li>
                </ol>
            </div>
          
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Update Slider Box </h4>
                        <form class="floating-labels m-t-40" action="{{route('admin.slider_box.update',$box->id)}}" method ="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group m-b-40">
                                <input type="text" class="form-control" id="exampleInputuname1" name="title" value="{{$box->title}}" required="">
                                <label for="exampleInputuname1">Title</label>
                            </div>
                            <div class="form-group m-b-40">
                                <input type="file" class="form-control text-right" id="exampleInputuname2" name="image">
                                <label for="exampleInputuname2"> Logo</label>
                            </div> 
                            <!-- <div class="form-group m-b-40">
                                <input type="description" class="form-control" id="exampleInputuname1" name="description" value="{{$box->description}}">
                                <label for="exampleInputuname1">Description</label>
                            </div> -->
                            <div class="form-group m-b-40">
                                <input type="text" class="form-control" id="exampleInputuname1" name="link" value="{{$box->link}}" required="">
                                <label for="exampleInputuname1">Link</label>
                            </div>
                            <div class="form-group m-b-40">
                                <div class="checkbox checkbox-success">
                                    <input id="checkbox1" type="checkbox" name="status"class="form-control" {{$box->status==1?'checked':''}}>
                                    <label for="checkbox1">Is Published </label>
                                </div>
                            </div>
                            <div class="mt-5 text-right">
                                <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                                <a href="{{route('admin.service.index')}}"class="btn btn-inverse waves-effect waves-light">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
  </div>
  @endsection