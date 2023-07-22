@extends('layouts.web')
@section('title', 'Terms And Conditions')
@section('description', '')
@section('canonical', config('app.app_url') . Request::path())

@section('content')

<section class="container mx-auto">
   <div class="mx-4"> 
    <div class="mx-auto  max-w-2xl lg:max-w-4xl  xl:max-w-6xl">
        <p class="my-4">We appreciate that our visitors go through each and every detail before ordering any piece
            of work. These terms & conditions are to clear the confusion that is going on our customer
            mind. We believe in providing the real and quality experience.</p>
        {{-- <p class="my-4">Is your deadline near? Or you are busy in any other project? Or it’s hard for you to obtain an understanding in any of the subjects? Our customer service representative is here to hear you. We are serving our clients since 3 years, and believe in providing the best quality work. Moreover, there are several subjects we write on; it can be your business project, medical thesis or engineering subjects.</p>
        <p class="my-4">We have a team of expert writers who produce quality paper and work hard so that you may relax. Also, at 4poundessay, you will get the affordable prices that a struggling student can easily afford. So place you order with us and let’s experience how best essay writing service works.</p> --}}
        <ul style="list-style-type: disc;" class="mx-4">
            <li class="my-2"><p>This website contains the 100% original content</p></li>
            <li class="my-2"><p>4poundessay prohibit using its website content for any commercial use.</p></li>
            <li class="my-2"><p>The design of this website is also copyrights, and copying it will give us the right to
                sue other party.</p></li>
            {{-- <li class="my-2"><p>Refund is not applicable is there is any information missing from the client. Sometime clients fail to provide the right information provided by the facilitator, this may affect the quality of their assignments.</p></li>
            <li class="my-2"><p>We also provide free revision for the first two times, asked within 48 hours. So it is requested to go through the assignment in details within a day of receiving.</p></li> --}}
        </ul>

        <h4 class="font-bold text-xl my-4">Terms of Use</h4>
        <ul style="list-style-type: disc;" >
            <li class="my-2"><p>We believe that students over 17 are allowed to use our services for university and college essays, thesis or dissertation</p></li>
            <li class="my-2"><p>We don’t give any permission to resell our services without our consent</p></li>
            <li class="my-2"><p>We request to confirm each and everything before finalizing the order, to be saved from any hurdle.</p></li>
            {{-- <li class="my-2"><p>Refund is not applicable is there is any information missing from the client. Sometime clients fail to provide the right information provided by the facilitator, this may affect the quality of their assignments.</p></li>
            <li class="my-2"><p>We also provide free revision for the first two times, asked within 48 hours. So it is requested to go through the assignment in details within a day of receiving.</p></li> --}}
        </ul>
    </div>
   </div> 
</section>

@endsection