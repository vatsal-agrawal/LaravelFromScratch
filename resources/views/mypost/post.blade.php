@extends('common.app')
@section('content')
  <div class="list-group">
@foreach($posts as $item)
<br>
<div class = 'container'>
    <a class="list-group-item list-group-item-action" href="/lsapp/public/posts/{{$item->id}}">{{$item->heading}}</a>
    <a class="list-group-item list-group-item-action">{{$item->body}}</a>
</div>
<br><br>
@endforeach
</div>  
@endsection
