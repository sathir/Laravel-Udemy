@extends('layouts.app')

@section('status')
Single Todo : {{$todos->name}}
@endsection

@section('content')

        <h1 class="text-center my5">
            {{$todos->name}}
        </h1>

        <div class="card card-default">
            <div class="card-header">
                Details
            </div>

            <div class="card-body">
                {{$todos->description}}
            </div>
            <a href="modify\{{$todos->id}}" class="btn btn-primary float-right btn-sm">
                Edit
            </a>
            <a href="delete\{{$todos->id}}" class="btn btn-danger float-right btn-sm">
                Delete
            </a>

        </div>
@endsection