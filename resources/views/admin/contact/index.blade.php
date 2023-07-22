@extends('layouts.admin')
@section('content')

    <main id="main" class="main">
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h5 class="card-title">{{ trans('cruds.contact.title') }}</h5>
                            </div>
                            <!-- Table with stripped rows -->
                            <table class="table datatable-contact">
                                <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Subject</th>
                                        <th scope="col">Date/Time</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
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
            $('.datatable-contact').DataTable({
                "processing": true,
                "serverSide": true,
                "order": [
                    [1, 'desc']
                ],
                "pageLength": 10,
                "ajax": {
                    "url": '{{route('admin.contacts.get')}}',
                    // "type": "POST",
                    "headers": {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                },
                "columns": [
                    {
                        "data": "name"
                    },
                    {
                        "data": "email"
                    },
                    {
                        "data": "phone"
                    },
                    {
                        "data": "subject"
                    },
                    {
                        "data": "created_at"
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
