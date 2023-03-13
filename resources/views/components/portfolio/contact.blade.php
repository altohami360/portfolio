<div>
    <p class="text-white lg:text-base text-sm  px-6 tracking-widest leading-7 lg:w-1/2 sm:w-full mb-4">
        {{ $title }}:
        <a href="{{ $title == 'Email' ? 'mailto:' . $slot : $slot }}" class="underline block" target="_blank">
            {{ $slot }}
        </a>
    </p>
</div>
