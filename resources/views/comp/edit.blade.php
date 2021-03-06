@extends('layouts.app1')

@section('content')
            <div class="col-md-12">
             <div class="panel panel-heading">
			
			 <h2>Edit Company</h2>

            </div>
        <div class="col-md-12">
            <div class="panel panel-default">
             <div class="panel-heading">

                <h4 class="panel-title">
              
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-book"> </span> Edit Company</a>
 
                </h4>

             </div> <!-- /.panel heading -->

            <div id="collapseOne" class="panel-collapse collapse in">

                <div class="panel-body">
{!! Form::open(['action' => array('companyController@update', $comp->id),'method'=>'PUT']) !!}

                <div class="row">
                    <div class="col-md-8 col-md-offset-3">
                        <div id="div_id_select" class="form-group required">
                        <label for="id_select"  class="control-label col-md-4  requiredField">Company Name<span class="asteriskField">*</span> </label>
                        <div class="controls col-md-5 "  style="margin-bottom: 10px">
                        {!! Form::text('compName',$comp->name,array('class' => 'input-md form-control', 'id'=>'compName', 'required')); !!}
                        </div>  
                    </div>
            
                        <div id="div_id_select" class="form-group required">
                        <label for="id_select"  class="control-label col-md-4  requiredField">Description<span class="asteriskField">*</span> </label>
                        <div class="controls col-md-5 "  style="margin-bottom: 10px">
                        {!! Form::text('compDesc',$comp->description,array('class' => 'input-md form-control', 'id'=>'compDesc')); !!}
                        </div>  
                    </div>
                        <div id="div_id_select" class="form-group required">
                        <label for="id_select"  class="control-label col-md-4  requiredField">Company GM Name<span class="asteriskField"></span> </label>
                        <div class="controls col-md-5 "  style="margin-bottom: 10px">
                        {!! Form::text('compGM',$comp->comp_gm,array('class' => 'input-md form-control', 'id'=>'comp_gm')); !!}
                        </div>  
                    </div>
                        <div id="div_id_select" class="form-group required">
                        <label for="id_select"  class="control-label col-md-4  requiredField">Company GM Email<span class="asteriskField">*</span> </label>
                        <div class="controls col-md-5 "  style="margin-bottom: 10px">
                        {!! Form::text('compGEmail',$comp->compgm_email,array('class' => 'input-md form-control', 'id'=>'compGEmail')); !!}
                        </div>  
                    </div>
                        <div id="div_id_select" class="form-group required">
                        <label for="id_select"  class="control-label col-md-4  requiredField">Location<span class="asteriskField"></span> </label>
                        <div class="controls col-md-5 "  style="margin-bottom: 10px">
                        {!! Form::select('compLoc',$loc,$comp->location->id,array('class' => 'input-md form-control', 'id'=>'comp_gm')); !!}
                        </div>  
                    </div>
                        <div id="div_id_select" class="form-group required">
                        <label for="id_select"  class="control-label col-md-4  requiredField"><span class="asteriskField"></span> </label>
                        <div class="controls col-md-8 "  style="margin-bottom: 10px">
                        {!! Form::submit('Update', array('class'=>'btn btn-info')); !!}
                        </div>                      
                    </div>

                    
                    </div>
                </div>
    {!! Form::close() !!}

                </div> <!-- /Panel Body Close -->
            </div> <!-- /.collapseOne-->

            </div> <!-- /.panel default -->
        </div> <!-- /col-md-12 -->
 
            </div> <!-- /.panel default -->  

        

		 @endsection