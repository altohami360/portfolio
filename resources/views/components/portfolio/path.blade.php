<div>
    <div class="py-2">
        <span class="lg:text-base text-sm text-green-500">BACK-END</span>
        <span class="lg:text-base text-sm text-yellow-500">@@dev</span>
        <span class="lg:text-base text-sm text-white">:# </span>
        <span
            {{ $attributes->merge([
                'class' => 'lg:text-base text-sm text-red-500 tracking-widest',
            ]) }}>

            {{ $slot }}
        </span>
    </div>
</div>
