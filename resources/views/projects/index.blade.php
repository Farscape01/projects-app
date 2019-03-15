@extends('layout')

@section('title')
    Projects list
@endsection

@section('content')
    <!--content-->
    <div class="content">
        <div class="container">
            @isset($projects)
                @foreach($projects as $project)
                    <div><a href="{{ url('/projects/'.$project->id ) }}">{{ $project->name }}</a></div>
                @endforeach
            @endisset
        </div>
    </div>
@endsection