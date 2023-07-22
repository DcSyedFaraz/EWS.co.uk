@extends('layouts.web')


@section('title', 'Refund Policy')
@section('description', '')
@section('canonical', config('app.app_url') . Request::path() )

@section('content')
    <section class="contentSection" >
        <div class="container">

            <h1><strong>Refund Policy</strong></h1>
            <p>In only following cases client can ask for the refund: </p>
            <ul>
                <li>
                    If the order is cancelled within 12 hours of confirmation, then only the amount will be refunded 
                </li>
                <li>
                    If the information provided by the client is missing or any important instruction missed by the client no refund will be provided 
                </li>
                <li>
                    If we miss the deadline, and you lose marks because of it so the amount will be refund, but if it can be extended so we first expect our client to corporate with us. 
                </li>
                <li>
                    In case if there are any changes that can be done, so we will do the changes then will return the file. 
                </li>
            </ul>
        </div>
    </section>
@endsection
