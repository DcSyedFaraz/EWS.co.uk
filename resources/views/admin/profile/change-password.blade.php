@extends('layouts.admin')
@section('content')

    <main id="main" class="main">

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="d-flex justify-content-between">
                                <h5 class="card-title">
                                    Change Password
                                </h5>
                            </div>

                            @include('partials.backend.message')

                            <form method="POST" action="{{ route("admin.change.password.update") }}" >
                                @csrf
                                <div class="mb-3">
                                    <label class="required" for="current_password">Current Password</label>
                                    <input class="form-control {{ $errors->has('current_password') ? 'is-invalid' : '' }}" type="password" name="current_password" id="current_password" value="{{ old('current_password', '') }}" >
                                    @if($errors->has('current_password'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('current_password') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label class="required" for="new_password">New Password</label>
                                    <input class="form-control {{ $errors->has('new_password') ? 'is-invalid' : '' }}" type="password" name="new_password" id="new_password" value="{{ old('new_password', '') }}" >
                                    @if($errors->has('new_password'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('new_password') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label class="required" for="new_confirm_password">Confirm Password</label>
                                    <input class="form-control {{ $errors->has('new_confirm_password') ? 'is-invalid' : '' }}" type="password" name="new_confirm_password" id="new_confirm_password" value="{{ old('new_confirm_password', '') }}" >
                                    @if($errors->has('new_confirm_password'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('new_confirm_password') }}
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
