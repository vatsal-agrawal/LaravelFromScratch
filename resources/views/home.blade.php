@extends('common.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <li>
                    <a href="/lsapp/public/posts/create">Create Post</a><br>
                    </li>You are logged in!
                     <div class="list-group">
                        @foreach($posts as $item)
                        <br>
                            <a class="list-group-item list-group-item-action" href="/lsapp/public/posts/{{$item->id}}">{{$item->heading}}</a>
                            <a class="list-group-item list-group-item-action" href="/lsapp/public/posts/{{$item->id}}/edit">Edit</a>
                            <a class="list-group-item list-group-item-action" href="/lsapp/public/posts/{{$item->id}}">Delete</a>
                        <br>
                        @endforeach
                        </div>  

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
