@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center"><h3>Edit Listings <a href="/dashboard" class="float-right btn btn-warning btn-sm">
                Go Back</a></h3></div>

                <div class="card-body">
                {!!Form::open(['action' => ['ListingController@update',$listing->id],'method' => 'POST'])!!}
                {{Form::bsText('name',$listing->name,['placeholder' => 'Company Name'])}}
                {{Form::bsText('website',$listing->website,['placeholder' => 'Company Website'])}}
                {{Form::bsText('email',$listing->email,['placeholder' => 'Contact Email'])}}
                {{Form::bsText('phone',$listing->phone,['placeholder' => 'Contact Phone'])}}
                {{Form::bsText('address',$listing->address,['placeholder' => 'Business Address'])}}
                {{Form::bsTextArea('bio',$listing->bio,['placeholder' => 'About This Business'])}}
                {{Form::hidden('_method','PUT')}}
                {{Form::bsSubmit('submit')}}
              {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection