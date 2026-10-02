 <section class="relative overflow-hidden bg-white py-12 md:py-16 lg:py-20">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            {{-- Standardized Section Heading --}}
            <div class="mx-auto max-w-3xl text-center mb-12 md:mb-16">
                <span class="inline-flex items-center gap-2 rounded-full border border-secondary-200 bg-secondary-50 px-4 py-1.5 text-xs font-semibold uppercase tracking-wider text-secondary-700 shadow-xs" data-aos="fade-up" data-aos-duration="600">
                    <span class="relative flex h-2 w-2">
                        <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-secondary-500 opacity-60"></span>
                        <span class="relative inline-flex h-2 w-2 rounded-full bg-secondary-500"></span>
                    </span>
                    Our Recognition
                </span>

                <h2 class="mt-4 text-3xl font-extrabold tracking-tight text-brand-950 sm:text-4xl lg:text-5xl" data-aos="fade-up" data-aos-duration="800">
                    Our Accredited <span class="relative inline-block bg-gradient-to-r from-brand-600 via-brand-500 to-secondary-500 bg-clip-text text-transparent">
                        Partners
                        <svg class="absolute -bottom-2 left-0 w-full" height="8" viewBox="0 0 120 8" fill="none" preserveAspectRatio="none">
                            <path d="M2 6C30 2 60 2 118 5" stroke="url(#uGradPartners)" stroke-width="3" stroke-linecap="round" />
                            <defs>
                                <linearGradient id="uGradPartners" x1="0" y1="0" x2="120" y2="0" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#00b1ee" />
                                    <stop offset="1" stop-color="#155b9d" />
                                </linearGradient>
                            </defs>
                        </svg>
                    </span>
                </h2>

                <p class="mt-4 text-base leading-relaxed text-neutral-600 md:text-lg" data-aos="fade-up" data-aos-duration="900">
                    We are proudly accredited and recognised by the world's most trusted
                    institutions in English language assessment and education.
                </p>
            </div>

            {{-- Staggered Partner Cards Grid --}}
            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 md:gap-8 max-w-4xl mx-auto">

                {{-- Partner Card 1 --}}
                <a 
                    href="#prospectus"
                    class="group flex flex-col items-center justify-center rounded-2xl border border-neutral-200/90 bg-white p-8 shadow-theme-xs transition-all duration-300 ease-out hover:-translate-y-1.5 hover:border-secondary-300 hover:shadow-theme-lg"
                    data-aos="fade-up"
                    data-aos-duration="800"
                    data-aos-delay="100"
                >
                    <div class="flex w-full items-center justify-center">
                        <div class="flex items-center gap-4 opacity-80 grayscale transition-all duration-300 group-hover:-translate-y-0.5 group-hover:opacity-100 group-hover:grayscale-0">
                            <img src="{{ asset('images/patner/p1.webp') }}" alt="Accredited Partner 1" class="h-14 w-auto object-contain">
                        </div>
                    </div>
                </a>

                {{-- Partner Card 2 --}}
                <a 
                    href="#prospectus"
                    class="group flex flex-col items-center justify-center rounded-2xl border border-neutral-200/90 bg-white p-8 shadow-theme-xs transition-all duration-300 ease-out hover:-translate-y-1.5 hover:border-secondary-300 hover:shadow-theme-lg"
                    data-aos="fade-up"
                    data-aos-duration="800"
                    data-aos-delay="200"
                >
                    <div class="flex w-full items-center justify-center">
                        <div class="flex items-center gap-4 opacity-80 grayscale transition-all duration-300 group-hover:-translate-y-0.5 group-hover:opacity-100 group-hover:grayscale-0">
                            <img src="{{ asset('images/patner/p2.webp') }}" alt="Accredited Partner 2" class="h-14 w-auto object-contain">
                        </div>
                    </div>
                </a>

            </div>

            {{-- Trust Bar --}}
            <div 
                class="mt-12 flex flex-wrap items-center justify-center gap-x-10 gap-y-4 border-t border-neutral-200/80 pt-8 text-sm font-medium text-neutral-600"
                data-aos="fade-up"
                data-aos-duration="900"
                data-aos-delay="300"
            >
                <div class="flex items-center gap-2">
                    <svg class="h-5 w-5 text-secondary-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.6 2A9 9 0 1 1 12 3a9 9 0 0 1 8.6 9Z" />
                    </svg>
                    <span>Globally recognised certificates</span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="h-5 w-5 text-secondary-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6l4 2m5-2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <span>25+ years of academic excellence</span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="h-5 w-5 text-secondary-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l9-8 9 8M5 10v10a1 1 0 0 0 1 1h4v-6h4v6h4a1 1 0 0 0 1-1V10" />
                    </svg>
                    <span>Trusted by 100,000+ learners</span>
                </div>
            </div>

        </div>
    </section>