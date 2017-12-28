@extends('common.app')
@section('content')
<form method='POST' action='/lsapp/public/posts'>
    <input type = "hidden" name = "_token" value = {{csrf_token()}}>
  <div class="form-group">
  <label for="title">Title:</label>
  <input type="text" class="form-control" id="title" name='heading'/>
</div>
<div class="form-group">
  <label for="Body">Body:</label>
  <textarea class="form-control" rows="5" id="Body" name = 'body'></textarea>
</div>
<input type='submit' value='Submit' class='btn btn-default'>
@endsection
