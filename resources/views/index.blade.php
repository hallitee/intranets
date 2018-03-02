@extends('layouts.app1')

@section('content')
            <div class="col-md-12">
             <div class="panel panel-heading">
			
			 <h2>ESRNL Intranet Portal</h2>
                <div class="panel-title">
                    <h5 class="text-primary"><span class="fa fa-envelope text-muted"></span> There will be a staff meeting at 12pm conference room, everyone Should be there !</h5> </div>
             </div>
            </div>
			@if(count($mostv)>0)
        <div class="col-md-12">
            <div class="panel panel-info">
             <div class="panel-heading">

                <h4 class="panel-title">

                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-bookmark"> </span>   <u>Most Visited</u></a>
 
                </h4>

             </div> <!-- /.panel heading -->

            <div id="collapseOne" class="panel-collapse collapse ">

                <div class="panel-body">

                    <div class="col-lg-3 col-md-6 col-xs-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">26</div>
                                    <div>New Comments!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
					</div> <!-- /.col-lg-3-->
				
				</div> <!-- /.Panel Body-->

            </div> <!-- /.panel default -->
        </div> <!-- /col-md-12 -->
	
		</div>
				@endif
            <div class="col-md-12">
                          <div class="panel panel-info">
             <div class="panel-heading">

                <h4 class="panel-title">

                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-home "></span>  <u>Applications</u></a>
 
                </h4>

             </div> <!-- /.panel heading -->

            <div id="collapseTwo" class="panel-collapse collapse in">

            <div class="panel-body">

@foreach($links->chunk(3) as $chunk)	
		
			<div class="row">
	@foreach($chunk as $link)
            <div class="col-xs-4 col-md-4 col-lg-4">
                <a href="{{URL::to('url/'.$link->id)}}">
                <div class="thumbnail">
                    <img src="{{asset("uploads/".$link->img1)}}" alt="Sample Image">
                    <div class="caption">
                        <h4>{{$link->descr}}</h4>
                        <p><u>{{$link->url}}</u></p>
                        
                    </div>
                </div></a>
            </div>
			@endforeach
			</div>
@endforeach
               
            </div> <!-- /.collapseOne-->

            </div> <!-- /.panel default -->  

            </div>

		 @endsection