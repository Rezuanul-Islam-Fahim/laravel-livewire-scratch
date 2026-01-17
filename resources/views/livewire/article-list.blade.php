<div class="">
    <table class="mx-auto border border-gray-300">
        <thead class="border-b border-gray-300">
            <th class="p-3">Title</th>
            <th class="p-3"></th>
        </thead>
        <tbody>
            @foreach ($articles as $article)
                <tr>
                    <td class="p-4" wire:key={{ $article->id }}>
                        {{ $article->title }}</td>
                    <td class="p-4">
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
