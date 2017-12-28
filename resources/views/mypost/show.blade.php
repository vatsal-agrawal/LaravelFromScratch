@extends('common.app')
@section('content')
  <div class="list-group">
<div class = 'container'>
    <a class="list-group-item list-group-item-action">{{$showpost->heading}}</a>
    <a class="list-group-item list-group-item-action">{{$showpost->body}}</a>
    <a class="list-group-item list-group-item-action">{{$showpost->created_at}}</a>
@if(!auth()->guest())
    @if(auth()->user()->id===$showpost->user_id)
      <a href="/lsapp/public/posts/{{$showpost->id}}/edit" class="btn btn-info" role="button">EDIT</a>
    <form method='POST' action='/lsapp/public/posts/{{$showpost->id}}'>
    <input type = "hidden" name = "_token" value = {{csrf_token()}}>
    <input type="hidden" name="_method" value="delete">
    <input type='submit' value='DELETE' class='btn btn-danger'>
    </form>   
    @endif  
@endif
  
  

</div>



</div>  


@endsection
