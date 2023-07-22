@extends('layouts.web')

@section('title', 'Thank You')
@section('description' , '')
@section('canonical', config('app.app_url') . Request::path() )

@section('content')

    <section class="banner-area py-5 bg-white">
        <!-- Content -->
        <div class="container">

            <div class="p-3">
                <div class="text-center">
                    <h1 class="d-none d-sm-block text-primary-color">Congratulation!</h1>
                    <h3 class="d-block d-sm-none text-primary-color">Congratulation!</h3>
                    <h2 class="d-none d-sm-block text-primary-color">Your order has been placed</h2>
                    <h4 class="d-block d-sm-none text-primary-color">Your order has been placed</h4>
                </div>

                <div class="table-responsive-lg mt-3 mx-lg-5">
                    <table class="table table-bordered text-primary-color ">
                        <tr class="text-center">
                            <th>Order ID</th>
                            <th>Subject</th>
                            <th>Deadline</th>
                            <th>Place at</th>
                            <th>Status</th>
                            <th>Charges</th>
                        </tr>
                        <tr class="text-center text-dark">
                            <td>{{ '#'. $order->id ?? "-"}}</td>
                            <td>{{ $order->subject_area ?? "-" }}</td>
                            <td>{{ $order->deadline ?? "-" }}</td>
                            <td>{{ showDateTime($order->created_at) ?? "-"}}</td>
                            <td>
                                @if ($order->is_complete)
                                    {{ 'Completed' }}
                                @else
                                    {{ 'Incomplete' }}
                                @endif
                            </td>
                            <td>{{ addCurrency( $order->total_price ) ?? "-" }}</td>
                        </tr>
                    </table>
                </div>
                <div class="text-center mt-5 text-primary-color">
                    <div class="d-none d-sm-block ">
                        <h3 class="">You'll receive an order verification call from our Team.</h3>
                        <h3>Thank you for choosing Us.</h3>
                    </div>
                    <div class="d-block d-sm-none ">
                        <h4 class="">You'll receive an order verification call from our Team.</h4>
                        <h4>Thank you for choosing Us.</h4>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
