@extends('layouts.admin')
@section('content')

    <main id="main" class="main">

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            @include('partials.backend.addAndBackBtns', [
                                "page_name" => trans('cruds.tag.title_singular'),
                                'back_link' => route('admin.tags.index')
                            ])

                            <form method="POST" action="{{ route("admin.tags.store") }}" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label class="required" for="name">{{ trans('cruds.tag.fields.name') }}</label>
                                    <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                                    @if($errors->has('name'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('name') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <button class="btn btn-danger" type="submit">
                                        {{ trans('global.save') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main><!-- End #main -->
@endsection
