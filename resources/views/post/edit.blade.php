@extends('layouts.main')

@section('content')
    <div class="container">
        <form action="{{ route('service.update', $post->id) }}" method="POST">
            @csrf
            @method('patch')
            <div class="mb-3">
              <label for="tatle" class="form-label">Title</label>
              <input type="text" name="tatle" class="form-control" id="tatle" placeholder="названия поста" value="{{$post->tatle}}">
            </div>

            <div class="mb-3">
                <label for="column" class="form-label">Content</label>
                <textarea name="column" class="form-control" id="column" placeholder="текст поста">{{$post->column}}</textarea>
            </div>

            <div class="mb-3">
                <label for="autor" class="form-label">Autor</label>
                <input type="text" name="autor" class="form-control" id="autor" placeholder="автор поста"  value="{{$post->autor}}">
            </div>

            <button type="submit" class="btn btn-primary">update</button>
          </form>
    </div>


@endsection
