<nav x-data="{ open: false }" class=" top-0 w-full z-50 sticky">
    <div class="flex items-center justify-between bg-[#080610]/50 px-4 py-3 border-b border-gray-500/30">
        <img src="/images/TaurenAi-Logo-text.svg" alt="Logo" class="w-32">

        <!-- Desktop Menu -->
        <ul class="hidden lg:flex gap-4 text-[#E7E7E7]">
            <li class="hover:text-gray-300 transition">
                <a wire:navigate href="/">Начало</a>
            </li>
            <li class="hover:text-gray-300 transition">
                <a wire:navigate href="/problem">Проблем</a>
            </li>
            <li class="hover:text-gray-300 transition">
                <a wire:navigate href="/solution">Решение</a>
            </li>
            <li class="hover:text-gray-300 transition">
                <a wire:navigate href="/about">За нас</a>
            </li>
            <li class="hover:text-gray-300 transition">
                <a wire:navigate href="/pricing">Цени</a>
            </li>
            <li class="hover:text-gray-300 transition">
                <a wire:navigate href="/contacts">Контакти</a>
            </li>
        </ul>

        <!-- Auth Links -->
        <div class="hidden lg:flex items-center gap-2 text-[#E7E7E7]">
            @if (Route::has('login'))
                @auth
                    <a wire:navigate href="{{ url('/dashboard') }}"
                        class="px-3 py-2 ring-1 ring-transparent transition hover:text-gray-300/70">
                        Dashboard
                    </a>
                @else
                    <a wire:navigate href="{{ route('login') }}"
                        class="px-3 py-2 ring-1 ring-transparent transition hover:text-gray-300/70">
                        Log in
                    </a>
                    @if (Route::has('register'))
                        <a wire:navigate href="{{ route('register') }}"
                            class="px-3 py-2 ring-1 ring-transparent transition hover:text-gray-300/70">
                            Register
                        </a>
                    @endif
                @endauth
            @endif
        </div>

        <!-- Mobile Menu Button -->
        <button @click="open = !open" class="lg:hidden text-[#E7E7E7] focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 21 21">
                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    d="M4.5 6.5h12m-12.002 4h11.997M4.5 14.5h11.995" />
            </svg>
        </button>
    </div>

    <!-- Mobile Drawer Menu -->
    <div x-show="open" x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 transform translate-x-full"
        x-transition:enter-end="opacity-100 transform translate-x-0"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 transform translate-x-0"
        x-transition:leave-end="opacity-0 transform translate-x-full" @click.away="open = false"
        class="fixed inset-0 z-40 lg:hidden">
        <div class="fixed top-0 right-0 w-64 h-full bg-[#080610] p-4 overflow-y-auto">
            <button @click="open = false" class="text-[#E7E7E7] absolute top-4 right-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            <ul class="mt-16 space-y-4 text-[#E7E7E7]">
                <li class="hover:text-gray-300 transition">
                    <a wire:navigate href="/">Начало</a>
                </li>
                <li class="hover:text-gray-300 transition">
                    <a wire:navigate href="/problem">Проблем</a>
                </li>
                <li class="hover:text-gray-300 transition">
                    <a wire:navigate href="/solution">Решение</a>
                </li>
                <li class="hover:text-gray-300 transition">
                    <a wire:navigate href="/about">За нас</a>
                </li>
                <li class="hover:text-gray-300 transition">
                    <a wire:navigate href="/pricing">Цени</a>
                </li>
                <li class="hover:text-gray-300 transition">
                    <a wire:navigate href="/contacts">Контакти</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
