<!-- posts/show.blade.php -->
@extends('AdminFiles.layouts.main')

@section('content')

    @include('AdminFiles.layouts.navbar')

    <div class="container">
        <div class="row justify-content-center">
            @foreach ($posts as $post)
                
            <div class="col-md-8" style="width: 57.666667%;">
                <div class="card">
                    <img src="{{ $post->image }}" class="card-img-top" alt="Post Image">
                    <div class="card-body">
                        <h2 class="card-title">{{ $post->title }}</h2>
                        <p class="card-text">{{ $post->content }}</p>
                    </div>
                    <div class="card-footer text-muted">
                        <p>Author: {{ $post->user->name }}</p>
                            <a href="{{route('post.destroy', $post->id)}}" class="btn btn-danger">Delete</a>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection
