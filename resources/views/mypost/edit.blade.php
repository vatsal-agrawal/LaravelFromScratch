@extends('common.app')
@section('content')
<form method='POST' action='/lsapp/public/posts/{{$post->id}}'>
    <input type = "hidden" name = "_token" value = {{csrf_token()}}>
    <input type="hidden" name="_method" value="put">
  <div class="form-group">
  <label for="title">Title:</label>
  <input type="text" class="form-control" id="title" name='heading' value={{$post->heading}}>
</div>
<div class="form-group">
  <label for="Body">Body:</label>
  <textarea class="form-control" rows="5" id="Body" name = 'body'>{{$post->body}}</textarea>
</div>
<input type='submit' value='Update' class='btn btn-default'>
@endsection
