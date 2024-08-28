@extends('layouts.master')

@section('content')

    <div class="bg-gray-900">
        <h2 class="text-white text-3xl my-6">Hi 👋<br>Don't be shocked, i'm back end engineer 😎.
        </h2>

        {{--    <div class="w-full h-7 border border-3 border-gray-500 fixed bg-black p-2 rounded-t">--}}
        {{--    </div>--}}
        <div class="bg-black border border-3 border-gray-500 rounded py-2">

            <div class="flex items-baseline">
                <div class="flex gap-2 px-4">
                    <div class="w-3 h-3 bg-red-500 rounded-full"></div>
                    <div class="w-3 h-3 bg-yellow-500 rounded-full"></div>
                    <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                </div>
            </div>

            <div class="bg-gray-500 my-2 w-full border border-3 border-gray-500"></div>

            <div class="px-4">
                <x-portfolio.path>altohami/about</x-portfolio.path>
                <x-portfolio.about>
                    {{ $user['about'] }}
                </x-portfolio.about>

                <x-portfolio.path>altohami/experience</x-portfolio.path>
                <x-portfolio.experience title="Laravel Developer"
                                        company="Electronic Charitable Society for Memorizing the Holy Quran"
                                        start-date="2021/3/1"
                                        end-date="*">
                    Fix bugs and problems across the entire codebase in an efficient, timely manner.<br>
                    Work on new application features.<br>
                    Task creation, prioritization, and distribution.<br>
                    Code cleanup and refactoring.<br>
                    RESFull API’s for client site.
                </x-portfolio.experience>
                <x-portfolio.experience title="Developer" company="University of Science and Technology"
                                        start-date="2021/3/1" end-date="2021/8/1">
                    Maintain, and upgrade existing academic software system, This includes troubleshooting and resolving technical issues.<br>
                    Collaborate with faculty and academic departments to understand their needs and translate them into technical requirements.                </x-portfolio.experience>


                <x-portfolio.path>altohami/skills</x-portfolio.path>
                <x-portfolio.skills>
                    @foreach ($skills as $item)
                        <x-portfolio.skills-item>{{ $item }}</x-portfolio.skills-item>
                    @endforeach
                </x-portfolio.skills>

                <x-portfolio.path>altohami/education</x-portfolio.path>
                <x-portfolio.education :school="$school" :start="$start_at" :end="$end_at">
                    {{ $collage }} - {{ $department }}
                </x-portfolio.education>

                <x-portfolio.path>altohami/contact</x-portfolio.path>
                <x-portfolio.contact title="Email">altohami360@gmail.com</x-portfolio.contact>
                <x-portfolio.contact title="Linkedin">https://linkedin.com/in/altohami360</x-portfolio.contact>
                <x-portfolio.contact title="Github">https://github.com/altohami360</x-portfolio.contact>

            </div>
            {{--        <style>--}}
            {{--            input:focus {--}}
            {{--                outline: none;--}}
            {{--                border: none;--}}
            {{--            }--}}

            {{--            input {--}}
            {{--                border: none;--}}
            {{--                background-color: transparent;--}}
            {{--            }--}}
            {{--        </style>--}}
            {{--        <x-portfolio.path class="">--}}
            {{--            <input class="w-3/4 text-white" type="text" id="title" placeholder="portifolio -h" autofocus>--}}
            {{--        </x-portfolio.path>--}}
        </div>
    </div>
    {{--<script>--}}
    {{--    document.addEventListener("keydown", function(event) {--}}
    {{--        document.getElementById("title").focus();--}}
    {{--    });--}}

    {{--    document.addEventListener("keydown", function(event) {--}}
    {{--        if (event.key === "c" && event.ctrlKey) {--}}
    {{--            document.getElementById("title").value = '';--}}
    {{--        }--}}
    {{--    });--}}
    {{--</script>--}}
@endsection
