<div class="max-w-2xl mx-auto mt-5">
    <div class="flex flex-row justify-between items-center">
        <a class="bg-blue-600 px-4 py-3 rounded-md hover:bg-blue-700"
            href="/dashboard/articles/create">
            Create New Article
        </a>
        <livewire:published-count />
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
