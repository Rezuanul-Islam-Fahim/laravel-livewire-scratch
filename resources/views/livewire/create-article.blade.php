<div class="w-full mx-auto md:w-xl">
    <form wire:submit.prevent="save()">
        <h3 class="text-2xl mb-3">Create new article</h3>
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
        <div class="flex my-3">
            <label class="flex items-center text-gray-400">
                <input wire:model="form.published"
                    class="mr-2 w-[16px] h-[16px]" type="checkbox" />
                Published
            </label>
        </div>
        <div class="mb-6">
            <span class="text-gray-400 text-lg mb-2">Notification Options</span>
            <div class="flex flex-row gap-x-3">
                <label class="flex items-center text-gray-400">
                    <input wire:model="form.notification" type="radio"
                        value="email" class="mr-2 w-[16px] h-[16px]" />
                    Email
                </label>
                <label class="flex items-center text-gray-400">
                    <input wire:model="form.notification" type="radio"
                        value="sms" class="mr-2 w-[16px] h-[16px]" />
                    Sms
                </label>
                <label class="flex items-center text-gray-400">
                    <input wire:model="form.notification" type="radio"
                        value="none" class="mr-2 w-[16px] h-[16px]" />
                    None
                </label>
            </div>
        </div>
        <button type="submit"
            class="bg-blue-600 px-4 py-3 rounded-md hover:bg-blue-700 cursor-pointer">
            Create
        </button>
    </form>
</div>
