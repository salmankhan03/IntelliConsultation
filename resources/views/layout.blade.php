<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta content="telephone=no" name="format-detection"/>
    <meta name="HandheldFriendly" content="true"/>
    <link rel="shortcut icon" type="image/png" href="{{asset('images/favicon.png')}}"/>
     <link rel="canonical" href="https://intelliconsultation.com"/>
    <title>Intelli Consultation</title>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-NYGV2P5P1F"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-NYGV2P5P1F');
    </script>

<!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css').'?ver='.base64_encode(\Carbon\Carbon::now()->format("Y-m-d")) }}" rel="stylesheet">
    <link href="{{ asset('css/master.css').'?ver='.base64_encode(\Carbon\Carbon::now()->format("Y-m-d")) }}" rel="stylesheet">
    <link href="{{ asset('libs/slider-pro/slider-pro.css').'?ver='.base64_encode(\Carbon\Carbon::now()->format("Y-m-d")) }}" rel="stylesheet">
    <link href="{{ asset('css/theme.css').'?ver='.base64_encode(\Carbon\Carbon::now()->format("Y-m-d")) }}" rel="stylesheet">
    <link href="{{ asset('css/color.css').'?ver='.base64_encode(\Carbon\Carbon::now()->format("Y-m-d")) }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css').'?ver='.base64_encode(\Carbon\Carbon::now()->format("Y-m-d")) }}" rel="stylesheet">
    <link href="{{ asset('css/forum.css').'?ver='.base64_encode(\Carbon\Carbon::now()->format("Y-m-d")) }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css').'?ver='.base64_encode(\Carbon\Carbon::now()->format("Y-m-d")) }}" rel="stylesheet">

