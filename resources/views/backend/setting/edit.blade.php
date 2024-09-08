@extends('backend.layout.master')
  @section('content')
  <div class="container-fluid">
         <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Setting</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashbord')}}">Home</a></li>
                    <li class="breadcrumb-item">Setting</li>
                    <li class="breadcrumb-item active">CMS Details</li>
                </ol>
            </div>
          
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                       <h4 class="card-title">Update Site Setting</h4>
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="logo-tab" data-toggle="tab" data-target="#logo" type="button" role="tab" aria-controls="logo" aria-selected="true">Header Logo</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link " id="home-tab" data-toggle="tab" data-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">About</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-toggle="tab" data-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Social Media</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab" data-toggle="tab" data-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Contact</button>
                            </li>

                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="footer4-tab" data-toggle="tab" data-target="#footer4" type="button" role="tab" aria-controls="footer4" aria-selected="false">Footer </button>
                            </li>
                        </ul>
                            <form class="floating-labels m-t-40" action="{{route('admin.setting.update',$setting->id)}}" method ="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div  class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="logo" role="tabpanel" aria-labelledby="logo-tab">
                                        <div class="form-group m-b-40">
                                         <label for="input-file-now-custom-2">Header Logo</label><br><br>
                                         <input type="file" id="input-file-now-custom-22" name="header_logo" class="dropify" data-default-file="{{$setting->header_logo}}" title="Header Logo" />
                                           
                                        </div>
                                        <div class="form-group m-b-40">
                                         <label for="input-file-now-custom-2">Foot Logo</label><br><br>
                                         <input type="file" id="input-file-now-custom-22" name="foot_logo" class="dropify" data-default-file="{{$setting->foot_logo}}" title="Footer Logo" />
                                           
                                        </div>
                                        <div class="form-group m-b-40">
                                         <label for="input-file-now-custom-2">Fav Logo </label><br><br>
                                         <input type="file" id="input-file-now-custom-22" name="fav_logo" class="dropify" data-default-file="{{$setting->fav_logo}}" title="favicon Logo" />
                                           
                                        </div>
                                        <div class="form-group m-b-40">
                                            
                                            <input type="text" class="form-control" id="exampleInputuname1" name="site_title" value="{{$setting->site_title}}" >
                                            <label for="exampleInputuname1">Site Title</label>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade show" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="form-group m-b-40">
                                             <textarea id="mymce" name="about_title" required=""></textarea>
                                            <input type="text" class="form-control" id="exampleInputuname1" name="about_title" value="{{$setting->about_title}}" >
                                            <label for="exampleInputuname1">About Title</label>
                                        </div>
                                        <div class="form-group m-b-40">
                                         <label for="exampleInputuname2">About Image</label><br><br>
                                         <input type="file" id="input-file-now-custom-1" name="about_image" class="dropify" data-default-file="{{$setting->about_image}}" />
                                            
                                        </div>  
                                        
                                        <div class="form-group m-b-40">
                                            
                                            <input type="text" class="form-control" id="exampleInputuname1" name="about_description"value="{{$setting->about_description}}" >
                                            <label for="exampleInputuname1">Description</label>
                                        </div>  
                                        <div class="form-group m-b-40">
                                            
                                            <input type="text" class="form-control" id="exampleInputuname1" name="our_mission"value="{{$setting->our_mission}}" >
                                            <label for="exampleInputuname1">Our Mission</label>
                                        </div>                                     
                                        <div class="form-group m-b-40">
                                            
                                            <input type="text" class="form-control" id="exampleInputuname1" name="our_vission"value="{{$setting->our_vission}}" >
                                            <label for="exampleInputuname1">Our Vission</label>
                                        </div> 
                                        <div class="form-group m-b-40">
                                            
                                            <input type="text" class="form-control" id="exampleInputuname1" name="about_video" value="{{$setting->about_video}}" >
                                            <label for="exampleInputuname1">About Video</label>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"> 
                                        <div class="form-group m-b-40">
                                            <input type="text" class="form-control" id="exampleInputuname1" name="facebook" value="{{$setting->facebook}}" >
                                            <label for="exampleInputuname1">Facebook</label>
                                        </div>
                                        <div class="form-group m-b-40">
                                            <input type="text" class="form-control" id="exampleInputuname1" name="twitter" value="{{$setting->twitter}}" >
                                            <label for="exampleInputuname1">Twitter</label>
                                        </div>
                                        <div class="form-group m-b-40">
                                            <input type="text" class="form-control" id="exampleInputuname1" name="instragram" value="{{$setting->instragram}}" >
                                            <label for="exampleInputuname1">Instragram</label>
                                        </div>
                                        <div class="form-group m-b-40">
                                            <input type="text" class="form-control" id="exampleInputuname1" name="linkind" value="{{$setting->linkind}}" >
                                            <label for="exampleInputuname1">LinkedIn</label>
                                        </div>
                                       
                                    </div>  
                                    <div class="tab-pane fade show " id="contact" role="tabpanel" aria-labelledby="contact-tab"> 
                                        <div class="form-group m-b-40">
                                            
                                            <input type="tel" class="form-control" id="exampleInputuname1" name="mobile" value="{{$setting->mobile}}" >
                                            <label for="exampleInputuname1">Mobile</label>
                                        </div>
                                        <div class="form-group m-b-40">
                                            
                                            <input type="email" class="form-control " id="exampleInputuname2" name="email" value="{{$setting->email}}">
                                            <label for="exampleInputuname2"> Email</label>
                                        </div> 
                                        <div class="form-group m-b-40">
                                            
                                            <input type="text" class="form-control" id="exampleInputuname1" name="whatapp"value="{{$setting->whatapp}}" >
                                            <label for="exampleInputuname1">Whatapp</label>
                                        </div>
                                        <div class="form-group m-b-40">
                                            
                                            <input type="text" class="form-control" id="exampleInputuname1" name="address"value="{{$setting->address}}" >
                                            <label for="exampleInputuname1">Address</label>
                                        </div>
                                        <div class="form-group m-b-40">
                                            
                                            <input type="text" class="form-control" id="exampleInputuname1" name="open_hour"value="{{$setting->open_hour}}" >
                                            <label for="exampleInputuname1">Open Hour</label>
                                        </div>
                                    </div> 
                                   
                                    
                                    <div class="tab-pane fade show " id="footer4" role="tabpanel" aria-labelledby="footer4-tab">
                                       
                                        <div class="form-group m-b-40">
                                            <input type="text" class="form-control " id="exampleInputuname2" name="copy_right_year" value="{{$setting->copy_right_year}}">
                                            <label for="exampleInputuname2">Copy Right</label>
                                        </div> 
                                    </div> 
                                    <div class="mt-5 text-right">
                                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                                        <a href="{{route('admin.dashbord')}}"class="btn btn-inverse waves-effect waves-light">Cancel</a>
                                    </div>
                                </div> 
                            </form> 
                    </div>
                </div>
            </div>
        </div>
  </div>
  @endsection