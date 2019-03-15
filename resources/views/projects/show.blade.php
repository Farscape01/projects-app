@extends('layout')

@section('title')
    Single Project
@endsection

@section('content')
    <!--content-->
    <div class="content">
        <div class="container">
            @isset($project)
                <div>{{ $project->name }}</div>
                <div>{{ $project->description }}</div>
            @endisset
            @isset($keywords)
                @foreach($keywords as $keyword)
                    <div>{{ $keyword->keyword_name }}</div>
                @endforeach
            @endisset

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                Add Keyword
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Add Keywords</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{ url('/keyword') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="modal-body">
                                <input type="text" name="keywords" class="form-control mb">
                                @isset($project)
                                    <input type="hidden" name="project_id" value="{{ $project->id }}">
                                @endisset
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection