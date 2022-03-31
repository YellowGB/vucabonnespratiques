<div x-init="" class="screenslide min-h-screen flex flex-col" @click="location.href='#{{ $id }}'">
    <div class="flex-grow">{{ $slot }}</div>
    <hr class="my-4" id="{{ $id }}">
</div>