@extends('layouts.web')

@section('title', 'Not Found')
@section('description', '')
@section('canonical', config('app.app_url') . Request::path() )

@section('content')



<section class="contentSection">
    <div class="container">
        <div class="row">
            <div class="offset-md-2 col-md-8">
                <div class="panel">
                    <div class="flat-heading">Resource Not Found</div>
                    <div class="flat-body text-center">
                        <h1 class="text-primary-color" style="font-size: 8rem">
                            404
                        </h1>
                        <hr>
                        <h1 class="text-primary-color">
                            Whoops!
                        </h1>
                        <h2>
                            This page got lost in conversation
                        </h2>
                        <div class="mt-5 mb-3 text-center features">
                            <a href="{{route('home')}}" class="borderbtn1 btn-primary case-upper text-center px-5 mx-2 mb-2 mb-lg-0">
                                Goto Home Page
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
