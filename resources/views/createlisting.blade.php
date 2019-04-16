@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Create Listing</div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <form action="{{route('listings.store') }}" method="post">
                  @csrf
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" type="text" name="name" id="name" placeholder="Enter Business Name">
                  </div>
                  <div class="form-group">
                    <label for="website">Website</label>
                    <input class="form-control" type="text" name="website" id="website" placeholder="Enter Business Website">
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control" type="email" name="email" id="email" placeholder="Enter Business Email">
                  </div>
                  <div class="form-group">
                    <label for="phone">Phone</label>
                    <input class="form-control" type="text" name="phone" id="phone" placeholder="Enter Business Phone">
                  </div>
                  <div class="form-group">
                    <label for="adress">Adress</label>
                    <input class="form-control" type="text" name="adress" id="adress" placeholder="Enter Business Adress">
                  </div>
                  <div class="form-group">
                    <label for="bio">Bio</label>
                    <textarea class="form-control" name="bio" id="bio" placeholder="Enter Business Bio" cols="50" rows="10" ></textarea>
                  </div>
                  <div class="form-group">
                    <input class="btn btn-primary" type="submit" value="Submit">
                  </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
