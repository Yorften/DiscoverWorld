<x-layout>
    <div class="2xl:mx-auto 2xl:container lg:px-20 md:px-6 py-4 px-4 sm:w-auto mb-10">
        <div class="bg-white flex items-center flex-wrap">
            <ul class="flex items-center border-red-600">
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
                    <a href="/adventures" class="text-gray-600 hover:text-blue-500">Adventures</a>
                </li>
            </ul>
        </div>
        <p class="text-3xl font-semibold mt-8">Share your adventure!</p>
        <form method="POST" action="/adventures" onsubmit="return validateForm()" enctype="multipart/form-data"
            class="w-full flex flex-col md:flex-row gap-4 mt-12">
            @csrf
            <div class="flex flex-col gap-4 w-full md:w-3/4">
                <div class="flex flex-col">
                    <input type="text" name="title" id="title" placeholder="Adventure title"
                        class="text-lg font-medium border border-gray-400 rounded-md px-2">
                    <div id="titleErr" class="text-red-600 text-sm font-medium"></div>
                </div>
                <div class="flex flex-col">
                    <textarea name="desc" id="desc" cols="30" rows="10"
                        class="border font-medium border-gray-400 rounded-md px-2" placeholder="Adventure description"></textarea>
                    <div id="descErr" class="text-red-600 text-sm font-medium"></div>
                </div>
            </div>
            <div class="w-full md:w-1/4 h-full flex flex-col gap-20 md:justify-between">
                <div class="flex flex-col gap-4">
                    <div class="flex flex-col">
                        <input type="file" multiple name="image[]" class="border border-gray-400 rounded-md px-2 py-1">
                        @error('image')
                            <div id="destinationErr" class="text-red-600 text-sm font-medium">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <x-destination-select class="w-full">
                            @foreach ($destinations as $destination)
                                <option value="{{ $destination->id }}">{{ $destination->name }}</option>
                            @endforeach
                        </x-destination-select>
                        <div id="destinationErr" class="text-red-600 text-sm font-medium"></div>
                    </div>
                    <span class="text-sm">Couldn't find your destination ? Feel free to add it</span>
                    <div class="flex flex-col">
                        <input type="text" name="newDestination" id="newDestination"
                            class="border border-gray-400 rounded-md px-2" placeholder="New destination">
                        <div id="newDestinationErr" class="text-red-600 text-sm font-medium"></div>
                    </div>
                </div>
                <button
                    class="inline-flex text-white text-center justify-center items-center px-4 py-1 bg-blue-600 hover:bg-blue-500 text-sm font-medium rounded-md">
                    Add adventure
                </button>
            </div>
        </form>
    </div>
    @push('scripts')
        <script>
            $(document).ready(function() {
                $('#destinations').select2();
            });
        </script>
         <script src="{{ asset('assets/js/create_destination.js') }}"></script>
    @endpush
</x-layout>
