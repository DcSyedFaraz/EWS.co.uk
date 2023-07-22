@extends('layouts.web')

@section('title', 'Pricing Plans')
@section('description', '')
@section('canonical', config('app.app_url') . Request::path() )

@section('content')

    <section class="text-center py-5 bg-white">
        <div class="container">
            <h4 class="h1 text-center pb-5">We Offer Best Prices</h4>
            <div class="row">
                <div class="col-sm-12 px-5 px-md-2 col-lg-4">
                    <div class="pricingTable mx-auto">
                        <div class="pricingTable-header">
                            <h3 class="title">2:2 STANDARD</h3>
                        </div>
                        <ul class="pricing-content my-5">
                            <li>20 DAYS & ABOVE <strong>£ 4</strong></li>
                            <li>10 DAYS <strong>£ 8</strong></li>
                            <li>6 DAYS <strong>£ 12</strong></li>
                            <li>3 DAYS <strong>£ 18</strong></li>
                            <li>WITHIN 24 HOURS <strong>£ 22</strong></li>
                        </ul>
                        <div class="pricingTable-signup">
                            <a class="bgcolor borderbtn2" href="{{route('order')}}">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 px-5 px-md-2 col-lg-4 ">
                    <div class="pricingTable  mx-auto">
                        <div class="pricingTable-header">
                            <h3 class="title">2:1 STANDARD</h3>
                        </div>
                        <ul class="pricing-content my-5">
                            <li>20 DAYS & ABOVE <strong>£ 5</strong></li>
                            <li>10 DAYS <strong>£ 9</strong></li>
                            <li>6 DAYS <strong>£ 13</strong></li>
                            <li>3 DAYS <strong>£ 19</strong></li>
                            <li>WITHIN 24 HOURS <strong>£ 23</strong></li>
                        </ul>
                        <div class="pricingTable-signup">
                            <a class="bgcolor borderbtn2" href="{{route('order')}}">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 px-5 px-md-2 col-lg-4">
                    <div class="pricingTable  mx-auto">
                        <div class="pricingTable-header">
                            <h3 class="title">FIRST <strong>CLASS</strong></h3>
                        </div>
                        <ul class="pricing-content my-5">
                            <li>20 DAYS & ABOVE <strong>£ 6</strong></li>
                            <li>10 DAYS <strong>£ 10</strong></li>
                            <li>6 DAYS <strong>£ 14</strong></li>
                            <li>3 DAYS <strong>£ 20</strong></li>
                            <li>WITHIN 24 HOURS <strong>£ 24</strong></li>
                        </ul>
                        <div class="pricingTable-signup">
                            <a class="bgcolor borderbtn2" href="{{route('order')}}">Order Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
