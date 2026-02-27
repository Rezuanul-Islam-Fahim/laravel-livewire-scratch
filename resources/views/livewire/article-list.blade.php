<div class="max-w-2xl mx-auto mt-5">
    <div class="flex flex-row justify-between items-center">
        <a class="bg-blue-600 px-4 py-3 rounded-md hover:bg-blue-700"
            href="/dashboard/articles/create">
            Create New Article
        </a>
        <div>
            <button wire:click="showAll()"
                class="bg-violet-600 px-4 py-3 rounded-md hover:bg-violet-700">
                Show All
            </button>
            <button wire:click="showPublished()"
                class="bg-violet-600 px-4 py-3 rounded-md hover:bg-violet-700">
                Show Published (<livewire:published-count
                    placeholder-text="loading..." />)
            </button>
        </div>
    </div>

    <div class="mt-4 mb-6">
        {{ $articles->links(data: ['scrollTo' => false]) }}
        {{-- {{ $articles->links(data: ['scrollTo' => 'table.w-full']) }} --}}
    </div>

    <table class="mt-6 w-full">
        <thead class="bg-gray-700">
            <th class="p-3">Title</th>
            <th class="p-3"></th>
        </thead>
        <tbody class="bg-gray-800">
            @foreach ($articles as $article)
                <tr class="border-b border-gray-700">
                    <td class="p-4" wire:key={{ $article->id }}>
                        {{ $article->title }}</td>
                    <td class="p-4 space-x-2">
                        <a href="/dashboard/articles/{{ $article->id }}/edit"
                            wire:navigate:hover
                            class="py-2 px-3 rounded-md cursor-pointer">
                            Edit
                        </a>
                        <button
                            class="bg-red-600 hover:bg-red-800 py-2 px-3 rounded-md cursor-pointer"
                            wire:click="delete({{ $article->id }})"
                            wire:confirm="Are you sure you want to delete this article?">
                            Delete
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
