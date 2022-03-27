@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @include('posts/add-form')

                @foreach($posts as $post)
                    @include('posts.post', ['post' => $post])
                @endforeach
            </div>
        </div>
    </div>

@endsection
