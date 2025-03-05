<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
    <div class="mb-4">
            <label class="block font-medium text-sm text-gray-700">Message</label>
            <p class="block w-full border-gray-300 rounded-md shadow-sm">{{ $chirp->message}}</p>
        </div>
        <div class="mb-4">
            <label class="block font-medium text-sm text-gray-700">User</label>
            <p class="block w-full border-gray-300 rounded-md shadow-sm">{{ $chirp->user->name }}</p>
        </div>
        <div class="mb-4">
            <label class="block font-medium text-sm text-gray-700">Created At</label>
            <p class="block w-full border-gray-300 rounded-md shadow-sm">{{ $chirp->created_at }}</p>
        </div>
        <div class="mb-4">
            <label class="block font-medium text-sm text-gray-700">Updated At</label>
            <p class="block w-full border-gray-300 rounded-md shadow-sm">{{ $chirp->updated_at }}</p>
        </div>
        <x-input-error :messages="$errors->get('message')" class="mt-2" />
    </div>
</x-app-layout>