@extends('frontend.layouts.app')

@section('content')

<section class="relative overflow-hidden bg-brand-25 py-12 lg:py-20">
    {{-- Mesh background utility --}}
    <div class="absolute inset-0 mesh-background opacity-60"></div>

    <div class="relative mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-8">
        {{-- Grid Container --}}
        <div class="grid grid-cols-1 gap-12 lg:grid-cols-12 lg:gap-8 items-center">
            
            {{-- LEFT COLUMN: Course Details & Info --}}
            <div class="lg:col-span-7 space-y-6">
                <!-- Badge / Subtitle -->
                <div class="inline-flex items-center gap-2 rounded-full border border-brand-200 bg-white/80 px-3 py-1 text-xs font-semibold text-brand-700 shadow-sm backdrop-blur-sm">
                    <span class="flex h-2 w-2 rounded-full bg-brand-600"></span>
                    Flexible Online Learning
                </div>

                <!-- Course Title -->
                <h1 class="font-heading text-3xl font-extrabold tracking-tight text-neutral-900 sm:text-4xl lg:text-5xl leading-[1.15]">
                    Online Programs for <span class="text-brand-600">IELTS</span> and <span class="text-brand-600">PTE</span> Preparation
                </h1>

                <!-- Description -->
                <p class="max-w-2xl text-base text-neutral-600 sm:text-lg leading-relaxed">
                    Helping you achieve higher scores and brighter global opportunities with expert-led live classes, personalized feedback, and comprehensive study materials.
                </p>

                 {{-- HERO CTA BUTTONS --}}
                        <div class="flex flex-col gap-4 pt-2 sm:flex-row sm:items-center" data-aos="fade-up" data-aos-duration="1000">
                            {{-- Primary CTA --}}
                            <a 
                                href="#courses"
                                class="inline-flex min-h-12 items-center justify-center gap-2 rounded-xl bg-secondary-500 px-7 py-3.5 text-xs font-bold uppercase tracking-wider text-white shadow-lg shadow-secondary-500/25 transition-all duration-300 ease-out hover:-translate-y-0.5 hover:bg-secondary-400 hover:shadow-secondary-500/40 focus:outline-none focus:ring-4 focus:ring-secondary-400/30"
                            >
                                <span>Book Free Demo Class</span>
                                <span class="material-symbols-outlined text-lg leading-none transition-transform duration-300 ease-out group-hover:translate-x-1">
                                    arrow_forward
                                </span>
                            </a>

                            {{-- Secondary CTA --}}
                            {{-- <a 
                                href="#prospectus"
                                class="inline-flex min-h-12 items-center justify-center gap-2 rounded-xl border border-brand-600 bg-white/5 px-7 py-3.5 text-xs font-bold uppercase tracking-wider text-brand-600 backdrop-blur-xs transition-all duration-300 ease-out hover:-translate-y-0.5  hover:bg-brand-600 hover:text-white hover:shadow-lg focus:outline-none focus:ring-4 focus:ring-white/20"
                            >
                             
                                <span>Enrol Now</span>
                            </a> --}}
                        </div>

                <!-- Feature Bullets -->
                <div class="pt-4 border-t border-neutral-200/60 grid grid-cols-1 sm:grid-cols-2 gap-4 w-full sm:w-[70%]">
                    <div class="flex items-start gap-3 w-fit">
                        <div class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-brand-100 text-brand-700">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        </div>
                        <div>
                            <h4 class="text-sm font-semibold text-neutral-900">Live & Recorded Classes</h4>
                            <p class="text-xs text-neutral-500">Learn at your own pace anytime.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-3 w-fit">
                        <div class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-brand-100 text-brand-700">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
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
                <img src="" alt="">
            image placeholder
            </div>

        </div>
    </div>
