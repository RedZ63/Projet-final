<header class="header">
    <nav>
        <div class="logo">
            <a href="/">
                <img src="../img/logo1.png" alt="logo entreprise white beauty" style="height:12vh; width:auto;">
            </a>
        </div>
        <input type="checkbox" id="menu-toggle">
        <label for="menu-toggle" class="menu-icon">&#9776;</label>
        <ul class="menu">
            <li>


                <a href="/">
                    {{ __('Accueil') }}
                </a>

            </li>
            <li>


                <a href="/nos_services">
                    {{ __('Nos services') }}
                </a>

            </li>
            <li>

                <a href="/blog">
                    {{ __('Actualités') }}
                </a>
            </li>
            <li>


                <a href="/qsn">
                    {{ __('Qui sommes nous') }}
                </a>

            </li>
            <li>


                <a href="/contact">
                    {{ __('Contact') }}
                </a>

            </li>

            @auth
                @if (auth()->user()->isAdmin == 'oui')
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" style="color : ">
                        {{ __('Dashboard') }}
                    </x-nav-link>

                    <x-nav-link :href="route('posts.create')" :active="request()->routeIs('posts.create')" style="color :">
                        {{ __('Créer un post') }}
                    </x-nav-link>
                @endif

            @endauth
            <div class="responsiv-nav">
                @auth
                    <x-dropdown align="right" width="48" style="margin-left : 1rem">
                        <x-slot name="trigger">
                            <button
                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                <div>{{ Auth::user()->name }}</div>

                                <div class="ml-1">
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

                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profil') }}
                            </x-dropdown-link>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Se déconnecter') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                @endauth

                @guest
                    <x-dropdown align="right" width="48" style="margin-left : 1rem">
                        <x-slot name="trigger">
                            <button
                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                <div>Menu</div>

                                <div class="ml-1">
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
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profil') }}
                            </x-dropdown-link>

                            <!-- Authentication -->

                            <x-dropdown-link :href="route('login')">
                                {{ __('Se connecter') }}
                            </x-dropdown-link>
                            <x-dropdown-link :href="route('register')">
                                {{ __('S\'enregistrer') }}
                            </x-dropdown-link>

                        </x-slot>
                    </x-dropdown>
                @endguest

            </div>
        </ul>
    </nav>
</header>
