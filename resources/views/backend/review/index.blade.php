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
                    <li class="breadcrumb-item">Review </li>
                    <li class="breadcrumb-item active">Review Details</li>
                </ol>
            </div>
          
        </div>
        <div class="card">
            <div class="card-body">
                @if(session('message'))
                <div class="alert alert-success">
                    <span class="close" data-dismiss="alert"></span>
                    <strong>{{session('message')}}</strong>
                </div>
                 @endif
                <h4 class="card-title">Review  Table</h4>
                <h6 class="card-subtitle">All Review  Information</h6>
                
                <div class="table-responsive m-t-40">
                    <table id="myTable" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th><input type="checkbox" class="checkall"/></th>
                            <th>Name</th>
                            <th>Phone No</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Commend</th>
                            <th>Actions</th>                                 
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($reviews as $id=>$review)
                        <tr>
                            <td><input type="checkbox" name="checkbox"/></td>
                            <td>{{$review->name}}</td>
                            <td>{{$review->phone}}</td>
                            <td>{{$review->email}}</td>
                            <td>{{$review->subject}}</td>
                            <td>{{$review->comment}}</td>
                            <td>
                            
                                <a type="button" class="btn btn-danger" href="{{route('admin.review.delete',$review->id )}}"><i class="icon-fixed-width icon-trash"></i></a> 
                            </td>
                        </tr>
                        @endforeach                           
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
  </div>
  <!-- Model -->
  @endsection
  