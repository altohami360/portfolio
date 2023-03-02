<div>
    <div class="px-6 py-2">
        <span class="text-blue-400 text-sm ">{{ $startDate }} ------------------------</span>
        <p class="text-white lg:text-base text-sm tracking-widest leading-7 text-justify lg:w-1/2 sm:w-full">
            <span class="uppercase font-semibold">{{ $title }}</span>
            <span class="text-gray-400 lg:text-base text-sm tracking-widest leading-7 text-justify lg:w-1/2 sm:w-full">
                ⇒ {{ $company }}
            </span>
            <br>
            {{ $slot }}
        </p>

        <div class="overflow-hidden">
            <span class="text-blue-400 text-sm ">{{ $endDate }} ------------------------</span>
        </div>
    </div>
</div>
