<div class="bg-gradient-to-r from-primary-one to-primary-two px-4 lg:px-20">

    <!-- Navbar -->
    <div class="container mx-auto w-full text-gray-700 pt-8">
        <div x-data="{ open: false }"
            class="bg-white rounded-tl-xl rounded-br-xl flex flex-col px-4 mx-auto lg:items-center lg:justify-between lg:flex-row lg:px-6 lg:px-12">
            <div class=" flex flex-row items-center justify-between">
                <a class="flex items-center py-4 px-2" href="{{ route('home') }}">
                    <img src="../imgs/logo.png" alt="{{ env('APP_NAME') }}" class="h-16 mt-3">
                </a>
                <button class="lg:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                        <path x-show="!open" fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                        <path x-show="open" fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd" style="display: none;"></path>
                    </svg>
                </button>

            </div>
            <nav :class="{ 'flex': open, 'hidden': !open }"
                class="flex-col flex-grow pb-4 lg:pb-0 hidden lg:flex lg:justify-end lg:flex-row lg:space-x-4 xl:space-x-8">

                <a href="{{ route('home') }}" class="block font-semibold py-2 hover:text-primary-two {{ request()->routeIs('home') ? '  text-primary-two' : '' }}">Home</a>

                <a href="{{ route('about') }}" class="block font-semibold py-2 hover:text-primary-two {{ request()->routeIs('about') ? '  text-primary-two' : '' }}">About</a>

                <div @click.away="open = false" class="relative" x-data="{ open: false }">
                    <button @click="open = !open" class="block w-full text-left font-semibold py-2 hover:text-primary-two {{ request()->routeIs('service.show') ? '  text-primary-two' : '' }}">
                        <span>Services</span>
                        <svg fill="currentColor" viewBox="0 0 20 20" :class="{ 'rotate-180': open, 'rotate-0': !open }"
                            class="inline w-4 h-4  transition-transform duration-200 transform md:-mt-1 rotate-0">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="transform opacity-0 scale-95"
                        x-transition:enter-end="transform opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="transform opacity-100 scale-100"
                        x-transition:leave-end="transform opacity-0 scale-95"
                        class="hidden absolute right-0 md:right-[12rem]   lg:-right-[17rem]  xl:-right-[33rem] w-full mt-2 origin-top-right rounded-md shadow-lg md:w-[30rem] lg:w-[37rem] xl:w-[67rem] z-40"
                        :class="{ 'hidden': !open }" style="display: none;">
                        <div
                            class="px-2 py-2 rounded-md shadow  container mx-auto w-full flex flex-wrap justify-between bg-primary-two">

                            <ul class="px-4 w-full   md:w-2/6 xl:w-1/5 border-gray-600 border-b lg:border-b-0 ">

                                {{-- @for ($i = 0; $i <= 4; $i++)
                                    <li>
                                        <a href="{{ route('service.show', $services[$i]->slug) }}"
                                            class="block p-2 text-sm hover:bg-primary-one text-white">{{ $services[$i]->name }}</a>
                                    </li>
                                @endfor --}}
                            </ul>

                            <ul class="px-4 w-full  md:w-2/6 xl:w-1/5 border-gray-600 border-b lg:border-b-0 ">

                                @for ($i = 5; $i <= 9; $i++)
                                    <li>
                                        <a href="{{ route('service.show', $services[$i]->slug) }}"
                                            class="block p-2 text-sm hover:bg-primary-one text-white">{{ $services[$i]->name }}</a>
                                    </li>
                                @endfor
                            </ul>

                            <ul class="px-4 w-full  md:w-2/6 xl:w-1/5 border-gray-600 border-b lg:border-b-0 ">

                                {{-- @for ($i = 10; $i <= 14; $i++)
                                    <li>
                                        <a href="{{ route('service.show', $services[$i]->slug) }}"
                                            class="block p-2 text-sm hover:bg-primary-one text-white">{{ $services[$i]->name }}</a>
                                    </li>
                                @endfor --}}
                            </ul>

                            <ul class="px-4 w-full  md:w-2/6 xl:w-1/5 border-gray-600 border-b lg:border-b-0 ">

                                {{-- @for ($i = 15; $i <= 19; $i++)
                                    <li>
                                        <a href="{{ route('service.show', $services[$i]->slug) }}"
                                            class="block p-2 text-sm hover:bg-primary-one text-white">{{ $services[$i]->name }}</a>
                                    </li>
                                @endfor --}}
                            </ul>

                        <ul class="px-4 w-full md:w-2/6 xl:w-1/5 border-gray-600 border-b lg:border-b-0 ">

                                {{-- @for ($i = 20; $i <= 24; $i++)
                                    <li>
                                        <a href="{{ route('service.show', $services[$i]->slug) }}"
                                            class="block p-2 text-sm hover:bg-primary-one text-white">{{ $services[$i]->name }}</a>
                                    </li>
                                @endfor --}}
                            </ul>



                        </div>
                    </div>
                </div>

                <div class="relative hidden md:block  ">
                    <div class="hidden lg:block absolute h-14 w-14 -left-5 -top-5">
                        <span
                            class="animate-wave text-sm font-bold inline-block py-1 px-2 rounded text-white bg-primary-one  last:mr-0 ml-3 mr-5">
                            From£4.00
                        </span>
                    </div>

                    <a href="{{ route('price') }}" id="priceTag"
                        class="block font-semibold text-primary-three hover:text-primary-two py-2 lg:mx-2 {{ request()->routeIs('price') ? '  text-primary-two' : '' }}">Pricing</a>
                </div>

                <a href="{{ route('price') }}" class="block md:hidden font-semibold py-2 hover:text-primary-two {{ request()->routeIs('price') ? '  text-primary-two' : '' }}">Pricing</a>
                 <a href="{{ route('reviews') }}" class="block font-semibold py-2 hover:text-primary-two {{ request()->routeIs('reviews') ? '  text-primary-two' : '' }}">Reviews</a>
                <a href="{{ route('contact') }}" class="block font-semibold py-2 hover:text-primary-two {{ request()->routeIs('contact') ? '  text-primary-two' : '' }}">Contact</a>
                <a href="{{ route('blog') }}" class="block font-semibold py-2 hover:text-primary-two {{ request()->routeIs('blog') ? '  text-primary-two' : '' }}">Blog</a>
                <a href="{{ route('order') }}" class="block font-semibold py-2 hover:text-primary-two {{ request()->routeIs('order') ? '  text-primary-two' : '' }}">Order</a>
                <a href="{{ route('login') }}" class="block font-semibold py-2 hover:text-primary-two {{ request()->routeIs('login') ? '  text-primary-two' : '' }}">Login</a>
                <a href="https://api.whatsapp.com/send?phone={{ $web_setting->contact }}"
                    class="block font-semibold p-2 bg-gradient-to-r from-primary-one to-primary-two text-white rounded-xl"><i
                        class="fa fa-whatsapp mr-2"></i>{{ '+'.$web_setting->contact }} </a>

            </nav>
        </div>
    </div>

</div>
