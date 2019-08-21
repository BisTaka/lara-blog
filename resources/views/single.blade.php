@extends('layouts.master')

    @section('content')
    &NonBreakingSpace;
    &NonBreakingSpace;

    <div class="jumbotron" style="background:url( {!! !empty($post->image) ? '/uploads/posts/' . $post->image :  'https://i.stack.imgur.com/hKkPH.png' !!}); ">
        <div class="text-center display-2">
            {{ $post->title }}
        </div>
        <div class="text-center">
            {{ $post->user->name }}
            <p>Posted {{ $post->created_at->diffForHumans() }} </p>
        </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-10 mx-auto">
          {{--  <h3 class="mt-4">{{ $post->title }} <span class="lead"> by <a href="#"> {{ $post->user->name }} </a></span> </h3>  --}}
          {{--  <hr>  --}}
          {{--  <p>Posted {{ $post->created_at->diffForHumans() }} </p>  --}}
          {{--  <hr>
          <hr>  --}}
          <h1>{{ $post->title }}</h1>
          <p class="lead">{{ $post->body }}</p>
          <hr>
          <div class="card my-4">
            <h5 class="card-header">Leave a Comment:</h5>
            <div class="card-body">
              <form>
                <div class="form-group">
                  <textarea class="form-control" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endsection
