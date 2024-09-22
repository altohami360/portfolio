@php
    // $animation = '';
    $animation = 'transition ease-in-out delay-0 hover:-translate-y-1 hover:scale-110 hover:bg-white duration-200';
@endphp

<div class="my-16 text-right mx-auto flex flex-col items-center">
    <div class="flex mb-4">
        <span class="text-2xl mx-2 md:mx-4 bg-white p-1 rounded-full w-14 md:w-16 hidden md:block {{ $animation }}">
            <img src="{{ asset('storage/bootstrap.png') }}" width="100" height="100" class="mx-auto p-2">
        </span>
        <span class="text-2xl mx-2 md:mx-4 bg-white p-1 rounded-full w-14 md:w-16 {{ $animation }} flex items-center">
            <img src="{{ asset('storage/tailwindcss.png') }}" width="100" height="100" class="mx-auto p-2">
        </span>
        <span class="text-2xl mx-2 md:mx-4 bg-white p-1 rounded-full w-14 md:w-16 {{ $animation }}">
            <img src="{{ asset('html.svg') }}" width="100" height="100" class="mx-auto p-2">
        </span>
        <span class="text-2xl mx-2 md:mx-4 bg-white p-1 rounded-full w-14 md:w-16 {{ $animation }}">
            <img src="{{ asset('css.svg') }}" width="100" height="100" class="mx-auto p-2">
        </span>
        <span class="text-2xl mx-2 md:mx-4 bg-white p-1 rounded-full w-14 md:w-16 {{ $animation }}">
            <img src="{{ asset('js.svg') }}" width="100" height="100" class="mx-auto p-2">
        </span>
    </div>

    <div class="flex mb-4">
        <span class="text-2xl mx-2 md:mx-4 bg-white p-1 rounded-full w-14 md:w-16 hidden md:block {{ $animation }}">
            <img src="{{ asset('jquery.svg') }}" width="100" height="100" class="mx-auto">
        </span>
        <span class="text-2xl mx-2 md:mx-4 bg-white p-1 rounded-full w-14 md:w-16 {{ $animation }}">
            <img src="{{ asset('php.svg') }}" width="100" height="100" class="mx-auto">
        </span>
        <span class="text-2xl mx-2 md:mx-4 bg-white p-1 rounded-full w-14 md:w-16 {{ $animation }}">
            <img src="{{ asset('laravel.svg') }}" width="100" height="100" class="mx-auto p-2">
        </span>
        <span class="text-2xl mx-2 md:mx-4 bg-white p-1 rounded-full w-14 md:w-16 {{ $animation }}">
            <img src="{{ asset('mysql.svg') }}" width="100" height="100" class="mx-auto">
        </span>
        <span class="text-2xl mx-2 md:mx-4 bg-white p-1 rounded-full w-14 md:w-16 {{ $animation }}">
            <img src="{{ asset('redis.svg') }}" width="100" height="100" class="mx-auto p-2">
        </span>
        <span class="text-2xl mx-2 md:mx-4 bg-white p-1 rounded-full w-14 md:w-16 {{ $animation }}">
            <img src="{{ asset('git.svg') }}" width="100" height="100" class="mx-auto p-2">
        </span>
    </div>

    <div class="flex mb-4">
        <span class="text-2xl mx-2 md:mx-4 bg-white p-1 rounded-full w-14 md:w-16 hidden md:block {{ $animation }}">
            <img src="https://placehold.co/400x400/png" width="100" height="100" class="mx-auto p-2">
        </span>
        <span class="text-2xl mx-2 md:mx-4 bg-white p-1 rounded-full w-14 md:w-16 {{ $animation }}">
            <img src="{{ asset('storage/nodejs.png') }}" width="100" height="100" class="mx-auto">
        </span>
        <span class="text-2xl mx-2 md:mx-4 bg-white p-1 rounded-full w-14 md:w-16 {{ $animation }}">
            <img src="{{ asset('github.svg') }}" width="100" height="100" class="mx-auto p-2">
        </span>
        <span class="text-2xl mx-2 md:mx-4 bg-white p-1 rounded-full w-14 md:w-16 {{ $animation }}">
            <img src="{{ asset('bitbucket.svg') }}" width="100" height="100" class="mx-auto p-2">
        </span>
        <span class="text-2xl mx-2 md:mx-4 bg-white p-1 rounded-full w-14 md:w-16 {{ $animation }}">
            <img src="{{ asset('api.svg') }}" width="100" height="100" class="mx-auto p-2">
        </span>
    </div>

    <div class="flex mb-4 block md:hidden">
        <span class="text-2xl mx-2 md:mx-4 bg-white p-1 rounded-full w-14 md:w-16 {{ $animation }}">
            <img src="{{ asset('storage/nodejs.png') }}" width="100" height="100" class="mx-auto p-2">
        </span>
        <span class="text-2xl mx-2 md:mx-4 bg-white p-1 rounded-full w-14 md:w-16 {{ $animation }}">
            <img src="{{ asset('jquery.svg') }}" width="100" height="100" class="mx-auto">
        </span>
        <span class="text-2xl mx-2 md:mx-4 bg-white p-1 rounded-full w-14 md:w-16 {{ $animation }}">
            <img src="https://placehold.co/400x400/png" width="100" height="100" class="mx-auto p-2">
        </span>
    </div>
</div>
