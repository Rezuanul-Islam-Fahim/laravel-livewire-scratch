<div class="w-full mx-auto md:w-xl">
    <form wire:submit.prevent="update()">
        <h3 class="text-2xl mb-3">Update article (ID: {{ $form->id }})</h3>
        <div>
            <label wire:dirty.class="text-orange-500" wire:target="form.title"
                class="text-gray-400">
                Title<span wire:dirty wire:target="form.title">*</span>
            </label>
            <input type="text" wire:model="form.title"
                class="mt-0.5 w-full rounded-md border border-gray-500 bg-gray-700 p-2" />
            @error('form.title')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div class="mt-3 mb-3">
            <label wire:dirty.class="text-orange-500" wire:target="form.content"
                class="text-gray-400">
                Content<span wire:dirty wire:target="form.content">*</span>
            </label>
            <textarea wire:model="form.content"
                class="mt-0.5 w-full rounded-md border border-gray-500 bg-gray-700 p-2"
                rows="5"></textarea>
            @error('form.content')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div class="mt-3 mb-3">
            <label wire:dirty.class="text-orange-500" wire:target="form.photo"
                class="text-gray-400 block">
                Photo<span wire:dirty wire:target="form.photo">*</span>
            </label>
            <div class="flex items-center">
                <input wire:model="form.photo" type="file">
                <div>
                    @if ($form->photo)
                        <img width="500px"
                            src="{{ $form->photo->temporaryUrl() }}">
                    @elseif($form->photo_path)
                        <div class="text-center">
                            <img width="500px"
                                src="{{ Storage::url($form->photo_path) }}">
                            <button type="button" wire:click="downloadPhoto"
                                class="mt-3 bg-blue-700 text-white p-2 rounded-sm">
                                Download
                            </button>
                        </div>
                    @endif
                </div>
            </div>
            @error('form.photo')
                <span class="text-red-500 block">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex my-3">
            <label wire:dirty.class="text-orange-500"
                wire:target="form.published"
                class="flex items-center text-gray-400">
                <input wire:model.boolean="form.published"
                    class="mr-2 w-[16px] h-[16px]" type="checkbox" />
                Published<span wire:dirty wire:target="form.published">*</span>
            </label>
        </div>
        <div class="mb-6">
            <span wire:dirty.class="text-orange-500"
                wire:target="form.notifications"
                class="text-gray-400 text-lg mb-2">
                Notification Options<span wire:dirty
                    wire:target="form.notifications">*</span>
            </span>
            <div class="flex flex-row gap-x-3">
                <label class="flex items-center text-gray-400">
                    <input wire:model.boolean="form.allowNotifications"
                        type="radio" value="yes"
                        class="mr-2 w-[16px] h-[16px]" />
                    Yes
                </label>
                <label class="flex items-center text-gray-400">
                    <input wire:model.boolean="form.allowNotifications"
                        type="radio" value="no"
                        class="mr-2 w-[16px] h-[16px]" />
                    No
                </label>
            </div>
            <div x-show="$wire.form.allowNotifications"
                class="flex flex-col gap-x-3 mt-2">
                <label class="flex items-center text-gray-400">
                    <input wire:model="form.notifications" type="checkbox"
                        value="email" class="mr-2 w-[16px] h-[16px]" />
                    Email
                </label>
                <label class="flex items-center text-gray-400">
                    <input wire:model="form.notifications" type="checkbox"
                        value="sms" class="mr-2 w-[16px] h-[16px]" />
                    Sms
                </label>
                <label class="flex items-center text-gray-400">
                    <input wire:model="form.notifications" type="checkbox"
                        value="push" class="mr-2 w-[16px] h-[16px]" />
                    Push
                </label>
            </div>
        </div>
        <button type="submit"
            class="bg-blue-600 px-4 py-3 rounded-md cursor-pointer disabled:bg-blue-300 disabled:cursor-default">
            Update
        </button>
    </form>
</div>
