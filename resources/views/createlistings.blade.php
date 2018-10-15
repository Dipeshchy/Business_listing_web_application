@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center"><h3>Create Listings <a href="/dashboard" class="float-right btn btn-warning btn-sm">
                Go Back</a></h3></div>

                <div class="card-body">
                {!!Form::open(['action' => 'ListingController@store','method' => 'POST'])!!}
                {{Form::bsText('name','',['placeholder' => 'Company Name'])}}
                {{Form::bsText('website','',['placeholder' => 'Company Website'])}}
                {{Form::bsText('email','',['placeholder' => 'Contact Email'])}}
                {{Form::bsText('phone','',['placeholder' => 'Contact Phone'])}}
                {{Form::bsText('address','',['placeholder' => 'Business Address'])}}
                {{Form::bsTextArea('bio','',['placeholder' => 'About This Business'])}}
                {{Form::bsSubmit('submit',['class'=>'btn btn-success'])}}
              {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection