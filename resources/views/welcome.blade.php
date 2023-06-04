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
{{--<div--}}
{{--    class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">--}}
{{--    @if (Route::has('login'))--}}
{{--        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">--}}
{{--            @auth--}}
{{--                <a href="{{ url('/home') }}"--}}
{{--                   class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>--}}
{{--            @else--}}
{{--                <a href="{{ route('login') }}"--}}
{{--                   class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log--}}
{{--                    in</a>--}}

{{--                @if (Route::has('register'))--}}
{{--                    <a href="{{ route('register') }}"--}}
{{--                       class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>--}}
{{--                @endif--}}
{{--            @endauth--}}
{{--        </div>--}}
{{--    @endif--}}

{{--    <div class="max-w-7xl mx-auto p-6 lg:p-8">--}}
{{--        <div class="flex justify-center">--}}
{{--            <svg viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg"--}}
{{--                 class="h-16 w-auto bg-gray-100 dark:bg-gray-900">--}}
{{--                <path--}}
{{--                    d="M61.8548 14.6253C61.8778 14.7102 61.8895 14.7978 61.8897 14.8858V28.5615C61.8898 28.737 61.8434 28.9095 61.7554 29.0614C61.6675 29.2132 61.5409 29.3392 61.3887 29.4265L49.9104 36.0351V49.1337C49.9104 49.4902 49.7209 49.8192 49.4118 49.9987L25.4519 63.7916C25.3971 63.8227 25.3372 63.8427 25.2774 63.8639C25.255 63.8714 25.2338 63.8851 25.2101 63.8913C25.0426 63.9354 24.8666 63.9354 24.6991 63.8913C24.6716 63.8838 24.6467 63.8689 24.6205 63.8589C24.5657 63.8389 24.5084 63.8215 24.456 63.7916L0.501061 49.9987C0.348882 49.9113 0.222437 49.7853 0.134469 49.6334C0.0465019 49.4816 0.000120578 49.3092 0 49.1337L0 8.10652C0 8.01678 0.0124642 7.92953 0.0348998 7.84477C0.0423783 7.8161 0.0598282 7.78993 0.0697995 7.76126C0.0884958 7.70891 0.105946 7.65531 0.133367 7.6067C0.152063 7.5743 0.179485 7.54812 0.20192 7.51821C0.230588 7.47832 0.256763 7.43719 0.290416 7.40229C0.319084 7.37362 0.356476 7.35243 0.388883 7.32751C0.425029 7.29759 0.457436 7.26518 0.498568 7.2415L12.4779 0.345059C12.6296 0.257786 12.8015 0.211853 12.9765 0.211853C13.1515 0.211853 13.3234 0.257786 13.475 0.345059L25.4531 7.2415H25.4556C25.4955 7.26643 25.5292 7.29759 25.5653 7.32626C25.5977 7.35119 25.6339 7.37362 25.6625 7.40104C25.6974 7.43719 25.7224 7.47832 25.7523 7.51821C25.7735 7.54812 25.8021 7.5743 25.8196 7.6067C25.8483 7.65656 25.8645 7.70891 25.8844 7.76126C25.8944 7.78993 25.9118 7.8161 25.9193 7.84602C25.9423 7.93096 25.954 8.01853 25.9542 8.10652V33.7317L35.9355 27.9844V14.8846C35.9355 14.7973 35.948 14.7088 35.9704 14.6253C35.9792 14.5954 35.9954 14.5692 36.0053 14.5405C36.0253 14.4882 36.0427 14.4346 36.0702 14.386C36.0888 14.3536 36.1163 14.3274 36.1375 14.2975C36.1674 14.2576 36.1923 14.2165 36.2272 14.1816C36.2559 14.1529 36.292 14.1317 36.3244 14.1068C36.3618 14.0769 36.3942 14.0445 36.4341 14.0208L48.4147 7.12434C48.5663 7.03694 48.7383 6.99094 48.9133 6.99094C49.0883 6.99094 49.2602 7.03694 49.4118 7.12434L61.3899 14.0208C61.4323 14.0457 61.4647 14.0769 61.5021 14.1055C61.5333 14.1305 61.5694 14.1529 61.5981 14.1803C61.633 14.2165 61.6579 14.2576 61.6878 14.2975C61.7103 14.3274 61.7377 14.3536 61.7551 14.386C61.7838 14.4346 61.8 14.4882 61.8199 14.5405C61.8312 14.5692 61.8474 14.5954 61.8548 14.6253ZM59.893 27.9844V16.6121L55.7013 19.0252L49.9104 22.3593V33.7317L59.8942 27.9844H59.893ZM47.9149 48.5566V37.1768L42.2187 40.4299L25.953 49.7133V61.2003L47.9149 48.5566ZM1.99677 9.83281V48.5566L23.9562 61.199V49.7145L12.4841 43.2219L12.4804 43.2194L12.4754 43.2169C12.4368 43.1945 12.4044 43.1621 12.3682 43.1347C12.3371 43.1097 12.3009 43.0898 12.2735 43.0624L12.271 43.0586C12.2386 43.0275 12.2162 42.9888 12.1887 42.9539C12.1638 42.9203 12.1339 42.8916 12.114 42.8567L12.1127 42.853C12.0903 42.8156 12.0766 42.7707 12.0604 42.7283C12.0442 42.6909 12.023 42.656 12.013 42.6161C12.0005 42.5688 11.998 42.5177 11.9931 42.4691C11.9881 42.4317 11.9781 42.3943 11.9781 42.3569V15.5801L6.18848 12.2446L1.99677 9.83281ZM12.9777 2.36177L2.99764 8.10652L12.9752 13.8513L22.9541 8.10527L12.9752 2.36177H12.9777ZM18.1678 38.2138L23.9574 34.8809V9.83281L19.7657 12.2459L13.9749 15.5801V40.6281L18.1678 38.2138ZM48.9133 9.14105L38.9344 14.8858L48.9133 20.6305L58.8909 14.8846L48.9133 9.14105ZM47.9149 22.3593L42.124 19.0252L37.9323 16.6121V27.9844L43.7219 31.3174L47.9149 33.7317V22.3593ZM24.9533 47.987L39.59 39.631L46.9065 35.4555L36.9352 29.7145L25.4544 36.3242L14.9907 42.3482L24.9533 47.987Z"--}}
{{--                    fill="#FF2D20"/>--}}
{{--            </svg>--}}
{{--        </div>--}}

{{--        <div class="mt-16">--}}
{{--            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">--}}
{{--                <a href="https://laravel.com/docs"--}}
{{--                   class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">--}}
{{--                    <div>--}}
{{--                        <div--}}
{{--                            class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">--}}
{{--                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"--}}
{{--                                 class="w-7 h-7 stroke-red-500">--}}
{{--                                <path stroke-linecap="round" stroke-linejoin="round"--}}
{{--                                      d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"/>--}}
{{--                            </svg>--}}
{{--                        </div>--}}

{{--                        <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Documentation</h2>--}}

{{--                        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">--}}
{{--                            Laravel has wonderful documentation covering every aspect of the framework. Whether you are--}}
{{--                            a newcomer or have prior experience with Laravel, we recommend reading our documentation--}}
{{--                            from beginning to end.--}}
{{--                        </p>--}}
{{--                    </div>--}}

{{--                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"--}}
{{--                         class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">--}}
{{--                        <path stroke-linecap="round" stroke-linejoin="round"--}}
{{--                              d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/>--}}
{{--                    </svg>--}}
{{--                </a>--}}

{{--                <a href="https://laracasts.com"--}}
{{--                   class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">--}}
{{--                    <div>--}}
{{--                        <div--}}
{{--                            class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">--}}
{{--                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"--}}
{{--                                 class="w-7 h-7 stroke-red-500">--}}
{{--                                <path stroke-linecap="round"--}}
{{--                                      d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z"/>--}}
{{--                            </svg>--}}
{{--                        </div>--}}

{{--                        <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Laracasts</h2>--}}

{{--                        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">--}}
{{--                            Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development.--}}
{{--                            Check them out, see for yourself, and massively level up your development skills in the--}}
{{--                            process.--}}
{{--                        </p>--}}
{{--                    </div>--}}

{{--                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"--}}
{{--                         class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">--}}
{{--                        <path stroke-linecap="round" stroke-linejoin="round"--}}
{{--                              d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/>--}}
{{--                    </svg>--}}
{{--                </a>--}}

{{--                <a href="https://laravel-news.com"--}}
{{--                   class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">--}}
{{--                    <div>--}}
{{--                        <div--}}
{{--                            class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">--}}
{{--                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"--}}
{{--                                 class="w-7 h-7 stroke-red-500">--}}
{{--                                <path stroke-linecap="round" stroke-linejoin="round"--}}
{{--                                      d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z"/>--}}
{{--                            </svg>--}}
{{--                        </div>--}}

{{--                        <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Laravel News</h2>--}}

{{--                        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">--}}
{{--                            Laravel News is a community driven portal and newsletter aggregating all of the latest and--}}
{{--                            most important news in the Laravel ecosystem, including new package releases and tutorials.--}}
{{--                        </p>--}}
{{--                    </div>--}}

{{--                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"--}}
{{--                         class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">--}}
{{--                        <path stroke-linecap="round" stroke-linejoin="round"--}}
{{--                              d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/>--}}
{{--                    </svg>--}}
{{--                </a>--}}

{{--                <div--}}
{{--                    class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">--}}
{{--                    <div>--}}
{{--                        <div--}}
{{--                            class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">--}}
{{--                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"--}}
{{--                                 class="w-7 h-7 stroke-red-500">--}}
{{--                                <path stroke-linecap="round" stroke-linejoin="round"--}}
{{--                                      d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64"/>--}}
{{--                            </svg>--}}
{{--                        </div>--}}

{{--                        <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</h2>--}}

{{--                        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">--}}
{{--                            Laravel's robust library of first-party tools and libraries, such as <a--}}
{{--                                href="https://forge.laravel.com"--}}
{{--                                class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Forge</a>,--}}
{{--                            <a href="https://vapor.laravel.com"--}}
{{--                               class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Vapor</a>,--}}
{{--                            <a href="https://nova.laravel.com"--}}
{{--                               class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Nova</a>,--}}
{{--                            and <a href="https://envoyer.io"--}}
{{--                                   class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Envoyer</a>--}}
{{--                            help you take your projects to the next level. Pair them with powerful open source libraries--}}
{{--                            like <a href="https://laravel.com/docs/billing"--}}
{{--                                    class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Cashier</a>,--}}
{{--                            <a href="https://laravel.com/docs/dusk"--}}
{{--                               class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dusk</a>,--}}
{{--                            <a href="https://laravel.com/docs/broadcasting"--}}
{{--                               class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Echo</a>,--}}
{{--                            <a href="https://laravel.com/docs/horizon"--}}
{{--                               class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Horizon</a>,--}}
{{--                            <a href="https://laravel.com/docs/sanctum"--}}
{{--                               class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Sanctum</a>,--}}
{{--                            <a href="https://laravel.com/docs/telescope"--}}
{{--                               class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Telescope</a>,--}}
{{--                            and more.--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">--}}
{{--            <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-left">--}}
{{--                <div class="flex items-center gap-4">--}}
{{--                    <a href="https://github.com/sponsors/taylorotwell"--}}
{{--                       class="group inline-flex items-center hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">--}}
{{--                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"--}}
{{--                             class="-mt-px mr-1 w-5 h-5 stroke-gray-400 dark:stroke-gray-600 group-hover:stroke-gray-600 dark:group-hover:stroke-gray-400">--}}
{{--                            <path stroke-linecap="round" stroke-linejoin="round"--}}
{{--                                  d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/>--}}
{{--                        </svg>--}}
{{--                        Sponsor--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">--}}
{{--                Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
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
                    <div class="feature_item">
                        <i class="flaticon-city"></i>
                        <h4>{{ $category->name }}</h4>
                        <p style="flex-wrap: wrap-reverse;overflow-wrap: anywhere;">{{ $category->desc }}</p>
                    </div>
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
