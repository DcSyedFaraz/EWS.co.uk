@extends('layouts.web')
@section('title', 'Pricing')
@section('description', '')
@section('canonical', config('app.app_url') . Request::path())

@section('content')
    <style>
        .pricePlanBoxhead {

            box-shadow: 2.5px 1px 5px -3px rgb(255 255 255);

        }
    </style>

    <section>
        <div class="pricing-table-2  py-6 md:py-12">
            <div class="container mx-auto px-4">

                <div class="pricing-plans flex flex-col lg:flex-row lg:-mx-4 mt-6 md:mt-12 space-x-3">

                    <div class="pricing-plan-wrap lg:w-1/3 my-4 md:my-6">
                        <div
                            class="pricing-plan rounded-3xl border-t-4 border-solid border-white bg-gradient-to-r from-primary-one to-primary-two text-center max-w-sm mx-auto">
                            <div
                                class=" py-2 mx-6 -mt-8 rounded-tl-3xl rounded-tr-3xl  bg-gradient-to-r from-primary-one to-primary-two">
                                <h4 class="font-medium leading-tight text-4xl mb-2 text-white">2:2
                                    <b>STANDARD</b>
                                </h4>
                            </div>
                            <div class="bg-transparent h-3 mx-2 -mt-2 pricePlanBoxhead"></div>
                            <div class="p-6">
                                <ul class="leading-loose text-white space-y-4">
                                    <li class="border-b pb-2 border-white font-semibold text-2xl">
                                        <span>20 DAYS & ABOVE</span>
                                        <br>
                                        <span class="">£4</span>
                                    </li>
                                    <li class="border-b pb-2 border-white font-semibold text-2xl">
                                        <span>10 DAYS</span>
                                        <br>
                                        <span>£ 8</span>
                                    </li>
                                    <li class="border-b pb-2 border-white font-semibold text-2xl">
                                        <span>6 DAYS</span>
                                        <br>
                                        <span>£ 12</span>
                                    </li>
                                    <li class="border-b pb-2 border-white font-semibold text-2xl">
                                        <span>3 DAYS</span>
                                        <br>
                                        <span>£ 18</span>
                                    </li>
                                    <li class="border-b pb-2 border-white font-semibold text-2xl">
                                        <span>WITHIN 24 HOURS</span>
                                        <br>
                                        <span>£ 22</span>
                                    </li>
                                </ul>

                            </div>
                        </div>
                        <div
                            class="text-center pb-4 mx-auto w-80 lg:w-72 xl:w-80 rounded-bl-3xl rounded-br-3xl bg-gradient-to-r from-primary-one to-primary-two">
                            <button
                                class="bg-white text-xl font-semibold py-2 px-6 rounded-full uppercase border-2 hover:bg-transparent hover:border-white hover:text-white transition-colors duration-300"><a href="{{ route('order') }}">Order
                                Now</a></button>
                        </div>
                    </div>

                    <div class="pricing-plan-wrap lg:w-1/3 my-4 md:my-6">
                        <div
                            class="pricing-plan rounded-3xl border-t-4 border-solid border-white bg-gradient-to-r from-primary-one to-primary-two text-center max-w-sm mx-auto">
                            <div
                                class=" py-2 mx-6 -mt-8 rounded-tl-3xl rounded-tr-3xl  bg-gradient-to-r from-primary-one to-primary-two">
                                <h4 class=" leading-tight text-4xl mb-2 text-white">2:1
                                    <b>STANDARD</b>
                                </h4>
                            </div>
                            <div class="bg-transparent h-3 mx-2 -mt-2 pricePlanBoxhead"></div>
                            <div class="p-6">
                                <ul class="leading-loose text-white space-y-4">
                                    <li class="border-b pb-2 border-white font-semibold text-2xl">
                                        <span>20 DAYS & ABOVE</span>
                                        <br>
                                        <span class="">£5</span>
                                    </li>
                                    <li class="border-b pb-2 border-white font-semibold text-2xl">
                                        <span>10 DAYS</span>
                                        <br>
                                        <span>£ 9</span>
                                    </li>
                                    <li class="border-b pb-2 border-white font-semibold text-2xl">
                                        <span>6 DAYS</span>
                                        <br>
                                        <span>£ 13</span>
                                    </li>
                                    <li class="border-b pb-2 border-white font-semibold text-2xl">
                                        <span>3 DAYS</span>
                                        <br>
                                        <span>£ 19</span>
                                    </li>
                                    <li class="border-b pb-2 border-white font-semibold text-2xl">
                                        <span>WITHIN 24 HOURS</span>
                                        <br>
                                        <span>£ 23</span>
                                    </li>
                                </ul>

                            </div>
                        </div>
                        <div
                            class="text-center pb-4 mx-auto w-80 lg:w-72 xl:w-80 rounded-bl-3xl rounded-br-3xl bg-gradient-to-r from-primary-one to-primary-two">
                            <button
                                class="bg-white text-xl font-semibold py-2 px-6 rounded-full uppercase border-2 hover:bg-transparent hover:border-white hover:text-white transition-colors duration-300"><a href="{{ route('order') }}">Order
                                Now</a></button>
                        </div>
                    </div>

                    <div class="pricing-plan-wrap lg:w-1/3 my-4 md:my-6">
                        <div
                            class="pricing-plan rounded-3xl border-t-4 border-solid border-white bg-gradient-to-r from-primary-one to-primary-two text-center max-w-sm mx-auto">
                            <div
                                class=" py-2 mx-6 -mt-8 rounded-tl-3xl rounded-tr-3xl  bg-gradient-to-r from-primary-one to-primary-two">
                                <h4 class=" leading-tight text-4xl mb-2 text-white">FIRST

                                    <b>CLASS</b>
                                </h4>
                            </div>
                            <div class="bg-transparent h-3 mx-2 -mt-2 pricePlanBoxhead"></div>
                            <div class="p-6">
                                <ul class="leading-loose text-white space-y-4">
                                    <li class="border-b pb-2 border-white font-semibold text-2xl">
                                        <span>20 DAYS & ABOVE</span>
                                        <br>
                                        <span class="">£ 6</span>
                                    </li>
                                    <li class="border-b pb-2 border-white font-semibold text-2xl">
                                        <span>10 DAYS</span>
                                        <br>
                                        <span>£ 10</span>
                                    </li>
                                    <li class="border-b pb-2 border-white font-semibold text-2xl">
                                        <span>6 DAYS</span>
                                        <br>
                                        <span>£ 14</span>
                                    </li>
                                    <li class="border-b pb-2 border-white font-semibold text-2xl">
                                        <span>3 DAYS</span>
                                        <br>
                                        <span>£ 20</span>
                                    </li>
                                    <li class="border-b pb-2 border-white font-semibold text-2xl">
                                        <span>WITHIN 24 HOURS</span>
                                        <br>
                                        <span>£ 24</span>
                                    </li>
                                </ul>

                            </div>
                        </div>
                        <div
                            class="text-center pb-4 mx-auto w-80 lg:w-72 xl:w-80 rounded-bl-3xl rounded-br-3xl bg-gradient-to-r from-primary-one to-primary-two">
                            <button
                                class="bg-white text-xl font-semibold py-2 px-6 rounded-full uppercase border-2 hover:bg-transparent hover:border-white hover:text-white transition-colors duration-300"><a href="{{ route('order') }}">Order
                                Now</a></button>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
@endsection
