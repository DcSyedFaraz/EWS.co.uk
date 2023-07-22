@extends('layouts.web')


@section('title', 'Revision Policy')
@section('description', '')
@section('canonical', config('app.app_url') . Request::path() )

@section('content')
    <section class="contentSection">
        <div class="container">
            <h1><strong>Revision Policy</strong></h1>
            <p>
                Revisions are only allowed if:
            </p>
            <ul>
                <li>
                    The comments and changes asked by the instructor is shared within 30 days of the assignment submission
                </li>
                <li>
                    We will do the revision (within 24 hours) if the mistake is from any of our writers, or if plagiarism is found in our work
                </li>
                <li>
                    We are not responsible for the revision if customer has failed to provide any information which was necessary to be the part of the assignment
                </li>
                <li>
                    There is total 3 chances for revision, client must ensure that everything is clear first time
                </li>

            </ul>
        </div>
    </section>
@endsection
