<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $house->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{ $house->description }}<br><br>
                    {{ $house->address }}<br>
                    {{ $house->city }}<br><br>
                    <div><img width="150" src='{{ $house->photo }}'></div>
                </div>
            </div>
            <a
                href="{{ url()->previous() }}#list"
                class="inline-flex items-center h-8 px-4 m-2 text-sm text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-lg focus:shadow-outline hover:bg-indigo-800">
                Back
            </a>
        </div>
    </div>
</x-app-layout>
