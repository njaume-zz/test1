@extends('master')

@section('content')
				<div class="container">
					<div class="row">
				      <div class="col-md-6 col-md-offset-3">
				        <div class="well well-sm">
									     {!!Form::open(['route'=>'mail.store','method'=>'POST'])!!}
									{{-- <form class="form-horizontal" method="POST" action="{{ url('/mail.store') }}"> --}}
										<input type="hidden" name="_token" value="{{ csrf_token() }}">
				          <fieldset>
				            <legend class="text-center">Contact ussss</legend>

				            <!-- Name input-->
				            <div class="form-group">
				              <label class="col-md-3 control-label" for="name">Name</label>
				              <div class="col-md-9">
				                <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
				              </div>
				            </div>

				            <!-- Email input-->
				            <div class="form-group">
				              <label class="col-md-3 control-label" for="email">Your E-mail</label>
				              <div class="col-md-9">
				                <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
				              </div>
				            </div>

				            <!-- Message body -->
				            <div class="form-group">
				              <label class="col-md-3 control-label" for="message">Your message</label>
				              <div class="col-md-9">
				                <textarea class="form-control" id="mensaje" name="mensaje" placeholder="Please enter your MESSAGE here..." rows="5"></textarea>
				              </div>
				            </div>

				            <!-- Form actions -->
				            <!-- <div class="form-group"> -->
				              <!-- <div class="col-md-12 text-right"> -->
				                <!-- <button type="submit" class="btn btn-primary btn-lg">Submit</button> -->
				              <!-- </div> -->
				            <!-- </div> -->

				          </fieldset>
										{!!Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
										<!-- <button type="submit" class="btn btn-primary">Submit</button> -->
									{!!Form::close()!!}
									</form>
				        </div>
				      </div>
					</div>
				</div>
@endsection
