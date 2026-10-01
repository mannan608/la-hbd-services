<!-- Alpine.js & Google Material Symbols required -->
<section x-data="{
    activeStep: 1,
    steps: [{
            id: 1,
            num: '01',
            title: 'Lectures, Tips & Strategies',
            subtitle: 'Expert guidance & planning',
            desc: 'In-depth conceptual lectures covering scoring criteria, time management hacks, and proven test strategies delivered by British Council certified trainers.',
            icon: 'auto_awesome'
        },
        {
            id: 2,
            num: '02',
            title: 'Topic-wise Lab Drills',
            subtitle: 'Hands-on practice sessions',
            desc: 'Computer-based and paper-based practice modules simulating real exam environments for Listening, Reading, Writing, and Speaking.',
            icon: 'terminal'
        },
        {
            id: 3,
            num: '03',
            title: 'Improvement Sessions',
            subtitle: 'Performance-focused reviews',
            desc: 'One-on-one personalized error diagnosis and targeted practice to bridge performance gaps and push your score into Band 8+ / 79+ PTE.',
            icon: 'insights'
        }
    ]
}" class="relative overflow-hidden bg-neutral-50 py-16 md:py-24 lg:py-28">
    <!-- Background Decorators -->
    <div class="pointer-events-none absolute -top-40 right-0 h-[500px] w-[500px] rounded-full bg-brand-500/5 blur-3xl">
    </div>
    <div
        class="pointer-events-none absolute -bottom-40 left-0 h-[500px] w-[500px] rounded-full bg-emerald-500/5 blur-3xl">
    </div>

    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <!-- SECTION HEADER -->
        <div class="mx-auto max-w-3xl text-center">
            <div
                class="inline-flex items-center gap-2 rounded-full border border-brand-200/60 bg-white px-3.5 py-1 text-xs font-bold uppercase tracking-widest text-brand-700 shadow-sm backdrop-blur-md">
                <span class="flex h-2 w-2 rounded-full bg-emerald-500 animate-pulse"></span>
                <span>Why Choose HBD Language Academy</span>
            </div>

            <h2 class="mt-4 text-3xl font-extrabold tracking-tight text-neutral-900 sm:text-4xl lg:text-5xl">
                Why Over <span
                    class="bg-gradient-to-r from-brand-600 via-brand-500 to-emerald-600 bg-clip-text text-transparent">10,000+
                    Students Trust Us</span> for IELTS & PTE Success
            </h2>

            <p class="mt-4 text-base leading-relaxed text-neutral-600 sm:text-lg">
                At HBD Language Academy, British Council & Pearson-certified instructors guide students using a proven
                3-step interactive learning approach for guaranteed test-day performance.
            </p>
        </div>

        <!-- MAIN LAYOUT: DUAL COLUMN -->
        <div class="mt-16 grid grid-cols-1 gap-8 lg:grid-cols-12 lg:items-stretch">

            <!-- LEFT COLUMN: PREMIUM BRAND CARD & METHODOLOGY -->
            <div
                class="flex flex-col justify-between rounded-3xl bg-neutral-900 p-8 text-white shadow-2xl lg:col-span-5 lg:p-10">
                <div>
                    <!-- Badge & Title -->
                    <div class="flex items-center justify-between border-b border-neutral-800 pb-6">
                        <div
                            class="inline-flex items-center gap-2 rounded-lg bg-emerald-500/10 px-3 py-1 text-xs font-bold uppercase tracking-wider text-emerald-400 border border-emerald-500/20">
                            <span class="material-symbols-outlined text-sm">workspace_premium</span>
                            <span>Truly Premium</span>
                        </div>
                        <span class="text-xs font-medium text-neutral-400">10,000+ Alumni</span>
                    </div>

                    <h3 class="mt-6 text-2xl font-bold tracking-tight text-white lg:text-3xl">
                        A Proven 3-Step Interactive Methodology
                    </h3>
                    <p class="mt-2 text-xs text-neutral-400">
                        Click on any phase to see how we guide you to your target band score.
                    </p>
                   
                    <!-- Interactive Step List -->
                    <div class="mt-8 flex flex-col gap-3">
                        <template x-for="step in steps" :key="step.id">
                            <div
                                class="rounded-2xl border border-neutral-800 bg-neutral-800/60 p-4 transition-all duration-300 hover:border-neutral-700 hover:bg-neutral-800/90">
                                <!-- Step Header -->
                                <div class="flex items-center gap-3.5">
                                    <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-brand-500 text-xs font-black text-white"
                                        x-text="step.num"></div>
                                    <div>
                                        <h4 class="text-sm font-bold text-white" x-text="step.title"></h4>
                                        <p class="text-[11px] text-neutral-400" x-text="step.subtitle"></p>
                                    </div>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>

                <!-- Accreditation Footnote -->
                <div
                    class="mt-10 flex items-center gap-4 rounded-2xl border border-neutral-800 bg-neutral-800/50 p-4 backdrop-blur-sm">
                    <div
                        class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-emerald-500/10 text-emerald-400">
                        <span class="material-symbols-outlined text-xl">verified</span>
                    </div>
                    <div>
                        <p class="text-xs font-bold text-white">Certified Instructors</p>
                        <p class="text-[11px] text-neutral-400">British Council & Pearson-certified master trainers</p>
                    </div>
                </div>
            </div>

            <!-- RIGHT COLUMN: FEATURES GRID & PROMO BANNER -->
            <div class="flex flex-col justify-between gap-6 lg:col-span-7">

                <!-- 2x2 Feature Grid -->
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">

                    <!-- Feature 1 -->
                    <div
                        class="group rounded-3xl border border-neutral-200/80 bg-white p-6 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-brand-200 hover:shadow-xl">
                        <div
                            class="flex h-12 w-12 items-center justify-center rounded-2xl bg-brand-50 text-brand-600 transition-colors group-hover:bg-brand-600 group-hover:text-white">
                            <span class="material-symbols-outlined text-2xl">workspace_premium</span>
                        </div>
                        <h4 class="mt-4 text-base font-bold text-neutral-900">Proven Results</h4>
                        <p class="mt-1 text-xs leading-relaxed text-neutral-600">
                            Supported by 10,000+ students as the most reliable source for authentic IELTS and PTE score
                            acceleration.
                        </p>
                    </div>

                    <!-- Feature 2 -->
                    <div
                        class="group rounded-3xl border border-neutral-200/80 bg-white p-6 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-brand-200 hover:shadow-xl">
                        <div
                            class="flex h-12 w-12 items-center justify-center rounded-2xl bg-emerald-50 text-emerald-600 transition-colors group-hover:bg-emerald-600 group-hover:text-white">
                            <span class="material-symbols-outlined text-2xl">assignment_turned_in</span>
                        </div>
                        <h4 class="mt-4 text-base font-bold text-neutral-900">Realistic Mock Tests</h4>
                        <p class="mt-1 text-xs leading-relaxed text-neutral-600">
                            Exact software simulations that mirror the real exam format to build test-taking stamina and
                            time precision.
                        </p>
                    </div>

                    <!-- Feature 3 -->
                    <div
                        class="group rounded-3xl border border-neutral-200/80 bg-white p-6 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-brand-200 hover:shadow-xl">
                        <div
                            class="flex h-12 w-12 items-center justify-center rounded-2xl bg-amber-50 text-amber-600 transition-colors group-hover:bg-amber-600 group-hover:text-white">
                            <span class="material-symbols-outlined text-2xl">schedule</span>
                        </div>
                        <h4 class="mt-4 text-base font-bold text-neutral-900">Flexible Learning</h4>
                        <p class="mt-1 text-xs leading-relaxed text-neutral-600">
                            Interactive online classes and hands-on campus sessions designed to fit seamlessly into work
                            or study routines.
                        </p>
                    </div>

                    <!-- Feature 4 -->
                    <div
                        class="group rounded-3xl border border-neutral-200/80 bg-white p-6 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-brand-200 hover:shadow-xl">
                        <div
                            class="flex h-12 w-12 items-center justify-center rounded-2xl bg-indigo-50 text-indigo-600 transition-colors group-hover:bg-indigo-600 group-hover:text-white">
                            <span class="material-symbols-outlined text-2xl">menu_book</span>
                        </div>
                        <h4 class="mt-4 text-base font-bold text-neutral-900">Comprehensive Resources</h4>
                        <p class="mt-1 text-xs leading-relaxed text-neutral-600">
                            Exclusive access to premium IELTS preparation ebooks, vocabulary builders, and advanced
                            grammar materials.
                        </p>
                    </div>

                </div>

                <!-- SPECIAL LIMITED TIME OFFER BANNER -->
                <div
                    class="relative overflow-hidden rounded-3xl border border-brand-200/70 bg-gradient-to-br from-brand-600 via-brand-700 to-neutral-900 p-6 text-white shadow-xl sm:p-8">
                    <!-- Subtle Glow -->
                    <div
                        class="pointer-events-none absolute -right-12 -top-12 h-40 w-40 rounded-full bg-white/10 blur-2xl">
                    </div>

                    <div class="relative z-10 flex flex-col gap-6 sm:flex-row sm:items-center sm:justify-between">
                        <div class="max-w-md">
                            <div
                                class="inline-flex items-center gap-1.5 rounded-md bg-amber-400 px-2.5 py-0.5 text-[10px] font-black uppercase tracking-wider text-neutral-900">
                                <span class="material-symbols-outlined text-xs">local_offer</span>
                                <span>Limited Time Offer</span>
                            </div>

                            <h4 class="mt-2 text-xl font-black tracking-tight text-white sm:text-2xl">
                                Save ৳1,000 or Claim Free Mock Tests!
                            </h4>

                            <p class="mt-1.5 text-xs text-brand-100/90 leading-relaxed">
                                Get direct 1-on-1 evaluation from experienced IELTS mentors. Enroll today to claim your
                                discount or test pass.
                            </p>
                        </div>

                        <div class="shrink-0">
                            <a href="#prospectus"
                                class="inline-flex items-center justify-center gap-2 rounded-xl bg-white px-6 py-3.5 text-xs font-bold uppercase tracking-wider text-brand-900 shadow-lg transition-all duration-300 hover:bg-neutral-100 hover:shadow-xl active:scale-[0.98]">
                                <span>Claim for Offer</span>
                                <span class="material-symbols-outlined text-base">arrow_forward</span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>
