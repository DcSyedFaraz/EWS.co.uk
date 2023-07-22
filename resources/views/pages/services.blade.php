@extends('layouts.web')


@section('title', 'Services')
@section('description', '')
@section('canonical', config('app.app_url') . Request::path() )

@section('content')
    <section class="contentSection">
        <div class="container">
            <h1>Services</h1>

            <p> Achieving a high-school degree or a rewarding academic life isn’t possible when your assignments aren’t well-researched and well-written. Assignments hold a weight in academic life, and without it, students cannot achieve a promising performance. With the plethora of students thriving for success it’s the assignments which play a major role, and we want students to never compromise on that. </p>

            <ul>
                <li><a href="{{route('article.writing')}}"><span>Article Writing</span></a></li>
                <li><a href="{{route('research-paper.writing')}}"><span>Research Paper Writing</span></a></li>
                <li><a href="{{route('ppt.design.service')}}"><span>PPT Designing</span></a></li>
                <li><a href="{{route('dissertation.writing')}}"><span>Dissertation Writing</span></a></li>
                <li><a href="{{route('content.writing')}}"><span>Content Writing</span></a></li>
                <li><a href="{{route('academic.writing')}}"><span>Academic Writing</span></a></li>
                <li><a href="{{route('sop.writing')}}"><span>SOP Writing</span></a></li>
                <li><a href="{{route('cv.writing')}}"><span>CV Writing</span></a></li>
                <li><a href="{{route('urdu.writing')}}"><span>Urdu Writing</span></a></li>
                <li><a href="{{route('assignment.writing')}}"><span>Assignment Writing</span></a></li>
                <li><a href="{{route('thesis.writing')}}"><span>Thesis Writing</span></a></li>
                <li><a href="{{route('press.release.writing')}}"><span>Press Release Writing</span></a></li>
                <li><a href="{{route('personal.statement.writing')}}"><span>Proposal Writing</span></a></li>
                <li><a href="{{route('proofreading.and.editing')}}"><span>Proofreading and Editing</span></a></li>
                <li><a href="{{route('term.paper.writing')}}"><span>Term Paper Writing</span></a></li>
                <li><a href="{{route('product.description.writing')}}"><span>Product Description Writing</span></a></li>
                <li><a href="{{route('personal.statement.writing')}}"><span>Personal Statement Writing</span></a></li>
                <li><a href="{{route('newsletter.writing')}}"><span>Newsletter Writing</span></a></li>
                <li><a href="{{route('ghost.writing')}}"><span>Ghost Writing</span></a></li>
                <li><a href="{{route('ebook.writing')}}"><span>Ebook Writing</span></a></li>
                <li><a href="{{route('coursework.writing')}}"><span>Coursework Writing</span></a></li>
                <li><a href="{{route('case.study')}}"><span>Case Study</span></a></li>
            </ul>
        </div>
    </section>

@endsection
