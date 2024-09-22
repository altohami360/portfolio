<x-welcome>
    <section class="py-2 md:py-6">

        <div class="container max-w-screen-xl mx-auto px-2">

            <x-nav-bar></x-nav-bar>

            <div class="text-center">
                <div class="w-full mx-auto">

                    <div class="flex justify-between">
                        <h1 class="arabic bg-white bg-clip-text text-4xl leading-[4rem] tracking-tighter text-transparent mb-6">
                            محمد عـادل التُهامي
                        </h1>
                    </div>


                    <div class="flex justify-between flex-wrap md:flex-nowrap items-center flex-col-reverse md:flex-row mb-16">

                        <div class="w-3/2 mx-2">
                            <p class="text-right font-thin text-gray-100 text-md md:text-lg leading-9 tracking-wide arabic">
                                أنا مطور برمجيات (<span class="english-font">Back End Developer</span>) واجهة خلفية وأحب التعمق في البرمجيات مفتوحة المصدر والتعلم منها 👨‍💻.
                                <br>
                                أستخدم لغة <span class="english-font">PHP</span> واطار العمل <span class="bg-red-700 font-light text-gray-100 px-1 rounded english-font">Laravel</span> لكتابة
                                الأكواد مع خبرة ثلاث سنوات في تطوير البرامج الخلفية.

                                لدي درجة البكالوريوس في علوم الكمبيوتر، قسم تكنولوجيا المعلومات والاتصالات (<span class="english-font">ICT</span>).
                                <br>
                                <br>
                                بصفتي مطور باك-إند شغوف😉، أحرص دائمًا على كتابة كود نظيف وفعّال ومنظم. أستمتع بتطبيق المفاهيم التنظيمية مثل مبادئ <span class="english-font">SOLID</span> و <span class="english-font">DRY</span> (لا تكرر نفسك) و <span class="english-font">KISS</span> (اجعلها بسيطة) لتحسين قابلية صيانة الكود ووضوحه. أركز دائمًا على تقديم حلول قابلة للتطوير وعالية الجودة.
                            </p>
                        </div>

                        <div class="w-3/2 mx-2 max-w-sm flex justify-center md:justify-end mb-4 md:mb-0">
                            <img class="rounded-3xl w-2/3" src="{{ asset('storage/me-setup.jpg') }}" alt="">
                        </div>
                    </div>


                    <p class="text-right font-thin text-gray-100 text-md md:text-lg leading-9 tracking-wide arabic">
                         بدات رحلتي في تعلم البرمجة مع دخولي الي المرحلة الجامعية في عام ٢٠١٦ والتي كانت رغبة وليست مجرد خيار. اول لغة برمجة تعلمتها هي لغة سي (<span class="english-font">C</span>) التي كانت مدخلي الي عالم البرمجة. ثم بعدها لغة جافا (<span class="english-font">Java</span>) التي تعلمت من خلالها البرمجة الكائنية (<span class="english-font">OOP</span>). بعدها كان اول مشروع حقيقي قمت بالعمل عليها كان بلغة سي شارب (<span class="english-font">C#</span>). الي ان تعلمت بي اتش بي (<span class="english-font">PHP</span>) ومن هنا كانت البداية الحقيقية والانطلاقة مع اطار العمل الشهير <span class="bg-red-700 font-light text-gray-100 px-1 rounded english-font">Laravel</span>.
                    </p>
                </div>


{{--                <x-hr-title>المهارات التقنية</x-hr-title>--}}
                <x-skills-icons></x-skills-icons>

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
                            <p class="mb-4 font-normal text-md text-gray-400">الجمعية الخيرية الالكترونية لتحفيظ القران الكريم</p>
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
                            <img class="h-auto max-w-full rounded transition ease-in-out delay-0 hover:-translate-y-1 hover:scale-110 hover:bg-white duration-300  opacity-30 hover:opacity-100" src="{{ asset('me-s.jpg') }}" alt="">
                        </div>
                        <div class="overflow-hidden rounded-xl">
                            <img class="h-auto max-w-full rounded transition ease-in-out delay-0 hover:-translate-y-1 hover:scale-110 hover:bg-white duration-300  opacity-30 hover:opacity-100" src="{{ asset('me-setup.jpg') }}" alt="">
                        </div>
                        <div class="overflow-hidden rounded-xl">
                            <img class="h-auto max-w-full rounded transition ease-in-out delay-0 hover:-translate-y-1 hover:scale-110 hover:bg-white duration-300  opacity-30 hover:opacity-100" src="{{ asset('me-camping.jpg') }}" alt="">
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
</x-welcome>
