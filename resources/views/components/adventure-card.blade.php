<div>
    <p class="p-6 font-bold leading-3 text-white absolute top-0 left-0 stroke">{{ $adventure->destination->name }}</p>
    <p class="p-6 text-xs font-bold leading-3 text-white absolute top-0 right-0 stroke">
        {{ $adventure->created_at }}
    </p>
    <div class="absolute bottom-0 left-0 p-6">
        <h2 class="text-xl font-bold 5 text-white stroke">{{ $adventure->title }}</h2>
        <a href="/adventures/{{ $adventure->id }}"
            class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline">
            <p class="pr-2 text-sm font-bold leading-none stroke">Read More</p>
            <svg class="fill-stroke" width="16" height="16" viewBox="0 0 16 16" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M5.75 12.5L10.25 8L5.75 3.5" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </a>
    </div>
</div>
    <img src="{{$adventure->images->first()?->name ? asset('storage/' . $adventure->images->first()?->name) : asset('assets/images/adventures/default_adventure.jpeg')}}" class="h-80 md:h-60 w-full object-cover"
        alt="chair" />
