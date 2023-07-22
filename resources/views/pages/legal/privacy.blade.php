@extends('layouts.web')
@section('title', 'Privacy Policy')
@section('description', '')
@section('canonical', config('app.app_url') . Request::path())

@section('content')

<section class="container mx-auto">
   <div class="mx-4"> 
    <div class="mx-auto  max-w-2xl lg:max-w-4xl  xl:max-w-6xl">
        
        {{-- <p class="my-4">Is your deadline near? Or you are busy in any other project? Or it’s hard for you to obtain an understanding in any of the subjects? Our customer service representative is here to hear you. We are serving our clients since 3 years, and believe in providing the best quality work. Moreover, there are several subjects we write on; it can be your business project, medical thesis or engineering subjects.</p>
        <p class="my-4">We have a team of expert writers who produce quality paper and work hard so that you may relax. Also, at 4poundessay, you will get the affordable prices that a struggling student can easily afford. So place you order with us and let’s experience how best essay writing service works.</p> --}}
        <ul style="list-style-type: disc;" class="mx-4" >
            <li class="my-2"><p>4poundessay believes in maintaining customers privacy and information is completely secure with us.</p></li>
            <li class="my-2"><p>We reserve the right to terminate any terms and condition, depending on the situation.</p></li>
            <li class="my-2"><p>We are an authentic essay writing service provider in the UK, so never afraid while making any payments.</p></li>
            <li class="my-2"><p>We ensure the secure payment methods.</p></li>
            <li class="my-2"><p>All the information required to fill the form is only for maintaining our database, and letting customer know for any offers.</p></li>
            <li class="my-2"><p>We ensure that confidentiality is maintained throughout and customer feel secure.</p></li>
        </ul>
    </div>
   </div> 
</section>

@endsection