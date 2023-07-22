@extends('layouts.web')

@section('title', 'Order Now')
@section('description', '')
@section('canonical', config('app.app_url') . Request::path())

@section('content')

    <section class="contentSection">

        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="panel">
                        <div class="flat-heading">Order Now</div>
                        <div class="flat-body">
                            <form id="order-form" class="w-100 mb-4" method="POST"
                                action="{{ route('order.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3 class="panel-heading">Person Information</h3>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="name"
                                                class="form-control submit-control @error('name') is-valid @enderror" id=""
                                                value="{{ old('name') }}" placeholder="Full Name" >
                                            @error('name')
                                                <div style="color:rgb(241, 1, 1);">{{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" name="email"
                                                class="form-control submit-control @error('email') is-valid @enderror" id=""
                                                value="{{ old('email') }}" placeholder="Email">
                                            @error('email')
                                                <div style="color:rgb(243, 11, 11);">{{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input id="phone" class="form-control @error('phone') is-valid @enderror"
                                                type="tel" value="{{ old('phone') }}" placeholder="Enter phone number"
                                                oninput="this.value=this.value.replace(/[^0-9\+]/g,'');" />
                                            <input type="hidden" name="phone" id="phone2" />
                                            @error('phone')
                                                <div style="color:rgb(252, 23, 23);">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select class="get-fare form-control mine-control @error('country') is-valid @enderror"
                                            data-value="{{ $data ?? '' ? $data->value : old('country') }}" name="country">
                                                <option selected disabled hidden>Select Country</option>
                                                @foreach ($countries as $country)
                                                    <option {{old('country') == $country->code ? 'selected' : '' }} value="{{ $country->code }}">{{ $country->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('country')
                                                <div style="color:rgb(248, 12, 12);">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <h3 class="panel-heading">Order Information</h3>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select
                                                class="form-control submit-control @error('paper_type') is-valid @enderror"
                                                data-value="{{ $data ?? '' ? $data->value : old('paper_type') }}"
                                                name="paper_type">
                                                <option selected disabled hidden>Select Paper Type</option>
                                                @foreach ($paper_types as $paperType)
                                                    <option value="{{ $paperType->name }}" {{old('paper_type') == $paperType->name ? 'selected' : '' }} >
                                                        {{ $paperType->name ?? '-' }}</option>
                                                @endforeach
                                            </select>
                                            @error('paper_type')
                                                <div style="color:rgb(252, 10, 10);">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select
                                                class="form-control submit-control @error('language') is-valid @enderror"
                                                data-value="{{ $data ?? '' ? $data->value : old('language') }}"
                                                name="language">
                                                <option selected disabled hidden>Select Language</option>
                                                <option value="uk" {{old('language') == 'uk' ? 'selected' : '' }}>English U.K</option>
                                                <option value="us" {{old('language') == 'us' ? 'selected' : '' }}>English U.S</option>
                                                <option value="not" {{old('language') == 'not' ? 'selected' : '' }}>Not a native speak</option>
                                            </select>
                                            @error('language')
                                                <div style="color:rgb(252, 10, 10);">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group clearfix">
                                            <select class="form-control @error('reference') is-valid @enderror"
                                                data-value="{{ $data ?? '' ? $data->value : old('reference') }}"
                                                name="reference" id="reference">
                                                <option value="" selected="selected" disabled="disabled" hidden>Select
                                                    Reference</option>
                                                @for ($i = 1; $i <= 20; $i++)
                                                    <option value="{{ $i }}" {{old('reference') == $i ? 'selected' : '' }}> {{ $i }} </option>
                                                @endfor
                                            </select>

                                            @error('reference')
                                                <div style="color:rgb(241, 4, 4);">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group clearfix">
                                            <select id="subject"
                                                class="form-control @error('subject_area') is-valid @enderror"
                                                data-value="{{ $data ?? '' ? $data->value : old('subject_area') }}"
                                                name="subject_area" data-parsley-group="block0">
                                                <option value="" selected="selected" disabled="disabled" hidden>Select
                                                    Subject Area</option>
                                                @foreach ($subjects as $subject)
                                                    <option value="{{ $subject->name }}" {{old('subject_area') == $subject->name ? 'selected' : '' }}>
                                                        {{ $subject->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('subject_area')
                                                <div style="color:rgb(255, 9, 9);">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group clearfix">
                                            <select class="form-control @error('style') is-valid @enderror" id="ref_style"
                                                data-value="{{ $data ?? '' ? $data->value : old('style') }}"
                                                name="style">
                                                <option value="" selected="selected" disabled="disabled" hidden>Select Paper
                                                    Style</option>
                                                @foreach ($reference_styles as $referenceStyle)
                                                    <option value="{{ $referenceStyle->name }}" {{old('style') == $referenceStyle->name ? 'selected' : '' }}>
                                                        {{ $referenceStyle->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('style')
                                                <div style="color:rgb(245, 14, 14);">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group clearfix">
                                            <select
                                                class="get-fare form-control mine-control @error('academic_level') is-valid @enderror"
                                                id="order_academic_level"
                                                data-value="{{ $data ?? '' ? $data->value : old('academic_level') }}"
                                                name="academic_level">
                                                <option selected disabled hidden>Select Academic Level</option>
                                                @foreach ($academic_levels as $academic_level)
                                                    <option value="{{ $academic_level->id }}" {{old('academic_level') == $academic_level->id ? 'selected' : '' }}>
                                                        {{ $academic_level->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('academic_level')
                                                <div style="color:rgb(248, 12, 12);">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group clearfix">
                                            <select
                                                class="get-fare form-control @error('number_of_pages') is-valid @enderror"
                                                name="number_of_pages"
                                                data-value="{{ $data ?? '' ? $data->value : old('number_of_pages') }}"
                                                id="order_no_of_pages">
                                                <option value="" selected="selected" disabled="disabled" hidden>Select
                                                    Number of Pages
                                                </option>
                                                @for ($p = 1; $p <= 200; $p++)
                                                    <option value="{{ $p }}" {{old('number_of_pages') == $p ? 'selected' : '' }}>
                                                        {{ $p * 250 }} Words - {{ $p }} Pages
                                                    </option>
                                                @endfor
                                            </select>
                                            @error('number_of_pages')
                                                <div style="color:rgb(252, 11, 11);">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select class="get-fare form-control @error('deadline') is-valid @enderror"
                                                id="order_deadline"
                                                data-value="{{ $data ?? '' ? $data->value : old('deadline') }}"
                                                name="deadline">
                                                <option selected disabled hidden>Select Deadline</option>
                                                @foreach ($deadlines as $deadline)
                                                    <option value="{{ $deadline->id }}" {{old('deadline') == $deadline->id ? 'selected' : '' }}>
                                                        {{ $deadline->name . ' / ' .
                                                            \Carbon\Carbon::now()->addDays($deadline->duration_in_days)->format('D, M j') }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('deadline')
                                                <div style="color:rgb(252, 7, 7);">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="paper_topic"
                                                class="form-control submit-control @error('paper_topic') is-valid @enderror" id=""
                                                value="{{ old('paper_topic') }}" placeholder="Enter Paper Topic">
                                            @error('paper_topic')
                                                <div style="color:rgb(241, 1, 1);">{{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group clearfix">
                                            <textarea name="detail" rows="3" placeholder="Type Details here..."
                                                class="text-input detail form-control @error('detail') is-valid @enderror"
                                                maxlength="1000">{{ old('detail', '') }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4 mb-md-0">
                                        <h4 class="panel-heading">
                                            Attach File
                                        </h4>
                                        <h4 class="panel-heading">
                                            <small>(max file attach : 10 | max file size : 25Mb)</small>
                                        </h4>
                                        <div class="custom-file-upload">
                                            <input type="file" name="emailAttachments[]" multiple id="emailAttachments"
                                                class="form-control"
                                                accept=".jpg,.jpeg,.png,.pdf,.doc,.docx,.ppt,.pptx,.odt,.avi,.ogg,.m4a,.mov,.mp3,.mp4,.mpg,.wav,.wmv"
                                                aria-invalid="false" onchange="javascript:updateList()">
                                            @if (session('message'))
                                                <div
                                                    class="flash search text-white px-4 py-2 border-0  relative mb-4 bg-red-500">
                                                    <span class="inline-block align-middle mr-8">
                                                        <b class="capitalize">{!! session('message') !!}</b>
                                                    </span>
                                                </div>
                                            @endif
                                            <p id="fp"
                                                style="font-size: small; font-family: sans-serif; color: #ed832fdb;   font-weight: 600;">
                                            </p>

                                            <div id="fileList"
                                                style="font-size: small; font-family: sans-serif; color: #ed832fdb;  margin-top: -11px; font-weight: 600;">
                                            </div>
                                        </div>
                                        <span class="pt-3" style="font-size: 13px; font-family: inherit; color: #ed832f">press
                                            <b>Ctrl</b> to select multiple files.
                                        </span>
                                    </div>
                                    <div class="col-md-6 mb-4 mb-md-0">
                                        <div class="panel-heading pb-3">
                                            Select Space
                                        </div>
                                        <div class="text-center text-md-left">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="spacing"
                                                        id="spacing1" value="1" checked>
                                                    Single Space
                                                </label>
                                                <label class="mx-4 form-check-label">
                                                    <input type="radio" class=" form-check-input" name="spacing"
                                                        id="spacing2" value="2">
                                                    Double Space
                                                </label>
                                            </div>
                                        </div>
                                        <hr>
                                        <h4 class="panel-heading">
                                            Pricing
                                        </h4>
                                        <h4 class="panel-sub-heading text-center text-md-left">
                                            Total Amount: £ <span id="total-cost"> 0.00 </span>
                                        </h4>
                                    </div>
                                </div>
                                <div class="text-center mt-4">
                                    <button role="button" id="btnSubmit" type="submit"
                                        class="btn-primary case-upper mx-2 mb-2 mb-lg-0 text-white">
                                        Order Submit
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <div class="panel">
                        <div class="flat-heading">Any Questions?</div>
                        <div class="flat-body text-center">
                            <div class="panel-heading mf-4">
                                call now: {{ config('app.app_contact') }}
                            </div>
                            <br>
                            <a href="javascript:void(Tawk_API.toggle())" class="btn-outline case-upper my-2 mb-lg-0">
                                <i class="pr-1 fa fa-comment"></i> Live chat
                            </a>
                            <br>
                            <br>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="flat-heading">Any Questions?</div>
                        <div class="flat-body text-center">
                            <div class="panel-heading mf-4">
                                We accept
                            </div>
                            <a href="javascript:void(0)">
                                <img class="mt-3 mb-2" src="{{ asset('imgs/transactions.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="flat-heading">Any Questions?</div>
                        <div class="flat-body text-center">
                            <a href="javascript:void(0)">
                                <img class="mt-3 mb-2" src="{{ asset('imgs/mb-1.png') }}" alt="">
                            </a>
                            <a href="javascript:void(0)">
                                <img class="mt-3 mb-2" src="{{ asset('imgs/mb-2.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if (session('message'))
            <div class="alert alert-secondary text-center" role="alert">
                {!! session('message') !!}
            </div>
        @endif
        </div>
    </section>
    <script>
        updateList = function() {
            var input = document.getElementById('emailAttachments');

            if (input.files.length > 10) {
                document.getElementById('fileList').innerHTML =
                    '<p style="color:red;">' + 'Files length can not be exceded more than 10' + '</p>';
                document.getElementById("emailAttachments").value = "";

            } else if (input.files.length < 11) {
                var totalSize = 0;
                for (var i = 0; i <= input.files.length - 1; i++) {
                    var fsize = input.files.item(i).size; // THE SIZE OF THE FILE.
                    totalSize = totalSize + fsize;
                }
                if (totalSize > 25000000) {
                    console.log(totalSize);
                    document.getElementById('fileList').innerHTML =
                        '<p style="color:red;">' + 'Files size can not be exceded more than 25mb' + '</p>';
                    document.getElementById("emailAttachments").value = "";
                } else {
                    var output = document.getElementById('fileList');
                    var children = "";
                    for (var i = 0; i < input.files.length; ++i) {
                        children += '<li class="m-0">' + input.files.item(i).name + '</li>';
                    }
                    output.innerHTML = '<ul class="m-0 text-primary-color" style=" list-style-type: none;">' + children + '</ul>';
                }
            }
        }
    </script>
    <style>
        .iti{
            width: 100%;
        }
    </style>
@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            const phoneInputField = document.querySelector("#phone");
            const phoneInput = window.intlTelInput(phoneInputField, {
                preferredCountries: ["gb"],
                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
            });
            $("#order-form").submit(function() {
                $("#btnSubmit").attr("disabled", true);
                $("#btnSubmit").html("Submiting...");
                const phoneNumber = phoneInput.getNumber();
                $('#phone2').val(phoneNumber);
                return true;
            });
        });
        $(".get-fare").change(function(e) {
            e.preventDefault();
            var data = {
                "_token": "{{ csrf_token() }}",
                "deadline_id": $('#order_deadline').val(),
                "academic_level_id": $('#order_academic_level').val(),
            }
            $.ajax({
                method: 'POST',
                beforeSend: function() {
                    // $("#cost-per-page").html("Loading...")
                    $("#total-cost").html("Loading...")
                },
                complete: function() {
                    // $("#loading").removeClass("d-block");
                },
                data: data,
                success: function(res) {
                    // console.log(res);
                    $("#total-cost").html((res.per_page_price * ($("#order_no_of_pages").val() == null ? 1 : $("#order_no_of_pages").val())  ))
                },
                error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
                    console.log(JSON.stringify(jqXHR));
                    console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
                }
            });
        });
    </script>
@endsection
