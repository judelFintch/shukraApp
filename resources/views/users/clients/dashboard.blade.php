@extends('layouts.app')
@section('title', 'Welcome '.config('app.name'))
    @section('content')
 <form>
  <fieldset>
    <div class="form-group">
      <textarea class="form-control" placeholder="Ecrire quelque choses" id="exampleTextarea"></textarea>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="card mb-3">
          <h4 class="card-header">
                <img class="img-profile rounded-circle" height="60" src="img/undraw_profile.svg">
                      {{ Auth::user()->name }}</h4>
  <div class="card-body">
    <h6 class="card-subtitle text-muted">Acquisition de nouvelles Machines, Merci</h6>
  </div>
  <img src="img/2.jpg" class=" class="d-block user-select-none" width="100%" height="200" aria-label="Placeholder: Image cap" focusable="false" role="img" preserveAspectRatio="xMidYMid slice" viewBox="0 0 318 180" style="font-size:1.125rem;text-anchor:middle">

      </div>
  <div class="form-group">
    <div class="input-group ">
        <img class="img-profile rounded-circle" height="60" src="img/undraw_profile.svg">

      <div class="input-group-append">
        <div style="margin-right: 120px " class="input-grou">
          <textarea class="form-control" placeholder="Commentez" id="exampleTextarea"></textarea>
        </div>
      </div>
    </div>
  </div>
</div>
</form>
@endsection('content')