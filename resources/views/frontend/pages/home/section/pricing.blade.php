<section x-data="courseTabs()" class="bg-white py-12 md:py-16 lg:py-20">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        {{-- Standardized Section Header --}}
        <div class="mx-auto max-w-3xl text-center mb-12 md:mb-16" data-aos="fade-up" data-aos-duration="800">
            <span
                class="inline-flex items-center gap-2 rounded-full border border-secondary-200 bg-secondary-50 px-4 py-1.5 text-xs font-semibold uppercase tracking-wider text-secondary-700 shadow-xs"
                data-aos="fade-up" data-aos-duration="600">
                <span class="relative flex h-2 w-2">
                    <span
                        class="absolute inline-flex h-full w-full animate-ping rounded-full bg-secondary-500 opacity-60"></span>
                    <span class="relative inline-flex h-2 w-2 rounded-full bg-secondary-500"></span>
                </span>
                English Language Courses
            </span>

            <h2 class="mt-4 text-3xl font-extrabold tracking-tight text-brand-950 sm:text-4xl lg:text-5xl"
                data-aos="fade-up" data-aos-duration="800">
                Choose the Right Course for <span
                    class="relative inline-block bg-gradient-to-r from-brand-600 via-brand-500 to-secondary-500 bg-clip-text text-transparent">
                    Your Goals
                    <svg class="absolute -bottom-2 left-0 w-full" height="8" viewBox="0 0 120 8" fill="none"
                        preserveAspectRatio="none">
                        <path d="M2 6C30 2 60 2 118 5" stroke="url(#uGradPricing)" stroke-width="3"
                            stroke-linecap="round" />
                        <defs>
                            <linearGradient id="uGradPricing" x1="0" y1="0" x2="120"
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
                Structured courses, expert guidance, practice resources and exam-focused preparation to help you achieve
                your target score.
            </p>
        </div>


        {{-- TABS --}}
        <div class="mb-10 flex justify-center" data-aos="fade-up" data-aos-duration="900" data-aos-delay="150">

            <div
                class="flex max-w-full overflow-x-auto rounded-2xl border border-slate-200 bg-slate-50 p-1.5 shadow-sm">

                <template x-for="tab in tabs" :key="tab.id">

                    <button type="button" @click="activeTab = tab.id"
                        class="whitespace-nowrap rounded-xl px-5 py-2.5 text-sm font-semibold transition-all duration-300"
                        :class="activeTab === tab.id ?
                            'bg-brand-950 text-white shadow-md' :
                            'text-neutral-600 hover:bg-white hover:text-brand-950'"
                        x-text="tab.label"></button>

                </template>

            </div>

        </div>


        {{-- COURSE CONTENT --}}
        <div>

            <template x-for="tab in tabs" :key="tab.id">

                <div x-show="activeTab === tab.id" x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 translate-y-2"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0" x-cloak>

                    <div class="grid gap-6"
                        :class="tab.courses.length === 1 ?
                            'grid-cols-1 justify-items-center' :
                            'grid-cols-1 md:grid-cols-2 lg:grid-cols-3'">

                        <template x-for="course in tab.courses" :key="course.id">

                            <article
                                class="group relative flex w-full flex-col overflow-hidden rounded-3xl border bg-white transition-all duration-300 hover:-translate-y-1"
                                :class="[
                                    course.featured ?
                                    'border-brand-600 shadow-xl shadow-brand-100' :
                                    'border-slate-200 shadow-sm hover:border-brand-200 hover:shadow-xl',
                                
                                    tab.courses.length === 1 ?
                                    'max-w-xl' :
                                    'max-w-none'
                                ]">

                                {{-- FEATURED BADGE --}}
                                <template x-if="course.featured">

                                    <div
                                        class="absolute right-5 top-5 rounded-full bg-brand-600 px-3 py-1 text-xs font-bold text-white">
                                        Most Popular
                                    </div>

                                </template>

                                <div class="flex flex-1 flex-col p-7">

                                    {{--  COURSE HEADER --}}
                                    <div class="mb-4 flex items-start justify-between"
                                        :class="course.featured ? 'pr-24' : ''">

                                        <div>

                                            {{-- Course Category --}}
                                            <p class="mb-2 text-sm font-semibold text-brand-600" x-text="tab.label"></p>
                                            {{-- Course Name --}}
                                            <h3 class="text-2xl font-bold text-slate-900" x-text="course.name"></h3>
                                            {{-- Subtitle --}}
                                            <template x-if="course.subtitle">

                                                <p class="mt-1 text-sm font-medium text-slate-500"
                                                    x-text="course.subtitle"></p>

                                            </template>

                                        </div>
                                        <template
                                            x-if="
                                                course.id === 'ielts-essential' ||
                                                course.id === 'ielts-online' ||
                                                course.id === 'pte-essential' ||
                                                course.id === 'pte-online'
                                            ">

                                            <div
                                                class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-brand-50 text-brand-600">

                                                <svg class="h-6 w-6" fill="none" stroke="currentColor"
                                                    stroke-width="1.8" viewBox="0 0 24 24">

                                                    <path d="M12 14l9-5-9-5-9 5 9 5z" stroke-linecap="round"
                                                        stroke-linejoin="round" />

                                                    <path d="M5 12.5V16c0 1.5 3.1 3 7 3s7-1.5 7-3v-3.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />

                                                </svg>

                                            </div>

                                        </template>

                                    </div>


                                    {{--  PRICE --}}
                                    <div class="mb-5">

                                        <span class="text-4xl font-extrabold tracking-tight text-slate-900"
                                            x-text="course.price"></span>

                                        <span class="ml-1 text-sm text-slate-500">
                                            / course
                                        </span>

                                    </div>
                                    {{--  DURATION / CLASSES --}}
                                    <div class="mb-4 grid grid-cols-2 gap-3">

                                        {{-- Duration --}}
                                        <div class="rounded-xl px-4 py-2 text-center"
                                            :class="course.featured ?
                                                'bg-brand-50' :
                                                'bg-slate-50'">

                                            <p class="text-xs font-medium"
                                                :class="course.featured ?
                                                    'text-brand-600' :
                                                    'text-slate-500'">
                                            </p>

                                            <p class="mt-1 text-sm font-bold text-slate-900" x-text="course.duration">
                                            </p>

                                        </div>

                                        {{-- Classes --}}
                                        <div class="rounded-xl px-4 py-2 text-center"
                                            :class="course.featured ?
                                                'bg-brand-50' :
                                                'bg-slate-50'">

                                            <p class="text-xs font-medium"
                                                :class="course.featured ?
                                                    'text-brand-600' :
                                                    'text-slate-500'">
                                            </p>

                                            <p class="mt-1 text-sm font-bold text-slate-900" x-text="course.classes">
                                            </p>

                                        </div>

                                    </div>

                                    {{-- FEATURES --}}
                                    <div>

                                        <p class="mb-4 text-sm font-bold text-slate-900"
                                            x-text="
                                                course.featured
                                                    ? 'Everything in Essential, plus'
                                                    : 'What\\'s included'
                                            ">
                                        </p>


                                        <ul class="space-y-3 text-sm text-slate-600">

                                            <template x-for="feature in course.features" :key="feature">

                                                <li class="flex gap-3">

                                                    <span class="mt-0.5 shrink-0 font-bold"
                                                        :class="course.featured ?
                                                            'text-brand-600' :
                                                            'text-emerald-500'">
                                                        ✓
                                                    </span>

                                                    <span x-text="feature"></span>

                                                </li>

                                            </template>

                                        </ul>

                                    </div>

                                </div>


                                {{-- CTA --}}
                                <div class="mt-auto border-t p-6"
                                    :class="course.featured ?
                                        'border-brand-100 bg-brand-50/50' :
                                        'border-slate-100 bg-slate-50/70'">

                                    <button type="button"
                                        class="w-full rounded-xl px-5 py-3.5 text-sm font-bold text-white transition"
                                        :class="course.featured ?
                                            'bg-brand-600 shadow-lg shadow-brand-200 hover:bg-brand-700' :
                                            'bg-slate-900 hover:bg-brand-600'"
                                        x-text="course.button"></button>

                                </div>

                            </article>

                        </template>

                    </div>

                </div>

            </template>

        </div>

    </div>
