<div class="flex flex-col items-center text-center m-4 w-48">
    <img class="w-12 h-12" src="{{ $img }}" alt="">
    <p class="uppercase">{{ $title }}</p>
    <div {{ $attributes->merge(['class' => 'w-full text-white p-2 text-center']) }}>
        {{ $desc }}
    </div>
    <div class="p-2 border w-full">
        {{ $slot }}
    </div>
</div>