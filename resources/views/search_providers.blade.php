<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <title>JoLancers</title>

    <link rel="stylesheet" href="{{asset("home/css/bootstrap.css")}}">
    <link rel="stylesheet" href="{{asset("home/vendors/linericon/style.css")}}">
    <link rel="stylesheet" href="{{asset("home/css/font-awesome.min.css")}}">
    <link rel="stylesheet" href="{{asset("home/vendors/owl-carousel/owl.carousel.min.css")}}">
    <link rel="stylesheet" href="{{asset("home/vendors/lightbox/simpleLightbox.css")}}">
    <link rel="stylesheet" href="{{asset("home/vendors/nice-select/css/nice-select.css")}}">
    <link rel="stylesheet" href="{{asset("home/vendors/animate-css/animate.css")}}">
    <link rel="stylesheet" href="{{asset("home/vendors/popup/magnific-popup.css")}}">
    <link rel="stylesheet" href="{{asset("home/vendors/flaticon/flaticon.css")}}">

    <link rel="stylesheet" href="{{asset("home/css/style.css")}}">
    <link rel="stylesheet" href="{{asset("home/css/responsive.css")}}">
    <style>
        a{
            color: black;
        }
    </style>
    <script nonce="f996ba89-8cde-491f-bf86-8ee9716b409f">(function (w, d) {
            !function (a, b, c, d) {
                a[c] = a[c] || {};
                a[c].executed = [];
                a.zaraz = {deferred: [], listeners: []};
                a.zaraz.q = [];
                a.zaraz._f = function (e) {
                    return function () {
                        var f = Array.prototype.slice.call(arguments);
                        a.zaraz.q.push({m: e, a: f})
                    }
                };
                for (const g of ["track", "set", "debug"]) a.zaraz[g] = a.zaraz._f(g);
                a.zaraz.init = () => {
                    var h = b.getElementsByTagName(d)[0], i = b.createElement(d),
                        j = b.getElementsByTagName("title")[0];
                    j && (a[c].t = b.getElementsByTagName("title")[0].text);
                    a[c].x = Math.random();
                    a[c].w = a.screen.width;
                    a[c].h = a.screen.height;
                    a[c].j = a.innerHeight;
                    a[c].e = a.innerWidth;
                    a[c].l = a.location.href;
                    a[c].r = b.referrer;
                    a[c].k = a.screen.colorDepth;
                    a[c].n = b.characterSet;
                    a[c].o = (new Date).getTimezoneOffset();
                    if (a.dataLayer) for (const n of Object.entries(Object.entries(dataLayer).reduce(((o, p) => ({...o[1], ...p[1]})), {}))) zaraz.set(n[0], n[1], {scope: "page"});
                    a[c].q = [];
                    for (; a.zaraz.q.length;) {
                        const q = a.zaraz.q.shift();
                        a[c].q.push(q)
                    }
                    i.defer = !0;
                    for (const r of [localStorage, sessionStorage]) Object.keys(r || {}).filter((t => t.startsWith("_zaraz_"))).forEach((s => {
                        try {
                            a[c]["z_" + s.slice(7)] = JSON.parse(r.getItem(s))
                        } catch {
                            a[c]["z_" + s.slice(7)] = r.getItem(s)
                        }
                    }));
                    i.referrerPolicy = "origin";
                    i.src = "../../cdn-cgi/zaraz/sd0d9.js?z=" + btoa(encodeURIComponent(JSON.stringify(a[c])));
                    h.parentNode.insertBefore(i, h)
                };
                ["complete", "interactive"].includes(b.readyState) ? zaraz.init() : a.addEventListener("DOMContentLoaded", zaraz.init)
            }(w, d, "zarazData", "script");
        })(window, document);</script>
</head>
<body class="antialiased">
<header class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container box_1620">

