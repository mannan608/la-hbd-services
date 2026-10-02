
    <header class="fixed top-0 left-0 w-full z-50 border-0 bg-white backdrop-blur-md dark:bg-neutral-900/95">

        <nav class="max-w-7xl mx-auto px-5 lg:px-8">

            <div class="flex justify-between items-center h-18 md:h-20">
                <!-- Mobile Menu Button -->
                <button id="menuBtn" class="md:hidden">

                    <!-- Hamburger -->
                    <svg id="menuOpenIcon" class="w-7 h-7 text-neutral-600" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16">
                        </path>
                    </svg>

                    <!-- Close -->
                    <svg id="menuCloseIcon" class="hidden w-7 h-7 text-neutral-600" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>

                </button>
                <!-- Logo -->
                <div class="p-1.5 flex items-center gap-2">
                    <a href="/" class="flex items-center gap-3 group font-semibold">
                        <img src="{{ asset('logo.webp') }}" alt="HBD Language Academy" class="w-auto">
                    </a>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center gap-4 md:gap-6 lg:gap-8 text-sm font-medium uppercase">
                    {{-- about --}}
                    <a href="{{ route('about') }}"
                        class="relative font-medium transition-all duration-300
                            {{ request()->routeIs('about') ? 'text-brand-600 font-medium after:w-full' : 'text-neutral-600 hover:text-brand-600 after:w-0 hover:after:w-full' }}
                            after:absolute after:left-0 after:-bottom-1.5
                            after:h-0.5 after:bg-brand-600 after:transition-all after:duration-300">
                        About Us
                    </a>

                    {{-- Courses --}}
                    <a href="#" id="ieltsDropdownButton" data-dropdown-toggle="ieltsDropdownHover"
                        data-dropdown-trigger="hover"
                        class="flex items-center relative font-medium transition-all duration-300
                            {{ request()->routeIs('') ? 'text-brand-600 font-medium after:w-full' : 'text-neutral-600 hover:text-brand-600 after:w-0 hover:after:w-full' }}
                            after:absolute after:left-0 after:-bottom-1.5
                            after:h-0.5 after:bg-brand-600 after:transition-all after:duration-300"
                        type="button">
                        IELTS Courses
                        <svg class="w-4 h-4 ms-1.5 -me-0.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 9-7 7-7-7" />
                        </svg>
                    </a>
                    <div id="ieltsDropdownHover"
                        class="z-10 hidden top-full left-0 bg-white rounded-md shadow-lg max-w-150 w-50">
                        <ul class="p-2 text-xs text-body font-medium" aria-labelledby="ieltsDropdownHover">
                            <li>
                                <a href="{{ route('ielts') }}"
                                    class="inline-flex items-center w-full p-2 hover:bg-gray-100 hover:text-heading rounded">
                                    Coaching Classes
                                </a>
                            </li>
                             <li>
                                <a href="{{ route('ielts') }}"
                                    class="inline-flex items-center w-full p-2 hover:bg-gray-100 hover:text-heading rounded">
                                    Mock Tests
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('ielts') }}"
                                    class="inline-flex items-center w-full p-2 hover:bg-gray-100 hover:text-heading rounded">
                                    What is IELTS? 
                                </a>
                            </li>
                        </ul>
                    </div>
                    {{-- Courses --}}
                    <a href="#" id="ptesDropdownButton" data-dropdown-toggle="ptesDropdownHover"
                        data-dropdown-trigger="hover"
                        class="flex items-center relative font-medium transition-all duration-300
                            {{ request()->routeIs('') ? 'text-brand-600 font-medium after:w-full' : 'text-neutral-600 hover:text-brand-600 after:w-0 hover:after:w-full' }}
                            after:absolute after:left-0 after:-bottom-1.5
                            after:h-0.5 after:bg-brand-600 after:transition-all after:duration-300"
                        type="button">
                        PTE Courses
                        <svg class="w-4 h-4 ms-1.5 -me-0.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 9-7 7-7-7" />
                        </svg>
                    </a>

                    <div id="ptesDropdownHover" class="z-10 hidden top-full left-0 bg-white rounded-md shadow-lg max-w-150 w-50">
                       <ul class="p-2 text-xs text-body font-medium" aria-labelledby="ptesDropdownHover">
                            <li>
                                <a href="{{ route('pte') }}"
                                    class="inline-flex items-center w-full p-2 hover:bg-gray-100 hover:text-heading rounded">
                                    Coaching Classes
                                </a>
                            </li>
                             <li>
                                <a href="{{ route('pte') }}"
                                    class="inline-flex items-center w-full p-2 hover:bg-gray-100 hover:text-heading rounded">
                                    Mock Tests
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('pte') }}"
                                    class="inline-flex items-center w-full p-2 hover:bg-gray-100 hover:text-heading rounded">
                                    What is PTE?
                                </a>
                            </li>
                        </ul>
                    </div>

                    {{-- Online Programs --}}
                    <a href="{{ route('online-programs') }}"
                        class="relative font-medium transition-all duration-300
                        {{ request()->routeIs('online-programs') ? 'text-brand-600 font-medium after:w-full' : 'text-neutral-600 hover:text-brand-600 after:w-0 hover:after:w-full' }}
                        after:absolute after:left-0 after:-bottom-1.5
                        after:h-0.5 after:bg-brand-600 after:transition-all after:duration-300">
                        Online Programs
                    </a>
                    {{-- Blog --}}
                    <a href="{{ route('blogs') }}"
                        class="relative font-medium transition-all duration-300
                        {{ request()->routeIs('blogs') ? 'text-brand-600 font-medium after:w-full' : 'text-neutral-600 hover:text-brand-600 after:w-0 hover:after:w-full' }}
                        after:absolute after:left-0 after:-bottom-1.5
                        after:h-0.5 after:bg-brand-600 after:transition-all after:duration-300">
                        Blog
                    </a>

                    {{-- contact --}}
                    <a href="{{ route('contact') }}"
                        class="relative font-medium transition-all duration-300
                            {{ request()->routeIs('contact') ? 'text-brand-600 font-medium after:w-full' : 'text-neutral-600 hover:text-brand-600 after:w-0 hover:after:w-full' }}
                            after:absolute after:left-0 after:-bottom-1.5
                            after:h-0.5 after:bg-brand-600 after:transition-all after:duration-300">
                        Contact
                    </a>


                </div>

                <div class="flex items-center gap-4 lg:gap-6">
                    <a href="#"
                        class="hidden md:flex text-sm uppercase bg-white text-brand-500 px-4 py-2 lg:px-6 lg:py-2.5 border border-brand-500 rounded-lg font-medium hover:bg-brand-600 hover:text-white transition">
                        Free Book Now
                    </a>
                </div>
            </div>

        </nav>

        <!-- Mobile Menu -->
        <div id="mobileMenu" class="hidden md:hidden bg-white border-t border-slate-200 shadow-lg">

            <div class="flex flex-col px-6 py-5 space-y-3 text-base font-medium">
                <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'text-neutral-600 font-medium' : 'text-neutral-600' }}">About Us</a>
                <a href="{{ route('ielts') }}" class="{{ request()->routeIs('ielts') ? 'text-neutral-600 font-medium' : 'text-neutral-600' }}">IELTS</a>
                <a href="{{ route('pte') }}" class="{{ request()->routeIs('pte') ? 'text-neutral-600 font-medium' : 'text-neutral-600' }}">PTE</a>
                <a href="#" class="{{ request()->routeIs('patners') ? 'text-neutral-600 font-medium' : 'text-neutral-600' }}">Online Programs</a>
                <a href="{{ route('blogs') }}" class="{{ request()->routeIs('blogs') ? 'text-neutral-600 font-medium' : 'text-neutral-600' }}">Blogs</a>
                <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'text-neutral-600 font-medium' : 'text-neutral-600' }}">Contact Us</a>

                <div class="flex items-center justify-between mt-6">
                    <a href="#"
                        class="text-sm uppercase bg-brand-600 text-white px-4 py-2 lg:px-6 lg:py-2.5 rounded-lg font-medium hover:bg-brand-600 transition">
                        Free Book Now
                    </a>
                </div>
            </div>
        </div>
    </header>
    <script>
        const menuBtn = document.getElementById('menuBtn');
        const mobileMenu = document.getElementById('mobileMenu');

        const openIcon = document.getElementById('menuOpenIcon');
        const closeIcon = document.getElementById('menuCloseIcon');

        menuBtn.addEventListener('click', () => {

            mobileMenu.classList.toggle('hidden');

            if (mobileMenu.classList.contains('hidden')) {
                openIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');
            } else {
                openIcon.classList.add('hidden');
                closeIcon.classList.remove('hidden');
            }

        });
    </script>
