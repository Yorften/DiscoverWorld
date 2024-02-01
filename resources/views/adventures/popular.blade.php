<x-layout>
    <div class="flex flex-col justify-center items-center">
        <div class="2xl:mx-auto 2xl:container lg:px-20 md:px-6 py-4 px-4 w-96 sm:w-auto">
            @include('partials._hero')
            @unless (count($adventures) == 0)
                <div class="grid grid-cols-1 md:grid-cols-2 md:mt-12 lg:grid-cols-3 mt-8 gap-2">
                    @foreach ($adventures as $adventure)
                    <x-card>
                        <x-adventure-card :adventure="$adventure"/>
                    </x-card>
                    @endforeach
                </div>
            @else
                <p class="w-full flex justify-center mt-10 font-bold text-2xl">No adventures found</p>
            @endunless

        </div>
        @include('partials._view_more')
    </div>
</x-layout>
