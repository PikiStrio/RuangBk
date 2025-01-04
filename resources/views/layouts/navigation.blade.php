<nav x-data="{ open: false }" class="bg-opacity-50 backdrop-blur-lg dark:backdrop-blur-lg sticky top-0 z-50">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-22">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center px-16">
                    <a href="{{ route('dashboard') }}">
                        <img src="{{ asset('build/assets/images/24.png') }}" alt="Logo"
                            class="h-auto w-auto max-h-24 max-w-24">
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-16 sm:-my-px sm:ms-10 sm:flex items-center">
                    <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                        {{ __('Home') }}
                    </x-nav-link>
                    <x-nav-link :href="route('flashsale')" :active="request()->routeIs('flashsale')">
                        {{ __('Flashsale') }}
                    </x-nav-link>
                    <x-dropdown align='left'>
                        <x-slot name="trigger">
                            <button x-data="{ open: false }"
                                class="flex items-center space-x-2 text-gray-600 hover:text-violet-800">
                                <x-nav-link>Kelas
                                    <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </x-nav-link>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <div x-show="open" x-transition
                                class="absolute bg-white border border-gray-300 rounded-md shadow-lg mt-2 py-4 w-72 z-10 px-4">
                                <div class="flex flex-col space-y-2">
                                    <a href="{{ route('classMath') }}" class="flex group">
                                        <img src="{{ asset('build/assets/icons/math-icon.svg') }}" alt="Logo"
                                            class="h-10 mx-2">
                                        <div class="flex flex-col text-sm">
                                            <h3 class="font-bold group-hover:text-violet-800">Math</h3>
                                            <p class="font-thin text-gray-600 group-hover:text-black">Become a Jerome
                                                Polin</p>
                                        </div>
                                    </a>
                                    <a href="{{ route('classScience') }}" class="flex group">
                                        <img src="{{ asset('build/assets/icons/science-icon.svg') }}" alt="Logo"
                                            class="h-10 mx-2">
                                        <div class="flex flex-col text-sm">
                                            <h3 class="font-bold group-hover:text-violet-800">Science</h3>
                                            <p class="font-thin text-gray-600 group-hover:text-black">Become a Isaac Newton</p>
                                        </div>
                                    </a>
                                    <a href="{{ route('classEnglish') }}" class="flex group">
                                        <img src="{{ asset('build/assets/icons/english-icon.svg') }}" alt="Logo"
                                            class="h-10 mx-2">
                                        <div class="flex flex-col text-sm">
                                            <h3 class="font-bold group-hover:text-violet-800">English</h3>
                                            <p class="font-thin text-gray-600 group-hover:text-black">Become a Translator</p>
                                        </div>
                                    </a>
                                    <a href="{{ route('classIndonesia') }}" class="flex group">
                                        <img src="{{ asset('build/assets/icons/indo-icon.svg') }}" alt="Logo"
                                            class="h-10 mx-2">
                                        <div class="flex flex-col text-sm">
                                            <h3 class="font-bold group-hover:text-violet-800">Indonesian</h3>
                                            <p class="font-thin text-gray-600 group-hover:text-black">Become a Megawati</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </x-slot>

                    </x-dropdown>
                    <x-nav-link :href="route('mentor')" :active="request()->routeIs('mentor')">
                        {{ __('Mentor') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            @auth
                <div class="hidden sm:flex sm:items-center sm:ms-6">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button
                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 bg-opacity-50 dark:bg-opacity-50 backdrop-blur-lg hover:text-indigo-500 dark:hover:text-indigo-500 focus:outline-none transition ease-in-out duration-150">
                                <div>{{ Auth::user()->name }}</div>

                                <div class="ms-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('dashboard')" class="text-gray-500 hover:text-indigo-500">
                                {{ __('Dashboard') }}
                            </x-dropdown-link>
                            <x-dropdown-link :href="route('profile.edit')" class="text-gray-500 hover:text-indigo-500">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();"
                                    class="text-gray-500 hover:text-indigo-500">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            @else
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('login')" class="text-gray-500 hover:text-indigo-500">
                        {{ __('Login') }}
                    </x-nav-link>
                    <x-nav-link :href="route('register')" class="text-gray-500 hover:text-indigo-500">
                        {{ __('Register') }}
                    </x-nav-link>
                </div>
            @endauth

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }"
        class="hidden sm:hidden bg-white bg-opacity-50 backdrop-blur-lg dark:bg-gray-800 dark:bg-opacity-50 dark:backdrop-blur-lg">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')" class="text-gray-500 hover:text-indigo-500">
                {{ __('Home') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        @auth
            <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
                <div class="px-4">
                    <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>

                <div class="mt-3 space-y-1">
                    <x-responsive-nav-link :href="route('profile.edit')" class="text-gray-500 hover:text-indigo-500">
                        {{ __('Profile') }}
                    </x-responsive-nav-link>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();"
                            class="text-gray-500 hover:text-indigo-500">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            </div>
        @else
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('login')" class="text-gray-500 hover:text-indigo-500">
                    {{ __('Login') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('register')" class="text-gray-500 hover:text-indigo-500">
                    {{ __('Register') }}
                </x-responsive-nav-link>
            </div>
        @endauth
    </div>
</nav>
