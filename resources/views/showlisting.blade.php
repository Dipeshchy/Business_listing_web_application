@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center"><h3>{{$listing->name}}<span><a href="/"
                 class="btn btn-warning btn-sm float-right">Go Back</a></span></h3></div>

                <div class="card-body">
                <ul class="list-group">
                    <li class="list-group-item">Address : {{$listing->address}}</li>
                    <li class="list-group-item">Email : {{$listing->email}}</li>
                    <li class="list-group-item">Phone : {{$listing->phone}}</li>
                    <li class="list-group-item">Website : <a href="{{$listing->website}}" target="_blank">{{$listing->website}}</a></li>
                    </ul>
                    <br>
                    <div class="well">
                  {{$listing->bio}}
                    </div>
                    

                
                
                </div>
            </div>
        </div>
    </div>

@endsection