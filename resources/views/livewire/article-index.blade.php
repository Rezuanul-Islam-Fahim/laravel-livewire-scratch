<div class="w-full md:w-2xl mx-auto">
    @foreach ($articles as $article)
        <div class="p-4" wire:key="{{ $article->id }}">
            <h3 class="text-2xl text-blue-500 hover:text-blue-600">
                <a wire:navigate.hover href="/articles/{{ $article->id }}">
                    {{ $article->title }}
                </a>
            </h3>
            <p>{{ str($article->content)->words(30) }}</p>
        </div>
    @endforeach
</div>
