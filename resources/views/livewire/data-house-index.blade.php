<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <div class="container mx-auto">
                    <div id="list" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        @foreach ($houses as $house)
                            <a
                                href="{{ route('house.show', $house) }}"
                                class="flex flex-col justify-center text-3xl border-2 border-gray-300 rounded-xl p-6 bg-gray-100"
                            >
                                <div>{{ $house->name }}</div>
                                <div><img width="50" src='{{ $house->photo }}'></div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
            {{ $houses->links() }}
        </div>
    </div>
</div>
