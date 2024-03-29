@extends('layouts.master')

@section('content')
    <div class="delay-400 w-full min:h-screen h-auto border border-dashed border-3 border-yellow-500 rounded py-4 px-6">
        <x-portfolio.path>altohami/about</x-portfolio.path>
        <x-portfolio.about>
            {{ $user['about'] }}
        </x-portfolio.about>

        <x-portfolio.path>altohami/education</x-portfolio.path>
        <x-portfolio.education :school="$school" :start="$start_at" :end="$end_at">
            {{ $collage }} - {{ $department }}
        </x-portfolio.education>

        <x-portfolio.path>altohami/skills</x-portfolio.path>
        <x-portfolio.skills>
            @foreach ($skills as $item)
                <x-portfolio.skills-item>{{ $item }}</x-portfolio.skills-item>
            @endforeach
        </x-portfolio.skills>

        {{-- <x-portfolio.path>cd altohami/experience</x-portfolio.path> --}}
        <x-portfolio.path>altohami/experience</x-portfolio.path>
        <x-portfolio.experience title="Laravel Developer" company="الجمعية الخيرية الإلكترونية لتحفيظ القرآن الكريم"
            start-date="2021/3/1" end-date="*">
            laravel developer and other tasks
        </x-portfolio.experience>
        <x-portfolio.experience title="Developer" company="University of Science and Technology" start-date="2021/3/1"
            end-date="2021/8/1">
            Participated in developing the academic system
            of the University of Science & Technology, Adding
            new updates to the system which resulted
            in facilitating the user experience.
        </x-portfolio.experience>

        <x-portfolio.path>altohami/contact</x-portfolio.path>
        <x-portfolio.contact title="Email">altohami360@gmail.com</x-portfolio.contact>
        <x-portfolio.contact title="Linkedin">https://linkedin.com/in/altohami360</x-portfolio.contact>
        <x-portfolio.contact title="Github">https://github.com/altohami360</x-portfolio.contact>

        <x-portfolio.path class="animate-ping"> | </x-portfolio.path>
    </div>
@endsection
