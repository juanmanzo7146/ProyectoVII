<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        Dashboard
                    </x-nav-link>

                    <x-nav-link :href="route('productos.index')">
                        Productos
                    </x-nav-link>
                </div>

            </div>

            <!-- Usuario -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                
                @auth
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="inline-flex items-center px-3 py-2 text-sm rounded-md text-gray-600 hover:text-gray-900">
                                <div>{{ auth()->user()->name }}</div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">
                                Perfil
                            </x-dropdown-link>

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault(); this.closest('form').submit();">
                                    Cerrar sesión
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                @endauth

                @guest
                    <a href="{{ route('login') }}" class="text-gray-700 px-4">
                        Iniciar sesión
                    </a>

                    <a href="{{ route('register') }}" class="text-gray-700 px-4">
                        Registrarse
                    </a>
                @endguest

            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open">
                    ☰
                </button>
            </div>

        </div>
    </div>

    <!-- Responsive -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">

        <x-responsive-nav-link :href="route('dashboard')">
            Dashboard
        </x-responsive-nav-link>

        <x-responsive-nav-link :href="route('productos.index')">
            Productos
        </x-responsive-nav-link>

        @auth
            <div class="px-4 mt-4">
                <div>{{ auth()->user()->name }}</div>
                <div class="text-sm text-gray-500">{{ auth()->user()->email }}</div>
            </div>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="block px-4 py-2 text-left w-full">
                    Cerrar sesión
                </button>
            </form>
        @endauth

        @guest
            <a href="{{ route('login') }}" class="block px-4 py-2">
                Login
            </a>

            <a href="{{ route('register') }}" class="block px-4 py-2">
                Registro
            </a>
        @endguest

    </div>
</nav>