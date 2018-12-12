@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">ADMIN Dashboard
                    <a class="collapse navbar-collapse navbar-right" href="{{route('post.index')}}">Kategori</a>
                    <a class="collapse navbar-collapse navbar-right" href="/users">User</a>
                </div>

                <div class="panel-body">
                    You are logged in as <strong>ADMIN</strong>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
