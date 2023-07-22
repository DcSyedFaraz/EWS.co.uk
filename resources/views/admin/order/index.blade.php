@extends('layouts.admin')
@section('content')

    <main id="main" class="main">

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="d-flex justify-content-between">
                                <h5 class="card-title">{{ trans('cruds.order.title') }}</h5>
                            </div>

                            <!-- Table with stripped rows -->
                            <table class="table datatable-order">
                                <thead>
                                    <tr>
                                        <th scope="col">Type</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Deadline</th>
                                        <th scope="col">Business Category</th>
                                        <th scope="col">Status</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @foreach ($orders as $order)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $order->paper_topic ?? "-" }}</td>
                                            <td>{{ $order->deadline ?? "-" }}</td>
                                            <td>{{ $order->academic_level ?? "-" }}</td>
                                            <td>{{ $order->subject_area ?? "-" }}</td>
                                            <td>{{ addCurrency($order->cost_per_page) ?? "-" }}</td>
                                            <td>{{ addCurrency($order->total_price) ?? "-" }}</td>
                                            <td>
                                                @if ($order->is_complete)
                                                    <span class="badge bg-success p-2 ms-2">{{ 'Completed' }}</span>
                                                @else
                                                    <span class="badge bg-danger p-2 ms-2">{{ 'Incomplete' }}</span>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="btn-group" >
                                                        <a href='{{ route('admin.orders.show', [$order->id]) }}' order='button' class='btn btn-sm btn-primary'> <i class='bi bi-eye' ></i> </a>

                                                        <!-- Button trigger modal -->
                                                        <button type="button" class='btn btn-sm btn-info' data-bs-toggle="modal" data-bs-target="#orderCompleteModal{{$order->id}}">
                                                            <i class='bi bi-pencil' ></i>
                                                        </button>

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="orderCompleteModal{{$order->id}}" tabindex="-1" aria-labelledby="orderCompleteModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <form action="{{route('admin.orders.complete', [$order->id])}}" method="POST">
                                                                        @csrf
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="orderCompleteModalLabel">Are you sure?</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <p>Order id {{'#'. $order->id}} has been completed?</p>

                                                                            <div class="form-check form-switch mb-3">
                                                                                <input class="form-check-input" type="checkbox" name="is_complete" id="is_complete" {{ $order->is_complete ? "checked" : ""}} />
                                                                                <label class="form-check-label" for="is_complete">Complete</label>
                                                                            </div>

                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                            <button type="submit" class="btn btn-primary">Save</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <form action="{{ route('admin.orders.destroy', $order->id) }}" method="POST" onsubmit="return confirm('Are you sure? This will delete all related data also.');" style="display: inline-block;">
                                                            <input type="hidden" name="_method" value="DELETE">
                                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                            <button type="submit" disabled class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                                                        </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach --}}
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->

@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('.datatable-order').DataTable({
                "processing": true,
                "serverSide": true,
                "order": [
                    [1, 'desc']
                ],
                "pageLength": 10,
                "ajax": {
                    "url": '{{route('admin.orders.index')}}',
                    // "type": "POST",
                    "headers": {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                },
                "columns": [
                    {
                        "data": "content_type"
                    },
                    {
                        "data": "name"
                    },
                    {
                        "data": "email"
                    },
                    {
                        "data": "deadline_id"
                    },
                    {
                        "data": "business_category"
                    },
                    {
                        "data": "is_complete"
                    },
                    {
                        "data": "actions",
                        orderable: false,
                        searchable: false
                    },
                ]
            })
        });
    </script>
@endsection
