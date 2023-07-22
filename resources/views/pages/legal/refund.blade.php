@extends('layouts.web')
@section('title', 'Refund Policy')
@section('description', '')
@section('canonical', config('app.app_url') . Request::path())


@section('content')

<section class="container mx-auto">
   <div class="mx-4"> 
    <div class="mx-auto  max-w-2xl lg:max-w-4xl  xl:max-w-6xl">
        <p class="my-4">Based on the following conditions, you may cancel or ask for refund of your order:</p>
        {{-- <p class="my-4">Is your deadline near? Or you are busy in any other project? Or it’s hard for you to obtain an understanding in any of the subjects? Our customer service representative is here to hear you. We are serving our clients since 3 years, and believe in providing the best quality work. Moreover, there are several subjects we write on; it can be your business project, medical thesis or engineering subjects.</p>
        <p class="my-4">We have a team of expert writers who produce quality paper and work hard so that you may relax. Also, at 4poundessay, you will get the affordable prices that a struggling student can easily afford. So place you order with us and let’s experience how best essay writing service works.</p> --}}
        <ul style="list-style-type: disc;" class="mx-4" >
            <li class="my-2"><p>In case you change your mind after the placing the order and making the payment, make sure to cancel the order on same day. Once the writer will start working on it, the refund amount will be deducted.</p></li>
            <li class="my-2"><p>Refund is not applicable to the urgent assignments (like 6 hours to 24 hours deadlines).</p></li>
            <li class="my-2"><p>We are here to help in any type of payments issues, mostly due to system errors payment may reverse back, therefore, until we receive the receipt we never confirm.</p></li>
            <li class="my-2"><p>Refund is not applicable is there is any information missing from the client. Sometime clients fail to provide the right information provided by the facilitator, this may affect the quality of their assignments.</p></li>
            <li class="my-2"><p>We also provide free revision for the first two times, asked within 48 hours. So it is requested to go through the assignment in details within a day of receiving.</p></li>
        </ul>
    </div>
   </div> 
</section>

@endsection