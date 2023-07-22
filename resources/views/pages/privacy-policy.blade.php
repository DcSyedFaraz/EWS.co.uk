@extends('layouts.web')


@section('title', 'Privacy Policy')
@section('description', '')
@section('canonical', config('app.app_url') . Request::path())

@section('content')
    <section class="contentSection">
        <div class="container">
            <h1><strong>Privacy Policy</strong></h1>
            <h2>1.	Information collection </h2>
            <p>You may be asked to enter the following data about yourself when asking for our services: </p>
            <ul>
                <li>
                    Information regarding your assignments 
                </li>
                <li>
                    your contact details such as, name, email or contact number 
                </li>
                <li>
                    Details regarding the deadline, submission, or assignment types 
                </li>
                <li>
                    All the information that would help us in providing you best services without any hesitation.
                </li>
                <li>
                    Please note, we never ask for any personal details except the mentioned one, never share any payment or bank account, card number until and unless you have been contacted by one of our agents.  
                </li>
            </ul>
            <h2>2.	Cookies </h2>
            <p>
                All cookies in our website are safe and used in accordance with the cookie law. Our website is highly secure and never allow any thing which causes errors. 
            </p>
            <p>
                Many users feel insecure while accepting cookies, however, it only consists of pieces of information with unique referencing code that is transfer to your device. 
            </p>
            <p>
                Also, cookies expire once the user leave the website, while some of the cookies help users to reach the site again which they visited. 
            </p>
            <h2>3. Why we collect information  </h2>
            <p>The reason for taking information is to:</p>
            <ul>
                <li>
                    Contact clients back when it is required 
                </li>
                <li>
                    make a record of customer and update them regarding our services 
                </li>
                <li>
                    share information regarding our services 
                </li>
                <li>
                    allowing users to easily get the interactive services of the website 
                </li>
            </ul>
        </div>
    </section>
@endsection
