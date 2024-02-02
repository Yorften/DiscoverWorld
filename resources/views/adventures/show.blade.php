<x-layout>
    <div class="2xl:mx-auto 2xl:container lg:px-20 md:px-6 py-4 px-4 sm:w-auto mb-10">
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
            </ul>
        </div>
        <h1 class="text-3xl font-semibold w-full mt-12 mb-8">{{ $adventure->title }}</h1>
        <div
            class="flex flex-col-reverse items-center lg:flex-row lg:items-start justify-center gap-4 w-full h-full pt-2">
            <div class="dark:bg-white-800 dark:text-gray-100 w-full min-h-[42vh] shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px]">
                <div class="container max-w-6xl p-4 mx-auto space-y-6 sm:space-y-12 w-full h-full ">
                    <p id="wikiContent2" class="text-black font-medium">{{ $adventure->desc }}</p>
                </div>
            </div>
            <div class="w-full lg:w-[35%] md:mx-auto h-full border-t-2">
                <div class="flex flex-col gap-4 w-full h-full shadow-lg pb-4">
                    <img src="{{ $adventure->images->first()?->name ? asset('storage/' . $adventure->images->first()?->name) : asset('assets/images/adventures/default_adventure.jpeg') }}"
                        class="object-cover w-full lg:h-[154px] lg:w-[268px]" alt="chair" />

                    <div class="flex flex-col justify-between pl-3 p-1">
                        <p><span class="font-semibold">Destination:</span><a
                                href="/adventures?destination={{ $adventure->destination->id }}"
                                class="hover:underline"> {{ $adventure->destination->name }}</a></p>
                        <p><span class="font-semibold">Created at:</span> {{ $adventure->created_at }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col">
            <h1 class="text-3xl font-semibold w-full mt-20 mb-4">Gallery</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 mt-8 gap-2">
                @unless (count($adventure->images) == 0)
                    @foreach ($adventure->images as $image)
                        <x-card>
                            <img src="{{ asset('storage/' . $image->name) }}"
                                class="h-80 md:h-60 w-full object-cover" alt="chair" />
                        </x-card>
                    @endforeach
                @else
                    <p>No images in gallery</p>
                @endunless
            </div>
        </div>
    </div>
</x-layout>