</section>


<script>
    function courseTabs() {
        return {

            activeTab: 'ielts',

            tabs: [

                /* IELTS */
                {
                    id: 'ielts',
                    label: 'IELTS',

                    courses: [

                        {
                            id: 'ielts-essential',
                            name: 'Essential',
                            price: '৳9,000',
                            duration: '1.5 Months',
                            classes: '16 Classes',
                            featured: false,
                            button: 'Enroll Now',

                            features: [
                                'Lectures, strategies & materials',
                                'Real exam-style computer software',
                                'Topic-wise practice',
                                'Weekly tests',
                                'Module-wise tests',
                                '3 full computer-based mock exams',
                                'Lab-based IELTS CD training'
                            ]
                        },


                        /* IELTS PREMIUM NO ICON */
                        {
                            id: 'ielts-premium',
                            name: 'Premium',
                            price: '৳13,000',
                            duration: '3 Months',
                            classes: '30 Classes',
                            featured: true,
                            button: 'Enroll in Premium',

                            features: [
                                'Everything in Essential',
                                'Topic-wise practice',
                                'Module-wise tests',
                                '5 full computer-based mock exams',
                                'In-house teacher-guided practice sessions',
                                '3x weekly lab-based topic sessions',
                                '1-to-1 teacher appointments',
                                'Speaking & Writing checked by certified trainers'
                            ]
                        },


                        {
                            id: 'ielts-online',
                            name: 'Online',
                            price: '৳9,000',
                            duration: '1.5 Months',
                            classes: '16 Classes',
                            featured: false,
                            button: 'Start Online Course',

                            features: [
                                'Lectures, strategies & materials',
                                'Real exam-style computer software',
                                'Topic-wise practice',
                                'Weekly tests',
                                'Module-wise tests',
                                '3 full computer-based mock exams',
                                'Lab-based IELTS CD training'
                            ]
                        }

                    ]
                },


                /* PTE */
                {
                    id: 'pte',
                    label: 'PTE',

                    courses: [

                        {
                            id: 'pte-essential',
                            name: 'Essential',
                            price: '৳10,000',
                            duration: '1.5 Months',
                            classes: '15 PTE Classes',
                            featured: false,
                            button: 'Enroll Now',

                            features: [
                                'All course materials provided',
                                'Pearson Official Question Paper Bank',
                                'All practice and questions are AI Evaluated',
                                'Chapter-wise Practice Tests (200+)',
                                '20 Module-wise Tests',
                                'Predicted Questions – 2500+',
                                '2 AI Mock Tests'
                            ]
                        },


                        /*  PTE PREMIUM NO ICON */
                        {
                            id: 'pte-premium',
                            name: 'Premium',
                            price: '৳15,000',
                            duration: '3 Months',
                            classes: '30 PTE Classes',
                            featured: true,
                            button: 'Enroll in Premium',

                            features: [
                                'Everything included in Essential',
                                '30 PTE Classes',
                                'Spoken or Writing Course',
                                'All course materials provided',
                                'Pearson Official Question Paper Bank',
                                'All practice and questions are AI Evaluated',
                                'Chapter-wise Practice Tests (200+)',
                                '20 Module-wise Tests',
                                'Predicted Questions – 2500+',
                                '3 AI Mock Tests',
                                '1 to 1 Teacher Consultants'
                            ]
                        },


                        {
                            id: 'pte-online',
                            name: 'Online',
                            price: '৳8,500',
                            duration: '1.5 Months',
                            classes: '15 PTE Classes',
                            featured: false,
                            button: 'Start Online Course',

                            features: [
                                'All course materials provided',
                                'Classes on Google Meet/Zoom',
                                'Dedicated WhatsApp group with Teacher Support',
                                'Pearson Official Question Paper Bank',
                                'All practice and questions are AI Evaluated',
                                'Chapter-wise Practice Tests (200+)',
                                '20 Module-wise Tests',
                                'Predicted Questions – 2500+',
                                '2 AI Mock Tests'
                            ]
                        }

                    ]
                },


                /* SPOKEN ENGLISH ONE CENTERED CARD NO ICON */
                {
                    id: 'spoken',
                    label: 'Spoken English',

                    courses: [

                        {
                            id: 'spoken-basic-advanced',
                            name: 'Spoken & Presentation Coaching',
                            subtitle: 'Basic to Advanced',
                            price: '৳5,500',
                            duration: '2 Months',
                            classes: '24 Classes',
                            featured: true,
                            button: 'Enroll Now',

                            features: [
                                'Phonetics and Pronunciation',
                                'Speaking Club (1 Month)',
                                'Presentation Skill',
                                'Usage of Idioms',
                                'Speaking Fluency Development'
                            ]
                        }

                    ]
                },


                /*  WRITING & GRAMMAR ONE CENTERED CARD NO ICON */
                {
                    id: 'writing',
                    label: 'Writing & Grammar',

                    courses: [

                        {
                            id: 'writing-grammar-coaching',
                            name: 'Writing & Grammar Coaching',
                            subtitle: 'Basic to Advanced',
                            price: '৳5,500',
                            duration: '2 Months',
                            classes: '24 Classes',
                            featured: true,
                            button: 'Enroll Now',

                            features: [
                                'Necessary Grammar to Constructing Sentences Correctly',
                                'Sentence Formation (Simple to Complex)',
                                'Paragraph Writing',
                                'Academic and Creative Writing',
                                'Formal Email and Letter Writing',
                                'Language Club (1 Month)'
                            ]
                        }

                    ]
                }

            ]

        };
    }
</script>
