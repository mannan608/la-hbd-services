@extends('frontend.layouts.app')

@section('content')
    <section class="relative overflow-hidden bg-brand-25">
        {{-- Existing mesh background utility --}}
        <div class="absolute inset-0 mesh-background"></div>

        <div class="relative mx-auto w-full max-w-7xl px-4 py-10 sm:px-6 md:py-14 lg:px-8 lg:py-20">
            <!-- Course Title -->
            <div class="max-w-4xl">

                <h1
                    class="mb-5 font-heading text-3xl font-bold leading-[1.05] tracking-tight text-neutral-950 sm:text-4xl lg:text-5xl">
                    About HBD Language Academy
                </h1>

                <p class="max-w-2xl text-sm leading-7 text-neutral-600 sm:text-base">
                    Helping you achieve higher scores and brighter global opportunities.
                </p>

            </div>
        </div>
    </section>

    @include('frontend.pages.about.section')

    <!-- OUR MISSION ,Vision AND VALUES -->
    <section class="relative overflow-hidden py-16 sm:py-20 lg:py-24">
        <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            {{-- Section Heading --}}
            <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-14">
                <div
                    class="mb-4 inline-flex items-center gap-2 rounded-full border border-brand-200 bg-white px-3.5 py-1.5 text-xs font-semibold uppercase tracking-widest text-brand-600 shadow-sm">
                    <span class="h-1.5 w-1.5 rounded-full bg-brand-500"></span>
                    Our Mission & Vision
                </div>

                <h2 class="text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl lg:text-5xl">
                    What We Stand For
                </h2>

                <p class="mx-auto mt-4 max-w-xl text-sm leading-7 text-slate-500 sm:text-base">
                    Everything we do is guided by a clear purpose, a shared vision,
                    and values that put our learners first.
                </p>

            </div>

            {{-- Foundation Cards --}}
            <div class="grid grid-cols-1 gap-5 md:grid-cols-3 lg:gap-6">
                {{-- Mission --}}
                <article
                    class="group relative overflow-hidden rounded-3xl border border-slate-200 bg-white p-6 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-brand-200 hover:shadow-xl sm:p-8">

                    {{-- Background Glow --}}
                    <div
                        class="pointer-events-none absolute -right-16 -top-16 h-40 w-40 rounded-full bg-brand-50 opacity-0 blur-3xl transition-opacity duration-300 group-hover:opacity-100">
                    </div>

                    <div class="relative">

                        {{-- Card Header --}}
                        <div class="flex items-start justify-between">

                            <div
                                class="flex h-14 w-14 items-center justify-center rounded-2xl bg-brand-50 text-brand-600 ring-1 ring-brand-100 transition-all duration-300 group-hover:scale-105 group-hover:bg-brand-600 group-hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"
                                    class="h-7 w-7">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <circle cx="12" cy="12" r="6"></circle>
                                    <circle cx="12" cy="12" r="2"></circle>
                                </svg>
                            </div>

                            <span
                                class="font-mono text-4xl font-black text-slate-100 transition-colors duration-300 group-hover:text-brand-50">
                                01
                            </span>

                        </div>

                        {{-- Content --}}
                        <div class="mt-8">

                            <p class="text-xs font-bold uppercase tracking-widest text-brand-600">
                                Our Purpose
                            </p>

                            <h3 class="mt-2 text-2xl font-bold tracking-tight text-slate-900 sm:text-3xl">
                                Mission
                            </h3>

                            <p class="mt-4 text-sm leading-7 text-slate-600 sm:text-base">
                                We help students achieve their academic and career goals through quality English education,
                                practical learning, and dedicated guidance.
                            </p>

                        </div>


                        {{-- Bottom Line --}}
                        <div class="mt-8 flex items-center gap-2 text-xs font-semibold text-slate-400">
                            <span
                                class="h-px w-8 bg-brand-200 transition-all duration-300 group-hover:w-12 group-hover:bg-brand-500"></span>
                            Purpose driven
                        </div>

                    </div>
                </article>


                {{-- Vision --}}
                <article
                    class="group relative overflow-hidden rounded-3xl border border-slate-200 bg-white p-6 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-sky-200 hover:shadow-xl sm:p-8">
                    {{-- Background Glow --}}
                    <div
                        class="pointer-events-none absolute -right-16 -top-16 h-40 w-40 rounded-full bg-sky-50 opacity-0 blur-3xl transition-opacity duration-300 group-hover:opacity-100">
                    </div>

                    <div class="relative">

                        {{-- Card Header --}}
                        <div class="flex items-start justify-between">

                            <div
                                class="flex h-14 w-14 items-center justify-center rounded-2xl bg-sky-50 text-sky-600 ring-1 ring-sky-100 transition-all duration-300 group-hover:scale-105 group-hover:bg-sky-600 group-hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"
                                    class="h-7 w-7">
                                    <path
                                        d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z">
                                    </path>
                                    <path d="M20 2v4"></path>
                                    <path d="M22 4h-4"></path>
                                    <circle cx="4" cy="20" r="2"></circle>
                                </svg>
                            </div>

                            <span
                                class="font-mono text-4xl font-black text-slate-100 transition-colors duration-300 group-hover:text-sky-50">
                                02
                            </span>

                        </div>

                        {{-- Content --}}
                        <div class="mt-8">

                            <p class="text-xs font-bold uppercase tracking-widest text-sky-600">
                                Where We're Going
                            </p>

                            <h3 class="mt-2 text-2xl font-bold tracking-tight text-slate-900 sm:text-3xl">
                                Vision
                            </h3>

                            <p class="mt-4 text-sm leading-7 text-slate-600 sm:text-base">
                                We aim to empower individuals with the English skills, confidence, and knowledge they need
                                to build brighter futures and succeed globally.
                            </p>

                        </div>


                        {{-- Bottom Line --}}
                        <div class="mt-8 flex items-center gap-2 text-xs font-semibold text-slate-400">
                            <span
                                class="h-px w-8 bg-sky-200 transition-all duration-300 group-hover:w-12 group-hover:bg-sky-500"></span>
                            Future focused
                        </div>

                    </div>
                </article>


                {{-- Values --}}
                <article
                    class="group relative overflow-hidden rounded-3xl border border-slate-200 bg-white p-6 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-emerald-200 hover:shadow-xl sm:p-8">
                    {{-- Background Glow --}}
                    <div
                        class="pointer-events-none absolute -right-16 -top-16 h-40 w-40 rounded-full bg-emerald-50 opacity-0 blur-3xl transition-opacity duration-300 group-hover:opacity-100">
                    </div>

                    <div class="relative">

                        {{-- Card Header --}}
                        <div class="flex items-start justify-between">

                            <div
                                class="flex h-14 w-14 items-center justify-center rounded-2xl bg-emerald-50 text-emerald-600 ring-1 ring-emerald-100 transition-all duration-300 group-hover:scale-105 group-hover:bg-emerald-600 group-hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"
                                    class="h-7 w-7">
                                    <path
                                        d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526">
                                    </path>
                                    <circle cx="12" cy="8" r="6"></circle>
                                </svg>
                            </div>

                            <span
                                class="font-mono text-4xl font-black text-slate-100 transition-colors duration-300 group-hover:text-emerald-50">
                                03
                            </span>

                        </div>


                        {{-- Content --}}
                        <div class="mt-8">

                            <p class="text-xs font-bold uppercase tracking-widest text-emerald-600">
                                What Guides Us
                            </p>

                            <h3 class="mt-2 text-2xl font-bold tracking-tight text-slate-900 sm:text-3xl">
                                Values
                            </h3>

                            <p class="mt-4 text-sm leading-7 text-slate-600 sm:text-base">
                                We believe in personalized learning, quality education, integrity, and continuous
                                improvement, helping every learner reach their full potential.
                            </p>

                        </div>


                        {{-- Bottom Line --}}
                        <div class="mt-8 flex items-center gap-2 text-xs font-semibold text-slate-400">
                            <span
                                class="h-px w-8 bg-emerald-200 transition-all duration-300 group-hover:w-12 group-hover:bg-emerald-500"></span>
                            Learner first
                        </div>

                    </div>
                </article>

            </div>

        </div>

    </section>

    <section class="bg-white py-16 sm:py-20 lg:py-24">
        <div class="max-w-7xl mx-auto text-center px-4 sm:px-6 lg:px-8">

            <header class="mx-auto max-w-2xl px-4 mb-12 text-center ">

                <div
                    class="mb-4 inline-flex items-center gap-2 rounded-full border border-brand-200 bg-white px-3.5 py-1.5 text-xs font-semibold uppercase tracking-widest text-brand-600 shadow-sm">
                    <span class="h-1.5 w-1.5 rounded-full bg-brand-500"></span>
                    Our commitment
                </div>

                <!-- Main Heading -->
                <h1
                    class="text-2xl sm:text-3xl font-extrabold tracking-tight text-slate-900 md:text-4xl lg:text-5xl uppercase">
                    Our promises to you
                </h1>

                <!-- Subheading Description -->
                <p
                    class="mx-auto mt-4 max-w-2xl text-base text-neutral-600 sm:text-lg transition-all duration-700 delay-300">
                    We are committed to making your journey simpler, clearer, and more rewarding from the first
                    consultation to your future abroad.
                </p>
            </header>
            <div class="grid grid-cols-1 items-center gap-8 lg:grid-cols-12 lg:gap-12">

                {{-- Image --}}
                <div class="lg:col-span-6">
                    <div class="group relative overflow-hidden rounded-[1.5rem]">
                        <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?auto=format&fit=crop&w=1000&q=80"
                            alt="Consultation Meeting"
                            class="h-[320px] w-full object-cover transition duration-700 group-hover:scale-105 sm:h-[380px]" />

                        {{-- Image Overlay --}}
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/50 via-transparent to-transparent">
                        </div>

                        {{-- Image Caption --}}
                        <div class="absolute bottom-5 left-5 right-5">
                            <div
                                class="inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 px-4 py-2 text-sm font-medium text-white backdrop-blur-md">
                                <span class="h-2 w-2 rounded-full bg-brand-400"></span>
                                Your journey, our commitment
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Content --}}
                <div class="lg:col-span-6">
                    <!-- 2x2 Feature Grid -->
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">

                        <!-- Feature 1 -->
                        <div class="group rounded-3xl border border-neutral-200/90 bg-white p-6 shadow-theme-xs transition-all duration-300 hover:-translate-y-1 hover:border-brand-200 hover:shadow-theme-lg"
                            data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                            <div class="flex items-center gap-2">
                                <div
                                    class="flex h-12 w-12 items-center justify-center rounded-2xl bg-brand-50 text-brand-600 transition-colors group-hover:bg-brand-600 group-hover:text-white">
                                    <span class="material-symbols-outlined text-2xl">workspace_premium</span>
                                </div>
                                <h4 class="text-base font-bold text-neutral-900"> Expert Trainers</h4>
                            </div>

                            <p class="mt-1 text-sm leading-relaxed text-neutral-600">
                                Supported by 10,000+ students as the most reliable source for authentic IELTS and PTE score
                                acceleration.
                            </p>
                        </div>

                        <!-- Feature 2 -->
                        <div class="group rounded-3xl border border-neutral-200/90 bg-white p-6 shadow-theme-xs transition-all duration-300 hover:-translate-y-1 hover:border-secondary-300 hover:shadow-theme-lg"
                            data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                            <div class="flex items-center gap-2">
                            <div
                                class="flex h-12 w-12 items-center justify-center rounded-2xl bg-secondary-50 text-secondary-600 transition-colors group-hover:bg-secondary-500 group-hover:text-white">
                                <span class="material-symbols-outlined text-2xl">assignment_turned_in</span>
                            </div>
                            <h4 class="text-base font-bold text-neutral-900">Realistic Mock Tests</h4>
                            </div>
                            <p class="mt-1 text-sm leading-relaxed text-neutral-600">
                                Computer-based practice, real exam simulations, and regular mock tests to build confidence and improve performance.
                            </p>
                        </div>

                        <!-- Feature 3 -->
                        <div class="group rounded-3xl border border-neutral-200/90 bg-white p-6 shadow-theme-xs transition-all duration-300 hover:-translate-y-1 hover:border-brand-200 hover:shadow-theme-lg"
                            data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                            <div class="flex items-center gap-2">
                            <div
                                class="flex h-12 w-12 items-center justify-center rounded-2xl bg-brand-50 text-brand-600 transition-colors group-hover:bg-brand-600 group-hover:text-white">
                                <span class="material-symbols-outlined text-2xl">schedule</span>
                            </div>
                            <h4 class="text-base font-bold text-neutral-900">Student Success</h4>
                            </div>
                            <p class="mt-1 text-sm leading-relaxed text-neutral-600">
                                A results-driven approach focused on helping students achieve their target scores and reach their global education and career goals.
                            </p>
                        </div>

                        <!-- Feature 4 -->
                        <div class="group rounded-3xl border border-neutral-200/90 bg-white p-6 shadow-theme-xs transition-all duration-300 hover:-translate-y-1 hover:border-secondary-300 hover:shadow-theme-lg"
                            data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                            <div class="flex items-center gap-2">
                            <div
                                class="flex h-12 w-12 items-center justify-center rounded-2xl bg-secondary-50 text-secondary-600 transition-colors group-hover:bg-secondary-500 group-hover:text-white">
                                <span class="material-symbols-outlined text-2xl">menu_book</span>
                            </div>
                            <h4 class="text-base font-bold text-neutral-900">Resources</h4>
                            </div>
                            <p class="mt-1 text-sm leading-relaxed text-neutral-600">
                                Exclusive access to premium IELTS preparation ebooks, vocabulary builders, and advanced
                                grammar materials.
                            </p>
                        </div>

                    </div>

                </div>
            </div>


        </div>
    </section>

    <!-- CEO MESSAGE -->

    @include('frontend.pages.common.ceo')
    @include('frontend.pages.common.cta')
@endsection
