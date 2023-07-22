@extends('layouts.admin')
@section('content')

    <main id="main" class="main">

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            @include('partials.backend.addAndBackBtns', [
                                "page_name" => trans('cruds.contact.title_singular'),
                                'back_link' => route('admin.contacts.index')
                            ])

                            <table class="table table-bordered table-striped">
                                <tbody>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.contact.fields.name') }}
                                        </th>
                                        <td>
                                            {{ $contact->name ?? '-' }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.contact.fields.email') }}
                                        </th>
                                        <td>
                                            {{ $contact->email ?? '-' }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.contact.fields.phone') }}
                                        </th>
                                        <td>
                                            {{ $contact->phone ?? '-' }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.contact.fields.subject') }}
                                        </th>
                                        <td>
                                            {{ $contact->subject ?? '-' }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.contact.fields.created_at') }}
                                        </th>
                                        <td>
                                            {{ showDateTimeDay($contact->created_at) ?? '-' }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.contact.fields.detail') }}
                                        </th>
                                        <td>
                                            {!! $contact->detail ?? '-' !!}
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
