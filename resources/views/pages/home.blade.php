@extends('layouts.web')

@section('title', '#1 Cheap Essay Writing Services in UK - Genuine Essays')
@section('description', 'Ace Essay Writing Services London, UK Providing Best Solution to the University Students. Get Cheap Essay Writing Service in UK From Perfect Essay Writers')
@section('canonical', config('app.app_url')  )

@section('content')
    {{-- Hero Section --}}
    <section class="bg-light hero">
        <div class="container">
            <div class="row">
                <div class="col-md-6 my-auto text-center text-md-left">
                    <div class="ml-md-4 mt-5 mt-sm-0">
                        <h1 class="text-primary-color">
                            CHEAP ESSAY WRITING SERVICE UK: <br />
                            Your Best Online Help
                        </h1>
                        <h4 class="text-dark">
                            How dreadful it’s to wake up with urgent submission deadlines, stress and no affordable help in the last hours? That’s where we come to the rescue. Our cheap essay writing service UK makes it smooth for you and bring you closer to success. Are you ready?
                        </h4>
                        <div class="d-flex flex-column flex-lg-row pt-4">
                            <a href="{{route('order')}}" class="borderbtn1 btn-primary case-upper text-center mx-2 mb-2 mb-lg-0">
                               Order Now
                            </a>
                            <a href="javascript:void(Tawk_API.toggle())" class="borderbtn2 btn-outline case-upper text-center mb-2 mb-lg-0">
                               Live chat
                            </a>
                          </div>
                                                          <!--<img class="d-block mx-2 mb-lg-0 " src="{{asset('imgs/reviewsbank.png')}}" width="70" height="25" alt="Essay Writing Service">-->
                          <!--<div class="d-flex col-sm-1 justify-content-start justify-content-md-start mb-5 flex-lg-row pt-4 ">-->

                          <div class="d-flex col-sm-1  justify-content-md-start mb-5 flex-lg-row pt-4 ">
                            <div class="d-flex flex-column text-black">
                                <a href="#" >
                                <img class="d-block mx-4 mb-lg-0 " src="{{asset('imgs/reviewsbank.png')}}" width="70" height="40"  alt="Essay Writing Service"></a>
                                <div>
                                    <span class="">4.9</span>
                                    <div class="d-inline">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                             <div class="d-flex flex-column">
                                <img class="d-block mx-2 mb-2 mb-lg-0" src="{{asset('imgs/images/l1.jpg')}}" width="130" alt="Essay Writing Service">
                                <div>
                                    <span class="">4.9</span>
                                    <div class="d-inline">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="ml-3 d-flex flex-column">
                                <img class="d-block mb-2 mb-lg-0" src="{{asset('imgs/images/l2.jpg')}}" width="140" alt="Essay Writing Service">
                                <div>
                                    <span class="">4.9</span>
                                    <div class="d-inline">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>

                          </div>
                    </div>
                </div>
                <div class="col-md-6 my-auto hero-bg-img">
                    <div class="flat-form">
                        <div class="flat-heading">Calculate <strong>Your Price</strong></div>
                        <div class="flat-body">
                            <form action="#">
                                <div class="form-group">
                                    <select class="form-control submit-control @error('paper_type') is-valid @enderror"
                                        data-value="{{ $data ?? '' ? $data->value : old('paper_type') }}"
                                        name="paper_type">
                                        <option selected disabled hidden>Select Paper Type</option>
                                        @foreach ($paper_types as $paperType)
                                            <option value="{{ $paperType->name }}">
                                                {{ $paperType->name ?? '-' }}</option>
                                        @endforeach
                                    </select>
                                    @error('paper_type')
                                        <div style="color:rgb(252, 10, 10);">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group clearfix">
                                    <select
                                        class="get-fare form-control mine-control @error('academic_level') is-valid @enderror"
                                        id="order_academic_level"
                                        data-value="{{ $data ?? '' ? $data->value : old('academic_level') }}"
                                        name="academic_level">
                                        <option selected disabled hidden>Select Academic Level</option>
                                        @foreach ($academic_levels as $academic_level)
                                            <option value="{{ $academic_level->id }}">
                                                {{ $academic_level->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('academic_level')
                                        <div style="color:rgb(248, 12, 12);">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <select class="get-fare form-control @error('deadline') is-valid @enderror"
                                        id="order_deadline"
                                        data-value="{{ $data ?? '' ? $data->value : old('deadline') }}" name="deadline">
                                        <option selected disabled hidden>Select Deadline</option>
                                        @foreach ($deadlines as $deadline)
                                            <option value="{{ $deadline->id }}">
                                                {{ $deadline->name .
                                                    ' / ' .
                                                    \Carbon\Carbon::now()->addDays($deadline->duration_in_days)->format('D, M j') }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('deadline')
                                        <div style="color:rgb(252, 7, 7);">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <select class="get-fare form-control @error('number_of_pages') is-valid @enderror"
                                        name="number_of_pages"
                                        data-value="{{ $data ?? '' ? $data->value : old('number_of_pages') }}"
                                        id="order_no_of_pages">
                                        <option value="1" selected="selected" disabled="disabled" hidden>Select
                                            Number of Pages
                                        </option>
                                        @for ($p = 1; $p <= 200; $p++)
                                            <option value="{{ $p }}"> {{ $p * 250 }} Words -
                                                {{ $p }} Pages</option>
                                        @endfor
                                    </select>
                                    @error('number_of_pages')
                                        <div style="color:rgb(252, 11, 11);">{{ $message }}</div>
                                    @enderror
                                </div>
                                <h4 class="text-center panel-heading"
                                    style="background-color: rgb(252,252, 253, 0.7); border-radius: 4px;">Total Amount: £
                                    <span id="total-cost">0</span></h4>
                                <div class="text-center my-3">
                                    <a href="{{ route('order') }}" class="btn-primary case-upper mx-2 mb-2 mb-lg-0">
                                        Place Order
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>

    {{-- img divider --}}
    <div class="img-divider">
        <img src="{{ asset('imgs/section-img-1.png') }}" height="100" alt="Essay Writing Service">
    </div>
    {{-- Trust Section --}}
    <section class="mt-2 text-center py-5 bg-white">
        <h4 class="pb-5 main-heading">Trusted By Students of:</h4>
        <div class="trusted">
            <img src="{{ asset('imgs/images/l3.jpg') }}" alt="Essay Writing Service">
            <img src="{{ asset('imgs/images/l4.jpg') }}" alt="Essay Writing Service">
            <img src="{{ asset('imgs/images/l5.jpg') }}" alt="Essay Writing Service">
            <img src="{{ asset('imgs/images/l6.jpg') }}" alt="Essay Writing Service">
            <img src="{{ asset('imgs/images/l7.jpg') }}" alt="Essay Writing Service">
            <img src="{{ asset('imgs/images/l8.jpg') }}" alt="Essay Writing Service">
        </div>
    </section>
    {{-- img divider --}}
    <div class="img-divider">
        <img src="{{ asset('imgs/section-img-1.png') }}" height="100" alt="Essay Writing Service">
    </div>
    {{-- How it works Section --}}
    <section class="mt-2">
        <div class="container py-5 hand-bg-img">
            <div class="row">
                <div class="col-sm-12 col-xl-8">
                    <h2 class="h2 text-white">
                        Top Essay Writer UK Works on Your Essays: Here’s How We Hire?
                    </h2>
                    <ul class="ul">
                        <li class="li">1. Filter Writers Application
                            <ul>
                                <li>
                                    <p class="li_p">
                                        After opening the position for writers, we niche down their expertise and experience and test them further by asking them to submit samples on their specific topic. We also ask them to explain, why they think they are the best fit for this role.
                                    </p>
                                </li>
                            </ul>
                        </li>
                        <li class="li">2. Delve Into Submissions</li>
                        <ul>
                            <li>
                                <p class="li_p">
                                    After receiving submissions, our editorial team go through each sample meticulously and pick the one that stands out among the rest. To hire essay writer UK we make sure the writer is familiar with the writing standards and guidelines the institution demands.
                                </p>
                            </li>
                        </ul>
                        <li class="li">3. Select the Candidate</li>
                        <ul>
                            <li>
                                <p class="li_p">
                                    In this step, we choose the few writers that comply with our hiring process and are also available for the long term. We make sure the selection is competent enough to counsel students and give them a way forward to pursue ahead in their academics.
                                </p>
                            </li>
                        </ul>
                        <li class="li">4. Train the Writer</li>
                        <ul>
                            <li>
                                <p class="li_p">
                                    No matter how experienced or fresh the writer is, we help them to adapt our working style and also to follow the essay guidelines to deliver outstanding work.
                                </p>
                            </li>
                        </ul>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    {{-- img divider --}}
    <div class="img-divider">
        <img src="{{ asset('imgs/section-img-1.png') }}" height="100" alt="Essay Writing Service">
    </div>
    {{-- We offer Section --}}
    <section class="text-center py-5 bg-white">
        <div class="container">
            <h4 class="pb-5 main-heading text-center">Prices You All Can Afford</h4>
            <div class="row">
                <div class="col-sm-12 px-5 px-md-2 col-lg-4">
                    <div class="pricingTable mx-auto">
                        <div class="pricingTable-header">
                            <h4 class="title">2:2 STANDARD</h4>
                        </div>
                        <ul class="pricing-content my-5">
                            <li>20 DAYS & ABOVE <strong>£ 4</strong></li>
                            <li>10 DAYS <strong>£ 8</strong></li>
                            <li>6 DAYS <strong>£ 12</strong></li>
                            <li>3 DAYS <strong>£ 18</strong></li>
                            <li>WITHIN 24 HOURS <strong>£ 22</strong></li>
                        </ul>
                        <div class="pricingTable-signup">
                            <a class="bgcolor borderbtn2" href="{{ route('order') }}">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 px-5 px-md-2 col-lg-4 ">
                    <div class="pricingTable  mx-auto">
                        <div class="pricingTable-header">
                            <h4 class="title">2:1 STANDARD</h4>
                        </div>
                        <ul class="pricing-content my-5">
                            <li>20 DAYS & ABOVE <strong>£ 5</strong></li>
                            <li>10 DAYS <strong>£ 9</strong></li>
                            <li>6 DAYS <strong>£ 13</strong></li>
                            <li>3 DAYS <strong>£ 19</strong></li>
                            <li>WITHIN 24 HOURS <strong>£ 23</strong></li>
                        </ul>
                        <div class="pricingTable-signup">
                            <a class="bgcolor borderbtn2" href="{{ route('order') }}">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 px-5 px-md-2 col-lg-4">
                    <div class="pricingTable  mx-auto">
                        <div class="pricingTable-header">
                            <h4 class="title">FIRST <strong>CLASS</strong></h4>
                        </div>
                        <ul class="pricing-content my-5">
                            <li>20 DAYS & ABOVE <strong>£ 6</strong></li>
                            <li>10 DAYS <strong>£ 10</strong></li>
                            <li>6 DAYS <strong>£ 14</strong></li>
                            <li>3 DAYS <strong>£ 20</strong></li>
                            <li>WITHIN 24 HOURS <strong>£ 24</strong></li>
                        </ul>
                        <div class="pricingTable-signup">
                            <a class="bgcolor borderbtn2" href="{{ route('order') }}">Order Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- img divider --}}
    <div class="img-divider">
        <img src="{{ asset('imgs/section-img-1.png') }}" height="100" alt="Essay Writing Service">
    </div>
    {{-- Types of Services Section --}}
    <section class="mt-2 py-5 bg-light-gray mt-1">
        <div class="container">
            <div class="text-center">
                <h3 class="main-heading">Types of Services When You Ask Us to “Write My Essay UK”</h3>
                <p>
                    Although we provide all kinds of cheap essay UK but we aren’t limited to it. In case, you need any other services from our platform, we are here to provide cheap essay help 24/7 and also these services:
                </p>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-4 p-3 border-sm-bottom-none border-bottom-primary border-right-primary">
                    <div class="service-panel">
                        <h4 class="service-heading">Assignments</h4>
                        <p class="services-paragraph">
                            Do you feel that you need professional assistance when it comes to assignments writing? We have top-rated assignment writers in our team who can help you in meeting the requirements set by your institutions.
                        </p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 p-3 border-bottom-primary border-right-primary">
                    <div class="service-panel">
                        <h4 class="service-heading">Coursework</h4>
                        <p class="services-paragraph">
                            We understand how challenging it's for British students to handle their academic tasks on time. At the same time, the need for perfection can add more to the chaos. That's why our coursework help is tailored to address your needs.
                        </p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 p-3 border-bottom-primary">
                    <div class="service-panel">
                        <h4 class="service-heading">Report Writing</h4>
                        <p class="services-paragraph">
                            Do you find it a bit difficult to create reports that fully meets the set requirements? No more worries as our team can mark it done for you. And that too with excellence. From researching to formatting, we make sure not a single aspect remains neglected.
                        </p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 p-3 border-bottom-primary border-right-primary">
                    <div class="service-panel">
                        <h4 class="service-heading">Dissertations</h4>
                        <p class="services-paragraph">
                            Get the entire dissertation regardless of its topic, size, and deadline at a cheap cost. Whether you're struggling to write a single chapter or looking for assistance to make your dissertation perfect, our writers can make it work for you.
                        </p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 p-3 border-bottom-primary border-right-primary">
                    <div class="service-panel">
                        <h4 class="service-heading">Essay Editing</h4>
                        <p class="services-paragraph">
                            Have you written the essay yourself but are not sure about its quality? Leave that on us. Our cheapest essay writing UK is always open to receiving your drafts to turn them into a paper that speaks a ton about your writing and researching skills.
                        </p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 p-3 border-bottom-primary border-bottom-primary">
                    <div class="service-panel">
                        <h4 class="service-heading">Coursework Writing</h4>
                        <p class="services-paragraph">
                            Other than essay writing help, we also provide coursework writing services to make sure you stay on top of every assignment and don’t compromise on your grades. From writing coursework from scratch to delivering custom papers, we help you stand ahead in your academics.
                        </p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 p-3 border-bottom-primary-last border-right-primary">
                    <div class="service-panel">
                        <h4 class="service-heading">University Essay </h4>
                        <p class="services-paragraph">
                            Get all types of university essay help from top-rated British essay writers. No matter the complexity of your essay, we have a proficient and experienced team that is well-versed in delivering out-of-the-box services.
                        </p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 p-3 border-bottom-primary-last border-right-primary">
                    <div class="service-panel">
                        <h4 class="service-heading">Research Paper Writing</h4>
                        <p class="services-paragraph">
                            How long does it take to craft a research paper that sets you apart from other students? How about taking help from experts who can manage your research paper in a day and that too with excellent writing, structuring, and formatting? We are only an order away.
                        </p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 p-3">
                    <div class="service-panel">
                        <h4 class="service-heading">Literature Review</h4>
                        <p class="services-paragraph">
                            Our literature review writing service in London make your academics easy. Be it chronological, theoretical, or methodological, our writers can deliver with 100% confidentiality, quality, and assistance 24/7.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- img divider --}}
    <div class="img-divider">
        <img src="{{ asset('imgs/section-img-1.png') }}" height="100" alt="Essay Writing Service">
    </div>
    {{-- Free Features Section --}}
    <section class="mt-2 section4 bg-light">
        <div class="container text-center">
            <h4 class="pb-2 main-heading text-center">Free Features</h4>
            <div class="row my-5 pr-1" style="overflow: hidden">
                <div class="col-sm-12 col-md-6 col-xl my-3">
                    <div class="free-feature-wrap" class="mx-auto">
                        <div class="free-feature">
                            <div class="cir"></div>
                            <p class="box"><b>Title Page</b></p>
                            <p>£ 05 <b class="free-feature-btn">FREE</b></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-xl my-3">
                    <div class="free-feature-wrap" class="mx-auto">
                        <div class="free-feature">
                            <div class="cir"></div>
                            <p class="box"><b>Summary</b></p>
                            <p>£ 15 <b class="free-feature-btn">FREE</b></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 my col-xl-3 my-3">
                    <div class="free-feature-wrap" class="mx-auto">
                        <div class="free-feature">
                            <div class="cir"></div>
                            <p class="box"><b>Bibliography</b></p>
                            <p>£ 10 <b class="free-feature-btn">FREE</b></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-xl my-3">
                    <div class="free-feature-wrap" class="mx-auto">
                        <div class="free-feature">
                            <div class="cir"></div>
                            <p class="box"><b>Formatting</b></p>
                            <p>£ 10 <b class="free-feature-btn">FREE</b></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-xl my-3">
                    <div class="free-feature-wrap" class="mx-auto">
                        <div class="free-feature">
                            <div class="cir"></div>
                            <p class="box"><b>Modifications</b></p>
                            <p>£ 30 <b class="free-feature-btn">FREE</b></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center features">
                <h4>Get all these features for<del> 65.95 </del> <b>FREE</b></h4>
                <a href="{{route('order')}}" class="borderbtn1 btn-primary case-upper text-center px-5 mx-2 mb-2 mb-lg-0">
                    Get A+ Paper Now
                </a>
            </div>
        </div>
    </section>
    {{-- img divider --}}
    <div class="img-divider">
        <img src="{{ asset('imgs/section-img-1.png') }}" height="100" alt="Essay Writing Service">
    </div>
    {{-- Sample Papers Section --}}
    <section class="mt-2 section5">
        <h4 class="pb-3 main-heading text-center text-white">Sample of Our Papers</h4>
        <div class="boxx">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-lg-4 mx-auto mb-4">
                        <div class="rotated"></div>
                        <div class="box-part text-center">
                            <div class="title">
                                <h4>Assignment</h4>
                            </div>
                            <div class="text">
                                <table class="w-100">
                                    <tr class="tr">
                                        <td class="td1">
                                            <p class="tdp">Title:</p>
                                        </td>
                                        <td class="td2">
                                            <p class="tdp">
                                                Strategic change management
                                            </p>
                                        </td>
                                    </tr>

                                    <tr class="tr">
                                        <td class="td1">
                                            <p class="tdp">Discipline:</p>
                                        </td>
                                        <td class="td2">
                                            <p class="tdp">Management</p>
                                        </td>
                                    </tr>

                                    <tr class="tr">
                                        <td class="td1">
                                            <p class="tdp">Academic level:</p>
                                        </td>
                                        <td class="td2">
                                            <p class="tdp">Master's</p>
                                        </td>
                                    </tr>

                                    <tr class="tr">
                                        <td class="td1">
                                            <p class="tdp">Pages:</p>
                                        </td>
                                        <td class="td2">
                                            <p class="tdp">24</p>
                                        </td>
                                    </tr>

                                    <tr class="tr">
                                        <td class="td1">
                                            <p>Format:</p>
                                        </td>
                                        <td class="td2">
                                            <p>Harvard</p>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <a href="{{asset('free-samples/strategic-change-management.docx')}}" class="btn btn-primary bgcolor tbtn borderbtn1">
                                Download Sample
                            </a>
                            <a href="{{ route('order') }}" class="btn btn-primary bgcolor tbtn borderbtn2">
                                Order Now
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-12 col-lg-4 mx-auto mb-4">
                        <div class="rotated"></div>
                        <div class="box-part text-center">
                            <!-- <i class="fa fa-instagram fa-3x" aria-hidden="true"></i> -->

                            <div class="title">
                                <h4>Assignment</h4>
                            </div>

                            <div class="text">
                                <table class="w-100">
                                    <tr class="tr">
                                        <td class="td1">
                                            <p class="tdp">Title:</p>
                                        </td>
                                        <td class="td2">
                                            <p class="tdp">
                                                Home-Made Food Business
                                            </p>
                                        </td>
                                    </tr>

                                    <tr class="tr">
                                        <td class="td1">
                                            <p class="tdp">Discipline:</p>
                                        </td>
                                        <td class="td2">
                                            <p class="tdp">Business Plan</p>
                                        </td>
                                    </tr>

                                    <tr class="tr">
                                        <td class="td1">
                                            <p class="tdp">Academic level:</p>
                                        </td>
                                        <td class="td2">
                                            <p class="tdp">Master's</p>
                                        </td>
                                    </tr>

                                    <tr class="tr">
                                        <td class="td1">
                                            <p class="tdp">Pages:</p>
                                        </td>
                                        <td class="td2">
                                            <p class="tdp">9</p>
                                        </td>
                                    </tr>

                                    <tr class="tr">
                                        <td class="td1">
                                            <p>Format:</p>
                                        </td>
                                        <td class="td2">
                                            <p>APA</p>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <a href="{{asset('free-samples/business-plans.docx')}}" class="btn btn-primary bgcolor tbtn borderbtn1">
                                Download Sample
                            </a>
                            <a href="{{ route('order') }}" class="btn btn-primary bgcolor tbtn borderbtn">
                                Order Now
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-12 col-lg-4 mx-auto mb-4">
                        <div class="rotated"></div>
                        <div class="box-part text-center">

                            <div class="title">
                                <h4>Assignment</h4>
                            </div>

                            <div class="text">
                                <table class="w-100">
                                    <tr class="tr">
                                        <td class="td1">
                                            <p class="tdp">Title:</p>
                                        </td>
                                        <td class="td2">
                                            <p class="tdp">
                                                Hotel Room Technologies
                                            </p>
                                        </td>
                                    </tr>

                                    <tr class="tr">
                                        <td class="td1">
                                            <p class="tdp">Discipline:</p>
                                        </td>
                                        <td class="td2">
                                            <p class="tdp">Tourism and Hotel</p>
                                        </td>
                                    </tr>

                                    <tr class="tr">
                                        <td class="td1">
                                            <p class="tdp">Academic level:</p>
                                        </td>
                                        <td class="td2">
                                            <p class="tdp">Master's</p>
                                        </td>
                                    </tr>

                                    <tr class="tr">
                                        <td class="td1">
                                            <p class="tdp">Pages:</p>
                                        </td>
                                        <td class="td2">
                                            <p class="tdp">32</p>
                                        </td>
                                    </tr>

                                    <tr class="tr">
                                        <td class="td1">
                                            <p>Format:</p>
                                        </td>
                                        <td class="td2">
                                            <p>Harvard</p>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <a href="{{asset('free-samples/tourism-and-Hotel-Room-Technologies.docx')}}" class="btn btn-primary bgcolor tbtn borderbtn1">
                                Download Sample
                            </a>
                            <a href="{{ route('order') }}" class="btn btn-primary bgcolor tbtn borderbtn2">
                                Order Now
                            </a>
                        </div>
                    </div>
                </div>
                <div class="text-center features">
                    <a href="{{route('samples')}}" class="borderbtn1 btn-primary case-upper text-center px-5 mx-2 mb-2 mb-lg-0">
                        View All Samples
                    </a>
                </div>
            </div>
        </div>
    </section>
    {{-- img divider --}}
    <div class="img-divider">
        <img src="{{ asset('imgs/section-img-1.png') }}" height="100" alt="Essay Writing Service">
    </div>
    {{-- Time to Relieve Section --}}
    <section class="mt-2 section5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 mb-5 text-center text-sm-left">
                    <h3 class="h2 pt-5 main-heading text-primary-color">
                        Time to Relieve Your Stress with Our Cheap Essay Help London
                    </h3>
                    <p class="text-dark-gray mb-3">
                        Do you know any essay writing websites that guarantee quality services at cheap rates? No? That’s what we cater to.
                    </p>
                    <p class="text-dark-gray mb-3">
                        We are a team of the best essay writers in UK who has only one mission in life and that’s to empower students without being a burden on their pockets. No matter to which university you belong in London, Manchester, Cambridge, Oxford, Southampton, Birmingham, Durham, Edinburgh, Glasgow, Bristol, Liverpool, Leeds or any other city in UK, our cheap writing help is open to help you anytime.
                    </p>
                    <p class="text-dark-gray mb-3">
                        The best part is that we not only give cheap services but are also open to receiving urgent essay writing services requests to rescue you in the nick of time. From writing an essay from scratch to making it unique to your requirements, we ensure you get more than you expect from us. Still struggling or afraid to face the challenges? Connect with us today!
                    </p>
                    <a href="{{ route('order') }}" class="btn btn-primary bgcolor borderbtn1 pl-4 pr-4">
                        Order Now
                    </a>
                    <a href="javascript:void(Tawk_API.toggle())" class="btn btn-primary bgcolor borderbtn2 pl-4 pr-4 ml-lg-5">
                        Live Chat
                    </a>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 my-auto">
                    <img src="{{ asset('imgs/images/part.png') }}" alt="Essay Writing Service" class="w-100" />
                </div>
            </div>
        </div>
    </section>
     {{-- img divider --}}
     <div class="img-divider">
        <img src="{{ asset('imgs/section-img-1.png') }}" height="100" alt="Essay Writing Service">
    </div>
    {{-- Testinomial Section --}}
    <section class="mt-2 section5">
        <div class="container-fluid px-3 px-sm-5 text-center">
            <h4 class="main-heading text-white mb-5">Our Happy Customers</h4>
            <div class="owl-carousel owl-theme">
                <div class="item first prev">
                    <div class="card border-0 py-3 px-4">
                        <div class="row justify-content-center">
                            <img src="{{asset('imgs/images/t3.jpg')}}" class="img-fluid profile-pic mb-4 mt-3" />
                        </div>
                        <p class="content mx-2">
                            <i class="fa fa-quote-left"></i>
                            I hire them for my university essays and I must say that they exceeded my expectations. One thing I like about them is that their services aren’t over-priced. Going to come here again.
                        </p>
                        <div class="row mx-auto mb-3">
                            <i class="fa fa-star fa-2x"></i>
                            <i class="fa fa-star fa-2x"></i>
                            <i class="fa fa-star fa-2x"></i>
                            <i class="fa fa-star fa-2x"></i>
                            <i class="fa fa-star fa-2x"></i>
                        </div>
                        <h6 class="mb-3 mt-2">
                            <b class="testimo-title">Adam</b><br />London
                        </h6>
                    </div>
                </div>
                <div class="item show">
                    <div class="card border-0 py-3 px-4">
                        <div class="row justify-content-center">
                            <img src="{{asset('imgs/images/t2.jpg')}}" class="img-fluid profile-pic mb-4 mt-3" />
                        </div>
                        <p class="content mx-2">
                            <i class="fa fa-quote-left"></i>
                            I was afraid to work with them first but when I received my order, I was surprised. They weren’t only responsive throughout the time but also make sure that the essays are perfect.
                        </p>
                        <div class="row mx-auto mb-3">
                            <i class="fa fa-star fa-2x"></i>
                            <i class="fa fa-star fa-2x"></i>
                            <i class="fa fa-star fa-2x"></i>
                            <i class="fa fa-star fa-2x"></i>
                            <i class="fa fa-star fa-2x"></i>
                        </div>
                        <h6 class="mb-3 mt-2">
                            <b class="testimo-title">Mariah</b><br />
                            Bristol
                        </h6>
                    </div>
                </div>
                <div class="item next">
                    <div class="card border-0 py-3 px-4">
                        <div class="row justify-content-center">
                            <img src="{{asset('imgs/images/t4.jpg')}}" class="img-fluid profile-pic mb-4 mt-3" />
                        </div>
                        <p class="content mx-2">
                            <i class="fa fa-quote-left"></i>
                            Best writing support at best prices. Highly recommend to students.
                        </p>
                        <div class="row mx-auto mb-3">
                            <i class="fa fa-star fa-2x"></i>
                            <i class="fa fa-star fa-2x"></i>
                            <i class="fa fa-star fa-2x"></i>
                            <i class="fa fa-star fa-2x"></i>
                            <i class="fa fa-star fa-2x"></i>
                        </div>
                        <h6 class="mb-3 mt-2">
                            <b class="testimo-title">Samantha</b><br />UK
                        </h6>
                    </div>
                </div>
                <div class="item last">
                    <div class="card border-0 py-3 px-4">
                        <div class="row justify-content-center">
                            <img src="{{asset('imgs/images/t1.jpg')}}" class="img-fluid profile-pic mb-4 mt-3" />
                        </div>
                        <p class="content mx-2">
                            Outstanding Service! Provided everything on time. I was impressed by their analysis and summary writing skills.
                        </p>
                        <div class="row mx-auto mb-3">
                            <i class="fa fa-star fa-2x"></i>
                            <i class="fa fa-star fa-2x"></i>
                            <i class="fa fa-star fa-2x"></i>
                            <i class="fa fa-star fa-2x"></i>
                            <i class="fa fa-star fa-2x"></i>
                        </div>
                        <h6 class="mb-3 mt-2">
                            <b class="testimo-title">Sofia</b><br />Birmingham
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- img divider --}}
    <div class="img-divider">
        <img src="{{ asset('imgs/section-img-1.png') }}" height="100" alt="Essay Writing Service">
    </div>
    <section class="mapSection bg-light py-5">
        <h3 class="pt-5 main-heading text-center ">
            Custom Essay Writing Service UK by the Best Essay Writers
        </h3>
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-12 pt-4">
                    <p class="text-dark-gray">
                        Getting your paper done by the best essay writers in UK is no longer an unachievable task as we bring them to your service via our platform. Our writers write your essays exactly to the standard you need in terms of requirements, grades, and complexity. If you’re tired of rejection, missed deadlines, and eleventh-hour submissions, we know how to get it all sorted. Let’s chat!
                    </p>
                </div>

            </div>
        </div>
    </section>
    {{-- img divider --}}
    <div class="img-divider">
        <img src="{{ asset('imgs/section-img-1.png') }}" height="100" alt="Essay Writing Service">
    </div>
    {{-- FAQ --}}
    <section class="section4" id="faq">
        <h4 class="faqSectionh4 h3 main-heading text-center text-white">FAQs</h4>
        <div class="container pb-4">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                            A. We work specifically to your requirements and deliver
                            genuine essay writing services. Our team put the best
                            efforts into research, formatting, and writing. That's
                            why we have a high ratio of returning customers.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default" data-toggle="collapse" data-parent="#accordion" href="#collapse10">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle collapsed text-primary-color" data-toggle="collapse"
                                data-parent="#accordion" href="#collapse10">
                                How do you assure quality in your essay writing UK cheap?
                                <span class="float-right d-none d-md-block">
                                    <i class="fa fa-plus"></i>
                                </span>
                            </a>
                        </h4>
                    </div>
                    <div id="collapse10" class="panel-collapse collapse">
                        <div class="panel-body">
                            A. We work specifically to your requirements and deliver genuine essay writing services. Our team put the best efforts into research, formatting, and writing. That’s why we have a high ratio of returning customers.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default" data-toggle="collapse" data-parent="#accordion" href="#collapseTen">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle collapsed text-primary-color" data-toggle="collapse"
                                data-parent="#accordion" href="#collapseTen">Do you give refunds if I'm not satisfied with
                                the
                                essays?
                                <span class="float-right d-none d-md-block">
                                    <i class="fa fa-plus"></i>
                                </span>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTen" class="panel-collapse collapse">
                        <div class="panel-body">
                            A. We put our heart and sweat to deliver outstanding UK
                            essay writing. And usually, we don't receive complaints
                            regarding our orders. But still, if you aren't satisfied
                            with the paper our team can revise it for you. Refunds
                            are only possible in case of plagiarized work (that
                            doesn't happen at all).
                        </div>
                    </div>
                </div>
                <div class="panel panel-default" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle collapsed text-primary-color" data-toggle="collapse"
                                data-parent="#accordion" href="#collapseEleven">Can you write my essay for me cheap?

                                <span class="float-right d-none d-md-block">
                                    <i class="fa fa-plus"></i>
                                </span>

                            </a>
                        </h4>
                    </div>
                    <div id="collapseEleven" class="panel-collapse collapse">
                        <div class="panel-body">
                            A. Yes, we can. Our charges are lower than the other
                            essay writing companies UK which makes us a go-to choice
                            for students or anyone who can't afford top-rated
                            professional essay writers UK. We are one of the few
                            websites that's known for providing cheap essay writing
                            help online.
                        </div>
                    </div>
                </div>

                <div class="panel panel-default" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle collapsed text-primary-color" data-toggle="collapse"
                                data-parent="#accordion" href="#collapseTwo">Do you provide 24 hour essay writing services?
                                <span class="float-right d-none d-md-block">
                                    <i class="fa fa-plus"></i>
                                </span>

                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            A. We usually take two days or three to complete your
                            orders. But if you need urgent essay help, we are ready
                            to serve you. We charge a bit extra for urgent orders so
                            it's best to let us know before three days of submission
                            to save yourself from the additional amount.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle collapsed text-primary-color" data-toggle="collapse"
                                data-parent="#accordion" href="#collapseThree">Who will work on my essays?
                                <span class="float-right d-none d-md-block">
                                    <i class="fa fa-plus"></i>
                                </span>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            A. We have a team of British essay writers, American
                            writers, editors, proofreaders, and top essay writer UK.
                            All orders are assigned according to the expertise of
                            writers to make sure there's no room left for mistakes.
                        </div>
                    </div>
                </div>

                <div class="panel panel-default" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle collapsed text-primary-color" data-toggle="collapse"
                                data-parent="#accordion" href="#collapseSeven">Will you keep my identity confidential?
                                <span class="float-right d-none d-md-block">
                                    <i class="fa fa-plus"></i>
                                </span>

                            </a>
                        </h4>
                    </div>
                    <div id="collapseSeven" class="panel-collapse collapse">
                        <div class="panel-body">
                            A. Yes, absolutely! Your information remains with us
                            only. Even we don't share it with the writers.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- img divider --}}
    <div class="img-divider">
        <img src="{{ asset('imgs/section-img-1.png') }}" height="100" alt="Essay Writing Service">
    </div>
    <div class="bg-white py-5 mt-2">
        <div class="container">
            <h4 class="text-center h2 main-heading">
                Still Thinking? How About Contacting Our Customer Support Service
                Right Now?
            </h4>
            <p class="text-center">
                We have been helping students for a decade. Be it for uni essay
                writing help or college essays. Also, we don't only write essays for
                money UK, the purpose is also to take students out of the chaos to
                give them a hassle-free academic life. So, whatever your worries
                are, feel free to contact us right away.
            </p>
        </div>
    </div>

@endsection
@section('scripts')
    <script>
        $(".get-fare").change(function(e) {
            e.preventDefault();
            var data = {
                "_token": "{{ csrf_token() }}",
                "deadline_id": $('#order_deadline').val(),
                "academic_level_id": $('#order_academic_level').val(),
            }
            $.ajax({
                method: 'POST',
                beforeSend: function() {
                    $("#total-cost").html("...")
                },
                data: data,
                success: function(res) {
                    $("#total-cost").html((res.per_page_price * ($("#order_no_of_pages").val() == null ?
                        1 : $("#order_no_of_pages").val())))
                },
                error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
                    console.log(JSON.stringify(jqXHR));
                    console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
                }
            });
        });
    </script>
@endsection
