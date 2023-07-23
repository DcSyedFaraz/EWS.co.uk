@extends('layouts.web')

@section('title', 'Password Reset')
@section('description', '')
@section('canonical', config('app.url') . Request::path())


@section('content')
<link rel="stylesheet" href="{{ asset('dist/css/app.css') }}">
<div class="bg-primary">

    <div class="container mx-auto lg:px-4 py-6 h-[32rem]">
        <div class="flex flex-col space-y-4 my-2 md:my-0 lg:flex-row lg:mx-4">

            <div class="panel w-[70%] lg:w-[35%] xl:w-[30%] mx-auto ">
               <div class="my-auto mt-32">
                    @if (session('status'))
                        <div class="bg-green-500 text-white padding-12 text-center my-4" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <form action="{{ route('password.email') }}" method="POST" class="bg-white border-4 border-[#6ec1e4] mx-auto shadow-md rounded-lg px-4 pt-2 pb-6 flex flex-col md:ml-auto w-full space-y-2 my-auto ">
                    @csrf
                    <div class="mb-2">
                        <input id="email" type="email"
                            class="form-input @error('email') error-field @enderror" required
                            autocomplete="email" autofocus placeholder="{{ trans('global.login_email') }}" name="email"
                            value="{{ old('email', null) }}">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong class="text-red-400">{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <button type="submit" class="btn-primary btn btn-block btn-flat">
                        {{ trans('Send Password Reset Link') }}
                    </button>


                </form>
               </div>

            </div>
        </div>
    </div>
</div>
@endsection
