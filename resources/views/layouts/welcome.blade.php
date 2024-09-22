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
            src: url({{ asset('storage/fonts/sf-mono/SFMonoRegular.otf') }});
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
    <link href="https://fonts.googleapis.com/css2?family=Scheherazade+New:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        *,.arabic {
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

<body class="w-full max-w-5xl mx-auto px-4 bg-[radial-gradient(145.05%_100%_at_50%_0%,#1D2B41_0%,#020509_57.38%,#0F1A29_88.16%)] pt-8 pb-24 text-slate-400 lg:py-16">

{{ $slot }}

<script>
    feather.replace()
</script>

</body>
</html>
