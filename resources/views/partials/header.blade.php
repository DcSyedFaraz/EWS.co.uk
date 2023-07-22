<header>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 my-2 py-auto">
                <div class="text-center text-md-left">
                    <a href="https://www.facebook.com/Essay-Writing-Services-In-UK-102822122318853?_rdc=2&_rdr" class="btn-primary case-upper">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a href="https://www.instagram.com/essaywritingservicesuk" class="btn-primary case-upper">
                        <i class="fa fa-instagram"></i>
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=441158881209" class="btn-primary case-upper">
                        <i class="fa fa-whatsapp"></i>
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-6 my-2 py-auto d-none d-md-block">
                <div class="text-center text-md-right">
                    <a href="#" class="btn-primary case-upper">
                        <i class="pr-1 fa fa-clock-o"></i> 24/7
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-2 text-center">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('imgs/logo.png') }}" alt="Eassy Writing Services UK" />
                    </a>
                </div>
                <div class="col-12 col-md-10 text-center my-auto">
                    <div class="d-flex flex-column flex-sm-row justify-content-center align-items-center">
                        <div class="d-flex flex-column flex-xl-row">
                            <a href="tel:{{ config('app.app_contact') }}">
                                <span class="d-inline-block flag-contact mx-2 text-dark">
                                    <img src="{{ asset('imgs/uk-flag.png') }}" alt="" />
                                    {{ config('app.app_contact') }}
                                </span>
                            </a>
                            <a href="mailto:{{ config('app.app_email') }}">
                                <span class="flag-contact mx-2 mb-2 mb-sm-0 text-dark">
                                    <img src="{{ asset('imgs/uk-mail.png') }}" alt="" />
                                    {{ config('app.app_email') }}
                                </span>
                            </a>
                        </div>
                        <div class="d-flex flex-column flex-lg-row">
                            <a href="javascript:void(Tawk_API.toggle())"
                                class="nav-link-animated btn-outline case-upper mx-2 mb-2 mb-lg-0">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <i class="pr-1 fa fa-comment"></i> Live chat
                            </a>
                            <a href="{{ route('order') }}"
                                class="nav-link-animated btn-outline case-upper mx-2 mb-2 mb-lg-0">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <i class="pr-1 fa fa-pencil"></i> Order Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
