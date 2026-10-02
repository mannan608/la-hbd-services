@extends('frontend.layouts.app')

@section('content')
    @include('frontend.pages.home.section.hero-slider')

    {{-- MARQUEE --}}
    @include('frontend.pages.home.section.marquee')

    <section id="courses" class="w-full bg-neutral-50 py-12 md:py-16 lg:py-20 border-y border-neutral-200/60">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            {{-- Standardized Section Heading --}}
            <div class="mx-auto max-w-3xl text-center mb-12 md:mb-16">
                <span
                    class="inline-flex items-center gap-2 rounded-full border border-secondary-200 bg-secondary-50 px-4 py-1.5 text-xs font-semibold uppercase tracking-wider text-secondary-700 shadow-xs"
                    data-aos="fade-up" data-aos-duration="600">
                    <span class="relative flex h-2 w-2">
                        <span
                            class="absolute inline-flex h-full w-full animate-ping rounded-full bg-secondary-500 opacity-60"></span>
                        <span class="relative inline-flex h-2 w-2 rounded-full bg-secondary-500"></span>
                    </span>
                    Featured Programs
                </span>

                <h2 class="mt-4 text-3xl font-extrabold tracking-tight text-brand-950 sm:text-4xl lg:text-5xl"
                    data-aos="fade-up" data-aos-duration="800">
                    Our Comprehensive <span
                        class="relative inline-block bg-gradient-to-r from-brand-600 via-brand-500 to-secondary-500 bg-clip-text text-transparent">
                        Courses
                        <svg class="absolute -bottom-2 left-0 w-full" height="8" viewBox="0 0 120 8" fill="none"
                            preserveAspectRatio="none">
                            <path d="M2 6C30 2 60 2 118 5" stroke="url(#uGradCourses)" stroke-width="3"
                                stroke-linecap="round" />
                            <defs>
                                <linearGradient id="uGradCourses" x1="0" y1="0" x2="120"
                                    y2="0" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#00b1ee" />
                                    <stop offset="1" stop-color="#155b9d" />
                                </linearGradient>
                            </defs>
                        </svg>
                    </span>
                </h2>

                <p class="mt-4 text-base leading-relaxed text-neutral-600 md:text-lg" data-aos="fade-up"
                    data-aos-duration="900">
                    Expertly structured IELTS and PTE preparation designed to boost your skills, confidence, and exam
                    performance.
                </p>
            </div>
            {{-- Courses Grid --}}
            @include('frontend.pages.common.courses', ['courses' => $courses])

        </div>
    </section>

    {{-- COURSE PRICING & TABS SECTION --}}
    @include('frontend.pages.home.section.pricing')

    {{--  STUDENT PROSPECT SECTION --}}
    @include('frontend.pages.home.section.prospect')

    {{-- STUDENT STORY / TESTIMONIALS SECTION --}}
    @include('frontend.pages.common.student-story')

    {{-- WHY CHOOSE US SECTION --}}
    @include('frontend.pages.common.why')

    {{-- CALL TO ACTION SECTION --}}
    @include('frontend.pages.common.cta')
@endsection
