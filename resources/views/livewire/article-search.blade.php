<div class="mt-10">
    <form class="flex flex-row">
        <input type="text"
            class="block w-xl p-3 rounded-md bg-gray-700 border border-gray-600 text-white"
            placeholder="Please enter something to search article"
            wire:model.live.debounce="searchText" />

        <button
            class="ml-2 px-4 py-3 rounded-md bg-indigo-600 hover:bg-indigo-800 disabled:bg-indigo-400 text-white cursor-pointer disabled:cursor-default"
            wire:click.prevent="clear()"
            {{ empty($searchText) ? 'disabled' : '' }}>
            Clear
        </button>
    </form>
    <livewire:search-result :show="!empty($searchText)" :results="$results" />
</div>