{{--                <a class="navbar-brand logo_h" href="index-2.html"><img src="img/logo.png" alt=""></a>--}}
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item active"><a class="nav-link" href="{{route("welcome")}}#home">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#service">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                        <li class="nav-item active"><a class="nav-link" href="#" data-toggle="modal"
                                                       data-target="#exampleModal">Search</a></li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false">Login</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="{{ route("login") }}">User</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route("provider.auth.login") }}">Service</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route("admin.auth.login") }}">Admin</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Find A Provider</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="whole-wrap">
                    <div class="container">

                        <div class="section-top-border">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <form method="post" id="search" action="{{ route('search') }}">
                                        @csrf
                                        <label for="">Skill</label>
                                        <div class="form-select mb-10" id="default-select">

                                            <select name="skill">
                                                @foreach($skills as $skill)
                                                    <option value="{{ $skill->id }}">{{ $skill->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <br>
                                        <div class="form-select mb-10" id="default-select">

                                            <select name="operator">

                                                <option value="=">=</option>
                                                <option value=">"> > </option>
                                                <option value="<"> < </option>
                                                <option value=">="> >= </option>
                                                <option value="<="> <= </option>
                                                <option value="<>"> != </option>

                                            </select>
                                        </div>
                                        <br>

                                        <div class="mt-10">
                                            <input type="text" name="experience_years" placeholder="Experience Years"
                                                   onfocus="this.placeholder = ''"
                                                   onblur="this.placeholder = 'Secondary color'" required=""
                                                   class="single-input-secondary">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="event.preventDefault(); document.getElementById('search').submit(); ">Search</button>
            </div>
        </div>
    </div>
</div>


<section class="banner_area">
    <div class="box_1620">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Services</h2>
                    <div class="page_link">
                        <a href="{{route("welcome")}}">Home</a>
                        <a href="#">Our Providers</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="service" class="feature_area p_120">
    <div class="container">
        <div class="main_title">
            <h2> Providers</h2>
            {{--            <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price.--}}
            {{--                You may see some for as low as $.17 each.</p>--}}
        </div>
        <div class="feature_inner row">
            @foreach($providers as $category)
                <div class="h_gallery_item">
                    <div class="g_img_item">
                        <img class="img-fluid" src="{{ asset("storage/".$category->provider->image) }}" width="340px" height="339px" alt="">
                        <a class="light" href="{{ asset("storage/".$category->provider->image) }}" ><img src="{{ asset("storage/".$category->provider->image) }}" alt=""></a>
                    </div>
                    <div class="g_item_text">
                        <h4>{{ $category->provider->name }}</h4>
                        <p>{{ $category->provider->skill_description }}</p>
                        <p>{{ $category->provider->self_description }}</p>
                        <p>{{ $category->provider->price_for_hour .' '. optional($category->provider->currency)->sign }} /hr</p>

                        @foreach($category->provider->skill as $skill)
                            <a class="genric-btn primary-border circle" style="cursor: default">{{ $skill->skill->name }}</a>
                        @endforeach
                        <br/>
                        <br/>
                        <a href="{{ route("provider-profile",$category->provider->id) }}"
                            class="genric-btn info-border circle">
                             Profile
                         </a>
                        <br/>
                        <br/>

                        @auth("web")
                            <a href="mailto:{{$category->provider->email}}" class="genric-btn info-border circle">Info</a>
                        @else
                            <p>Login to contact this provider</p>
                        @endauth


                    </div>
                </div>

{{--                <div class="col-lg-4 col-md-6">--}}
{{--                    <a class="text-black " href="{{ route("category.providers",$category->id) }}" >--}}
{{--                        <div class="feature_item">--}}

{{--                            <i class="flaticon-city"></i>--}}

{{--                            <div class="row">--}}
{{--                                <div class="col-md-8">--}}
{{--                                    <h4>{{ $category->full_name }}</h4>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-4">--}}
{{--                                    {{ $category->price_for_hour }}--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <p style="flex-wrap: wrap-reverse;overflow-wrap: anywhere;">{{ $category->desc }}</p>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
            @endforeach

        </div>
    </div>
</section>


<footer id="contact" class="footer_area p_120">
    <div class="container">
        <div class="row footer_inner">
            <div class="col-lg-5 col-sm-6">
                <aside class="f_widget ab_widget">
                    <div class="f_title">
                        <h3>About Me</h3>
                    </div>
                    <p>Do you want to be even more successful? Learn to love learning and growth. The more effort you
                        put into improving your skills,</p>

                </aside>
            </div>
            <div class="col-lg-5 col-sm-6">
                <aside class="f_widget news_widget">
                    <div class="f_title">
                        <h3>Contact Me</h3>
                    </div>
                    <p>If you have any problems, do not hesitate to contact me</p>

                    <div id="mc_embed_signup">
                        <a  style="cursor: pointer;color: #007bff" onclick="window.open('mailto:admin@jolancers.com')">admin@jolancers.com</a>

                    </div>
                </aside>
            </div>

        </div>
    </div>
</footer>


<script src="{{asset("home/js/jquery-3.3.1.min.js")}}"></script>
<script src="{{asset("home/js/popper.js")}}"></script>
<script src="{{asset("home/js/bootstrap.min.js")}}"></script>
<script src="{{asset("home/js/stellar.js")}}"></script>
<script src="{{asset("home/vendors/lightbox/simpleLightbox.min.js")}}"></script>
<script src="{{asset("home/vendors/nice-select/js/jquery.nice-select.min.js")}}"></script>
<script src="{{asset("home/vendors/isotope/imagesloaded.pkgd.min.js")}}"></script>
<script src="{{asset("home/vendors/isotope/isotope.pkgd.min.js")}}"></script>
<script src="{{asset("home/vendors/owl-carousel/owl.carousel.min.js")}}"></script>
<script src="{{asset("home/vendors/popup/jquery.magnific-popup.min.js")}}"></script>
<script src="{{asset("home/js/jquery.ajaxchimp.min.js")}}"></script>
<script src="{{asset("home/vendors/counter-up/jquery.waypoints.min.js")}}"></script>
<script src="{{asset("home/vendors/counter-up/jquery.counterup.min.js")}}"></script>
<script src="{{asset("home/js/mail-script.js")}}"></script>
<script src="{{asset("home/js/theme.js")}}"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816"
        integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw=="
        data-cf-beacon='{"rayId":"7d01e24a6a238ff2","version":"2023.4.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}'
        crossorigin="anonymous"></script>

</body>
</html>