</head>
<body>
<div class="l-theme">

    <div class="search-block-hidden">

        <div class="close-search"><i class="fas fa-times"></i></div>
    </div>
    <!-- Header -->
    <header class="header-top-absolute">
        <nav class="navbar navbar-expand-lg navbar-dark justify-content-between">
            <a class="navbar-brand  d-flex" href="{{ url('/') }}">
                <img src="{{asset('images/logo.png')}}" alt="Logo">
            </a>
            <div class="d-flex ">
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarNavAltMarkup, #navbarNavAltMarkup1" aria-controls="navbarNavAltMarkup"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- <div class="collapse navbar-collapse" id="navbarNavAltMarkup"> -->
                <ul class="nav">
                    <li class="close-nav"><i class="fas fa-times"></i></li>
                    <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                        <a class="nav-link " href="{!!url('/')!!}">Home<span class="sr-only">(current)</span></a>
                    </li>
{{--                    <li class="nav-item {{ Request::segment(1) === 'webinar_registration' ? 'active' : null }}">--}}
{{--                        <a class="nav-link " href="{!!url('/webinar_registration')!!}">Webinar Registration</a>--}}
{{--                    </li>--}}
                    <li class="nav-item {{ Request::segment(1) === 'about' ? 'active' : null }}">
                        <a class="nav-link " href="{!!url('/about')!!}">About Us</a>
                    </li>
                    <li class="nav-item {{ Request::segment(1) === 'canada' ? 'active' : null }}">
                        <a class="nav-link" href="{!!url('/canada')!!}">About Canada</a>
                    </li>
                    <li class="nav-item dropdown {{(Request::segment(1) === 'Services-express_entry'
                                                        ? 'active' : Request::segment(1) === 'Services-LMIA') ? 'active' : null }}
                    {{(Request::segment(1) === 'Services-family_sponsor'
                        ? 'active' : Request::segment(1) === 'Services-startup_visa') ? 'active' : null }}
                    {{(Request::segment(1) === 'Services-PNP'
                        ? 'active' : Request::segment(1) === 'Services-caregiver') ? 'active' : null }}
                    {{(Request::segment(1) === 'Services-workpermit'
                        ? 'active' : Request::segment(1) === 'Services-studypermit') ? 'active' : null }}
                    {{(Request::segment(1) === 'Services-visitorvisa'
                        ? 'active' : Request::segment(1) === 'Services-prcard') ? 'active' : null }}
                    {{ Request::segment(1) === 'Services-citizenship' ? 'active' : null }}">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">Our Services</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li class="dropdown-submenu">
                                <a class="dropdown-item" href="{!!url('/Services-express_entry')!!}">Express Entry</a>
                            </li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item" href="{!!url('/Services-LMIA')!!}">LMIA</a>
                            </li>

                            <li class="dropdown-submenu">
                                <a class="dropdown-item" href="{!!url('/Services-family_sponsor')!!}">Family
                                    Sponsorship</a>
                            </li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item" href="{!!url('/Services-startup_visa')!!}">Start Up Visa</a>
                            </li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item" href="{!!url('/Services-PNP')!!}">PNP</a>
                            </li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item" href="{!!url('/Services-caregiver')!!}">Caregiver</a>
                            </li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item" href="{!!url('/Services-workpermit')!!}">Work Permit</a>
                            </li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item" href="{!!url('/Services-studypermit')!!}">Study Permit</a>
                            </li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item" href="{!!url('/Services-visitorvisa')!!}">Visitor Visa</a>
                            </li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item" href="{!!url('/Services-prcard')!!}">PR Card</a>
                            </li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item" href="{!!url('/Services-citizenship')!!}">Citizenship
                                    Application</a>
                            </li>
                        </ul>
                    </li>
                    {{--                        <li class="nav-item {{ Request::segment(1) === 'News' ? 'active' : null }}">--}}
                    {{--                            <a class="nav-link" href="{!!url('/News')!!}">News</a>--}}
                    {{--                        </li>--}}
                    <li class="nav-item dropdown {{ Request::segment(1) === 'News' ? 'active' : null }}">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">News</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1">
                            <li class="dropdown-submenu">
                                <a class="dropdown-item" href="{!!url('/News')!!}">All News</a>
                            </li>
                            <?php
                            $cats = getCategory();
                            ?>
                            @foreach ($cats as $c)

                                <li class="dropdown-submenu">
                                    <a class="dropdown-item"
                                       href="{!!url('/News-category/'.$c->catID)!!}">{!! $c->catTitle !!}</a>
                                </li>
                            @endforeach

                        </ul>
                    </li>
                    <li class="nav-item {{ Request::segment(1) === 'contactus' ? 'active' : null }}">
                        <a class="nav-link" href="{!!url('/contactus')!!}">Contact Us</a>
                    </li>
                    <li class="nav-item ">
                        <div class="switch">
                            <input id="language-toggle" class="check-toggle check-toggle-round-flat" type="checkbox">
                            <label for="language-toggle"></label>
                            <span class="on">A</span>
                            <span class="off">文</span>
                        </div>
                    </li>

                </ul>
                <!-- </div> -->
            </div>
        </nav>
    </header>

    <main class="">
        @yield('content')
    </main>

    <!--Footer -->

    @if (basename($_SERVER['PHP_SELF']) != "life_in_canada.php" && basename($_SERVER['PHP_SELF']) != "thank_you.php")

        <section class="section-13 logo-back">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="text-block-section d-flex align-items-center">
                            <h5>Book a free consultation with us. We will help make the process quicker, more efficient,
                                and
                                stress-free for you.
                            </h5>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="text-block-section d-flex align-items-center">
                            <a href="{!!url('/contactus')!!}" class="contact-link mt-20">Free Consultation</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h5 class="footer-head">Call us: +1 (778) 297-7108</h5>
                        <p class="footer-company">Intelli Management Consulting Corp.</p>
                        <p class="footer-address">200-3071 No 5 Road, Richmond, BC, V6X 2T4 Canada
                        </p>
                    </div>
                    <div class="col-md-5">
                            <ul class="footer-nav">
                                <li>
                                    <a href="{!!url('/Privacy-policy')!!}" class="">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="{!!url('/Terms-and-conditions')!!}" class="">Terms and Condition</a>
                                </li>
                            </ul>
                        </nav>
                        <h6 class="footer-alegada">Intelli Management Consulting Corp. © <?= date("Y"); ?> - All rights
                            reserved.</h6>
                    </div>
                </div>
            </div>
        </footer>
</div>

@else
</div>

<footer>
    <div class="container">
        <h6 class="footer-alegada text-right">Intelli Management Consulting Corp. © <?= date("Y"); ?> - All rights
            reserved.</h6>
    </div>
</footer>


@endif

