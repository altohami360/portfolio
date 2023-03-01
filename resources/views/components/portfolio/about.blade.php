<div>
    <div>
        <figure class="w-full my-4">
            <img class="h-auto lg:max-w-2xl sm:max-w-auto rounded-lg" src="{{ $image }}"
                alt="image description">
        </figure>
    </div>
    <p class="text-white lg:text-base text-sm  px-6 tracking-widest leading-7 text-justify lg:w-1/2 sm:w-full">
        {{ $slot }}
    </p>
</div>
