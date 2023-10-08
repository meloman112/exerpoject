@extends('layouts.main')

@section('content')
    <div class="container">
        <div>
            title -> {{$post -> tatle}}<br>content -> {{$post -> column}}<br>author -> {{$post -> autor}}
        </div>

        <div class="mp-3">
            <a href="{{ route('service.edit', $post->id) }}" class="btn btn-secondary">Edit</a>
        </div>

        <form action="{{route('service.delete', $post->id)}}" method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">delete</button>
        </form>

        <div class="mp-3">
            <a href="{{ route('service.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>


@endsection
