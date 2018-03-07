            
			<div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">

							 @if(Auth::user())	           
								 @if(Auth::user()->isAdmin())
									
						<li>

                            <a href="#"><i class="fa fa-cog fa-fw"></i> Configuration <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">New User</a>
                                </li>
                    								
                                <li>
                                    <a href="#">Manage User</a>
                                </li>
                                <li>
                                    <a href="#">Manage Company</a>
                                </li>

                            </ul>
                            <!-- /.nav-second-level -->
							
                        </li>
							@endif
						@endif

                        <li>
                            <a href="#"><i class="fa fa-edit fa-fw"></i> Link<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ route('url.index')}}">Add New Url</a>
                                </li>							
                                <li>
                                    <a href="{{route('edit') }}">Manage Url</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                         <li>
                            <a href="#"><i class="fa fa-edit fa-tasks"></i> Reports<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Transfers<span class="fa arrow"></span></a>
    								 <ul class="nav nav-third-level">
											<li>
											<a href="#">Pending</a>
											</li>		
											<li>
											<a href="#">Completed</a>
											</li>						
									 </ul>
                                </li>
								

                            </ul>
                            <!-- /.nav-second-level -->
                        </li>                      
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->