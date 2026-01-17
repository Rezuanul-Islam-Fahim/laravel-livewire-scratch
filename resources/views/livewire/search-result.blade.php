<div
    class="{{ $show ? 'block' : 'hidden' }} mt-3 absolute bg-gray-800 border border-gray-700 rounded-lg pl-3 pb-3 pr-3 pt-5 shadow-2xl">
    <div class="absolute top-0 right-2 text-lg">
        <button wire:click="dispatch('clear:search-results')" type="submit"
            class="cursor-pointer">x</button>
    </div>

    @if (count($results) == 0)
        <p>No results found.</p>
    @endif

    @foreach ($results as $e)
        <a wire:navigate.hover href="/articles/{{ $e->id }}">
            <p class="text-white">{{ $e->title }}</p>
        </a>
    @endforeach
</div>
