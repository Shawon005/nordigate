<aside class="left-sidebar">
            <!-- Sidebar scroll-->

            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="up">
                        <li class="user-profile"> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><img src="" alt="user" /><span class="hide-menu">User </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="javascript:void()">My Profile </a></li>
                                <li><a href="javascript:void()">Change Password</a></li>
                                <li><a href="{{route('admin.logout')}}">Logout</a></li>
                            </ul>
                        </li>
                        <li class="nav-devider"></li>
                        <!-- <li class="nav-small-cap">CMS</li> -->
                        <li> <a class=" waves-effect waves-dark" href="{{route('admin.dashbord')}}" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard</span></a> 
                        <!-- <span class="label label-rouded label-themecolor pull-right">4</span> -->
                           
                        </li>
                        <!-- <li> <a class="waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span class="hide-menu">Homepage</span></a>
                           
                        </li> -->
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-home"></i><span class="hide-menu">Homepage Nav</span></a>
                           <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('admin.slider.index')}}">Slider </a></li>
                                <!-- <li><a href="{{route('admin.service_up.index')}}">Service</a></li> -->
                                <li><a href="{{route('admin.service.index')}}">Facility</a></li>
                                <li><a href="{{route('admin.process.index')}}">Working Process</a></li>
                                <li><a href="{{route('admin.slider_box.index')}}">Slider Box</a></li>
                                <li><a href="{{route('admin.technology.index')}}">Technology</a></li>
                                <li><a href="{{route('admin.testimonial.index')}}">testimonial</a></li>
                           </ul>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="{{route('admin.service_up.index')}}" aria-expanded="false"><i class="mdi mdi-server"></i><span class="hide-menu">Service</span></a>
                          
                          </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-file-powerpoint"></i><span class="hide-menu">Project</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('admin.project_category.index')}}">Project Category</a></li>
                                <li><a href="{{route('admin.project.index')}}">Project</a></li>
                            </ul>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="{{route('admin.review.index')}}" aria-expanded="false"><i class="mdi mdi-content-paste"></i><span class="hide-menu">Contact</span></a>
                          
                          </li>
                        <li> <a class="waves-effect waves-dark" href="{{route('admin.setting.index')}}" aria-expanded="false"><i class="mdi mdi-settings"></i><span class="hide-menu">Setting</span></a>
                          
                        </li>
                       
                        </li>
                      
                           
                           
                        </li>
                      
                           
                        </li>
                        <li> <a class=" waves-effect waves-dark" href="{{route('admin.logout')}}" aria-expanded="false"><i class="mdi mdi-widgets"></i><span class="hide-menu">Logout</span></a>
                           
                        </li>   
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>