<x-layout>
    <div class="2xl:mx-auto 2xl:container lg:px-20 md:px-6 py-4 px-4 w-96 sm:w-auto">
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
                    <a href="/stats" class="text-gray-600 hover:text-blue-500">
                        Stats
                    </a>
                </li>
            </ul>
        </div>
        <div class="py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl lg:py-20">
            <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
              <div>
                <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-blue-200">
                  Brand new
                </p>
              </div>
              <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
                <span class="relative inline-block">
                  <svg viewBox="0 0 52 24" fill="currentColor" class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-blue-gray-100 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
                    <defs>
                      <pattern id="d5589eeb-3fca-4f01-ac3e-983224745704" x="0" y="0" width=".135" height=".30">
                        <circle cx="1" cy="1" r=".7"></circle>
                      </pattern>
                    </defs>
                    <rect fill="url(#d5589eeb-3fca-4f01-ac3e-983224745704)" width="52" height="24"></rect>
                  </svg>
                  <span class="relative">What</span>
                </span>
                our users shared so far!
              </h2>
              <p class="text-base text-gray-700 md:text-lg">
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque rem aperiam, eaque ipsa quae.
              </p>
            </div>
            <div class="relative w-full p-px mx-auto mb-4 overflow-hidden transition-shadow duration-300 border rounded lg:mb-8 lg:max-w-4xl group hover:shadow-xl">
              <div class="absolute bottom-0 left-0 w-full h-1 duration-300 origin-left transform scale-x-0 bg-blue-600 group-hover:scale-x-100"></div>
              <div class="absolute bottom-0 left-0 w-1 h-full duration-300 origin-bottom transform scale-y-0 bg-blue-600 group-hover:scale-y-100"></div>
              <div class="absolute top-0 left-0 w-full h-1 duration-300 origin-right transform scale-x-0 bg-blue-600 group-hover:scale-x-100"></div>
              <div class="absolute bottom-0 right-0 w-1 h-full duration-300 origin-top transform scale-y-0 bg-blue-600 group-hover:scale-y-100"></div>
              <div class="relative flex flex-col justify-evenly items-center h-full py-10 duration-300 bg-white rounded-sm transition-color sm:items-stretch sm:flex-row">
                <div class="py-8 text-center">
                    <p class="text-center md:text-base">
                        Most visited destination
                    </p>
                  <h6 class="text-4xl font-bold text-blue-600 sm:text-5xl">
                    {{ $popularDestination->destination->name }}
                  </h6>
                </div>
                <div class="w-56 h-1 transition duration-300 transform bg-gray-300 rounded-full group-hover:bg-blue-600 group-hover:scale-110 sm:h-auto sm:w-1"></div>
                <div class="py-8 text-center">
                    <p class="text-center md:text-base">
                        Total adventures our users shared
                    </p>
                  <h6 class="text-4xl font-bold text-blue-600 sm:text-5xl">
                    {{ $totalAdventures }}
                  </h6>
                </div>
              </div>
            </div>
            <p class="mx-auto mb-4 text-gray-600 sm:text-center lg:max-w-2xl lg:mb-6 md:px-16">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
          </div>
    </div>
</x-layout>