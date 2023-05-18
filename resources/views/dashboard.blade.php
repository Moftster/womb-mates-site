<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>

                <form method="GET" action="{{ route('post.create') }}">
                    <button type="submit" class="rounded-full bg-blue-400 py-1 px-5 text-white">Create a Post</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
