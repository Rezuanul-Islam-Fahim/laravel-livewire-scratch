<div class="w-full mx-auto md:w-xl">
    <form wire:submit.prevent="update()">
        <h3 class="text-2xl mb-3">Update article</h3>
        <div>
            <label class="text-gray-400">Title</label>
            <input type="text" wire:model="form.title"
                class="mt-0.5 w-full rounded-md border border-gray-500 bg-gray-700 p-2" />
            @error('form.title')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div class="mt-3 mb-3">
            <label class="text-gray-400">Content</label>
            <textarea wire:model="form.content"
                class="mt-0.5 w-full rounded-md border border-gray-500 bg-gray-700 p-2"
                rows="5"></textarea>
            @error('form.content')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit"
            class="bg-blue-600 px-4 py-3 rounded-md hover:bg-blue-700 cursor-pointer">
            Update
        </button>
    </form>
</div>
