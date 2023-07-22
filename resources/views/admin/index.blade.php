@extends('layouts.admin')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">

                        <div class="col-lg-3 col-md-6">
                            <div class="card info-card sales-card">
                                <div class="card-body">
                                    <h5 class="card-title">Total Orders</h5>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-cart"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{$data['ordersCount' ?? "-"]}}</h6>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="card info-card revenue-card">
                                <div class="card-body">
                                    <h5 class="card-title">Contact Queries</h5>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-currency-dollar"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{$data['contactQueriesCount' ?? "-"]}}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="card info-card customers-card">
                                <div class="card-body">
                                    <h5 class="card-title">Pending Orders</h5>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-menu-button-wide"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{$data['pendingOrdersCount' ?? "-"]}}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="card info-card revenue-card">
                                <div class="card-body">
                                    <h5 class="card-title">Blogs</h5>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-currency-dollar"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{$data['contactBlog' ?? "-"]}}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Recent Sales -->
                        <div class="col-12">
                            <div class="card recent-sales">
                                <div class="card-body">
                                    <h5 class="card-title">Recent Orders <span>| Today</span></h5>

                                    <table class="table table-borderless datatable" id="recent-order-dtable">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Customer Name</th>
                                                <th scope="col">Subject</th>
                                                <th scope="col">Place at</th>
                                                <th scope="col">Details</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if (!empty($data['recentOrders']))
                                                @foreach ($data['recentOrders'] as $order)
                                                    <tr>
                                                        <th scope="row"><a href="#">{{ '#'.$order->id ?? '-'}}</a></th>
                                                        <td>{{$order->name ?? '-'}}</td>
                                                        <td>{{$order->subject_area ?? '-'}}</td>
                                                        <td>{{ showDateTime($order->created_at) ?? '-'}}</td>
                                                        <td><a href="{{route('admin.orders.show', [$order->id])}}" class="btn btn-sm btn-success">Show Details</a></td>
                                                        <td><span class="badge bg-success"></span></td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!-- End Recent Sales -->
                    </div>
                </div><!-- End Left side columns -->
            </div>
        </section>
    </main><!-- End #main -->


@endsection

@section('scripts')
    <script>
        // document.addEventListener('DOMContentLoaded', function () {
        //     let table = new DataTable('#recent-order-dtable');
        // });
        // console.log('s')
        $('#recent-order-dtable').DataTable( {
            "pageLength": 5
        });
    </script>
@endsection
