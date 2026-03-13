<div>
    <form class="flex flex-row">
        <input type="text"
            class="block w-xl p-2 rounded-md bg-gray-700 border border-gray-600 text-white"
            placeholder="Please enter something to search article"
            wire:model.live.debounce="searchText" wire:offline.attr="disabled" />
    </form>
    @if (!empty($searchText))
        <div wire:transition>
            <livewire:search-result :results="$results" />
        </div>
    @endif
</div>
