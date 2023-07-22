@extends('layouts.web')

@section('title', $blog->title ?? "")
@section('description', $blog->meta_description ?? "")
@section('canonical', $blog->canonical ?? "")

@section('content')

    <section class="contentSection">
        <div class="container">

            {{-- <div class="card mb-3">
                <img class="card-img-top" src="{{$blog->image_path ? URL('storage/'.$blog->image_path) : asset('imgs/no-image.png')}}" alt="{{$blog->title}}">
                <div class="card-body">
                  <h5 class="card-title">{{ $blog->title }}</h5>
                  <p class="card-text">
                    {!! $blog->description ?? "-" !!}
                  </p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div> --}}

            <h1 class="blog-header mb-4 " >
                 {{$blog->title ?? "-"}}
            </h1>

            <div class="image_wrapper mb-4">
                <a target="_blank" href="{{$blog->image_path ? URL('storage/'.$blog->image_path) : asset('imgs/no-image.png')}}">
                    <img class="w-100" src="{{$blog->image_path ? URL('storage/'.$blog->image_path) : asset('imgs/no-image.png')}}" >
                </a>
            </div>

            {!! $blog->description ?? "-" !!}
        </div>
    </section>

@endsection
