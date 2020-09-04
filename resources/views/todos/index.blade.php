@extends('layouts.app')

@section('status')
Todo List
@endsection

@section('content') 
        <h1 class="text-center my-5">Todos Page</h1>
        <div class="row justfy-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">
                        Todos
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            @foreach ($todos as $todo)
                            <li class="list-group-item">
                                {{$todo->name}}
                                <a href="\todos\{{$todo->id}}" class="btn btn-primary float-right btn-sm">
                                    View
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
@endsection