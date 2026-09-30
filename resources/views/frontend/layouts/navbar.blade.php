    @php
        $categories = json_decode(file_get_contents(resource_path('data/categories.json')), true);
        // @dd($categories);
    @endphp
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
                        <img src="{{ asset('logo.webp') }}" alt="RPL CRM" class="w-auto">
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
                    <a href="#" id="dropdownHoverButton" data-dropdown-toggle="dropdownHover"
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

                    <div id="dropdownHover" class="z-10 hidden top-full left-0 w-full bg-white shadow-xl">
                        <div class="max-w-7xl mx-auto px-4 md:px-6 py-5 md:py-6 text-[#1C2826] font-sans antialiased">

                            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-10 border-t border-brand-300 pt-4">

                                {{-- Column 1: Trade --}}
                                <div class="space-y-1">
                                    <div class="px-2 group">
                                        <a href="{{ route('courses.index', ['category' => 'trade']) }}" class="block">
                                            {{-- Header + Icon Wrapper --}}
                                            <div class="inline-flex items-center gap-1.5">
                                                <h2
                                                    class="font-semibold text-lg lg:text-xl font-serif text-slate-900 group-hover:text-brand-500 tracking-tight transition-colors duration-200">
                                                    Trade
                                                </h2>

                                                <svg class="w-4 h-4 text-brand-500 opacity-0 -translate-x-1 translate-y-1 group-hover:opacity-100 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-all duration-200 shrink-0"
                                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M7 17L17 7M17 7H7M17 7V17"></path>
                                                </svg>
                                            </div>

                                            {{-- Description Text --}}
                                            <p class="text-xs text-slate-500 mt-1 font-light leading-relaxed">
                                                Hands-on construction & building qualifications.
                                            </p>
                                        </a>
                                    </div>

                                    <div class="space-y-1.5 pt-2">
                                        <a href="#"
                                            class="group flex items-center justify-between py-2.5 px-3 hover:bg-brand-50 rounded-lg transition-all duration-200">
                                            <div>
                                                <h3
                                                    class="text-sm font-medium text-slate-800 group-hover:text-brand-600 transition-colors">
                                                    Certificate III in Carpentry
                                                </h3>
                                                <span
                                                    class="text-[11px] font-mono text-slate-400 mt-0.5 block uppercase tracking-wider">CPC30220</span>
                                            </div>
                                            <svg class="w-4 h-4 text-slate-400 group-hover:text-brand-500 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-all duration-200 shrink-0 ml-2"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M7 17L17 7M17 7H7M17 7V17"></path>
                                            </svg>
                                        </a>

                                        <a href="#"
                                            class="group flex items-center justify-between py-2.5 px-3 hover:bg-brand-50 rounded-lg transition-all duration-200">
                                            <div>
                                                <h3
                                                    class="text-sm font-medium text-slate-800 group-hover:text-brand-600 transition-colors">
                                                    Diploma of Building and Construction
                                                </h3>
                                                <span
                                                    class="text-[11px] font-mono text-slate-400 mt-0.5 block uppercase tracking-wider">CPC50220</span>
                                            </div>
                                            <svg class="w-4 h-4 text-slate-400 group-hover:text-brand-500 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-all duration-200 shrink-0 ml-2"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M7 17L17 7M17 7H7M17 7V17"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>

                                {{-- Column 2: Health --}}
                                <div class="space-y-1">
                                    <div class="px-2 group">
                                        <a href="{{ route('courses.index', ['category' => 'health']) }}" class="block">
                                            {{-- Header + Icon Wrapper --}}
                                            <div class="inline-flex items-center gap-1.5">
                                                <h2
                                                    class="font-semibold text-lg lg:text-xl font-serif text-slate-900 group-hover:text-brand-500 tracking-tight transition-colors duration-200">
                                                    Health
                                                </h2>

                                                <svg class="w-4 h-4 text-brand-500 opacity-0 -translate-x-1 translate-y-1 group-hover:opacity-100 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-all duration-200 shrink-0"
                                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M7 17L17 7M17 7H7M17 7V17"></path>
                                                </svg>
                                            </div>

                                            {{-- Description Text --}}
                                            <p class="text-xs text-slate-500 mt-1 font-light leading-relaxed">
                                                Care, ageing and mental health pathways.
                                            </p>
                                        </a>
                                    </div>

                                    <div class="space-y-1.5 pt-2">
                                        <a href="#"
                                            class="group flex items-center justify-between py-2.5 px-3 hover:bg-brand-50 rounded-lg transition-all duration-200">
                                            <div>
                                                <h3
                                                    class="text-sm font-medium text-slate-800 group-hover:text-brand-600 transition-colors">
                                                    Certificate IV in Ageing Support
                                                </h3>
                                                <span
                                                    class="text-[11px] font-mono text-slate-400 mt-0.5 block uppercase tracking-wider">CHC43015</span>
                                            </div>
                                            <svg class="w-4 h-4 text-slate-400 group-hover:text-brand-500 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-all duration-200 shrink-0 ml-2"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M7 17L17 7M17 7H7M17 7V17"></path>
                                            </svg>
                                        </a>

                                        <a href="#"
                                            class="group flex items-center justify-between py-2.5 px-3 hover:bg-brand-50 rounded-lg transition-all duration-200">
                                            <div>
                                                <h3
                                                    class="text-sm font-medium text-slate-800 group-hover:text-brand-600 transition-colors">
                                                    Diploma of Mental Health
                                                </h3>
                                                <span
                                                    class="text-[11px] font-mono text-slate-400 mt-0.5 block uppercase tracking-wider">CHC53315</span>
                                            </div>
                                            <svg class="w-4 h-4 text-slate-400 group-hover:text-brand-500 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-all duration-200 shrink-0 ml-2"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M7 17L17 7M17 7H7M17 7V17"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>

                                {{-- Column 3: Business --}}
                                <div class="space-y-1">
                                    <div class="px-2 group">
                                        <a href="{{ route('courses.index', ['category' => 'business']) }}"
                                            class="block">
                                            {{-- Header + Icon Wrapper --}}
                                            <div class="inline-flex items-center gap-1.5">
                                                <h2
                                                    class="font-semibold text-lg lg:text-xl font-serif text-slate-900 group-hover:text-brand-500 tracking-tight transition-colors duration-200">
                                                    Business
                                                </h2>

                                                <svg class="w-4 h-4 text-brand-500 opacity-0 -translate-x-1 translate-y-1 group-hover:opacity-100 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-all duration-200 shrink-0"
                                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M7 17L17 7M17 7H7M17 7V17"></path>
                                                </svg>
                                            </div>

                                            {{-- Description Text --}}
                                            <p class="text-xs text-slate-500 mt-1 font-light leading-relaxed">
                                                Leadership, management and enterprise skills.
                                            </p>
                                        </a>
                                    </div>

                                    <div class="space-y-1.5 pt-2">
                                        <a href="#"
                                            class="group flex items-center justify-between py-2.5 px-3 hover:bg-brand-50 rounded-lg transition-all duration-200">
                                            <div>
                                                <h3
                                                    class="text-sm font-medium text-slate-800 group-hover:text-brand-600 transition-colors">
                                                    Diploma of Business
                                                </h3>
                                                <span
                                                    class="text-[11px] font-mono text-slate-400 mt-0.5 block uppercase tracking-wider">BSB50120</span>
                                            </div>
                                            <svg class="w-4 h-4 text-slate-400 group-hover:text-brand-500 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-all duration-200 shrink-0 ml-2"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M7 17L17 7M17 7H7M17 7V17"></path>
                                            </svg>
                                        </a>

                                        <a href="#"
                                            class="group flex items-center justify-between py-2.5 px-3 hover:bg-brand-50 rounded-lg transition-all duration-200">
                                            <div>
                                                <h3
                                                    class="text-sm font-medium text-slate-800 group-hover:text-brand-600 transition-colors">
                                                    Advanced Diploma of Business
                                                </h3>
                                                <span
                                                    class="text-[11px] font-mono text-slate-400 mt-0.5 block uppercase tracking-wider">BSB60120</span>
                                            </div>
                                            <svg class="w-4 h-4 text-slate-400 group-hover:text-brand-500 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-all duration-200 shrink-0 ml-2"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M7 17L17 7M17 7H7M17 7V17"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    {{-- Courses --}}
                    <a href="#" id="dropdownHoverButton" data-dropdown-toggle="dropdownHover"
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

                    <div id="dropdownHover" class="z-10 hidden top-full left-0 w-full bg-white shadow-xl">
                        <div class="max-w-7xl mx-auto px-4 md:px-6 py-5 md:py-6 text-[#1C2826] font-sans antialiased">

                            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-10 border-t border-brand-300 pt-4">

                                {{-- Column 1: Trade --}}
                                <div class="space-y-1">
                                    <div class="px-2 group">
                                        <a href="{{ route('courses.index', ['category' => 'trade']) }}" class="block">
                                            {{-- Header + Icon Wrapper --}}
                                            <div class="inline-flex items-center gap-1.5">
                                                <h2
                                                    class="font-semibold text-lg lg:text-xl font-serif text-slate-900 group-hover:text-brand-500 tracking-tight transition-colors duration-200">
                                                    Trade
                                                </h2>

                                                <svg class="w-4 h-4 text-brand-500 opacity-0 -translate-x-1 translate-y-1 group-hover:opacity-100 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-all duration-200 shrink-0"
                                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M7 17L17 7M17 7H7M17 7V17"></path>
                                                </svg>
                                            </div>

                                            {{-- Description Text --}}
                                            <p class="text-xs text-slate-500 mt-1 font-light leading-relaxed">
                                                Hands-on construction & building qualifications.
                                            </p>
                                        </a>
                                    </div>

                                    <div class="space-y-1.5 pt-2">
                                        <a href="#"
                                            class="group flex items-center justify-between py-2.5 px-3 hover:bg-brand-50 rounded-lg transition-all duration-200">
                                            <div>
                                                <h3
                                                    class="text-sm font-medium text-slate-800 group-hover:text-brand-600 transition-colors">
                                                    Certificate III in Carpentry
                                                </h3>
                                                <span
                                                    class="text-[11px] font-mono text-slate-400 mt-0.5 block uppercase tracking-wider">CPC30220</span>
                                            </div>
                                            <svg class="w-4 h-4 text-slate-400 group-hover:text-brand-500 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-all duration-200 shrink-0 ml-2"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M7 17L17 7M17 7H7M17 7V17"></path>
                                            </svg>
                                        </a>

                                        <a href="#"
                                            class="group flex items-center justify-between py-2.5 px-3 hover:bg-brand-50 rounded-lg transition-all duration-200">
                                            <div>
                                                <h3
                                                    class="text-sm font-medium text-slate-800 group-hover:text-brand-600 transition-colors">
                                                    Diploma of Building and Construction
                                                </h3>
                                                <span
                                                    class="text-[11px] font-mono text-slate-400 mt-0.5 block uppercase tracking-wider">CPC50220</span>
                                            </div>
                                            <svg class="w-4 h-4 text-slate-400 group-hover:text-brand-500 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-all duration-200 shrink-0 ml-2"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M7 17L17 7M17 7H7M17 7V17"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>

                                {{-- Column 2: Health --}}
                                <div class="space-y-1">
                                    <div class="px-2 group">
                                        <a href="{{ route('courses.index', ['category' => 'health']) }}" class="block">
                                            {{-- Header + Icon Wrapper --}}
                                            <div class="inline-flex items-center gap-1.5">
                                                <h2
                                                    class="font-semibold text-lg lg:text-xl font-serif text-slate-900 group-hover:text-brand-500 tracking-tight transition-colors duration-200">
                                                    Health
                                                </h2>

                                                <svg class="w-4 h-4 text-brand-500 opacity-0 -translate-x-1 translate-y-1 group-hover:opacity-100 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-all duration-200 shrink-0"
                                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M7 17L17 7M17 7H7M17 7V17"></path>
                                                </svg>
                                            </div>

                                            {{-- Description Text --}}
                                            <p class="text-xs text-slate-500 mt-1 font-light leading-relaxed">
                                                Care, ageing and mental health pathways.
                                            </p>
                                        </a>
                                    </div>

                                    <div class="space-y-1.5 pt-2">
                                        <a href="#"
                                            class="group flex items-center justify-between py-2.5 px-3 hover:bg-brand-50 rounded-lg transition-all duration-200">
                                            <div>
                                                <h3
                                                    class="text-sm font-medium text-slate-800 group-hover:text-brand-600 transition-colors">
                                                    Certificate IV in Ageing Support
                                                </h3>
                                                <span
                                                    class="text-[11px] font-mono text-slate-400 mt-0.5 block uppercase tracking-wider">CHC43015</span>
                                            </div>
                                            <svg class="w-4 h-4 text-slate-400 group-hover:text-brand-500 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-all duration-200 shrink-0 ml-2"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M7 17L17 7M17 7H7M17 7V17"></path>
                                            </svg>
                                        </a>

                                        <a href="#"
                                            class="group flex items-center justify-between py-2.5 px-3 hover:bg-brand-50 rounded-lg transition-all duration-200">
                                            <div>
                                                <h3
                                                    class="text-sm font-medium text-slate-800 group-hover:text-brand-600 transition-colors">
                                                    Diploma of Mental Health
                                                </h3>
                                                <span
                                                    class="text-[11px] font-mono text-slate-400 mt-0.5 block uppercase tracking-wider">CHC53315</span>
                                            </div>
                                            <svg class="w-4 h-4 text-slate-400 group-hover:text-brand-500 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-all duration-200 shrink-0 ml-2"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M7 17L17 7M17 7H7M17 7V17"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>

                                {{-- Column 3: Business --}}
                                <div class="space-y-1">
                                    <div class="px-2 group">
                                        <a href="{{ route('courses.index', ['category' => 'business']) }}"
                                            class="block">
                                            {{-- Header + Icon Wrapper --}}
                                            <div class="inline-flex items-center gap-1.5">
                                                <h2
                                                    class="font-semibold text-lg lg:text-xl font-serif text-slate-900 group-hover:text-brand-500 tracking-tight transition-colors duration-200">
                                                    Business
                                                </h2>

                                                <svg class="w-4 h-4 text-brand-500 opacity-0 -translate-x-1 translate-y-1 group-hover:opacity-100 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-all duration-200 shrink-0"
                                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M7 17L17 7M17 7H7M17 7V17"></path>
                                                </svg>
                                            </div>

                                            {{-- Description Text --}}
                                            <p class="text-xs text-slate-500 mt-1 font-light leading-relaxed">
                                                Leadership, management and enterprise skills.
                                            </p>
                                        </a>
                                    </div>

                                    <div class="space-y-1.5 pt-2">
                                        <a href="#"
                                            class="group flex items-center justify-between py-2.5 px-3 hover:bg-brand-50 rounded-lg transition-all duration-200">
                                            <div>
                                                <h3
                                                    class="text-sm font-medium text-slate-800 group-hover:text-brand-600 transition-colors">
                                                    Diploma of Business
                                                </h3>
                                                <span
                                                    class="text-[11px] font-mono text-slate-400 mt-0.5 block uppercase tracking-wider">BSB50120</span>
                                            </div>
                                            <svg class="w-4 h-4 text-slate-400 group-hover:text-brand-500 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-all duration-200 shrink-0 ml-2"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M7 17L17 7M17 7H7M17 7V17"></path>
                                            </svg>
                                        </a>

                                        <a href="#"
                                            class="group flex items-center justify-between py-2.5 px-3 hover:bg-brand-50 rounded-lg transition-all duration-200">
                                            <div>
                                                <h3
                                                    class="text-sm font-medium text-slate-800 group-hover:text-brand-600 transition-colors">
                                                    Advanced Diploma of Business
                                                </h3>
                                                <span
                                                    class="text-[11px] font-mono text-slate-400 mt-0.5 block uppercase tracking-wider">BSB60120</span>
                                            </div>
                                            <svg class="w-4 h-4 text-slate-400 group-hover:text-brand-500 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-all duration-200 shrink-0 ml-2"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M7 17L17 7M17 7H7M17 7V17"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    {{-- Online Programs --}}
                    <a href="{{ route('international') }}"
                        class="relative font-medium transition-all duration-300
                        {{ request()->routeIs('international') ? 'text-brand-600 font-medium after:w-full' : 'text-neutral-600 hover:text-brand-600 after:w-0 hover:after:w-full' }}
                        after:absolute after:left-0 after:-bottom-1.5
                        after:h-0.5 after:bg-brand-600 after:transition-all after:duration-300">
                        Online Programs
                    </a>
                    {{-- Blog --}}
                    <a href="{{ route('patners') }}"
                        class="relative font-medium transition-all duration-300
                        {{ request()->routeIs('patners') ? 'text-brand-600 font-medium after:w-full' : 'text-neutral-600 hover:text-brand-600 after:w-0 hover:after:w-full' }}
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
                    <a href="{{ route('eligibility') }}"
                        class="hidden md:flex text-sm uppercase bg-white text-brand-500 px-4 py-2 lg:px-6 lg:py-2.5 border border-brand-500 rounded-lg font-medium hover:bg-brand-600 hover:text-white transition">
                        Free Book Now
                    </a>
                </div>
            </div>

        </nav>

        <!-- Mobile Menu -->
        <div id="mobileMenu" class="hidden md:hidden bg-white border-t border-slate-200 shadow-lg">

            <div class="flex flex-col px-6 py-5 space-y-3 text-base font-medium">
                <a href="{{ route('about') }}"
                    class="{{ request()->routeIs('about') ? 'text-neutral-600 font-medium' : 'text-neutral-600' }}">About
                    Us</a>
                <a href="#"
                    class="{{ request()->routeIs('courses') ? 'text-neutral-600 font-medium' : 'text-neutral-600' }}">Courses</a>
                <a href="#"
                    class="{{ request()->routeIs('how-we-works') ? 'text-neutral-600 font-medium' : 'text-neutral-600' }}">How
                    It Works</a>
                <a href="#"
                    class="{{ request()->routeIs('patners') ? 'text-neutral-600 font-medium' : 'text-neutral-600' }}">Our
                    Partners</a>
                <a href="{{ route('contact') }}"
                    class="{{ request()->routeIs('contact') ? 'text-neutral-600 font-medium' : 'text-neutral-600' }}">Contact
                    Us</a>


                <div class="flex items-center justify-between mt-6">

                    <a href="{{ route('eligibility') }}"
                        class="text-sm uppercase bg-brand-600 text-white px-4 py-2 lg:px-6 lg:py-2.5 rounded-lg font-medium hover:bg-brand-600 transition">
                        Check Your Eligibility
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
