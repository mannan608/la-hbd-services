<section class="relative overflow-hidden bg-brand-950 py-12 md:py-16 lg:py-20">
        {{-- Mesh Background & Decorative Lighting --}}
        <div class="absolute inset-0 opacity-70"></div>
        <div class="pointer-events-none absolute -left-32 -top-32 h-96 w-96 rounded-full bg-secondary-500/15 blur-3xl"></div>
        <div class="pointer-events-none absolute -bottom-32 -right-32 h-96 w-96 rounded-full bg-brand-500/25 blur-3xl"></div>

        <div class="relative mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 items-center gap-12 lg:grid-cols-12 lg:gap-16">

                {{-- HERO CONTENT --}}
                <div class="flex flex-col justify-between lg:col-span-7" data-aos="fade-right" data-aos-duration="1000">
                    <div class="flex flex-col gap-6">

                        {{-- Eyebrow Pill --}}
                        <div class="inline-flex items-center gap-2 self-start rounded-full border border-secondary-400/30 bg-secondary-500/10 px-4 py-1.5 text-xs font-semibold uppercase tracking-wider text-secondary-300 backdrop-blur-md" data-aos="fade-up" data-aos-duration="600">
                            <span class="relative flex h-2 w-2">
                                <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-secondary-400 opacity-75"></span>
                                <span class="relative inline-flex h-2 w-2 rounded-full bg-secondary-400"></span>
                            </span>
                            <span>British Council & Pearson Certified Academy</span>
                        </div>

                        {{-- Main Headline --}}
                        <div class="flex flex-col gap-3" data-aos="fade-up" data-aos-duration="800">
                            <h1 class="font-display text-4xl font-extrabold uppercase leading-[1.08] tracking-tight text-white sm:text-5xl lg:text-6xl">
                                THE SMART WAY TO
                            </h1>
                            <div class="flex flex-wrap items-center gap-3">
                                <div class="inline-block self-start -rotate-1 rounded-xl bg-secondary-500 px-4 py-1.5 shadow-lg shadow-secondary-500/30 sm:px-5">
                                    <span class="font-display text-3xl font-extrabold uppercase leading-[1.08] tracking-tight text-white sm:text-4xl lg:text-5xl">
                                        IELTS & PTE
                                    </span>
                                </div>
                                <span class="font-display text-4xl font-extrabold uppercase leading-[1.08] tracking-tight text-white sm:text-5xl lg:text-6xl">
                                    SUCCESS
                                </span>
                            </div>
                        </div>

                        {{-- Hero Description --}}
                        <p class="max-w-2xl text-base leading-relaxed text-brand-100/90 sm:text-lg" data-aos="fade-up" data-aos-duration="900">
                            Study with experienced industry professionals who make learning easier by delivering
                            well-structured, customized courses built around your target score.
                        </p>

                        {{-- HERO CTA BUTTONS --}}
                        <div class="flex flex-col gap-4 pt-2 sm:flex-row sm:items-center" data-aos="fade-up" data-aos-duration="1000">
                            {{-- Primary CTA --}}
                            <a 
                                href="#courses"
                                class="inline-flex min-h-12 items-center justify-center gap-2 rounded-xl bg-secondary-500 px-7 py-3.5 text-xs font-bold uppercase tracking-wider text-white shadow-lg shadow-secondary-500/25 transition-all duration-300 ease-out hover:-translate-y-0.5 hover:bg-secondary-400 hover:shadow-secondary-500/40 focus:outline-none focus:ring-4 focus:ring-secondary-400/30"
                            >
                                <span>GET STARTED FOR FREE</span>
                                <span class="material-symbols-outlined text-lg leading-none transition-transform duration-300 ease-out group-hover:translate-x-1">
                                    arrow_forward
                                </span>
                            </a>

                            {{-- Secondary CTA --}}
                            <a 
                                href="#prospectus"
                                class="inline-flex min-h-12 items-center justify-center gap-2 rounded-xl border border-white/30 bg-white/5 px-7 py-3.5 text-xs font-bold uppercase tracking-wider text-white backdrop-blur-xs transition-all duration-300 ease-out hover:-translate-y-0.5 hover:border-white hover:bg-white hover:text-brand-950 hover:shadow-lg focus:outline-none focus:ring-4 focus:ring-white/20"
                            >
                                <span class="material-symbols-outlined text-lg leading-none">
                                    menu_book
                                </span>
                                <span>Browse All Courses</span>
                            </a>
                        </div>

                        {{-- Social Proof & Trust Metrics --}}
                        <div class="mt-4 grid grid-cols-3 gap-4 border-t border-white/10 pt-6 sm:gap-6" data-aos="fade-up" data-aos-duration="1100">
                            <div class="flex flex-col">
                                <span class="font-display text-2xl font-extrabold text-white sm:text-3xl">10,000+</span>
                                <span class="text-xs font-medium uppercase tracking-wider text-brand-200">Enrolled Students</span>
                            </div>
                            <div class="flex flex-col border-l border-white/10 pl-4 sm:pl-6">
                                <span class="font-display text-2xl font-extrabold text-white sm:text-3xl">98.4%</span>
                                <span class="text-xs font-medium uppercase tracking-wider text-brand-200">Pass Rate</span>
                            </div>
                            <div class="flex flex-col border-l border-white/10 pl-4 sm:pl-6">
                                <span class="font-display text-2xl font-extrabold text-secondary-400 sm:text-3xl">8.5 / 9.0</span>
                                <span class="text-xs font-medium uppercase tracking-wider text-brand-200">Top Band Score</span>
                            </div>
                        </div>

                    </div>
                </div>

                {{-- HERO VISUAL WITH FLOATING BADGES --}}
                <div class="relative lg:col-span-5" data-aos="fade-left" data-aos-duration="1000">
                    <div class="relative mx-auto max-w-md lg:max-w-none">
                        {{-- Background Glow --}}
                        <div class="absolute -inset-1.5 rounded-3xl bg-gradient-to-r from-secondary-500 to-brand-500 opacity-30 blur-xl"></div>
                        
                        {{-- Image Frame --}}
                        <div class="relative overflow-hidden rounded-3xl border border-white/15 bg-white/5 p-2 shadow-2xl backdrop-blur-xs">
                            <img 
                                src="{{ asset('images/ielts-pte-student-group.webp') }}" 
                                alt="Students preparing for IELTS and PTE at HBD Language Academy" 
                                class="h-auto w-full rounded-2xl object-cover shadow-inner transition-transform duration-700 ease-out hover:scale-[1.02]"
                            />
                        </div>

                        {{-- Floating Badge 1: High Band Achievement --}}
                        <div class="absolute -bottom-5 -left-4 sm:-bottom-6 sm:-left-6 rounded-2xl border border-white/20 bg-white/95 p-4 shadow-xl backdrop-blur-md transition-transform duration-300 hover:-translate-y-1" data-aos="zoom-in" data-aos-delay="400">
                            <div class="flex items-center gap-3">
                                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-secondary-500 text-white shadow-md shadow-secondary-500/30">
                                    <span class="material-symbols-outlined text-2xl">workspace_premium</span>
                                </div>
                                <div class="flex flex-col">
                                    <div class="flex items-center gap-1 text-amber-500">
                                        <span class="material-symbols-outlined !text-sm">star</span>
                                        <span class="material-symbols-outlined !text-sm">star</span>
                                        <span class="material-symbols-outlined !text-sm">star</span>
                                        <span class="material-symbols-outlined !text-sm">star</span>
                                        <span class="material-symbols-outlined !text-sm">star</span>
                                    </div>
                                    <span class="text-xs font-bold uppercase tracking-tight text-neutral-900">Band 8.0+ Average</span>
                                    <span class="text-[11px] text-neutral-500">IELTS Academic & General</span>
                                </div>
                            </div>
                        </div>

                        {{-- Floating Badge 2: Official Accreditation --}}
                        <div class="hidden sm:flex absolute -right-4 -top-5 rounded-2xl border border-white/20 bg-white/95 px-4 py-2.5 shadow-xl backdrop-blur-md transition-transform duration-300 hover:-translate-y-1" data-aos="zoom-in" data-aos-delay="600">
                            <div class="flex items-center gap-2.5">
                                <span class="relative flex h-2.5 w-2.5">
                                    <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-emerald-500 opacity-75"></span>
                                    <span class="relative inline-flex h-2.5 w-2.5 rounded-full bg-emerald-500"></span>
                                </span>
                                <span class="text-xs font-bold uppercase tracking-wide text-neutral-800">Pearson & BC Partner</span>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>