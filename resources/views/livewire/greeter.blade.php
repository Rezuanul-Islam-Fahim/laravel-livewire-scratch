<div>
    <form wire:submit="changeGreetingText()">
        <div class="flex flex-row gap-2 mt-6 text-white">
            <select
                class="block p-3 rounded-md bg-gray-700 border border-gray-600"
                wire:model.fill="greeting">
                <option value="Hello">Hello</option>
                <option value="Hi">Hi</option>
                <option value="Hey" selected>Hey</option>
                <option value="Howdy">Howdy</option>
            </select>
            <input
                class="block p-3 rounded-md bg-gray-700 border border-gray-600"
                type="text" wire:model="person" />
        </div>
        <div class="my-1 text-gray-400">
            @error('person')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div class="mt-3">
            <button type="submit"
                class="text-white px-4 py-2.5 bg-blue-500 hover:bg-blue-600 transition-colors duration-300 rounded-md cursor-pointer">
                Greet
            </button>
        </div>
    </form>

    @if ($greetingText != '')
        <p class="mt-4 text-white"> {{ $greetingText }}</p>
    @endif
</div>
