
@extends('backend.layout.master')
  @section('content')
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Dashboard</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashbord')}}">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
                <!-- <div class="">
                    <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                </div> -->
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Stats box -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex no-block">
                                <div class="m-r-20 align-self-center"><span class="lstick m-r-20"></span><img src="../assets/images/icon/income.png" alt="Income" /></div>
                                <div class="align-self-center">
                                    <h6 class="text-muted m-t-10 m-b-0">Total User</h6>
                                    <h2 class="m-t-0">95</h2></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex no-block">
                                <div class="m-r-20 align-self-center"><span class="lstick m-r-20"></span><img src="../assets/images/icon/expense.png" alt="Income" /></div>
                                <div class="align-self-center">
                                    <h6 class="text-muted m-t-10 m-b-0">Total Blog</h6>
                                    <h2 class="m-t-0">236</h2></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex no-block">
                                <div class="m-r-20 align-self-center"><span class="lstick m-r-20"></span><img src="../assets/images/icon/assets.png" alt="Income" /></div>
                                <div class="align-self-center">
                                    <h6 class="text-muted m-t-10 m-b-0">Total News</h6>
                                    <h2 class="m-t-0">98</h2></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex no-block">
                                <div class="m-r-20 align-self-center"><span class="lstick m-r-20"></span><img src="../assets/images/icon/staff.png" alt="Income" /></div>
                                <div class="align-self-center">
                                    <h6 class="text-muted m-t-10 m-b-0">Total Staff</h6>
                                    <h2 class="m-t-0">9</h2></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Sales overview chart -->
             <!-- outer part start -->
            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
        </div>
  @endsection      
 