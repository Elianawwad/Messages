@if(count($errors)> 0)
@foreach($errors->all() as $x)
<div class="text-center fw-bold alert alert-danger my-4" role="alert">
    {{$x}}
</div>
@endforeach
@endif

@if($msg = Session::get('success'))
<div class="text-center fw-bold alert alert-success my-4" role="alert">
    {{$msg}}
</div>
@endif

@if($msg = Session::get('success-delete'))
<div class="text-center fw-bold alert alert-danger my-4" role="alert">
    {{$msg}}
</div>
@endif