</section>


      <section class="py-8 md:py-12 lg:py-16">
        <div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-8">

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">

                {{-- Main Event Content --}}
                <div class="lg:col-span-7">

                    <article class="bg-white rounded-2xl shadow-sm border overflow-hidden">

                        {{-- Featured Image --}}
                        <img
                            src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=1400&q=80"
                            alt="Study Abroad Expo 2026"
                            class="w-full h-62.5 md:h-105 object-cover"
                        >

                        <div class="p-4 md:p-6 lg:p-8">

                            {{-- Meta Info --}}
                            <div class="flex flex-wrap items-center gap-2 md:gap-4 text-xs sm:text-sm text-neutral-500 mb-5">
                                <span>
                                    By HBD Services
                                </span>

                                <span>
                                    24 Aug, 2026
                                </span>

                                <span>
                                    1,248 Views
                                </span>
                            </div>

                            {{-- Title --}}
                            <h1 class="text-2xl md:text-4xl font-bold text-neutral-900 leading-tight mb-4">
                                Study Abroad Expo 2026
                            </h1>

                            {{-- Short Description --}}
                            <p class="text-lg text-neutral-600 mb-8 leading-relaxed">
                                Explore global study opportunities, meet university representatives,
                                and get expert guidance on admissions, scholarships, and student visas.
                            </p>

                            {{-- Content --}}
                            <div class="prose prose-lg max-w-none text-neutral-700">

                                <p>
                                    Planning to study abroad? Join us at the
                                    <strong>Study Abroad Expo 2026</strong> and take the next step
                                    toward your international education journey.
                                </p>

                                <h2>
                                    Discover Your Study Opportunities
                                </h2>

                                <p>
                                    Our education expo brings together students, parents, education
                                    counselors, and representatives from leading universities around
                                    the world. You will have the opportunity to explore different
                                    destinations, courses, universities, and scholarship opportunities.
                                </p>

                                <h3>
                                    What You Can Expect
                                </h3>

                                <ul>
                                    <li>One-to-one counseling with experienced education consultants</li>
                                    <li>University and course selection guidance</li>
                                    <li>Information about scholarships and tuition fees</li>
                                    <li>Application and admission guidance</li>
                                    <li>Student visa consultation</li>
                                    <li>IELTS and English language requirement guidance</li>
                                </ul>

                                <h2>
                                    Meet University Representatives
                                </h2>

                                <p>
                                    Meet representatives from international universities and get
                                    answers to your questions directly. Learn about admission
                                    requirements, available programs, application deadlines,
                                    scholarships, and career opportunities.
                                </p>

                                <blockquote>
                                    Start your international education journey with the right
                                    guidance and make your dream of studying abroad a reality.
                                </blockquote>

                                <h3>
                                    Event Details
                                </h3>

                                <ul>
                                    <li><strong>Date:</strong> 30 August 2026</li>
                                    <li><strong>Time:</strong> 10:00 AM – 6:00 PM</li>
                                    <li><strong>Location:</strong> Dhaka, Bangladesh</li>
                                    <li><strong>Entry:</strong> Free Registration</li>
                                </ul>

                                <p>
                                    Seats are limited, so register early to secure your place at
                                    this exciting study abroad event.
                                </p>

                            </div>

                        </div>

                    </article>

                </div>

                {{-- Sidebar --}}
                <div class="lg:col-span-5">

                    <div class="sticky top-24">

                       <div class="rounded-2xl border border-neutral-200/80 bg-white p-6 sm:p-8 shadow-xl shadow-brand-900/5">
                    
                    <!-- Form Header -->
                    <div class="mb-6">
                        <h3 class="text-xl font-bold text-neutral-900">Begin Your IELTS & PTE Success Journey</h3>
                        <p class="text-xs text-neutral-500 mt-1">Fill out the form below and we will reach out within 24 hours.</p>
                    </div>

                    <!-- Lead Form -->
                    <form action="#" method="POST" class="space-y-4">
                        @csrf
                        
                        <!-- Full Name -->
                        <div>
                            <label for="name" class="block text-xs font-semibold text-neutral-700 uppercase tracking-wider mb-1.5">Full Name</label>
                            <input type="text" id="name" name="name" placeholder="John Doe" required
                                class="w-full rounded-xl border border-neutral-200 px-4 py-2.5 text-sm text-neutral-900 placeholder-neutral-400 focus:border-brand-500 focus:outline-none focus:ring-4 focus:ring-brand-500/10 transition">
                        </div>

                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-xs font-semibold text-neutral-700 uppercase tracking-wider mb-1.5">Email Address</label>
                            <input type="email" id="email" name="email" placeholder="john@example.com" required
                                class="w-full rounded-xl border border-neutral-200 px-4 py-2.5 text-sm text-neutral-900 placeholder-neutral-400 focus:border-brand-500 focus:outline-none focus:ring-4 focus:ring-brand-500/10 transition">
                        </div>

                        <!-- Phone Number -->
                        <div>
                            <label for="phone" class="block text-xs font-semibold text-neutral-700 uppercase tracking-wider mb-1.5">Phone Number</label>
                            <input type="tel" id="phone" name="phone" placeholder="+1 (555) 000-0000" required
                                class="w-full rounded-xl border border-neutral-200 px-4 py-2.5 text-sm text-neutral-900 placeholder-neutral-400 focus:border-brand-500 focus:outline-none focus:ring-4 focus:ring-brand-500/10 transition">
                        </div>

                        <!-- Program Selection -->
                        <div>
                            <label for="program" class="block text-xs font-semibold text-neutral-700 uppercase tracking-wider mb-1.5">Select Program</label>
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

        </div>
    </section>




@endsection