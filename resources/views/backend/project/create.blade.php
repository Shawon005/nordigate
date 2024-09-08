@extends('backend.layout.master')
  @section('content')
  <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Project </h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashbord')}}">Home</a></li>
                    <li class="breadcrumb-item">Project </li>
                    <li class="breadcrumb-item active">Project</li>
                </ol>
            </div>
          
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Create New Project</h4>
                        <form class="floating-labels m-t-40" action="{{route('admin.project.store')}}" method ="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group m-b-40">
                                <input type="text" class="form-control" id="exampleInputuname1" name="title"  required="">
                                <label for="exampleInputuname1">Title</label>
                            </div>
                            <div class="form-group m-b-40">
                                <input type="text" class="form-control" id="exampleInputuname1" name="designation" required="">
                                <label for="exampleInputuname1">Designation</label>
                            </div>
                            <div class="form-group m-b-40">
                            <label for="exampleInputuname1">Category</label> <br>
                                <!-- <input type="description" class="form-control" id="exampleInputuname1" name="description" > -->
                                <select name="category_id" id="exampleInputuname1"class="form-control" required>
                                    <option Selected value="">Selected Category</option>
                                    @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->category_name}}</option>
                                    @endforeach
                                </select>
                                
                            </div>
                            <div class="form-group m-b-40">
                                <input type="file" class="form-control text-right" id="exampleInputuname2" name="image"required="">
                                <label for="exampleInputuname2"> Image</label>
                            </div> 
                            <div class="form-group m-b-40">
                                <input type="file" class="form-control text-right" id="exampleInputuname2" name="thumbnail" required="">
                                <label for="exampleInputuname2">Thumbnail Image</label>
                                <small style="color:red" >Image Should be 800 X 800 </small>
                            </div> 
                          
                            <div class="form-group m-b-40">
                                <label for="exampleInputuname1">Description</label><br><br>
                                <textarea id="mymce" name="description" required=""></textarea>
                                <!-- <input type="text" class="form-control" id="exampleInputuname1" name="description" required=""> -->
                                
                            </div>
                            <div class="form-group m-b-40">
                                <div class="checkbox checkbox-success">
                                    <input id="checkbox1" type="checkbox" name="status"class="form-control">
                                    <label for="checkbox1">Is Published </label>
                                </div>
                            </div>
                            <div class="mt-5 text-right">
                                <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                                <a href="{{route('admin.project.index')}}"class="btn btn-inverse waves-effect waves-light">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
  </div>
  @endsection