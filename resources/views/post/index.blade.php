@extends('layouts.main')

@section('content')

    <div class="container">
        <div>
            <a href="{{route('service.create')}}" class="btn btn-primary">Add</a>
        </div>
        @foreach ($posts as $post)

        <div>
            <a href="{{route('service.show', $post->id)}}"> {{$post -> id}}. {{$post -> tatle}}</a>
            <a href="{{ route('service.edit', $post->id) }}" class="btn btn-secondary">Edit</a>
            <form action="{{route('service.delete', $post->id)}}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">delete</button>
            </form>
            <a href="{{ route('service.index') }}" class="btn btn-secondary">Back</a>

        </div>
        @endforeach
    </div>


@endsection
