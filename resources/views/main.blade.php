<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>محمد التهامي</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>😎</text></svg>">


    {{--    <link rel="stylesheet" type='text/css' href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css"/>--}}



    <!--    user name -->
    <style>
        @font-face {
            font-family: "sfmono";
            src: url({{ asset('public/assets/fonts/sf-mono/SFMonoRegular.otf') }});
        }

        .username-font {
            font-family: "sfmono", serif;
        }
    </style>

    <!--    English font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js"
            integrity="sha512-7x3zila4t2qNycrtZ31HO0NnJr8kg2VI67YLoRSyi9hGhRN66FHYWr7Axa9Y1J9tGYHVBPqIjSE1ogHrJTz51g=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>
        .english-font {
            /*font-family: "Manrope", sans-serif;*/
            /*font-optical-sizing: auto;*/
            /*font-style: normal;*/

            font-family: "sfmono", serif;
        }
    </style>

    <!--    Arabic font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Scheherazade+New:wght@400;500;600;700&display=swap"
          rel="stylesheet">

    <style>
        *, .arabic {
            font-family: "Scheherazade New", serif;
            font-weight: 400;
            font-style: normal;
        }

        .arabic {
            line-height: 2.2 !important;
        }
    </style>

    <script>
        tailwind.config = {
            mode: 'jit',
            theme: {
                extend: {
                    animation: {
                        marquee: 'marquee 25s linear infinite',
                        marquee2: 'marquee2 25s linear infinite',
                    },
                    keyframes: {
                        marquee: {
                            '0%': {transform: 'translateX(0%)'},
                            '100%': {transform: 'translateX(-100%)'},
                        },
                        marquee2: {
                            '0%': {transform: 'translateX(100%)'},
                            '100%': {transform: 'translateX(0%)'},
                        },
                    },
                },
            },
            variants: {},
            plugins: [],
        }

    </script>
</head>

<body
    class="w-full max-w-5xl mx-auto px-4 bg-[radial-gradient(145.05%_100%_at_50%_0%,#1D2B41_0%,#020509_57.38%,#0F1A29_88.16%)] pt-8 pb-24 text-slate-400 lg:py-16">
<section class="py-2 md:py-6">

    <div class="container max-w-screen-xl mx-auto px-2">

        <nav class="flex justify-between items-center mb-10 mx-auto">

            <div class="flex items-center w-auto md:w-auto mb-2 md:mb-0">

                <a href="mailto:altohami360@gmail.com" target="_blank"
                   class="w-6 h-6 md:w-8 md:h-8 mx-1 md:mx-2 flex items-center justify-center border-b border-b-transparent hover:border-b-white">
                    <i data-feather="mail"
                       class="text-white"></i>
                </a>

                <a href="https://www.linkedin.com/in/altohami360/" target="_blank"
                   class="w-6 h-6 md:w-8 md:h-8 mx-1 md:mx-2 flex items-center justify-center border-b border-b-transparent hover:border-b-white">
                    <i data-feather="linkedin"
                       class="text-white"></i>
                </a>

                <a href="https://github.com/altohami360" target="_blank"
                   class="w-6 h-6 md:w-8 md:h-8 mx-1 md:mx-2 flex items-center justify-center border-b border-b-transparent hover:border-b-white">
                    <i data-feather="github"
                       class="text-white font-thin"></i>
                </a>

                <a href="https://www.instagram.com/altohami360" target="_blank"
                   class="w-6 h-6 md:w-8 md:h-8 mx-1 md:mx-2 flex items-center justify-center border-b border-b-transparent hover:border-b-white">
                    <i data-feather="instagram"
                       class="text-white"></i>
                </a>

            </div>

            <a href="{{ route('main') }}" dir="ltr"
               class="username-font md:*:text-md *:text-sm bg-zinc-900 px-2 py-1 border border-gray-500 rounded whitespace-nowrap mx-0">
                {{--        <span class="text-purple-500 english-font">$apps</span>-><span class="text-orange-400 english-font">search</span>(<span class="text-green-700 english-font">'@altohami360'</span>);--}}
                @altohami360
            </a>

        </nav>

        <div class="text-center">
            <div class="w-full mx-auto">

                <div class="flex justify-between">
                    <h1 class="arabic bg-white bg-clip-text text-4xl leading-[4rem] tracking-tighter text-transparent mb-6">
                        محمد عـادل التُهامي
                    </h1>
                </div>


                <div
                    class="flex justify-between flex-wrap md:flex-nowrap items-center flex-col-reverse md:flex-row mb-16">

                    <div class="w-3/2 mx-2">
                        <p class="text-right font-thin text-gray-100 text-md md:text-lg leading-9 tracking-wide arabic">
                            أنا مطور برمجيات (<span class="english-font">Back End Developer</span>) واجهة خلفية وأحب
                            التعمق في البرمجيات مفتوحة المصدر والتعلم منها 👨‍💻.
                            <br>
                            أستخدم لغة <span class="english-font">PHP</span> واطار العمل <span
                                class="bg-red-700 font-light text-gray-100 px-1 rounded english-font">Laravel</span>
                            لكتابة
                            الأكواد مع خبرة ثلاث سنوات في تطوير البرامج الخلفية.

                            لدي درجة البكالوريوس في علوم الكمبيوتر، قسم تكنولوجيا المعلومات والاتصالات (<span
                                class="english-font">ICT</span>).
                            <br>
                            <br>
                            بصفتي مطور باك-إند شغوف😉، أحرص دائمًا على كتابة كود نظيف وفعّال ومنظم. أستمتع بتطبيق
                            المفاهيم التنظيمية مثل مبادئ <span class="english-font">SOLID</span> و <span
                                class="english-font">DRY</span> (لا تكرر نفسك) و <span class="english-font">KISS</span>
                            (اجعلها بسيطة) لتحسين قابلية صيانة الكود ووضوحه. أركز دائمًا على تقديم حلول قابلة للتطوير
                            وعالية الجودة.
                        </p>
                    </div>

                    <div class="w-3/2 mx-2 max-w-sm flex justify-center md:justify-end mb-4 md:mb-0">
                        <img class="rounded-3xl w-2/3" src="{{ asset('public/assets/me-setup.jpg') }}" alt="">
                    </div>
                </div>


                <p class="text-right font-thin text-gray-100 text-md md:text-lg leading-9 tracking-wide arabic">
                    بدات رحلتي في تعلم البرمجة مع دخولي الي المرحلة الجامعية في عام ٢٠١٦ والتي كانت رغبة وليست مجرد
                    خيار. اول لغة برمجة تعلمتها هي لغة سي (<span class="english-font">C</span>) التي كانت مدخلي الي عالم
                    البرمجة. ثم بعدها لغة جافا (<span class="english-font">Java</span>) التي تعلمت من خلالها البرمجة
                    الكائنية (<span class="english-font">OOP</span>). بعدها كان اول مشروع حقيقي قمت بالعمل عليها كان
                    بلغة سي شارب (<span class="english-font">C#</span>). الي ان تعلمت بي اتش بي (<span
                        class="english-font">PHP</span>) ومن هنا كانت البداية الحقيقية والانطلاقة مع اطار العمل الشهير
                    <span class="bg-red-700 font-light text-gray-100 px-1 rounded english-font">Laravel</span>.
                </p>
            </div>


            {{--                <x-hr-title>المهارات التقنية</x-hr-title>--}}
            @php
                // $animation = '';
                $animation = 'transition ease-in-out delay-0 hover:-translate-y-1 hover:scale-110 hover:bg-white duration-200';
            @endphp

            <div class="my-16 text-right mx-auto flex flex-col items-center">
                <div class="flex mb-4">
        <span class="text-2xl mx-2 md:mx-4 bg-white p-1 rounded-full w-14 md:w-16 hidden md:block {{ $animation }}">
            <img src="{{ asset('public/assets/bootstrap.png') }}" width="100" height="100" class="mx-auto p-2">
        </span>
                    <span
                        class="text-2xl mx-2 md:mx-4 bg-white p-1 rounded-full w-14 md:w-16 {{ $animation }} flex items-center">
            <img src="{{ asset('public/assets/tailwindcss.png') }}" width="100" height="100" class="mx-auto p-2">
        </span>
                    <span class="text-2xl mx-2 md:mx-4 bg-white p-1 rounded-full w-14 md:w-16 {{ $animation }}">
            <img src="{{ asset('public/assets/html.svg') }}" width="100" height="100" class="mx-auto p-2">
        </span>
                    <span class="text-2xl mx-2 md:mx-4 bg-white p-1 rounded-full w-14 md:w-16 {{ $animation }}">
            <img src="{{ asset('public/assets/css.svg') }}" width="100" height="100" class="mx-auto p-2">
        </span>
                    <span class="text-2xl mx-2 md:mx-4 bg-white p-1 rounded-full w-14 md:w-16 {{ $animation }}">
            <img src="{{ asset('public/assets/js.svg') }}" width="100" height="100" class="mx-auto p-2">
        </span>
                </div>

                <div class="flex mb-4">
        <span class="text-2xl mx-2 md:mx-4 bg-white p-1 rounded-full w-14 md:w-16 hidden md:block {{ $animation }}">
            <img src="{{ asset('public/assets/jquery.svg') }}" width="100" height="100" class="mx-auto">
        </span>
                    <span class="text-2xl mx-2 md:mx-4 bg-white p-1 rounded-full w-14 md:w-16 {{ $animation }}">
            <img src="{{ asset('public/assets/php.svg') }}" width="100" height="100" class="mx-auto">
        </span>
                    <span class="text-2xl mx-2 md:mx-4 bg-white p-1 rounded-full w-14 md:w-16 {{ $animation }}">
            <img src="{{ asset('public/assets/laravel.svg') }}" width="100" height="100" class="mx-auto p-2">
        </span>
                    <span class="text-2xl mx-2 md:mx-4 bg-white p-1 rounded-full w-14 md:w-16 {{ $animation }}">
            <img src="{{ asset('public/assets/mysql.svg') }}" width="100" height="100" class="mx-auto">
        </span>
                    <span class="text-2xl mx-2 md:mx-4 bg-white p-1 rounded-full w-14 md:w-16 {{ $animation }}">
            <img src="{{ asset('public/assets/redis.svg') }}" width="100" height="100" class="mx-auto p-2">
        </span>
                    <span class="text-2xl mx-2 md:mx-4 bg-white p-1 rounded-full w-14 md:w-16 {{ $animation }}">
            <img src="{{ asset('public/assets/git.svg') }}" width="100" height="100" class="mx-auto p-2">
        </span>
                </div>

                <div class="flex mb-4">
        <span class="text-2xl mx-2 md:mx-4 bg-white p-1 rounded-full w-14 md:w-16 hidden md:block {{ $animation }}">
            <img src="https://placehold.co/400x400/png" width="100" height="100" class="mx-auto p-2">
        </span>
                    <span class="text-2xl mx-2 md:mx-4 bg-white p-1 rounded-full w-14 md:w-16 {{ $animation }}">
            <img src="{{ asset('public/assets/nodejs.png') }}" width="100" height="100" class="mx-auto">
        </span>
                    <span class="text-2xl mx-2 md:mx-4 bg-white p-1 rounded-full w-14 md:w-16 {{ $animation }}">
            <img src="{{ asset('public/assets/github.svg') }}" width="100" height="100" class="mx-auto p-2">
        </span>
                    <span class="text-2xl mx-2 md:mx-4 bg-white p-1 rounded-full w-14 md:w-16 {{ $animation }}">
            <img src="{{ asset('public/assets/bitbucket.svg') }}" width="100" height="100" class="mx-auto p-2">
        </span>
                    <span class="text-2xl mx-2 md:mx-4 bg-white p-1 rounded-full w-14 md:w-16 {{ $animation }}">
            <img src="{{ asset('public/assets/api.svg') }}" width="100" height="100" class="mx-auto p-2">
        </span>
                </div>

                <div class="flex mb-4 block md:hidden">
        <span class="text-2xl mx-2 md:mx-4 bg-white p-1 rounded-full w-14 md:w-16 {{ $animation }}">
            <img src="{{ asset('public/assets/storage/nodejs.png') }}" width="100" height="100" class="mx-auto p-2">
        </span>
                    <span class="text-2xl mx-2 md:mx-4 bg-white p-1 rounded-full w-14 md:w-16 {{ $animation }}">
            <img src="{{ asset('public/assets/jquery.svg') }}" width="100" height="100" class="mx-auto">
        </span>
                    <span class="text-2xl mx-2 md:mx-4 bg-white p-1 rounded-full w-14 md:w-16 {{ $animation }}">
            <img src="https://placehold.co/400x400/png" width="100" height="100" class="mx-auto p-2">
        </span>
                </div>
            </div>

            <div class="my-16 text-right mx-auto">

                <x-hr-title>الخبرات العملية</x-hr-title>

                <ol class="relative border-s border-gray-200">
                    <li class="mb-10 ms-4">
                        <time class="font-extralight text-gray-400 text-md leading-6 tracking-wide english-font">
                            2023/02 – <span class="arabic">حالياً</span>
                        </time>
                        <h3 class="font-extralight text-gray-100 text-md leading-6 tracking-wide mt-2 mb-4">
                            <span class="english-font"> (Back End Developer)</span> مبرمج واجهة خلفية
                        </h3>
                        <p class="mb-4 font-normal text-md text-gray-400">الجمعية الخيرية الالكترونية لتحفيظ القران
                            الكريم</p>
                        <!--                        <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">Get access to over 20+ pages including a dashboard layout, charts, kanban board, calendar, and pre-order E-commerce & Marketing pages.</p>-->
                    </li>
                    <li class="mb-10 ms-4">
                        <time class="font-extralight text-gray-400 text-md leading-6 tracking-wide english-font">
                            2021/03 - 2021/09
                        </time>
                        <h3 class="font-extralight text-gray-100 leading-6 tracking-wide text-md mt-2 mb-4">
                            <span class="english-font"> (Software Engineer)</span> مهندس برمجيات
                        </h3>
                        <p class="mb-4 text-md font-normal text-gray-400">جامعة العلوم والتقانة</p>
                        <!--                        <p class="text-base font-normal text-gray-500 dark:text-gray-400">All the pages and components are first designed in Figma and we keep a parity between the two versions even as we update the project.</p>-->
                    </li>
                </ol>
            </div>

            <div class="w-full mx-auto">

                <x-hr-title>معرض الصور</x-hr-title>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-1">
                    <div class="overflow-hidden rounded-xl">
                        <img
                            class="h-auto max-w-full rounded transition ease-in-out delay-0 hover:-translate-y-1 hover:scale-110 hover:bg-white duration-300  opacity-30 hover:opacity-100"
                            src="{{ asset('public/assets/me-s.jpg') }}" alt="">
                    </div>
                    <div class="overflow-hidden rounded-xl">
                        <img
                            class="h-auto max-w-full rounded transition ease-in-out delay-0 hover:-translate-y-1 hover:scale-110 hover:bg-white duration-300  opacity-30 hover:opacity-100"
                            src="{{ asset('public/assets/me-setup.jpg') }}" alt="">
                    </div>
                    <div class="overflow-hidden rounded-xl">
                        <img
                            class="h-auto max-w-full rounded transition ease-in-out delay-0 hover:-translate-y-1 hover:scale-110 hover:bg-white duration-300  opacity-30 hover:opacity-100"
                            src="{{ asset('public/assets/me-camping.jpg') }}" alt="">
                        </div>
                    </div>
                </div>

{{--                <div class="w-full mx-auto">--}}

{{--                    <x-hr-title>Technology</x-hr-title>--}}

{{--                    <div class="relative flex overflow-x-hidden">--}}
{{--                        <div class="py-2 animate-marquee whitespace-nowrap flex">--}}
{{--                        <span class="text-2xl mx-4 bg-white p-1 rounded w-10">--}}
{{--                            <img src="{{ asset('html.svg') }}">--}}
{{--                        </span>--}}
{{--                            <span class="text-2xl mx-4 bg-white p-1 rounded w-10">--}}
{{--                            <img src="{{ asset('css.svg') }}" width="100" height="100">--}}
{{--                        </span>--}}
{{--                            <span class="text-2xl mx-4 bg-white p-1 rounded w-10">--}}
{{--                            <img src="{{ asset('js.svg') }}" width="100" height="100">--}}
{{--                        </span>--}}
{{--                            <span class="text-2xl mx-4 bg-white p-1 rounded w-10">--}}
{{--                            <img src="{{ asset('jquery.svg') }}" width="100" height="100">--}}
{{--                        </span>--}}
{{--                            <span class="text-2xl mx-4 bg-white p-1 rounded w-10">--}}
{{--                            <img src="{{ asset('php.svg') }}" width="100" height="100">--}}
{{--                        </span>--}}
{{--                            <span class="text-2xl mx-4 bg-white p-1 rounded w-10">--}}
{{--                            <img src="{{ asset('laravel.svg') }}" width="100" height="100">--}}
{{--                        </span>--}}
{{--                            <span class="text-2xl mx-4 bg-white p-1 rounded w-10">--}}
{{--                            <img src="{{ asset('mysql.svg') }}" width="100" height="100">--}}
{{--                        </span>--}}
{{--                            <span class="text-2xl mx-4 bg-white p-1 rounded w-10">--}}
{{--                            <img src="{{ asset('redis.svg') }}" width="100" height="100">--}}
{{--                        </span>--}}
{{--                            <span class="text-2xl mx-4 bg-white p-1 rounded w-10">--}}
{{--                            <img src="{{ asset('git.svg') }}" width="100" height="100">--}}
{{--                        </span>--}}
{{--                            <span class="text-2xl mx-4 bg-white p-1 rounded w-10">--}}
{{--                            <img src="{{ asset('github.svg') }}" width="100" height="100">--}}
{{--                        </span>--}}
{{--                            <span class="text-2xl mx-4 bg-white p-1 rounded w-10">--}}
{{--                            <img src="{{ asset('bitbucket.svg') }}" width="100" height="100">--}}
{{--                        </span>--}}
{{--                            <span class="text-2xl mx-4 bg-white p-1 rounded w-10">--}}
{{--                            <img src="{{ asset('api.svg') }}" width="100" height="100">--}}
{{--                        </span>--}}
{{--                        </div>--}}
{{--                        <div class="absolute top-0 py-2 animate-marquee2 whitespace-nowrap flex">--}}
{{--                        <span class="text-2xl mx-4 bg-white p-1 rounded w-10">--}}
{{--                            <img src="{{ asset('jquery.svg') }}" width="100" height="100">--}}
{{--                        </span>--}}
{{--                            <span class="text-2xl mx-4 bg-white p-1 rounded w-10">--}}
{{--                            <img src="{{ asset('html.svg') }}">--}}
{{--                        </span>--}}
{{--                            <span class="text-2xl mx-4 bg-white p-1 rounded w-10">--}}
{{--                            <img src="{{ asset('css.svg') }}" width="100" height="100">--}}
{{--                        </span>--}}
{{--                            <span class="text-2xl mx-4 bg-white p-1 rounded w-10">--}}
{{--                            <img src="{{ asset('js.svg') }}" width="100" height="100">--}}
{{--                        </span>--}}
{{--                            <span class="text-2xl mx-4 bg-white p-1 rounded w-10">--}}
{{--                            <img src="{{ asset('php.svg') }}" width="100" height="100">--}}
{{--                        </span>--}}
{{--                            <span class="text-2xl mx-4 bg-white p-1 rounded w-10">--}}
{{--                            <img src="{{ asset('laravel.svg') }}" width="100" height="100">--}}
{{--                        </span>--}}
{{--                            <span class="text-2xl mx-4 bg-white p-1 rounded w-10">--}}
{{--                            <img src="{{ asset('mysql.svg') }}" width="100" height="100">--}}
{{--                        </span>--}}
{{--                            <span class="text-2xl mx-4 bg-white p-1 rounded w-10">--}}
{{--                            <img src="{{ asset('redis.svg') }}" width="100" height="100">--}}
{{--                        </span>--}}
{{--                            <span class="text-2xl mx-4 bg-white p-1 rounded w-10">--}}
{{--                            <img src="{{ asset('git.svg') }}" width="100" height="100">--}}
{{--                        </span>--}}
{{--                            <span class="text-2xl mx-4 bg-white p-1 rounded w-10">--}}
{{--                            <img src="{{ asset('github.svg') }}" width="100" height="100">--}}
{{--                        </span>--}}
{{--                            <span class="text-2xl mx-4 bg-white p-1 rounded w-10">--}}
{{--                            <img src="{{ asset('bitbucket.svg') }}" width="100" height="100">--}}
{{--                        </span>--}}
{{--                            <span class="text-2xl mx-4 bg-white p-1 rounded w-10">--}}
{{--                            <img src="{{ asset('api.svg') }}" width="100" height="100">--}}
{{--                        </span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>

        <div class="text-center mt-16 text-white">
            &copy; 2024 محمد التهامي. صنع بحب ❤️
        </div>

    </section>
    <script>
        feather.replace()
    </script>
    </body>
</html>
