
@extends('layout')

@section('edit')
    {!! F::open(['action' =>['ScheduleController@update',$y->id], 'method' => 'PUT'])!!}
    
        <div class="col-md-6">

            
			 <div class="form-group required">
				{!! F::label("Email") !!}
				{!! F::text("email", $y->email ,["class"=>"form-control","required"=>"required"]) !!}
			</div>

			 <div class="form-group required">
				{!! F::label("Start Time") !!}
				{!! F::text("start_time", $y->start_time ,["class"=>"form-control","required"=>"required"]) !!}
			</div>

			 <div class="form-group required">
				{!! F::label("End Time") !!}
				{!! F::text("start_time", $y->end_time ,["class"=>"form-control","required"=>"required"]) !!}
			</div>



            <div class="well well-sm clearfix">
                <button class="btn btn-success pull-right" title="Save" type="submit">Update</button>
            </div>
        </div>
        
    {!! Form::close() !!}
@endsection