</div>
<!-- Scripts -->
<script src="{{ asset('js/jquery.min.js').'?ver='.base64_encode(\Carbon\Carbon::now()->format("Y-m-d")) }}"></script>
<script src="{{ asset('js/popper.min.js').'?ver='.base64_encode(\Carbon\Carbon::now()->format("Y-m-d")) }}"></script>
<script src="{{ asset('js/bootstrap.min.js').'?ver='.base64_encode(\Carbon\Carbon::now()->format("Y-m-d")) }}" defer></script>
<script src="{{ asset('js/custom.js').'?ver='.base64_encode(\Carbon\Carbon::now()->format("Y-m-d")) }}" defer></script>
<script src="{{ asset('libs/slider-pro/jquery.sliderPro.js').'?ver='.base64_encode(\Carbon\Carbon::now()->format("Y-m-d")) }}" defer></script>
<script src="{{ asset('libs/owl-carousel/owl.carousel.min.js').'?ver='.base64_encode(\Carbon\Carbon::now()->format("Y-m-d")) }}"></script>
<script src="{{ asset('libs/bxslider/jquery.bxslider.min.js').'?ver='.base64_encode(\Carbon\Carbon::now()->format("Y-m-d")) }}"></script>
<script src="{{ asset('libs/magnific-popup/jquery.magnific-popup.min.js').'?ver='.base64_encode(\Carbon\Carbon::now()->format("Y-m-d")) }}"></script>
<script src="{{ asset('js/isotope.pkgd.js').'?ver='.base64_encode(\Carbon\Carbon::now()->format("Y-m-d")) }}"></script>
<script src="{{ asset('js/imagesloaded.pkgd.min.js').'?ver='.base64_encode(\Carbon\Carbon::now()->format("Y-m-d")) }}"></script>
<script src="{{ asset('libs/scrollreveal/scrollreveal.min.js').'?ver='.base64_encode(\Carbon\Carbon::now()->format("Y-m-d")) }}"></script>
<script src="{{ asset('libs/animate/wow.min.js').'?ver='.base64_encode(\Carbon\Carbon::now()->format("Y-m-d")) }}"></script>
<script src="{{ asset('libs/animate/jquery.shuffleLetters.js').'?ver='.base64_encode(\Carbon\Carbon::now()->format("Y-m-d")) }}"></script>
<script src="{{ asset('libs/animate/jquery.scrollme.min.js').'?ver='.base64_encode(\Carbon\Carbon::now()->format("Y-m-d")) }}"></script>
<script>
    // document.addEventListener('DOMContentLoaded', function() {
    //   const toggleBtn = document.getElementById('language-toggle');

    //   toggleBtn.addEventListener('change', function() {
    //     const newUrl = toggleBtn.checked ? '/chinese-page' : '/english-page';
    //     // Update the URL based on the toggle state
    //     window.history.pushState({}, '', newUrl);
    //   });
    // });

    document.addEventListener('DOMContentLoaded', function() {
      const toggleBtn = document.getElementById('language-toggle');
        // console.log('button');
      toggleBtn.addEventListener('change', function() {
        const newUrl = toggleBtn.checked
          ? updateQueryStringParameter(window.location.href, 'language', 'english')
          : updateQueryStringParameter(window.location.href, 'language', 'chinese');
        // Redirect to the updated URL
        console.log(newUrl);
        window.location.href = newUrl;


        
      });

      // Function to update query string parameters in the URL
      function updateQueryStringParameter(uri, key, value) {
        const re = new RegExp("([?&])" + key + "=.*?(&|$)", "i");
        const separator = uri.indexOf('?') !== -1 ? "&" : "?";
        if (uri.match(re)) {
          return uri.replace(re, '$1' + key + "=" + value + '$2');
        } else {
          return uri + separator + key + "=" + value;
        }
      }
    });
  </script>

<script type="text/javascript">
    $(document).ready(function () {
        // get the #section from the URL
        var hash = window.location.hash;
        // console.log(hash);
        $(hash).click();
    });

    $('.dropdown-menu a.dropdown-toggle').on('click', function (e) {
        if (!$(this).next().hasClass('show')) {
            $(this).parents('.dropdown-menu').first().find('.show').removeClass('show');
        }
        var $subMenu = $(this).next('.dropdown-menu');
        $subMenu.toggleClass('show');


        $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function (e) {
            $('.dropdown-submenu .show').removeClass('show');
        });


        return false;
    });


    $(".register-button").on('click', function () {
        $('html, body').animate({
            scrollTop: $("#webinar-form-section").offset().top
        }, 2000);
    })

    $("#webinar-register-form,#webinar-register-form-mobile").on("submit", function (e) {
        $(".alert-success,.alert-danger").addClass("d-none");
        e.preventDefault();
        var form_data = $(this).serialize();
        $.ajax({
            type: "POST",
            url: "inc/functions.php",
            data: form_data,
            success: function (data) {
                if (data == "success") {
                    $(".registration-form-section,.alert-danger").addClass("d-none");
                    $(".alert-success").removeClass("d-none");
                } else if (data == "error") {
                    $(".alert-success").addClass("d-none");
                    $(".alert-danger").removeClass("d-none");
                }
            }
        });
    })

</script>
</body>
</html>
