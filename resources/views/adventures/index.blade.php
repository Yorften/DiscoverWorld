<x-layout>
    <div class="2xl:mx-auto 2xl:container lg:px-20 md:px-6 py-4 px-4 w-96 sm:w-auto flex flex-col">
        <div class="bg-white flex items-center flex-wrap">
            <ul class="flex items-center">
                <li class="inline-flex items-center">
                    <a href="/" class="text-gray-600 hover:text-blue-500">
                        <svg class="w-5 h-auto fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24" fill="#000000">
                            <path d="M0 0h24v24H0V0z" fill="none" />
                            <path
                                d="M10 19v-5h4v5c0 .55.45 1 1 1h3c.55 0 1-.45 1-1v-7h1.7c.46 0 .68-.57.33-.87L12.67 3.6c-.38-.34-.96-.34-1.34 0l-8.36 7.53c-.34.3-.13.87.33.87H5v7c0 .55.45 1 1 1h3c.55 0 1-.45 1-1z" />
                        </svg>
                    </a>
                    <span class="mx-4 h-auto text-gray-400 font-medium">/</span>
                </li>
                <li class="inline-flex items-center">
                    <a href="/adventures" class="text-gray-600 hover:text-blue-500">
                        Adventures
                    </a>
                </li>
            </ul>
        </div>
        <div class="w-full flex justify-between items-center mt-12">
            <p class="text-3xl font-semibold">Browse adventures</p>
            <a href="/adventures/create"
                class="inline-flex text-white items-center px-4 py-1 bg-blue-600 hover:bg-blue-500 text-sm font-medium rounded-md">
                <i class='bx bx-location-plus font-medium text-lg'></i>
                Add adventure
            </a>
        </div>
        <form method="GET" class="w-full flex items-center justify-center gap-4 mt-8">
            <div class="flex items-center w-full gap-4">
                <x-destination-select class="w-1/3">
                    @foreach ($destinations as $destination)
                        <option value="{{ $destination->id }}">{{ $destination->name }}</option>
                    @endforeach
                </x-destination-select>
                <div>
                    <input type="radio" id="latest" name="date" class="peer hidden" value="latest">
                    <label for="latest"
                        class="w-full p-1 border select-none cursor-pointer peer-checked:border-blue-600 text-blue-500 border-blue-500 peer-checked:bg-blue-600 peer-checked:text-white hover:scale-[1.008] hover:shadow-md hover:bg-slate-100 transition-all duration-200 rounded-md font-medium">
                        Latest
                    </label>
                </div>
                <div>
                    <input type="radio" id="oldest" name="date" class="peer hidden" value="oldest">
                    <label for="oldest"
                        class="w-full p-1 border select-none cursor-pointer peer-checked:border-blue-600 text-blue-500 border-blue-500 peer-checked:bg-blue-600 peer-checked:text-white hover:scale-[1.008] hover:shadow-md hover:bg-slate-100 transition-all duration-200 rounded-md font-medium">
                        Oldest
                    </label>
                </div>
            </div>
            <button
                class="inline-flex text-white items-center px-4 py-1 bg-blue-600 hover:bg-blue-500 text-sm font-medium rounded-md">
                <i class='bx bx-filter font-semibold text-lg'></i>

                Filter
            </button>
        </form>
        @unless (count($adventures) == 0)
            <div class="grid grid-cols-1 md:grid-cols-2 md:mt-8 lg:grid-cols-3 mt-8 gap-2">
                @foreach ($adventures as $adventure)
                    <x-card>
                        <x-adventure-card :adventure="$adventure" />
                    </x-card>
                @endforeach
            </div>
        @else
            <p class="w-full flex flex-col items-center justify-center font-bold text-2xl min-h-[30vh] h-full">No adventures
                found</p>
        @endunless

    </div>


    @push('scripts')
        <script>
            console.log('hello');
            $(document).ready(function() {
                $('#destinations').select2();
            });
        </script>
    @endpush
</x-layout>
