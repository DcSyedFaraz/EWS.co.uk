@extends('layouts.admin')
@section('content')

    <main id="main" class="main">
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="d-flex justify-content-between">
                                <h5 class="card-title">{{ trans('cruds.fare.title') }}</h5>
                                <a href="{{ route('admin.fare.create') }}" class="btn btn-sm btn-primary my-auto"> {{ trans('global.create') }} {{ trans('cruds.fare.title_singular') }} </a>
                            </div>

                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Academic Level</th>
                                        <th scope="col">Deadline</th>
                                        <th scope="col">Cost per Page</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($fares as $fare)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td> {{$fare->academic_level->name ?? "-"}} </td>
                                            <td> {{$fare->deadline->name ?? "-"}} </td>
                                            <td> {{ addCurrency($fare->per_page_price)?? "-"}} </td>
                                            <td>
                                                <div class="btn-group" >
                                                    <button disabled class='btn btn-sm btn-primary'> <i class='bi bi-eye' ></i> </button>
                                                    <button disabled class='btn btn-sm btn-info'> <i class='bi bi-pencil' ></i> </button>
                                                    {{-- <a href='{{ route('admin.fare.show', [$fare->id]) }}' role='button' class='btn btn-sm btn-primary'> <i class='bi bi-eye' ></i> </a>
                                                    <a href='{{ route('admin.fare.edit', [$fare->id]) }}' role='button' class='btn btn-sm btn-info'> <i class='bi bi-pencil' ></i> </a> --}}
                                                    <form action="{{ route('admin.fare.destroy', $fare->id) }}" method="POST" onsubmit="return confirm('Are you sure? This will delete all related data also.');" style="display: inline-block;">
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                        <button disabled class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                                                    </form>
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
