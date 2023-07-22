@extends('layouts.web')


@section('title', 'Contact Us')
@section('description', '')
@section('canonical', config('app.app_url') . Request::path() )

@section('content')

    <section class="contentSection">
        <div class="container">
            <div class="row">
                <div class="offset-md-2 col-md-8">
                    <div class="panel">
                        <div class="flat-heading">Contact Us</div>
                        <div class="flat-body">
                            <form id="contact-form" class="w-100 mb-4" >
                                @csrf
                                <div id="error-bag"></div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3 class="panel-heading">Person Information</h3>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="name"
                                                class="form-control submit-control @error('name') is-valid @enderror" id=""
                                                value="{{ old('name') }}" placeholder="Full Name" pattern="^[A-Za-z -]+$"/>
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
                                            <select class="get-fare form-control mine-control @error('country') is-valid @enderror" data-value="{{ $data ?? '' ? $data->value : old('country') }}" name="country">
                                                <option selected disabled hidden>Select Country</option>
                                                @foreach ($countries as $country)
                                                    <option value="{{ $country->code }}">{{ $country->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('country')
                                                <div style="color:rgb(248, 12, 12);">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="subject" class="form-control submit-control @error('subject') is-valid @enderror" value="{{ old('subject') }}" placeholder="Subject">
                                            @error('subject')
                                                <div style="color:rgb(241, 1, 1);">{{ $message }}</div>
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
                                    <div class="col-md-12 mb-4 mb-md-0 pt-2 pt-md-4 text-center ">
                                        <button role="button" id="btnSubmit" type="submit" class="btn-primary case-upper mx-2 mb-2 mb-lg-0 text-white">
                                            Submit
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        .iti{
            width: 100%;
        }
    </style>
@endsection

@section('scripts')
    <script type="text/javascript">
        const phoneInputField = document.querySelector("#phone");
        const phoneInput = window.intlTelInput(phoneInputField, {
            preferredCountries: ["gb"],
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
        });
        $('#contact-form').on('submit',function(e){
            e.preventDefault();

            const phoneNumber = phoneInput.getNumber();
            $('#phone2').val(phoneNumber);

            $.ajax({
                url: "{{route('contact.store')}}",
                type:"POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: $('#contact-form').serialize(),
                beforeSend: function() {
                    $('#contact-form').find(':submit').html('Submiting...');
                    $('#contact-form').find(':submit').attr("disabled", true);
                },
                complete: function(){
                    $('#contact-form').find(':submit').html('Submit');
                    $('#contact-form').find(':submit').attr("disabled", false);
                },
                success: function(res){
                    // console.log(res)
                    $('#error-bag').empty();
                    let error = '<div class="alert alert-success alert-dismissible fade show">';
                        error += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
                        error += '<strong>Success</strong> Thank you for contact us.';
                        error += '</div>';
                    $('#error-bag').append(error);

                    $(':input','form')
                        .not(':button, :submit, :reset, :hidden')
                        .val('')
                        .prop('checked', false)
                        .prop('selected', false);
                },
                error: function(res) {
                    var errors = res.responseJSON.errors;

                    $('#error-bag').empty();
                    let error = '<div class="alert alert-danger alert-dismissible fade show">';
                    error += '<button type="button" class="close" data-dismiss="alert">&times;</button>';

                    $.map( errors, function( val, key ) {
                        error += '<div>';
                        error += '<strong style="text-transform: capitalize;">'+key+':</strong> '+ val;
                        error += '</div>';
                    });
                    $('#error-bag').append(error);
                },
            });
        });

    </script>
@endsection
