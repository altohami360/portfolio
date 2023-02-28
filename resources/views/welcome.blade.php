@extends('layouts.master')

@section('content')
    <div class="delay-400 w-full min:h-screen h-auto border border-dashed border-3 border-yellow-500 rounded py-4 px-6">
        <div class="py-2">
            <span class="lg:text-base text-sm text-green-500">BACK-END</span>
            <span class="lg:text-base text-sm text-yellow-500">@@dev</span>
            <span class="lg:text-base text-sm text-white">:$ ~</span>
        </div>
        <div>
            <figure class="w-full my-4">
                <img class="h-auto lg:max-w-2xl sm:max-w-auto rounded-lg" src="{{ asset('storage\logo.png') }}"
                    alt="image description">
            </figure>
        </div>
        <p class="text-white lg:text-base text-sm  px-6 tracking-widest leading-7 text-justify lg:w-1/2 sm:w-full">
            A talented software developer with experience in developing backend using Html, CSS, PHP, MySql,
            Laravel, and other. for strong problem-solving skills, Self-study, and time management. graduated from the
            Faculty of Computer Science Department of Information and Communications Technology (ICT) with a very good
            grad
        </p>

        <div class="py-2">
            <span class="lg:text-base text-sm text-green-500">BACK-END</span>
            <span class="lg:text-base text-sm text-yellow-500">@@dev</span>
            <span class="lg:text-base text-sm text-white">:$ </span>
            <span class="lg:text-base text-sm text-red-500 tracking-widest">altohami/skills</span>
        </div>
        <ul class="px-4 text-white">
            <li class="tracking-widest lg:text-base text-sm "><span class="text-green-500 pr-1">✔</span> Web Development</li>
            <li class="tracking-widest lg:text-base text-sm "><span class="text-green-500 pr-1">✔</span> DataBase</li>
            <li class="tracking-widest lg:text-base text-sm "><span class="text-green-500 pr-1">✔</span> PHP</li>
            <li class="tracking-widest lg:text-base text-sm "><span class="text-green-500 pr-1">✔</span> SQL</li>
            <li class="tracking-widest lg:text-base text-sm "><span class="text-green-500 pr-1">✔</span> RESTfull API</li>
            <li class="tracking-widest lg:text-base text-sm "><span class="text-green-500 pr-1">✔</span> laravel</li>
            <li class="tracking-widest">
                <div role="status">
                    <svg aria-hidden="true"
                        class="inline w-4 h-4 mr-2 text-gray-200 animate-spin dark:text-gray-600 fill-green-500"
                        viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                            fill="currentColor" />
                        <path
                            d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                            fill="currentFill" />
                    </svg>
                    <span class="text-green-500">other .<span class=" animate-ping">.</span></span>
                </div>
            </li>
        </ul>


        <div class="py-2">
            <span class="lg:text-base text-sm text-green-500">BACK-END</span>
            <span class="lg:text-base text-sm text-yellow-500">@@dev</span>
            <span class="lg:text-base text-sm text-white">:$ </span>
            <span class="lg:text-base text-sm text-red-500 tracking-widest">altohami/education</span>
        </div>
        <p class="text-white lg:text-base text-sm  px-6 tracking-widest leading-7 lg:w-1/2 sm:w-full">
            University of Science and Technology
            <br>
            <span class="text-gray-400">
                ↳ College of Computer Science - Information and Communication Technology
            </span>
        </p>

        <div class="py-2">
            <span class="lg:text-base text-sm text-green-500">BACK-END</span>
            <span class="lg:text-base text-sm text-yellow-500">@@dev</span>
            <span class="lg:text-base text-sm text-white">:$ </span>
            <span class="lg:text-base text-sm text-red-500 tracking-widest">altohami/experience</span>
        </div>

        <div class="px-6 py-2">
            <span class="text-blue-400 text-sm ">2021/3/1 ------------------------</span>
            <p class="text-white lg:text-base text-sm tracking-widest leading-7 text-justify lg:w-1/2 sm:w-full">
                <span class="uppercase font-semibold">Developer</span>
                <span class="text-gray-400 lg:text-base text-sm tracking-widest leading-7 text-justify lg:w-1/2 sm:w-full">
                    ⇒ University of Science and Technology
                </span>
                <br>
                Participated in developing the academic system
                of the University of Science & Technology, Adding
                new updates to the system which resulted
                in facilitating the user experience.
            </p>

            <div class="overflow-hidden">
                <span class="text-blue-400 text-sm ">2021/8/1 ------------------------</span>
            </div>
        </div>
        <div class="px-6 py-2">
            <span class="text-blue-400 text-sm ">2021/2/1 ------------------------</span>
            <p class="text-white lg:text-base text-sm tracking-widest leading-7 text-justify lg:w-1/2 sm:w-full">
                <span class="uppercase font-semibold">Termintion Network </span>
                <span class="text-gray-400 lg:text-base text-sm tracking-widest leading-7 text-justify lg:w-1/2 sm:w-full">
                    ⇒ Ayman Merckani for Computer Services · Apprenticeship
                </span>
                <br>
                Networking and Termintion Network
            </p>

            <div class="overflow-hidden">
                <span class="text-blue-400 text-sm ">2021/4/1 ------------------------</span>
            </div>
        </div>

        
        <div class="py-2">
            <span class="lg:text-base text-sm text-green-500">BACK-END</span>
            <span class="lg:text-base text-sm text-yellow-500">@@dev</span>
            <span class="lg:text-base text-sm text-white">:$ </span>
            <span class="lg:text-base text-sm text-red-500 tracking-widest animate-ping">|</span>
        </div>
    </div>
@endsection
