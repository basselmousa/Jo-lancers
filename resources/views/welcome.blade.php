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

                <a class="navbar-brand logo_h" href="index-2.html"><img src="img/logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item active"><a class="nav-link" href="#home">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#service">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#project">Projects</a></li>

                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>

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


<section id="home" class="home_banner_area">
    <div class="container box_1620">
        <div class="banner_inner d-flex align-items-center">
            <div class="banner_content">
                <div class="media">
                    <div class="d-flex">
                        <img src="{{ asset("home/image/jolancer.png") }}"  alt="">
                    </div>
                    <div class="media-body">
                        <div class="personal_text">
                            <h6>Hello Everybody, we are</h6>
                            <h3>Jo Lancers </h3>
                            <h4>Freelancing platform to make application deliveries secure and fast </h4>
                            <p>You can find your request fast and easy with experience service providers</p>
                            <ul class="list basic_info">
                                <li><a href="#"><i class="lnr lnr-calendar-full"></i>Starts on 1st March, 2023</a></li>
                                <li><a href="#"><i class="lnr lnr-phone-handset"></i> +962 6 500 5000</a></li>
                                <li><a href="#"><i class="lnr lnr-envelope"></i> <span class="__cf_email__"
                                                                                       data-cfemail="20425553494e455353504c414e60444f4e414c44">support@jolancers.com.jo</span></a>
                                </li>
                                <li><a href="#"><i class="lnr lnr-home"></i> Amman-Jordan</a></li>
                            </ul>
                            {{--                            <ul class="list personal_social">--}}
                            {{--                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>--}}
                            {{--                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
                            {{--                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>--}}
                            {{--                            </ul>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="about" class="welcome_area p_120">
    <div class="container">
        <div class="row welcome_inner">
            <div class="col-lg-6">
                <div class="welcome_text">
                    <h4>About Us</h4>
                    <p>We have expert service providers who perform the work quickly and efficiently, taking into
                        account that the service requester does not know much about the required service. So they don't
                        manipulate service seekers.</p>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="wel_item">
                                <i class="lnr lnr-database"></i>
                                <h4>{{ $totalProviders }}</h4>
                                <p>Total Providers</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="wel_item">
                                <i class="lnr lnr-book"></i>
                                <h4>{{ $totalPosts }}</h4>
                                <p>Total Posts</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="wel_item">
                                <i class="lnr lnr-users"></i>
                                <h4>{{ $totalUsers }}</h4>
                                <p>Total Users</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="tools_expert">
                    <div class="skill_main">
                        @foreach($services as $service)
                            <div class="skill_item">
                                <h4>{{ $service->name }} <span class="counter"> {{ $service->numberOfuse }} </span></h4>
                                <div class="progress_br">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar"
                                             aria-valuenow="{{ $service->numberOfuse }}"
                                             aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="service" class="feature_area p_120">
    <div class="container">
        <div class="main_title">
            <h2>offerings to my clients</h2>
{{--            <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price.--}}
{{--                You may see some for as low as $.17 each.</p>--}}
        </div>
        <div class="feature_inner row">
            @foreach($categories as $category)

                <div class="col-lg-4 col-md-6">
                    <a class="text-black " href="{{ route("category.providers",$category->id) }}" >
                        <div class="feature_item">

                            <i class="flaticon-city"></i>

                            <h4>{{ $category->name }}</h4>
                            <p style="flex-wrap: wrap-reverse;overflow-wrap: anywhere;">{{ $category->desc }}</p>
                        </div>
                    </a>
                </div>
            @endforeach

        </div>
    </div>
</section>


<section id="project" class="home_gallery_area p_120">
    <div class="container">
        <div class="main_title">
            <h2>Our Latest Featured Projects</h2>
            <p>Who are in extremely love with eco friendly system.</p>
        </div>

        <div class="isotope_fillter">
            <ul class="gallery_filter list">
                <li class="active" data-filter="*"><a href="#">All</a></li>
                @foreach($categories as $category)
                    <li data-filter=".{{$category->id}}"><a href="#">{{$category->name}}</a></li>
{{--                    <li data-filter=".manipul"><a href="#">Raster</a></li>--}}
{{--                    <li data-filter=".creative"><a href="#">UI/UX</a></li>--}}
{{--                    <li data-filter=".design"><a href="#">Printing</a></li>--}}
                @endforeach
            </ul>
        </div>

    </div>
    <div class="container">
        @auth("web")
        <div class="gallery_f_inner row imageGallery1">
            @foreach($posts as $post)
                <div class="col-lg-4 col-md-4 col-sm-6 brand {{ $post->category_id }} design print">
                    <div class="h_gallery_item">
                        <div class="g_img_item">
                            <img class="img-fluid" src="{{ asset("storage") ."/".$post->image }}"  width="340px" height="339px" alt="">
{{--                            <a class="light" href="img/gallery/project-1.jpg"><img src="img/gallery/icon.png" alt=""></a>--}}
                        </div>
                        <div class="g_item_text">
                            <h4>{{ $post->title }}</h4>
                            <p>{{ $post->description }}</p>
                            <span> Min Bud - Max Bud  ({{ $post->min_bud }} - {{ $post->max_bud }}) </span>
                        </div>
                    </div>
                </div>
            @endforeach
{{--            <div class="col-lg-4 col-md-4 col-sm-6 brand manipul creative">--}}
{{--                <div class="h_gallery_item">--}}
{{--                    <div class="g_img_item">--}}
{{--                        <img class="img-fluid" src="img/gallery/project-2.jpg" alt="">--}}
{{--                        <a class="light" href="img/gallery/project-2.jpg"><img src="img/gallery/icon.png" alt=""></a>--}}
{{--                    </div>--}}
{{--                    <div class="g_item_text">--}}
{{--                        <h4>2D Vinyl Design</h4>--}}
{{--                        <p>Client Project</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4 col-md-4 col-sm-6 manipul creative design print">--}}
{{--                <div class="h_gallery_item">--}}
{{--                    <div class="g_img_item">--}}
{{--                        <img class="img-fluid" src="img/gallery/project-3.jpg" alt="">--}}
{{--                        <a class="light" href="img/gallery/project-3.jpg"><img src="img/gallery/icon.png" alt=""></a>--}}
{{--                    </div>--}}
{{--                    <div class="g_item_text">--}}
{{--                        <h4>Creative Poster Design</h4>--}}
{{--                        <p>Client Project</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4 col-md-4 col-sm-6 brand creative print">--}}
{{--                <div class="h_gallery_item">--}}
{{--                    <div class="g_img_item">--}}
{{--                        <img class="img-fluid" src="img/gallery/project-4.jpg" alt="">--}}
{{--                        <a class="light" href="img/gallery/project-4.jpg"><img src="img/gallery/icon.png" alt=""></a>--}}
{{--                    </div>--}}
{{--                    <div class="g_item_text">--}}
{{--                        <h4>Embosed Logo Design</h4>--}}
{{--                        <p>Client Project</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4 col-md-4 col-sm-6 brand manipul design">--}}
{{--                <div class="h_gallery_item">--}}
{{--                    <div class="g_img_item">--}}
{{--                        <img class="img-fluid" src="img/gallery/project-5.jpg" alt="">--}}
{{--                        <a class="light" href="img/gallery/project-5.jpg"><img src="img/gallery/icon.png" alt=""></a>--}}
{{--                    </div>--}}
{{--                    <div class="g_item_text">--}}
{{--                        <h4>3D Disposable Bottle</h4>--}}
{{--                        <p>Client Project</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4 col-md-4 col-sm-6 brand creative">--}}
{{--                <div class="h_gallery_item">--}}
{{--                    <div class="g_img_item">--}}
{{--                        <img class="img-fluid" src="img/gallery/project-6.jpg" alt="">--}}
{{--                        <a class="light" href="img/gallery/project-6.jpg"><img src="img/gallery/icon.png" alt=""></a>--}}
{{--                    </div>--}}
{{--                    <div class="g_item_text">--}}
{{--                        <h4>3D Logo Design</h4>--}}
{{--                        <p>Client Project</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
{{--        <div class="more_btn">--}}
{{--            <a class="main_btn" href="#">Load More Items</a>--}}
{{--        </div>--}}
        @else
            <p class="text-center"> Join us to see this feature <a href="{{ route("login") }}">Login</a></p>
        @endauth

    </div>
</section>


{{--<section class="testimonials_area p_120">--}}
{{--    <div class="container">--}}
{{--        <div class="main_title">--}}
{{--            <h2>Testimonials</h2>--}}
{{--            <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price.--}}
{{--                You may see some for as low as $.17 each.</p>--}}
{{--        </div>--}}
{{--        <div class="testi_inner">--}}
{{--            <div class="testi_slider owl-carousel">--}}
{{--                <div class="item">--}}
{{--                    <div class="testi_item">--}}
{{--                        <p>As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If--}}
{{--                            you think about it, you travel across her face</p>--}}
{{--                        <h4>Fanny Spencer</h4>--}}
{{--                        <a href="#"><i class="fa fa-star"></i></a>--}}
{{--                        <a href="#"><i class="fa fa-star"></i></a>--}}
{{--                        <a href="#"><i class="fa fa-star"></i></a>--}}
{{--                        <a href="#"><i class="fa fa-star"></i></a>--}}
{{--                        <a href="#"><i class="fa fa-star-half-o"></i></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="item">--}}
{{--                    <div class="testi_item">--}}
{{--                        <p>As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If--}}
{{--                            you think about it, you travel across her face</p>--}}
{{--                        <h4>Fanny Spencer</h4>--}}
{{--                        <a href="#"><i class="fa fa-star"></i></a>--}}
{{--                        <a href="#"><i class="fa fa-star"></i></a>--}}
{{--                        <a href="#"><i class="fa fa-star"></i></a>--}}
{{--                        <a href="#"><i class="fa fa-star"></i></a>--}}
{{--                        <a href="#"><i class="fa fa-star-half-o"></i></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="item">--}}
{{--                    <div class="testi_item">--}}
{{--                        <p>As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If--}}
{{--                            you think about it, you travel across her face</p>--}}
{{--                        <h4>Fanny Spencer</h4>--}}
{{--                        <a href="#"><i class="fa fa-star"></i></a>--}}
{{--                        <a href="#"><i class="fa fa-star"></i></a>--}}
{{--                        <a href="#"><i class="fa fa-star"></i></a>--}}
{{--                        <a href="#"><i class="fa fa-star"></i></a>--}}
{{--                        <a href="#"><i class="fa fa-star-half-o"></i></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}


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
