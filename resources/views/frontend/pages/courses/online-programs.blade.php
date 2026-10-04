@extends('frontend.layouts.app')

@section('content')
    <section class="relative overflow-hidden bg-brand-25 py-12 lg:py-20">
        {{-- Mesh background utility --}}
        <div class="absolute inset-0 mesh-background opacity-60"></div>

        <div class="relative mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-8">
            {{-- Grid Container --}}
            <div class="grid grid-cols-1 gap-12 lg:grid-cols-12 lg:gap-8 items-center">

                {{-- LEFT COLUMN: Course Details & Info --}}
                <div class="lg:col-span-7 pr-0 md:pr-10">
                    <!-- Badge / Subtitle -->
                    <div
                        class="inline-flex items-center gap-2 rounded-full border border-brand-200 bg-white/80 px-3 py-1 text-xs font-semibold text-brand-700 shadow-sm backdrop-blur-sm">
                        <span class="flex h-2 w-2 rounded-full bg-brand-600"></span>
                        Flexible Online Learning
                    </div>

                    <!-- Course Title -->
                    <h1
                        class="my-4 font-heading text-3xl font-extrabold tracking-tight text-neutral-900 sm:text-4xl lg:text-5xl leading-[1.15]">
                        Online Programs for <span class="text-brand-600">IELTS</span> and <span
                            class="text-brand-600">PTE</span> Preparation
                    </h1>

                    <!-- Description -->
                    <p class="max-w-2xl text-base text-neutral-600 sm:text-lg leading-relaxed">
                        Helping you achieve higher scores and brighter global opportunities with expert-led live classes,
                        personalized feedback, and comprehensive study materials.
                    </p>

                    {{-- HERO CTA BUTTONS --}}
                    <div class=" my-5 flex flex-col gap-4 pt-2 sm:flex-row sm:items-center" data-aos="fade-up"
                        data-aos-duration="1000">
                        {{-- Primary CTA --}}
                        <a href="#courses"
                            class="inline-flex min-h-12 items-center justify-center gap-2 rounded-xl bg-secondary-500 px-7 py-3.5 text-xs font-bold uppercase tracking-wider text-white shadow-lg shadow-secondary-500/25 transition-all duration-300 ease-out hover:-translate-y-0.5 hover:bg-secondary-400 hover:shadow-secondary-500/40 focus:outline-none focus:ring-4 focus:ring-secondary-400/30">
                            <span>Book Free Demo Class</span>
                            <span
                                class="material-symbols-outlined text-lg leading-none transition-transform duration-300 ease-out group-hover:translate-x-1">
                                arrow_forward
                            </span>
                        </a>
                    </div>

                    <!-- Feature Bullets -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 w-full sm:w-[80%]">
                        <div class="flex items-start gap-3 w-fit">
                            <div
                                class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-brand-100 text-brand-700">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-sm font-semibold text-neutral-900">Live & Recorded Classes</h4>
                                <p class="text-xs text-neutral-500">Learn at your own pace anytime.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3 w-fit">
                            <div
                                class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-brand-100 text-brand-700">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-sm font-semibold text-neutral-900">Mock Tests & Grading</h4>
                                <p class="text-xs text-neutral-500">Real exam simulation and feedback.</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- RIGHT COLUMN: Lead Form Card --}}
                <div class="lg:col-span-5">
                    <div class="rounded-2xl border border-neutral-200/80 bg-white p-6 sm:p-8 shadow-xl shadow-brand-900/5">

                        <!-- Form Header -->
                        <div class="mb-6">
                            <h3 class="text-xl font-bold text-neutral-900">Begin Your IELTS & PTE Success Journey</h3>
                            <p class="text-xs text-neutral-500 mt-1">Fill out the form below and we will reach out
                                within 24 hours.</p>
                        </div>

                        <!-- Lead Form -->
                        <form action="#" method="POST" class="space-y-4">
                            @csrf

                            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                                <!-- Full Name -->
                                <div>
                                    <label for="name"
                                        class="block text-xs font-semibold text-neutral-700 uppercase tracking-wider mb-1.5">Full
                                        Name</label>
                                    <input type="text" id="name" name="name" placeholder="John Doe" required
                                        class="w-full rounded-xl border border-neutral-200 px-4 py-2.5 text-sm text-neutral-900 placeholder-neutral-400 focus:border-brand-500 focus:outline-none focus:ring-4 focus:ring-brand-500/10 transition">
                                </div>

                                <!-- Email -->
                                <div>
                                    <label for="email"
                                        class="block text-xs font-semibold text-neutral-700 uppercase tracking-wider mb-1.5">Email
                                        Address</label>
                                    <input type="email" id="email" name="email" placeholder="john@example.com"
                                        required
                                        class="w-full rounded-xl border border-neutral-200 px-4 py-2.5 text-sm text-neutral-900 placeholder-neutral-400 focus:border-brand-500 focus:outline-none focus:ring-4 focus:ring-brand-500/10 transition">
                                </div>
                            </div>



                            <!-- Phone Number -->
                            <div>
                                <label for="phone"
                                    class="block text-xs font-semibold text-neutral-700 uppercase tracking-wider mb-1.5">Phone
                                    Number</label>
                                <input type="tel" id="phone" name="phone" placeholder="+1 (555) 000-0000" required
                                    class="w-full rounded-xl border border-neutral-200 px-4 py-2.5 text-sm text-neutral-900 placeholder-neutral-400 focus:border-brand-500 focus:outline-none focus:ring-4 focus:ring-brand-500/10 transition">
                            </div>

                            <!-- Program Selection -->
                            <div>
                                <label for="program"
                                    class="block text-xs font-semibold text-neutral-700 uppercase tracking-wider mb-1.5">Select
                                    Program</label>
                                <select id="program" name="program"
                                    class="w-full rounded-xl border border-neutral-200 px-4 py-2.5 text-sm text-neutral-900 focus:border-brand-500 focus:outline-none focus:ring-4 focus:ring-brand-500/10 transition">
                                    <option value="ielts">IELTS Academic / General</option>
                                    <option value="pte">PTE Academic</option>
                                    <option value="both">Both / Unsure</option>
                                </select>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit"
                                class="w-full rounded-xl bg-brand-600 px-5 py-3.5 text-sm font-semibold text-white shadow-md shadow-brand-600/20 hover:bg-brand-700 focus:outline-none focus:ring-4 focus:ring-brand-500/30 transition-all duration-200 active:scale-[0.99]">
                                Start Your Journey
                            </button>

                            <p class="text-center text-[11px] text-neutral-400 mt-3">
                                🔒 Your information is 100% secure with us.
                            </p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>


    @include('frontend.pages.home.section.pricing')


    <section class="py-8 md:py-12 lg:py-16">
        <div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-8">

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start">

                {{-- Main Event Content --}}
                <div class="lg:col-span-7">
                    <div class="md:pr-4">

                        {{-- Header Section --}}
                        <div class="space-y-4">
                            <span
                                class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-brand-50 text-brand-700 border border-brand-200/60">
                                <svg class="w-3.5 h-3.5 text-brand-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                                    </path>
                                </svg>
                                Language Preparation Course
                            </span>

                            <h1
                                class="font-heading text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight text-neutral-900 leading-[1.15]">
                                What is IELTS?
                            </h1>

                            <p class="text-base sm:text-lg text-neutral-600 leading-relaxed">
                                IELTS, the International English Language Testing System, is globally trusted by over <span
                                    class="font-semibold text-neutral-900">10,000 academic institutions</span> and
                                international employers. Administered by IDP Education, it rigorously assesses competence
                                across <span class="font-semibold text-neutral-900">4 key aspects</span>: Listening,
                                Reading, Writing, and Speaking.
                            </p>
                        </div>

                        {{-- Outcomes Section --}}
                        <div class="mt-8 space-y-6">
                            <div>
                                <h3 class="text-xl font-bold text-neutral-900 tracking-tight">
                                    IELTS & PTE Preparation — Learning Outcomes
                                </h3>
                                <p class="text-sm text-neutral-500 mt-1">What you will gain from taking this preparatory
                                    program:</p>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">

                                {{-- Outcome 1 --}}
                                <div class="group p-3 rounded-2xl border border-neutral-200/80 bg-white  shadow-xs transition-all duration-300 hover:-translate-y-1 hover:border-brand-300 hover:shadow-md hover:shadow-brand-500/5 flex items-center gap-4"
                                    data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                                    <div
                                        class="flex-shrink-0 w-11 h-11 rounded-xl bg-brand-50 border border-brand-100 flex items-center justify-center text-brand-600 group-hover:bg-brand-600 group-hover:text-white transition-colors duration-300">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h6
                                            class="font-bold text-neutral-900 text-sm leading-snug group-hover:text-brand-600 transition-colors">
                                            Achieve Your Target Score</h6>

                                    </div>
                                </div>

                                {{-- Outcome 2 --}}
                                <div class="group p-3 rounded-2xl border border-neutral-200/80 bg-white  shadow-xs transition-all duration-300 hover:-translate-y-1 hover:border-brand-300 hover:shadow-md hover:shadow-brand-500/5 flex items-center gap-4"
                                    data-aos="fade-up" data-aos-duration="800" data-aos-delay="150">
                                    <div
                                        class="flex-shrink-0 w-11 h-11 rounded-xl bg-brand-50 border border-brand-100 flex items-center justify-center text-brand-600 group-hover:bg-brand-600 group-hover:text-white transition-colors duration-300">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h6
                                            class="font-bold text-neutral-900 text-sm leading-snug group-hover:text-brand-600 transition-colors">
                                            Improve English Proficiency</h6>

                                    </div>
                                </div>

                                {{-- Outcome 3 --}}
                                <div class="group p-3 rounded-2xl border border-neutral-200/80 bg-white  shadow-xs transition-all duration-300 hover:-translate-y-1 hover:border-brand-300 hover:shadow-md hover:shadow-brand-500/5 flex items-center gap-4"
                                    data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                                    <div
                                        class="flex-shrink-0 w-11 h-11 rounded-xl bg-brand-50 border border-brand-100 flex items-center justify-center text-brand-600 group-hover:bg-brand-600 group-hover:text-white transition-colors duration-300">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h6
                                            class="font-bold text-neutral-900 text-sm leading-snug group-hover:text-brand-600 transition-colors">
                                            Build Speaking & Writing Confidence</h6>

                                    </div>
                                </div>

                                {{-- Outcome 4 --}}
                                <div class="group p-3 rounded-2xl border border-neutral-200/80 bg-white items-center shadow-xs transition-all duration-300 hover:-translate-y-1 hover:border-brand-300 hover:shadow-md hover:shadow-brand-500/5 flex gap-4"
                                    data-aos="fade-up" data-aos-duration="800" data-aos-delay="250">
                                    <div
                                        class="flex-shrink-0 w-11 h-11 rounded-xl bg-brand-50 border border-brand-100 flex items-center justify-center text-brand-600 group-hover:bg-brand-600 group-hover:text-white transition-colors duration-300">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h6
                                            class="font-bold text-neutral-900 text-sm leading-snug group-hover:text-brand-600 transition-colors">
                                            Master Exam Techniques</h6>

                                    </div>
                                </div>

                            </div>

                            {{-- Action Button --}}
                            {{-- <a href="#prospectus"
                    class="group mt-6 inline-flex min-h-12 w-full sm:w-auto items-center justify-center gap-3 rounded-xl bg-brand-600 px-8 py-4 text-xs font-bold uppercase tracking-wider text-white shadow-md shadow-brand-500/20 transition-all duration-300 hover:-translate-y-0.5 hover:bg-brand-700 hover:shadow-lg hover:shadow-brand-500/30 focus:outline-none focus:ring-4 focus:ring-brand-500/20 active:translate-y-0">
                    <svg class="w-4 h-4 text-white/80 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    <span>Book Free Demo Class</span>
                    <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a> --}}

                        </div>
                    </div>
                </div>

                {{-- Right Featured Media --}}
                <div class="lg:col-span-5">
                    <div class="relative rounded-3xl bg-neutral-100 p-2 border border-neutral-200/80 shadow-md">
                        <div class="relative rounded-2xl overflow-hidden aspect-square">
                            <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=1400&q=80"
                                alt="Students preparing for IELTS"
                                class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">

                            {{-- Subtle gradient overlay --}}
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-neutral-900/40 via-transparent to-transparent pointer-events-none">
                            </div>

                            {{-- Floating Badge on Image --}}
                            <div
                                class="absolute bottom-4 left-4 right-4 bg-white/90 backdrop-blur-md p-3.5 rounded-xl border border-white/40 shadow-sm flex items-center gap-3">
                                <div
                                    class="w-9 h-9 rounded-lg bg-emerald-50 text-emerald-600 flex items-center justify-center font-bold text-xs">
                                    98%
                                </div>
                                <div>
                                    <p class="text-xs font-bold text-neutral-900">Success Rate</p>
                                    <p class="text-[11px] text-neutral-500">Students achieve target band on 1st try</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section class="pb-10">
    <div class="max-w-7xl mx-auto space-y-10 px-4 md:px-6 lg:px-8">

        {{-- SECTION 1: TYPES OF IELTS TEST --}}
        <div>
            <div class="mb-6">             
                <h2 class="text-2xl sm:text-3xl font-extrabold text-neutral-900 tracking-tight mt-2">
                    Types of IELTS Test
                </h2>
                <p class="text-sm text-neutral-500 mt-1">
                    Select the test path aligned with your international goals.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                
                {{-- Academic Test Card --}}
                <div class="group relative rounded-3xl border border-neutral-200/90 bg-white p-6 sm:p-8 shadow-xs transition-all duration-300 hover:-translate-y-1 hover:border-brand-300 hover:shadow-xl hover:shadow-brand-500/5 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-5">
                            {{-- Lucide Icon: GraduationCap --}}
                            <div class="w-12 h-12 rounded-2xl bg-brand-50 border border-brand-100 flex items-center justify-center text-brand-600 group-hover:bg-brand-600 group-hover:text-white transition-colors duration-300">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M22 10v6M2 10l10-5 10 5-10 5z"/><path stroke-linecap="round" stroke-linejoin="round" d="M6 12v5c3 3 9 3 12 0v-5"/></svg>
                            </div>
                            <span class="text-[11px] font-bold uppercase tracking-wider text-brand-700 bg-brand-50 px-2.5 py-1 rounded-md border border-brand-200/50">
                                Academic Option
                            </span>
                        </div>
                        <h3 class="text-xl font-bold text-neutral-900 group-hover:text-brand-600 transition-colors">
                            Academic Test
                        </h3>
                        <p class="text-sm text-neutral-600 leading-relaxed mt-2">
                            This option is designed for students aspiring to pursue education in international academic institutions.
                        </p>
                    </div>
                    <div class="mt-6 pt-4 border-t border-neutral-100 flex items-center justify-between text-xs font-medium text-neutral-500">
                        <span>Academic Reading & Writing</span>
                        <span class="text-brand-600 font-semibold group-hover:underline inline-flex items-center gap-1">
                            Higher Education
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M12 5l7 7-7 7"/></svg>
                        </span>
                    </div>
                </div>

                {{-- General Training Test Card --}}
                <div class="group relative rounded-3xl border border-neutral-200/90 bg-white p-6 sm:p-8 shadow-xs transition-all duration-300 hover:-translate-y-1 hover:border-brand-300 hover:shadow-xl hover:shadow-brand-500/5 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-5">
                            {{-- Lucide Icon: Briefcase --}}
                            <div class="w-12 h-12 rounded-2xl bg-blue-50 border border-blue-100 flex items-center justify-center text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect width="20" height="14" x="2" y="7" rx="2" ry="2"/><path stroke-linecap="round" stroke-linejoin="round" d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
                            </div>
                            <span class="text-[11px] font-bold uppercase tracking-wider text-blue-700 bg-blue-50 px-2.5 py-1 rounded-md border border-blue-200/50">
                                General Option
                            </span>
                        </div>
                        <h3 class="text-xl font-bold text-neutral-900 group-hover:text-blue-600 transition-colors">
                            General Training Test
                        </h3>
                        <p class="text-sm text-neutral-600 leading-relaxed mt-2">
                            On the other hand, this test is the preferred choice for individuals seeking employment or opportunities to work in international settings.
                        </p>
                    </div>
                    <div class="mt-6 pt-4 border-t border-neutral-100 flex items-center justify-between text-xs font-medium text-neutral-500">
                        <span>General Reading & Writing</span>
                        <span class="text-blue-600 font-semibold group-hover:underline inline-flex items-center gap-1">
                            Work & Migration
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M12 5l7 7-7 7"/></svg>
                        </span>
                    </div>
                </div>

            </div>
        </div>


        {{-- SECTION 2: IELTS TEST FORMAT --}}
        <div class="rounded-3xl border border-neutral-200/90 bg-white p-6 sm:p-8 lg:p-10 shadow-xs space-y-8">
            
            {{-- Header & Duration Badge --}}
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 pb-6 border-b border-neutral-100">
                <div>
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-brand-50 text-brand-700 border border-brand-200/60">
                        {{-- Lucide Icon: Layers --}}
                        <svg class="w-3.5 h-3.5 text-brand-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="m12.83 2.18a2 2 0 0 0-1.66 0L2.6 6.08a1 1 0 0 0 0 1.83l8.58 3.91a2 2 0 0 0 1.66 0l8.58-3.9a1 1 0 0 0 0-1.83Z"/><path stroke-linecap="round" stroke-linejoin="round" d="m22 12.5-8.58 3.91a2 2 0 0 1-1.66 0L3.17 12.5"/><path stroke-linecap="round" stroke-linejoin="round" d="m22 17.5-8.58 3.91a2 2 0 0 1-1.66 0L3.17 17.5"/></svg>
                        Examination Structure
                    </span>
                    <h2 class="text-2xl sm:text-3xl font-extrabold text-neutral-900 tracking-tight mt-2">
                        IELTS Test Format
                    </h2>
                </div>
                
                {{-- Total Duration Badge --}}
                <div class="inline-flex items-center gap-3 bg-neutral-900 text-white px-5 py-3 rounded-2xl shadow-md self-start sm:self-auto">
                    <div class="w-9 h-9 rounded-xl bg-neutral-800 text-brand-400 flex items-center justify-center">
                        {{-- Lucide Icon: Timer --}}
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><line x1="10" x2="14" y1="2" y2="2"/><line x1="12" x2="12" y1="14" y2="11"/><circle cx="12" cy="14" r="8"/></svg>
                    </div>
                    <div>
                        <p class="text-[10px] uppercase tracking-wider text-neutral-400 font-medium">Total Duration</p>
                        <p class="text-base font-black tracking-tight text-white">2 Hours 45 Minutes</p>
                    </div>
                </div>
            </div>

            {{-- Format Overview Text Box --}}
            <div class="bg-neutral-50 p-5 sm:p-6 rounded-2xl border border-neutral-200/70 text-neutral-700 text-sm leading-relaxed space-y-3">
                <p>
                    The IELTS examination involves <strong>Listening, Reading, Writing, and Speaking</strong> and caters for them all within a mere 3 hours. Adding all the examinations together, the total examination duration can be summed up to <strong>2 hours and 45 minutes</strong>.
                </p>
                <p>
                    There are two variations of the IELTS test: <strong>Academic</strong> and <strong>General Training</strong>. The Listening and Speaking sections are identical in both variants, but the contents of the Reading and Writing parts are slightly different based on which test is taken.
                </p>
            </div>

            {{-- 4 Test Modules Visual Grid --}}
            <div>
                <p class="text-xs font-bold uppercase tracking-wider text-neutral-400 mb-4">
                    Module Breakdown
                </p>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                    
                    {{-- Listening Module --}}
                    <div class="rounded-2xl border border-neutral-200/80 bg-neutral-50/50 p-5 flex flex-col justify-between hover:border-brand-300 hover:bg-white transition-all">
                        <div>
                            <div class="flex items-center justify-between mb-3">
                                {{-- Lucide Icon: Headphones --}}
                                <div class="w-9 h-9 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center border border-emerald-100">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 14h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-7a9 9 0 0 1 18 0v7a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3"/></svg>
                                </div>
                                <span class="px-2 py-0.5 rounded text-[10px] font-bold bg-emerald-100/80 text-emerald-800">Same for Both</span>
                            </div>
                            <h4 class="font-bold text-neutral-900 text-base">Listening</h4>
                        </div>
                        <p class="text-xs text-neutral-500 mt-3">Identical section in both Academic & General Training</p>
                    </div>

                    {{-- Reading Module --}}
                    <div class="rounded-2xl border border-neutral-200/80 bg-neutral-50/50 p-5 flex flex-col justify-between hover:border-brand-300 hover:bg-white transition-all">
                        <div>
                            <div class="flex items-center justify-between mb-3">
                                {{-- Lucide Icon: BookOpen --}}
                                <div class="w-9 h-9 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center border border-amber-100">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path stroke-linecap="round" stroke-linejoin="round" d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
                                </div>
                                <span class="px-2 py-0.5 rounded text-[10px] font-bold bg-amber-100/80 text-amber-800">Slightly Different</span>
                            </div>
                            <h4 class="font-bold text-neutral-900 text-base">Reading</h4>
                        </div>
                        <p class="text-xs text-neutral-500 mt-3">Contents differ based on Academic or General selection</p>
                    </div>

                    {{-- Writing Module --}}
                    <div class="rounded-2xl border border-neutral-200/80 bg-neutral-50/50 p-5 flex flex-col justify-between hover:border-brand-300 hover:bg-white transition-all">
                        <div>
                            <div class="flex items-center justify-between mb-3">
                                {{-- Lucide Icon: PenTool --}}
                                <div class="w-9 h-9 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center border border-amber-100">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="m12 19 7-7 3 3-7 7-3-3z"/><path stroke-linecap="round" stroke-linejoin="round" d="m18 13-1.5-7.5L2 2l3.5 14.5L13 18z"/><path stroke-linecap="round" stroke-linejoin="round" d="M2 2l7.586 7.586"/><circle cx="11" cy="11" r="2"/></svg>
                                </div>
                                <span class="px-2 py-0.5 rounded text-[10px] font-bold bg-amber-100/80 text-amber-800">Slightly Different</span>
                            </div>
                            <h4 class="font-bold text-neutral-900 text-base">Writing</h4>
                        </div>
                        <p class="text-xs text-neutral-500 mt-3">Task topics vary based on Academic or General selection</p>
                    </div>

                    {{-- Speaking Module --}}
                    <div class="rounded-2xl border border-neutral-200/80 bg-neutral-50/50 p-5 flex flex-col justify-between hover:border-brand-300 hover:bg-white transition-all">
                        <div>
                            <div class="flex items-center justify-between mb-3">
                                {{-- Lucide Icon: Mic --}}
                                <div class="w-9 h-9 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center border border-emerald-100">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 2a3 3 0 0 0-3 3v7a3 3 0 0 0 6 0V5a3 3 0 0 0-3-3Z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19 10v2a7 7 0 0 1-14 0v-2"/><line x1="12" x2="12" y1="19" y2="22"/></svg>
                                </div>
                                <span class="px-2 py-0.5 rounded text-[10px] font-bold bg-emerald-100/80 text-emerald-800">Same for Both</span>
                            </div>
                            <h4 class="font-bold text-neutral-900 text-base">Speaking</h4>
                        </div>
                        <p class="text-xs text-neutral-500 mt-3">Identical format across Academic & General Training</p>
                    </div>

                </div>
            </div>

            {{-- Exam Scheduling Rules --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 pt-4 border-t border-neutral-100">
                
                {{-- Rule 1: No Break Rule --}}
                <div class="flex items-start gap-3.5 bg-neutral-50 p-4 rounded-2xl border border-neutral-200/70">
                    <div class="flex-shrink-0 w-9 h-9 rounded-xl bg-white border border-neutral-200/80 flex items-center justify-center text-neutral-700 shadow-2xs">
                        {{-- Lucide Icon: Clock --}}
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                    </div>
                    <div>
                        <h5 class="text-xs font-bold text-neutral-900 uppercase tracking-wide">Continuous Session</h5>
                        <p class="text-xs text-neutral-600 leading-relaxed mt-1">
                            In both IELTS tests, the Listening, Reading, and Writing sub-tests are done one after the other <strong>without any break in between</strong>.
                        </p>
                    </div>
                </div>

                {{-- Rule 2: Flexible Speaking Arrangement --}}
                <div class="flex items-start gap-3.5 bg-neutral-50 p-4 rounded-2xl border border-neutral-200/70">
                    <div class="flex-shrink-0 w-9 h-9 rounded-xl bg-white border border-neutral-200/80 flex items-center justify-center text-neutral-700 shadow-2xs">
                        {{-- Lucide Icon: CalendarDays --}}
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect width="18" height="18" x="3" y="4" rx="2" ry="2"/><line x1="16" x2="16" y1="2" y2="6"/><line x1="8" x2="8" y1="2" y2="6"/><line x1="3" x2="21" y1="10" y2="10"/><path d="M8 14h.01"/><path d="M12 14h.01"/><path d="M16 14h.01"/><path d="M8 18h.01"/><path d="M12 18h.01"/><path d="M16 18h.01"/></svg>
                    </div>
                    <div>
                        <h5 class="text-xs font-bold text-neutral-900 uppercase tracking-wide">Flexible Speaking Schedule</h5>
                        <p class="text-xs text-neutral-600 leading-relaxed mt-1">
                            Speaking might be arranged to be completed <strong>up to one week before or after</strong> an individual’s remaining test parts depending on test center availability.
                        </p>
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>
@endsection
