@extends('frontend.layouts.app')

@section('content')
    <section class="relative overflow-hidden bg-secondary-500">
        {{-- Existing mesh background utility --}}
        <div class="absolute inset-0 mesh-background"></div>

        <div class="relative mx-auto w-full max-w-7xl px-4 py-10 sm:px-6 md:py-14 lg:px-8 lg:py-20">

            <div class="grid grid-cols-1 items-stretch gap-10 lg:grid-cols-12 lg:gap-12">

                {{-- HERO CONTENT --}}
                <div class="flex flex-col justify-between lg:col-span-7">

                    <div class="flex flex-col gap-5">

                        {{-- Main headline --}}
                        <div class="flex flex-col gap-2 pt-1">

                            <h1
                                class="font-display text-3xl font-extrabold uppercase leading-[1.04] tracking-tight text-white sm:text-4xl lg:text-5xl">

                                THE SMART WAY TO

                            </h1>
                            <div class="flex gap-3">

                                <div class="inline-block self-start -rotate-1 rounded-md bg-red-500 px-4 py-1.5 sm:px-5">

                                    <span
                                        class="font-display text-3xl font-extrabold uppercase leading-[1.04] tracking-tight text-white sm:text-4xl lg:text-5xl">

                                        IELTS & PTE

                                    </span>

                                </div>
                                <h1
                                    class="ffont-display text-3xl font-extrabold uppercase leading-[1.04] tracking-tight text-white sm:text-4xl lg:text-5xl">
                                    SUCCESS</h1>
                            </div>

                        </div>


                        {{-- Hero description --}}
                        <p class="max-w-2xl pt-1 text-base text-white md:text-lg">

                            Study with experienced industry professionals who make learning easier by delivering
                            well-structured, customized courses built around your success

                        </p>

                    </div>


                    {{--  HERO CTA + TRUST --}}
                    <div class="flex flex-col gap-7 pt-8 lg:pt-12">

                        <div class="flex flex-col gap-3 sm:flex-row sm:flex-wrap">

                            {{-- Primary CTA --}}
                            <a href="#courses"
                                class="inline-flex min-h-12 items-center justify-center gap-2 rounded-lg border border-white bg-neutral-25 px-6 py-3  text-xs font-bold uppercase tracking-wide text-brand-500 transition-all duration-300 ease-out hover:-translate-y-0.5 hover:bg-brand-50 hover:shadow-theme-sm focus:outline-none focus:ring-4 focus:ring-brand-500/10">

                                GET STARTED FOR FREE

                                <span class="material-symbols-outlined text-lg">
                                    arrow_forward
                                </span>

                            </a>


                            {{-- Secondary CTA --}}
                            <a href="#prospectus"
                                class="inline-flex min-h-12 items-center justify-center gap-2 rounded-lg border border-white bg-transparent px-6 py-3  text-xs font-bold uppercase tracking-wide text-white transition-all duration-300 ease-out hover:-translate-y-0.5 hover:bg-white hover:text-brand-500  hover:shadow-theme-sm focus:outline-none focus:ring-4 focus:ring-brand-500/10">

                                <span class="material-symbols-outlined text-lg">
                                    menu_book
                                </span>

                                Browse All Courses

                            </a>

                        </div>

                    </div>

                </div>


                {{-- HERO VISUAL --}}
                <div class="overflow-hidden lg:col-span-5">

                    ghghjghj

                </div>

            </div>

        </div>

    </section>

    {{--  MARQUEE --}}
    {{-- @include('frontend.pages.home.section.marquee') --}}


    <section class="relative overflow-hidden py-12 md:py-16 lg:py-20 bg-white">
        <div class="mx-auto max-w-6xl px-6 lg:px-8">

            <!-- ── Header ── -->
            <div class="mx-auto max-w-2xl text-center">
                <span
                    class="inline-flex items-center gap-2 rounded-full border border-secondary-200 bg-secondary-50 px-4 py-1.5 text-[13px] font-semibold tracking-wide text-secondary-700">
                    <span class="relative flex h-2 w-2">
                        <span
                            class="absolute inline-flex h-full w-full animate-ping rounded-full bg-secondary-500 opacity-60"></span>
                        <span class="relative inline-flex h-2 w-2 rounded-full bg-secondary-500"></span>
                    </span>
                    Our Recognition
                </span>

                <h2 class="mt-3 text-4xl font-extrabold tracking-tight text-brand-950 md:text-5xl">
                    Our <span
                        class="relative inline-block bg-gradient-to-r from-brand-500 via-brand-500 to-brand-600 bg-clip-text text-transparent">
                        Partners
                        <svg class="absolute -bottom-2 left-0 w-full" height="8" viewBox="0 0 120 8" fill="none"
                            preserveAspectRatio="none">
                            <path d="M2 6C30 2 60 2 118 5" stroke="url(#uGrad)" stroke-width="3" stroke-linecap="round" />
                            <defs>
                                <linearGradient id="uGrad" x1="0" y1="0" x2="120" y2="0"
                                    gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#00b1ee" />
                                    <stop offset="1" stop-color="#155b9d" />
                                </linearGradient>
                            </defs>
                        </svg>
                    </span>
                </h2>

                <p class="mt-4.5 text-base leading-relaxed text-brand-800/60 md:text-lg">
                    We are proudly accredited and recognised by the world's most trusted
                    institutions in English language assessment and education.
                </p>
            </div>

            <!-- ── Partner Cards ── -->
            <div class="mt-8 grid gap-6 md:mt-10 md:grid-cols-2 lg:gap-8">

                <!-- Card 1: Cambridge -->
                <a href="#"
                    class="group flex flex-col items-center justify-center rounded-2xl border border-brand-900/5 bg-white p-6 shadow-card transition-all duration-300 hover:-translate-y-1.5 hover:border-secondary-200 hover:shadow-card-hover md:p-8">
                    <div class="flex w-full items-center justify-center">
                        <!-- Cambridge-style wordmark -->
                        <div
                            class=" p-4 flex items-center gap-4 opacity-80 grayscale transition-all duration-300 group-hover:-translate-y-0.5 group-hover:opacity-100 group-hover:grayscale-0">
                            <img src="{{ asset('images/patner/p1.webp') }}" alt="">
                        </div>
                    </div>
                </a>

                <a href="#"
                    class="group flex flex-col items-center justify-center rounded-2xl border border-brand-900/5 bg-white p-6 shadow-card transition-all duration-300 hover:-translate-y-1.5 hover:border-secondary-200 hover:shadow-card-hover md:p-8">
                    <div class="flex w-full items-center justify-center">
                        <!-- Cambridge-style wordmark -->
                        <div
                            class="flex items-center gap-4 opacity-80 grayscale transition-all duration-300 group-hover:-translate-y-0.5 group-hover:opacity-100 group-hover:grayscale-0">
                            <img src="{{ asset('images/patner/p2.webp') }}" alt="">
                        </div>
                    </div>
                </a>
            </div>

            <!-- ── Trust bar ── -->
            <div
                class="mt-8 flex flex-wrap items-center justify-center gap-x-10 gap-y-4 border-t border-brand-900/5 pt-4 text-sm text-brand-800/60">
                <div class="flex items-center gap-2">
                    <svg class="h-5 w-5 text-secondary-500" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 12l2 2 4-4m5.6 2A9 9 0 1 1 12 3a9 9 0 0 1 8.6 9Z" />
                    </svg>
                    Globally recognised certificates
                </div>
                <div class="flex items-center gap-2">
                    <svg class="h-5 w-5 text-secondary-500" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 6v6l4 2m5-2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    25+ years of partnership
                </div>
                <div class="flex items-center gap-2">
                    <svg class="h-5 w-5 text-secondary-500" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3 12l9-8 9 8M5 10v10a1 1 0 0 0 1 1h4v-6h4v6h4a1 1 0 0 0 1-1V10" />
                    </svg>
                    Trusted by 100,000+ learners
                </div>
            </div>

        </div>
    </section>
    <section id="courses" class="w-full bg-neutral-50 py-14 md:py-18 lg:py-24">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            <!-- ── Header ── -->
            <div class="mx-auto max-w-2xl text-center mb-8">
                <span
                    class="inline-flex items-center gap-2 rounded-full border border-secondary-200 bg-secondary-50 px-4 py-1.5 text-[13px] font-semibold tracking-wide text-secondary-700">
                    <span class="relative flex h-2 w-2">
                        <span
                            class="absolute inline-flex h-full w-full animate-ping rounded-full bg-secondary-500 opacity-60"></span>
                        <span class="relative inline-flex h-2 w-2 rounded-full bg-secondary-500"></span>
                    </span>
                    Courses
                </span>

                <h2 class="mt-3 text-4xl font-extrabold tracking-tight text-brand-950 md:text-5xl">
                    Our <span
                        class="relative inline-block bg-gradient-to-r from-brand-500 via-brand-500 to-brand-600 bg-clip-text text-transparent">
                        Courses
                        <svg class="absolute -bottom-2 left-0 w-full" height="8" viewBox="0 0 120 8" fill="none"
                            preserveAspectRatio="none">
                            <path d="M2 6C30 2 60 2 118 5" stroke="url(#uGrad)" stroke-width="3"
                                stroke-linecap="round" />
                            <defs>
                                <linearGradient id="uGrad" x1="0" y1="0" x2="120"
                                    y2="0" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#00b1ee" />
                                    <stop offset="1" stop-color="#155b9d" />
                                </linearGradient>
                            </defs>
                        </svg>
                    </span>
                </h2>

                <p class="mt-4.5 text-base leading-relaxed text-brand-800/60 md:text-lg">
                    We are proudly accredited and recognised by the world's most trusted
                    institutions in English language assessment and education.
                </p>
            </div>

            <div class="grid grid-cols-1 gap-5 md:grid-cols-2 md:gap-6">

                {{-- COURSE 1 --}}
                <div
                    class="group flex flex-col justify-between rounded-2xl border border-neutral-200 bg-neutral-25 p-6 transition-all duration-300 ease-out hover:-translate-y-1 hover:border-brand-200 hover:shadow-theme-lg">

                    <div class="flex flex-col gap-4 mb-4">

                        <div class="flex flex-wrap items-center justify-between gap-2">

                            <div
                                class="inline-flex items-center gap-1.5 rounded-full border border-emerald-200/60 bg-emerald-50/80 px-3 py-1 text-[11px] font-semibold uppercase tracking-wider text-emerald-700 backdrop-blur-md dark:border-emerald-900/50 dark:bg-emerald-950/40 dark:text-emerald-400">
                                <span class="h-1.5 w-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
                                Essential & Premium Service
                            </div>

                        </div>


                        <h3
                            class="text-2xl font-bold tracking-tight text-slate-900 transition-colors group-hover:text-brand-600 dark:text-white dark:group-hover:text-brand-400">
                            IELTS Preparation
                        </h3>


                        <p class="text-sm leading-6 text-neutral-600">
                            Build your English skills and exam strategies to achieve your target IELTS score.
                        </p>

                    </div>
                    <div
                        class="flex flex-col gap-3 border-t border-neutral-200 pt-4 sm:flex-row sm:items-center sm:justify-between">

                        <div class="flex items-center gap-2 text-xs font-medium text-slate-500 dark:text-slate-400">
                            <span class="flex h-2 w-2 rounded-full bg-brand-500"></span>
                            Online Available
                        </div>

                        <a href="#"
                            class="inline-flex min-h-10 items-center justify-center gap-1.5 rounded-lg bg-transparent border border-brand-500 px-4 py-2  text-xs font-bold uppercase tracking-wide text-brand-500 transition-all duration-300 hover:bg-brand-600 hover:text-white hover:shadow-theme-sm focus:outline-none focus:ring-4 focus:ring-brand-500/20">

                            Course Details

                            <span class="material-symbols-outlined text-sm">
                                chevron_right
                            </span>

                        </a>

                    </div>
                </div>

                {{-- COURSE 2 --}}
                <div
                    class="group flex flex-col justify-between rounded-2xl border border-neutral-200 bg-neutral-25 p-6 transition-all duration-300 ease-out hover:-translate-y-1 hover:border-brand-200 hover:shadow-theme-lg">

                    <div class="flex flex-col gap-4 mb-4">

                        <div class="flex flex-wrap items-center justify-between gap-2">

                            <div
                                class="inline-flex items-center gap-1.5 rounded-full border border-emerald-200/60 bg-emerald-50/80 px-3 py-1 text-[11px] font-semibold uppercase tracking-wider text-emerald-700 backdrop-blur-md dark:border-emerald-900/50 dark:bg-emerald-950/40 dark:text-emerald-400">
                                <span class="h-1.5 w-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
                                Essential & Premium Service
                            </div>

                        </div>


                        <h3
                            class="text-2xl font-bold tracking-tight text-slate-900 transition-colors group-hover:text-brand-600 dark:text-white dark:group-hover:text-brand-400">
                            PTE Preparation
                        </h3>


                        <p class="text-sm leading-6 text-neutral-600">
                            Improve your English proficiency with focused PTE practice and test strategies.
                        </p>

                    </div>
                    <div
                        class="flex flex-col gap-3 border-t border-neutral-200 pt-4 sm:flex-row sm:items-center sm:justify-between">

                        <div class="flex items-center gap-2 text-xs font-medium text-slate-500 dark:text-slate-400">
                            <span class="flex h-2 w-2 rounded-full bg-brand-500"></span>
                            Online Available
                        </div>

                        <a href="#"
                            class="inline-flex min-h-10 items-center justify-center gap-1.5 rounded-lg bg-transparent border border-brand-500 px-4 py-2  text-xs font-bold uppercase tracking-wide text-brand-500 transition-all duration-300 hover:bg-brand-600 hover:text-white hover:shadow-theme-sm focus:outline-none focus:ring-4 focus:ring-brand-500/20">

                            Course Details

                            <span class="material-symbols-outlined text-sm">
                                chevron_right
                            </span>

                        </a>

                    </div>
                </div>

                {{-- COURSE 3 --}}
                <div
                    class="group flex flex-col justify-between rounded-2xl border border-neutral-200 bg-neutral-25 p-6 transition-all duration-300 ease-out hover:-translate-y-1 hover:border-brand-200 hover:shadow-theme-lg">

                    <div class="flex flex-col gap-4 mb-4">

                        <div class="flex flex-wrap items-center justify-between gap-2">

                            <div
                                class="inline-flex items-center gap-1.5 rounded-full border border-emerald-200/60 bg-emerald-50/80 px-3 py-1 text-[11px] font-semibold uppercase tracking-wider text-emerald-700 backdrop-blur-md dark:border-emerald-900/50 dark:bg-emerald-950/40 dark:text-emerald-400">
                                <span class="h-1.5 w-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
                                Essential & Premium Service
                            </div>

                        </div>


                        <h3
                            class="text-2xl font-bold tracking-tight text-slate-900 transition-colors group-hover:text-brand-600 dark:text-white dark:group-hover:text-brand-400">
                            Spoken English
                        </h3>


                        <p class="text-sm leading-6 text-neutral-600">
                            Develop confident, natural English communication for everyday and professional situations.
                        </p>

                    </div>
                    <div
                        class="flex flex-col gap-3 border-t border-neutral-200 pt-4 sm:flex-row sm:items-center sm:justify-between">

                        <div class="flex items-center gap-2 text-xs font-medium text-slate-500 dark:text-slate-400">
                            <span class="flex h-2 w-2 rounded-full bg-brand-500"></span>
                            Online Available
                        </div>

                        <a href="#"
                            class="inline-flex min-h-10 items-center justify-center gap-1.5 rounded-lg bg-transparent border border-brand-500 px-4 py-2  text-xs font-bold uppercase tracking-wide text-brand-500 transition-all duration-300 hover:bg-brand-600 hover:text-white hover:shadow-theme-sm focus:outline-none focus:ring-4 focus:ring-brand-500/20">

                            Course Details

                            <span class="material-symbols-outlined text-sm">
                                chevron_right
                            </span>

                        </a>

                    </div>
                </div>

                {{-- COURSE 4 --}}
                <div
                    class="group flex flex-col justify-between rounded-2xl border border-neutral-200 bg-neutral-25 p-6 transition-all duration-300 ease-out hover:-translate-y-1 hover:border-brand-200 hover:shadow-theme-lg">

                    <div class="flex flex-col gap-4 mb-4">

                        <div class="flex flex-wrap items-center justify-between gap-2">

                            <div
                                class="inline-flex items-center gap-1.5 rounded-full border border-emerald-200/60 bg-emerald-50/80 px-3 py-1 text-[11px] font-semibold uppercase tracking-wider text-emerald-700 backdrop-blur-md dark:border-emerald-900/50 dark:bg-emerald-950/40 dark:text-emerald-400">
                                <span class="h-1.5 w-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
                                Essential & Premium Service
                            </div>

                        </div>


                        <h3
                            class="text-2xl font-bold tracking-tight text-slate-900 transition-colors group-hover:text-brand-600 dark:text-white dark:group-hover:text-brand-400">
                            Writing & Grammar
                        </h3>


                        <p class="text-sm leading-6 text-neutral-600">
                            Strengthen your writing skills and master essential English grammar for clear communication.
                        </p>

                    </div>
                    <div
                        class="flex flex-col gap-3 border-t border-neutral-200 pt-4 sm:flex-row sm:items-center sm:justify-between">

                        <div class="flex items-center gap-2 text-xs font-medium text-slate-500 dark:text-slate-400">
                            <span class="flex h-2 w-2 rounded-full bg-brand-500"></span>
                            Online Available
                        </div>

                        <a href="#"
                            class="inline-flex min-h-10 items-center justify-center gap-1.5 rounded-lg bg-transparent border border-brand-500 px-4 py-2  text-xs font-bold uppercase tracking-wide text-brand-500 transition-all duration-300 hover:bg-brand-600 hover:text-white hover:shadow-theme-sm focus:outline-none focus:ring-4 focus:ring-brand-500/20">

                            Course Details

                            <span class="material-symbols-outlined text-sm">
                                chevron_right
                            </span>

                        </a>

                    </div>
                </div>
            </div>
        </div>
    </section>

  @include('frontend.pages.home.section.pricing')

    {{-- PROSPECTUS / LEAD CAPTURE --}}
    <section id="prospectus" class="mx-auto w-full max-w-7xl px-4 py-14 sm:px-6 md:py-18 lg:px-8 lg:py-24">
        <div
            class="grid grid-cols-1 overflow-hidden rounded-2xl border border-neutral-200 bg-neutral-25 shadow-theme-lg lg:grid-cols-12">
            {{--  LEFT CONTENT --}}
            <div class="flex flex-col justify-between gap-8 bg-brand-50 p-6 md:p-10 lg:col-span-7">

                <div class="flex flex-col gap-5">

                    <div class="flex flex-wrap items-center gap-2">

                        <span class=" text-[10px] font-bold uppercase tracking-widest text-secondary-600">
                            Documentation & Intakes
                        </span>

                        <span class="text-neutral-400">/</span>

                        <span class=" text-[10px] font-bold uppercase tracking-widest text-neutral-700">
                            2025 Calendar
                        </span>

                    </div>


                    <h3
                        class="max-w-2xl font-extrabold uppercase leading-tight tracking-tight text-brand-500 text-xl  md:text-2xl lg:text-3xl">
                        Download the Official 2025 Course Booklet & Fee Schedule
                    </h3>


                    <p class="max-w-2xl text-sm leading-6 text-neutral-600 md:text-base md:leading-7">
                        Receive the official institutional prospectus detailing competency unit descriptions,
                        articulation pathways, tuition breakdowns and Department of Home Affairs student visa
                        requirements.
                    </p>


                    <div class="flex flex-col gap-4 pt-1">

                        <div class="flex items-start gap-3">

                            <span class="material-symbols-outlined mt-0.5 text-xl font-bold text-secondary-500">
                                check_circle
                            </span>

                            <span class="text-sm leading-6 text-neutral-800">
                                <strong class="font-semibold">
                                    Transparent Fee Schedules:
                                </strong>
                                Material costs, uniform fees and flexible quarterly instalment timetables.
                            </span>

                        </div>


                        <div class="flex items-start gap-3">

                            <span class="material-symbols-outlined mt-0.5 text-xl font-bold text-secondary-500">
                                check_circle
                            </span>

                            <span class="text-sm leading-6 text-neutral-800">
                                <strong class="font-semibold">
                                    CRICOS & ESOS Standards:
                                </strong>
                                Mandatory hours, attendance compliance tracking and English proficiency thresholds.
                            </span>

                        </div>


                        <div class="flex items-start gap-3">

                            <span class="material-symbols-outlined mt-0.5 text-xl font-bold text-secondary-500">
                                check_circle
                            </span>

                            <span class="text-sm leading-6 text-neutral-800">
                                <strong class="font-semibold">
                                    Work Placement Agreements:
                                </strong>
                                Approved employer networks in Western Sydney and regional NSW.
                            </span>

                        </div>

                    </div>

                </div>


                <div
                    class="flex flex-wrap items-center gap-x-3 gap-y-2 border-t border-brand-200 pt-5  text-[9px] font-bold uppercase tracking-wide text-neutral-600">

                    <div class="flex items-center gap-1.5">

                        <span class="material-symbols-outlined text-base">
                            picture_as_pdf
                        </span>

                        <span>
                            PDF (3.8 MB)
                        </span>

                    </div>

                    <span class="text-neutral-400">•</span>

                    <span>
                        Updated: January 2025
                    </span>

                    <span class="text-neutral-400">•</span>

                    <span>
                        Verified ASQA VET
                    </span>

                </div>

            </div>
            {{-- RIGHT FORM --}}
            <div class="flex flex-col justify-center bg-neutral-25 p-6 md:p-10 lg:col-span-5">

                <form class="flex flex-col gap-5"
                    onsubmit="event.preventDefault(); alert('Course prospectus PDF has been dispatched to your email address.');">


                    {{-- Form heading --}}
                    <div class="border-b border-neutral-200 pb-4">

                        <span class="font-display text-lg font-bold uppercase tracking-tight text-brand-500">
                            Instant Access
                        </span>

                        <p class="mt-1  text-[9px] font-bold uppercase tracking-wide text-neutral-500">
                            Direct dispatch to your primary inbox
                        </p>

                    </div>


                    {{-- Name --}}
                    <div class="flex flex-col gap-2">

                        <label for="full-name" class=" text-[10px] font-bold uppercase tracking-wide text-neutral-800">
                            Full Legal Name *
                        </label>

                        <input id="full-name" type="text" required placeholder="e.g. Alex Henderson"
                            class="h-11 w-full rounded-lg border border-neutral-300 bg-neutral-25 px-4 py-2.5  text-sm text-neutral-900 placeholder:text-neutral-400 transition-all duration-200 focus:border-brand-400 focus:bg-neutral-25 focus:outline-none focus:ring-4 focus:ring-brand-500/10" />

                    </div>


                    {{-- Email --}}
                    <div class="flex flex-col gap-2">

                        <label for="email" class=" text-[10px] font-bold uppercase tracking-wide text-neutral-800">
                            Email Address *
                        </label>

                        <input id="email" type="email" required placeholder="name@example.com"
                            class="h-11 w-full rounded-lg border border-neutral-300 bg-neutral-25 px-4 py-2.5  text-sm text-neutral-900 placeholder:text-neutral-400 transition-all duration-200 focus:border-brand-400 focus:bg-neutral-25 focus:outline-none focus:ring-4 focus:ring-brand-500/10" />

                    </div>


                    {{-- Interest --}}
                    <div class="flex flex-col gap-2">

                        <label for="area-interest"
                            class=" text-[10px] font-bold uppercase tracking-wide text-neutral-800">
                            Area of Interest *
                        </label>

                        <select id="area-interest" required
                            class="h-11 w-full rounded-lg border border-neutral-300 bg-neutral-25 px-4 py-2.5  text-sm text-neutral-900 transition-all duration-200 focus:border-brand-400 focus:bg-neutral-25 focus:outline-none focus:ring-4 focus:ring-brand-500/10">

                            <option value="">
                                Select study stream...
                            </option>

                            <option value="trade">
                                Trade: Carpentry & Building Construction
                            </option>

                            <option value="health">
                                Health: Aged Care & Mental Health Support
                            </option>

                            <option value="business">
                                Business: Leadership & Operational Management
                            </option>

                            <option value="all">
                                Full Comprehensive Multi-Discipline Guide
                            </option>

                        </select>

                    </div>


                    {{-- Visa checkbox --}}
                    <div class="flex items-start gap-2.5 pt-1">

                        <input id="student-visa" type="checkbox"
                            class="mt-0.5 h-4 w-4 rounded border-neutral-300 accent-brand-500" />

                        <label for="student-visa" class="cursor-pointer select-none text-xs leading-5 text-neutral-600">

                            I require Australian Subclass 500 Student Visa guidance.

                        </label>

                    </div>


                    {{-- Submit --}}
                    <button type="submit"
                        class="mt-1 inline-flex min-h-12 w-full items-center justify-center rounded-lg bg-brand-500 px-4 py-3  text-xs font-bold uppercase tracking-wide text-neutral-25 transition-all duration-300 hover:bg-brand-600 hover:shadow-theme-lg focus:outline-none focus:ring-4 focus:ring-brand-500/20">

                        Download Course Booklet (PDF)

                        <span class="ml-1">
                            →
                        </span>

                    </button>

                </form>

            </div>
        </div>
    </section>

    {{-- ADMISSIONS CTA --}}
    <section class="w-full border-y border-brand-700 bg-brand-800 py-14 text-neutral-25 md:py-18 lg:py-20">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            <div class="flex flex-col items-center justify-between gap-8 lg:flex-row">


                {{-- CTA content --}}
                <div class="flex max-w-3xl flex-col gap-3 text-center lg:text-left">

                    <div class="flex items-center justify-center gap-2 lg:justify-start">

                        <span class="relative flex h-2.5 w-2.5">

                            <span
                                class="absolute inline-flex h-full w-full animate-ping rounded-full bg-secondary-400 opacity-75">
                            </span>

                            <span class="relative inline-flex h-2.5 w-2.5 rounded-full bg-secondary-300">
                            </span>

                        </span>


                        <span class=" text-[10px] font-bold uppercase tracking-widest text-secondary-300">
                            Admissions Advisors On Call
                        </span>

                    </div>


                    <h3
                        class="font-display text-3xl font-extrabold uppercase leading-tight tracking-tight text-neutral-25 md:text-4xl lg:text-5xl">
                        Have Questions About Enrolment?
                    </h3>


                    <p class="max-w-2xl text-sm leading-6 text-brand-100 md:text-base md:leading-7">
                        Speak directly with an accredited course counsellor about entry criteria, RPL
                        (Recognition of Prior Learning) and campus workshop walkthroughs.
                    </p>

                </div>


                {{-- CTA actions --}}
                <div class="flex w-full shrink-0 flex-col items-stretch gap-3 sm:w-auto sm:flex-row sm:items-center">


                    {{-- Phone --}}
                    <div class="rounded-xl border border-brand-500 bg-brand-900 px-5 py-3 text-center">

                        <span class="block  text-[9px] font-bold uppercase tracking-widest text-brand-200">
                            Direct Sydney Line
                        </span>

                        <span class="mt-1 block font-display text-xl font-extrabold tracking-wide text-neutral-25">
                            +61 2 8677 3600
                        </span>

                    </div>


                    {{-- Campus tour --}}
                    <a href="#prospectus"
                        class="inline-flex min-h-12 items-center justify-center rounded-xl bg-secondary-300 px-6 py-3  text-xs font-extrabold uppercase tracking-wide text-brand-950 transition-all duration-300 hover:-translate-y-0.5 hover:bg-secondary-200 hover:shadow-theme-lg focus:outline-none focus:ring-4 focus:ring-secondary-300/30">

                        Book Free Campus Tour

                    </a>

                </div>
            </div>
        </div>
    </section>
@endsection
