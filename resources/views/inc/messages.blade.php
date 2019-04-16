@if(count($errors) > 0)
<br>
  @foreach($errors->all() as $error)
    <div class="alert alert-danger" role="alert">
        {{$error}}
    </div>
  @endforeach
@endif

@if(session('success'))
<br>
<div class="alert alert-success" role="alert">
    {{session('success')}}
</div>
@endif
