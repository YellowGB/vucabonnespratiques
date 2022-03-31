<x-app-layout>
    @foreach ($outils as $outil)
        <h1 class="my-4">{{ $outil->type }}</h1>
        <div x-data="{ open: false }">
            <div class="flex gap-4 items-center cursor-pointer" x-on:click="open = ! open">
                <img src="{{ $outil->icon }}" alt="{{ $outil->name }}" class="h-12 w-12">
                <p>{{ $outil->name }}</p>
            </div>
            <div x-show="open" class="swot border border-slate-900 mt-2">
                <p class="text-center py-2 bg-sky-500">Analyse SWOT</p>
                <div class="grid grid-cols-2">
                    <p class="text-center py-1 bg-green-400">Forces</p>
                    <p class="text-center py-1 bg-yellow-300">Faiblesses</p>
                    {!! $outil->strengths !!}
                    {!! $outil->weaknesses !!}
                    <p class="text-center py-1 bg-indigo-400">Opportunités</p>
                    <p class="text-center py-1 bg-red-400">Menaces</p>
                    {!! $outil->opportunities !!}
                    {!! $outil->threats !!}
                </div>
            </div>
        </div>
    @endforeach
</x-app-layout>