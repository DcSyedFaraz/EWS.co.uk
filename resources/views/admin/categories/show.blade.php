@extends('layouts.admin')
@section('content')

    <main id="main" class="main">

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            @include('partials.backend.addAndBackBtns', [
                                "page_name" => trans('cruds.category.title_singular'),
                                'back_link' => route('admin.categories.index')
                            ])

                            <table class="table table-bordered table-striped">
                                <tbody>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.category.fields.name') }}
                                        </th>
                                        <td>
                                            {{ $category->name ?? '-' }}
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
