<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('House') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container mx-auto">
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                            @foreach ($houses as $house)
                                <div
                                    class="flex flex-col justify-center text-3xl border-2 border-gray-300 rounded-xl p-6 bg-gray-100"
                                >
                                    <div>{{ $house->name }}</div>
                                    {{-- {{ $house->description }}<br>
                                    {{ $house->address }}<br>
                                    {{ $house->city }}<br> --}}
                                    <div><img width="50" src='{{ $house->photo }}'></div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                {{ $houses->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
