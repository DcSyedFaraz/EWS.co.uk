<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <!-- meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    {{-- Favicon --}}
    <link rel="shortcut icon" href="./favicon.ico">
    <link rel="icon" type="image/png" sizes="72x72" href="./icons/android-chrome-72x72.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./icons/favicon-16x16.png">
    <link rel="apple-touch-icon" sizes="72x72" href="./icons/apple-touch-icon.png">
    <link rel="mask-icon" href="./icons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link rel="manifest" href="./site.webmanifest">
    
    <meta name='robots' content='index, follow' />

    <meta name="msapplication-config" content="./browserconfig.xml">

    {{-- SEO --}}
    <meta name="description" content="@yield('description')" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:description" content="@yield('description')" />
    <meta property="og:url" content="@yield('canonical')" />
    <meta property="og:site_name" content="Essay Writing Service" />
    <meta property="article:modified_time" content="" />
    <meta name="twitter:card" content="summary_large_image" />
    <link rel="canonical" href="@yield('canonical')" />
    <title>@yield('title')</title>

    <meta name="csrf-token" content="{{ csrf_token() }}" />

    {{-- css --}}
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet"
        id="bootstrap-css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    {{-- intl Tel Input --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    {{-- owl slider css --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom-owl.css') }}">

</head>

<body>

    @include('partials.header')

    @include('partials.navbar')

    @yield('content')

    @include('partials.footer')

    {{ TawkTo::widgetCode("https://tawk.to/chat/61fa9916b9e4e21181bd1fda/1fqtec1ci") }} 
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.bundle.min.js"
        integrity="sha384-3ziFidFTgxJXHMDttyPJKDuTlmxJlwbSkojudK/CkRqKDOmeSbN6KLrGdrBQnT2n" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    {{-- testimonial owl slider --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
    
    <script>
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel({
                mouseDrag: false,
                touchDrag: false,
                loop: true,
                margin: 2,
                nav: true,
                autoplay: false,
                responsive: {
                    0: {
                        items: 1,
                    },
                    600: {
                        items: 1,
                    },
                    1000: {
                        items: 3,
                    },
                },
            });

            $(".owl-prev").click(function() {
                $active = $(".owl-item .item.show");
                $(".owl-item .item.show").removeClass("show");
                $(".owl-item .item").removeClass("next");
                $(".owl-item .item").removeClass("prev");
                $active.addClass("next");
                if ($active.is(".first")) {
                    $(".owl-item .last").addClass("show");
                    $(".first").addClass("next");
                    $(".owl-item .last")
                        .parent()
                        .prev()
                        .children(".item")
                        .addClass("prev");
                } else {
                    $active.parent().prev().children(".item").addClass("show");
                    if ($active.parent().prev().children(".item").is(".first")) {
                        $(".owl-item .last").addClass("prev");
                    } else {
                        $(".owl-item .show")
                            .parent()
                            .prev()
                            .children(".item")
                            .addClass("prev");
                    }
                }
            });

            $(".owl-next").click(function() {
                $active = $(".owl-item .item.show");
                $(".owl-item .item.show").removeClass("show");
                $(".owl-item .item").removeClass("next");
                $(".owl-item .item").removeClass("prev");
                $active.addClass("prev");
                if ($active.is(".last")) {
                    $(".owl-item .first").addClass("show");
                    $(".owl-item .first")
                        .parent()
                        .next()
                        .children(".item")
                        .addClass("prev");
                } else {
                    $active.parent().next().children(".item").addClass("show");
                    if ($active.parent().next().children(".item").is(".last")) {
                        $(".owl-item .first").addClass("next");
                    } else {
                        $(".owl-item .show")
                            .parent()
                            .next()
                            .children(".item")
                            .addClass("next");
                    }
                }
            });
        });
    </script>
    @yield('scripts')
</body>

</html>
