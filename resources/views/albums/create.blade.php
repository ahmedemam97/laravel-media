<x-app-layout>
    <x-slot name="header">
        Create Post
    </x-slot>

    <div class="container mx-auto m-4 p-4">
        <div class="container mx-auto m-4 p-4 bg-white shadow-md rounded-lg">
            <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                <form method="POST" action="{{ route('albums.store') }}">
                    @csrf
                    <div class="sm:col-span-6">
                        <label for="title" class="block text-sm font-medium text-gray-700"> Post Title </label>
                        <div class="mt-1">
                            <x-text-input type="text" id="title" wire:model.lazy="title" name="title"
                                class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal sm:text-sm sm:leading-5" />
                        </div>
                    </div>
                    <div class="sm:col-span-6 pt-5">
                        <x-primary-button class="bg-green-600" style="margin-top: 7px">Create</x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
