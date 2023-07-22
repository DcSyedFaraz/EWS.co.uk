@extends('layouts.admin')
@section('content')

    <main id="main" class="main">

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            @include('partials.backend.addAndBackBtns', [
                                "page_name" => trans('cruds.queries.title_singular'),
                                'back_link' => route('admin.order.query')
                            ])

                            <table class="table table-bordered table-striped">
                                <tbody>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.queries.fields.name') }}
                                        </th>
                                        <td>
                                            {{ $query->name ?? '-' }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.queries.fields.email') }}
                                        </th>
                                        <td>
                                            {{ $query->email ?? '-' }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.queries.fields.phone') }}
                                        </th>
                                        <td>
                                            {{ $query->phone ?? '-' }}
                                        </td>
                                    </tr>
                                    {{-- <tr>
                                        <th>
                                            {{ trans('cruds.queries.fields.website') }}
                                        </th>
                                        <td>
                                            <a href="{{ URL($query->website) ?? "-"}}" target="_blank">{{$query->website ?? "-"}}</a>
                                        </td>
                                    </tr> --}}
                                    <tr>
                                        <th>
                                            {{ trans('cruds.queries.fields.created_at') }}
                                        </th>
                                        <td>
                                            {{ showDateTimeDay($query->created_at) ?? '-' }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.queries.fields.detail') }}
                                        </th>
                                        <td>
                                            {!! $query->detail ?? '-' !!}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->

@endsection
