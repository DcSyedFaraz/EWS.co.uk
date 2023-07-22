@extends('layouts.web')

@section('title', 'Sitemap ')
@section('description', '')
@section('canonical', config('app.app_url') . Request::path() )

@section('content')
    <section class="contentSection">
        <div class="container">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('services')}}">Services</a>
                    <ul>
                        <li><a href="{{route('article.writing')}}">Article Writing</a></li>
                        <li><a href="{{route('assignment.writing')}}">Assignment Writing</a></li>
                        <li><a href="{{route('ppt.design.service')}}">PPT Designing</a></li>
                        <li><a href="{{route('academic.writing')}}">Academic Writing</a></li>
                        <li><a href="{{route('term.paper.writing')}}">Term Paper Writing</a></li>
                        <li><a href="{{route('newsletter.writing')}}">Newsletter Writing</a></li>
                        <li><a href="{{route('coursework.writing')}}">Coursework Writing</a></li>
                        <li><a href="{{route('sop.writing')}}">SOP Writing</a></li>

                        <li> <a href="{{route('cv.writing')}}">CV Writing</a></li>
                        <li> <a href="{{route('thesis.writing')}}">Thesis Writing</a></li>
                        <li> <a href="{{route('dissertation.writing')}}">Dissertation Writing</a></li>
                        <li> <a href="{{route('proposal.writing')}}">Proposal Writing</a></li>
                        <li> <a href="{{route('product.description.writing')}}">Product Description Writing</a></li>
                        <li> <a href="{{route('ghost.writing')}}">Ghost Writing</a></li>
                        <li> <a href="{{route('press.release.writing')}}">Press Release Writing</a></li>

                        <li><a href="{{route('urdu.writing')}}">Urdu Writing</a></li>
                        <li><a href="{{route('research-paper.writing')}}">Research Paper Writing</a></li>
                        <li><a href="{{route('content.writing')}}">Content Writing</a></li>
                        <li><a href="{{route('proofreading.and.editing')}}">Proofreading and Editing</a></li>
                        <li><a href="{{route('personal.statement.writing')}}">Personal Statement Writing</a></li>
                        <li><a href="{{route('ebook.writing')}}">Ebook Writing</a></li>
                        <li><a href="{{route('case.study')}}">Case Study</a></li>
                    </ul>
                </li>
                <li><a href="{{route('about')}}">About Us</a></li>
                <li><a href="{{route('order')}}">Order Now</a></li>
                <li><a href="{{route('get.in.touch')}}">Contact Us</a></li>
                <li><a href="{{route('blogs.index')}}">Blogs</a></li>
            </ul>
            <h3>Quick Links</h3>
            <ul>
                <li><a href="{{route('refund.policy')}}">Money Refund Policy</a></li>
                <li><a href="{{route('terms.and.conditions')}}">Terms &amp; Conditions</a></li>
                <li><a href="{{route('guarantees')}}">Guarantees</a></li>
                <li><a href="{{route('privacy.policy')}}">Privacy Policy</a></li>
            </ul>
        </div>
    </section>
@endsection

