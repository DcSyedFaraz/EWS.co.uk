@extends('layouts.web')

@section('title', 'Blogs')
@section('description', '')
@section('canonical', config('app.app_url') . Request::path() )

@section('content')

    <section class="contentSection" style="padding-left: 100px; padding-right: 100px; padding-top: 50px; padding-bottom: 50px; ">
        <div class="container">
            @if (!empty($blogs))
                @foreach ($blogs as $blog)
                    <div class="row mb-5">
                        <div class="col-lg-3">
                            <div class="blog-img text-dark ">
                                <a href="{{ route('blogs.show', [$blog->slug])}}">
                                    <img src="{{ asset('storage/'.$blog->image_path) }}"  style="width: 100%;">
                                 <!--<img src="{{asset('storage/'.$blog->image_path)}}" class=" border-8 border-gray-100 mt-10"/>-->
                                    <!--<img src="{{$blog->image_path ? URL('storage/'.$blog->image_path) : asset('imgs/no-image.png')}}" style="width: 100%;">-->
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-7 p-6">
                            <h4 class="blog-header mt-6 mt-lg-0 text-dark h3" style="color: black;">
                                <a href="{{ route('blogs.show', [$blog->slug])}}" style="color: black;">{{$blog->title ?? "-"}}</a>
                            </h4>
                            <p>
                                {{ str_limit(strip_tags($blog->description), 200) }}
                                @if (strlen(strip_tags($blog->description)) > 200)
                                    <a href="{{ route('blogs.show', [$blog->slug])}}" class="text-dark" style="color: black;">Read More</a>
                                @endif
                            </p>
                            <div class="post-footer">
                                <div class="button-love">
                                    <span class="love-text text-dark" style="color: black;">Do you like it?</span>
                                    <a href="#" style="color: black;" class="text-dark mfn-love" data-id="247">
                                        <span class="icons-wrapper"><i class="icon-heart-empty-fa"></i>
                                            <i class="fa fa-heart text-dark"></i></span>
                                        {{-- <span class="label" style="color: black;">37</span></a> --}}
                                </div>
                                <div class="post-links ">
                                    {{-- <a href="#" class="fa fa-comment"><i class="icon-comment-empty-fa"></i> 0</a> --}}
                                    <a href="{{ route('blogs.show', [$blog->slug])}}" style="color: black;" class="text-dark post-more"> <i class="fa fa-file-text-o"></i> Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="d-flex justify-content-center mt-5">
                    {!! $blogs->render() !!}
                </div>
            @else
                <p>No Data Found.</p>
            @endif
        </div>
    </section>


@endsection
