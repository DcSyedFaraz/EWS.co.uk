@extends('layouts.admin')
@section('content')

    <main id="main" class="main">

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            @include('partials.backend.addAndBackBtns', [
                                "page_name" => trans('cruds.order.title_singular'),
                                'back_link' => route('admin.orders.index')
                            ])

                            <table class="table table-bordered table-striped">
                                <tbody>
                                    <tr>
                                        <td class="text-center pt-3" colspan="4">
                                            <h2>Customer Details</h2>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Name
                                        </th>
                                        <td>
                                            {{ $order->name ?? '-' }}
                                        </td>
                                        <th>
                                            Email
                                        </th>
                                        <td>
                                            {{ $order->email ?? '-' }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Country
                                        </th>
                                        <td>
                                            {{ $order->country ?? '-' }}
                                        </td>
                                        <th>
                                            Phone
                                        </th>
                                        <td>
                                            {{ $order->phone ?? '-' }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center pt-3" colspan="4">
                                            <h2>Order Details</h2>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Content Type
                                        </th>
                                        <td>
                                            {{ $order->content_type ?? '-' }}
                                        </td>
                                        <th>
                                            Business Category
                                        </th>
                                        <td>
                                            {{ $order->business_category ?? '-' }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Deadline
                                        </th>
                                        <td>
                                            {{ $order->deadline->name ?? '-' }}
                                        </td>
                                        <th>
                                            Approx Words
                                        </th>
                                        <td>
                                            {{ $order->approx_words ?? '-' }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Place at
                                        </th>
                                        <td>
                                            {{ showDateTime($order->created_at) ?? '-' }}
                                        </td>
                                        <th>
                                            Status
                                        </th>
                                        <td>
                                            @if ($order->is_complete)
                                                <span class="badge bg-success p-2 ms-2">{{ 'Completed' }}</span>
                                            @else
                                                <span class="badge bg-danger p-2 ms-2">{{ 'Incomplete' }}</span>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Detail
                                        </th>
                                        <td colspan="3">
                                            {{ $order->detail ?? '-' }}
                                        </td>
                                    </tr>
                                    @if (!empty($order->files))
                                        <tr>
                                            <td class="text-center pt-3" colspan="4">
                                                <h2>Reference Files</h2>
                                            </td>
                                        </tr>
                                        @foreach ($order->files as $file)
                                            <tr>
                                                <td colspan="3">
                                                    <a href="{{URL('storage/'.$file->file_path)}}"> {{$file->file_path}} </a>
                                                </td>
                                                <td>
                                                    <a href="{{asset('storage/'.$file->file_path)}}" class="btn btn-sm btn-info"> <i class="bi bi-cloud-download "></i> Download</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->

@endsection
