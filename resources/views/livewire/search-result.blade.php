<div
    class="{{ $show ? 'block' : 'hidden' }} mt-3 absolute bg-gray-800 border border-gray-700 rounded-lg p-3 shadow-2xl">
    @if (count($results) == 0)
        <p>No results found.</p>
    @endif

    @foreach ($results as $e)
        <a href="/articles/{{ $e->id }}">
            <p class="text-white">{{ $e->title }}</p>
        </a>
    @endforeach
</div>
