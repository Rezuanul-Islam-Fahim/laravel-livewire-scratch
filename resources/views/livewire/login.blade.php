<div class="max-w-xl items-center mx-auto">
    <h3 class="text-xl mb-4">Login</h3>
    <form wire:submit="authenticate">
        @if (isset($errorMessage))
            <span class="text-red-700">{{ $errorMessage }}</span>
        @endif
        <div>
            <label class="text-gray-400">Email</label>
            <input type="email" wire:model="email"
                class="mt-0.5 w-full rounded-md border border-gray-500 bg-gray-700 p-2" />
            @error('email')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div class="mt-3 mb-3">
            <label class="text-gray-400">Password</label>
            <input type="password" wire:model="password"
                class="mt-0.5 w-full rounded-md border border-gray-500 bg-gray-700 p-2" />
            @error('password')
                <span class="text-red-500 block">{{ $message }}</span>
            @enderror
        </div>
        <button
            class="bg-blue-600 px-4 py-3 rounded-md cursor-pointer disabled:bg-blue-300 disabled:cursor-default"
            type="submit">Login</button>
    </form>
</div>
