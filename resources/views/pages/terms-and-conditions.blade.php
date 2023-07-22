@extends('layouts.web')

@section('title', 'Terms & Conditions')
@section('description', '')
@section('canonical', config('app.app_url') . Request::path())

@section('content')
    <section class="contentSection">
        <div class="container">

            <h1><strong>Terms and Conditions</strong></h1>
            <p>We offer all kind of Essays, term paper, dissertation, and thesis help, before making any order we ask our
                employees to make sure that they have reviewed our website thoroughly.</p>
            <ul>
                <li>
                    All the payments for the orders are in advance, without paying the amount one should not expect to receive the order on the said deadlines
                </li>
                <li> 
                    We expect that client should share the exact information about their assignment, in case, if wrong details are shared by client, we are not responsible for any revision.
                </li>
                <li>
                    If any client wants to cancel the order, they should inform the us within 6 to 8 hours of order confirmation 
                </li>
                <li>
                    The client should follow the payment procedure as set by the company and should share the payment sharing evidence. 
                </li>
            </ul>            
        </div>
    </section>
@endsection
