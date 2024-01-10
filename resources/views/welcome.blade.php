<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    {{-- <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> --}}

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900;1000&family=Marhey:wght@300;400;500;600;700&family=Tajawal:wght@200;300;400;500;700;800;900&display=swap"
        rel="stylesheet">
    <!-- Styles -->
    <style>
        * {
            /* font-family: 'Cairo', sans-serif; */
            /* font-family: 'Marhey', sans-serif; */
            font-family: 'Tajawal', sans-serif;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="antialiased dark">
    <div
        class="relative flex justify-center items-center min-h-screen bg-center bg-gray-900 selection:bg-red-500 selection:text-white">

        <div class="max-w-5xl mx-auto p-6 lg:p-8 sm:p-2 w-full">
            <div class="flex justify-center p-4 w-full flex justify-center">
                <div class="mx-2 w-1/2" dir="rtl">
                    <h1 class="tracking-widest uppercase text-white text-md sm:text-md md:text-3xl lg:text-4xl pb-1 sm:pb-1 md:pb-2 lg:pb-4">
                        Mo Altohami
                    </h1>
                    <h3 class="tracking-wider text-gray-300 text-xs sm:text-xs md:text-base lg:text-xl">
                        Software Engineer <br><span>(Laravel Framwork)</span>
                    </h3>
                </div>
                <div class=" border border-white bg-gray-900 mx-2"></div>
                <div class="mx-2 w-1/2" dir="ltr">
                    <h1 class="tracking-widest uppercase text-white text-md sm:text-md md:text-3xl lg:text-4xl pb-1 sm:pb-1 md:pb-2 lg:pb-4">
                        محمد التهامي
                    </h1>
                    <h3 class="tracking-wider text-gray-300 text-xs sm:text-xs md:text-base lg:text-xl">
                        مهنــدس برمجيات <br><span>(إطار عمل لارافيل)</span>
                    </h3>
                </div>
            </div>
            
            <div class="flex justify-center mt-4 sm:items-center sm:justify-center">
                <div class="text-center text-md text-gray-500 dark:text-gray-400 sm:text-right">
                    <a href="https://www.linkedin.com/in/altohami360/" class="mx-4"><i class="fa-brands fa-linkedin"></i></a>
                    <a href="https://github.com/altohami360" class="mx-4"><i class="fa-brands fa-github"></i></a>
                    <a href="mailto:altohami360@gmail.com" class="mx-4"><i class="fa-solid fa-envelope"></i></a>
                    <a href="tel:+966564102154" class="mx-4"><i class="fa-solid fa-phone"></i></a>
                </div>
            </div>
        </div>

    </div>
</body>

</html>
