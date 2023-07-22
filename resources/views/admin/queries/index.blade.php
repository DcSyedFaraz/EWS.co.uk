@extends('layouts.admin')
@section('content')

    <main id="main" class="main">
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="d-flex justify-content-between">
                                <h5 class="card-title">{{ trans('cruds.queries.title') }}</h5>
                            </div>

                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone</th>
                                        {{-- <th scope="col">Website</th> --}}
                                        <th scope="col">Query At</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($queries as $query)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td> {{$query->name ?? "-"}} </td>
                                            <td> {{$query->email ?? "-"}} </td>
                                            <td> {{$query->phone ?? "-"}} </td>
                                            {{-- <td> <a href="{{ URL($query->website) ?? "-"}}" target="_blank">{{$query->website ?? "-"}}</a></td> --}}
                                            <td> {{ showDateTime($query->created_at) ?? "-"}} </td>
                                            <td>
                                                <div class="btn-group" >
                                                    <a href='{{ route('admin.order.query.show', $query->id) }}' target="_blank" class='btn btn-sm btn-primary'><i class='bi bi-eye'></i> </a>
                                                    <a href='' role='button' class='btn btn-sm btn-info'> <i class='bi bi-pencil' ></i> </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
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
