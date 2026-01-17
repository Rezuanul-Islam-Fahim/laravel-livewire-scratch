<div class="mt-10">
    <form class="flex flex-row">
        <input type="text"
            class="block w-xl p-3 rounded-md bg-gray-700 border border-gray-600 text-white"
            placeholder="Please enter something to search article"
            wire:model.live.debounce="searchText" />
    </form>
    <livewire:search-result :show="!empty($searchText)" :results="$results" />
</div>
