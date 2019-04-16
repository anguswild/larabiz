@extends('layouts.app')

@section('content')
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
              <div class="card-header">Dashboard <a href="/listings/create" class="btn btn-success btn-sm float-right"><i class="fas fa-plus-square"></i></a></div>

              <div class="card-body">
                  @if (session('status'))
                      <div class="alert alert-success" role="alert">
                          {{ session('status') }}
                      </div>
                  @endif

                  <h3>Your Listings</h3>
                  @if(count($listings) > 0)
                    <table class=" table table-striped">
                      <tr>
                        <th>Company</th>
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>
                      @foreach($listings as $listing)
                        <tr>
                          <td>{{$listing->name}}</td>
                          <td><a href="/listings/{{$listing->id}}/edit" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a></td>
                          <td>
                            <form action="{{route('listings.destroy', $listing->id) }}" method="post" onsubmit="return confirm('Are you sure?')">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                            </form>

                          </td>
                        </tr>
                      @endforeach
                    </table>
                  @endif
              </div>
          </div>
      </div>
  </div>
@endsection
