@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{$listing->name}}<a href="/listings" class="btn btn-primary btn-sm float-right">Back</a></div>

            <div class="card-body">
              <ul class="list-group">
                <li class="list-group-item">Website: <a href="http://{{$listing->website}}" target="_blank">{{$listing->website}}</a> </li>
                <li class="list-group-item">Email: {{$listing->email}}</li>
                <li class="list-group-item">Phone: {{$listing->phone}}</li>
                <li class="list-group-item">Adress: {{$listing->adress}}</li>
              </ul>
              <div class="card bg-light">
                <div class="card-body">
                  <h3>Bio</h3>
                  <p>{{$listing->bio}}</p>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
