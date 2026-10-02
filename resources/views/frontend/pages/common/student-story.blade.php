<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<style>
    /* Linear Easing for Continuous Seamless Flow */
    .swiper-wrapper {
        transition-timing-function: linear !important;
    }
</style>

<section x-data="{
    activeModal: null,
    rawReviews: [{
            id: 1,
            name: 'Riya Chowdhury',
            role: 'Student',
            avatar: 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=150&auto=format&fit=crop&q=80',
            score: '7.5 Band',
            type: 'IELTS Academic',
            rating: 5,
            destination: 'Canada',
            headline: 'Gained immense confidence in speaking!',
            text: 'I was terrified of the speaking test. With personalized feedback and focused practice, I gained confidence. Achieving band 7.5 felt like a huge win for my study abroad plans.',
            breakdown: 'L: 8.0 | R: 7.5 | W: 7.0 | S: 7.5'
        },
        {
            id: 2,
            name: 'Sara Khan',
            role: 'Graduate',
            avatar: 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=150&auto=format&fit=crop&q=80',
            score: '8.0 Band',
            type: 'IELTS Academic',
            rating: 5,
            destination: 'United Kingdom',
            headline: 'Mastered essay writing structure & grammar!',
            text: 'Essay writing for the IELTS Academic test was my biggest challenge. Their guidance improved my writing structure and grammar, helping me score band 8.',
            breakdown: 'L: 8.5 | R: 8.5 | W: 7.5 | S: 8.0'
        },
        {
            id: 3,
            name: 'Fahim Ahmed',
            role: 'Student',
            avatar: 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=150&auto=format&fit=crop&q=80',
            score: '8.0 Band',
            type: 'IELTS Academic',
            rating: 5,
            destination: 'Australia',
            headline: 'Scoring Band 8 made my study dream a reality!',
            text: 'I struggled with the IELTS listening section and didn\'t know how to improve. Mock tests and expert feedback helped me master key strategies.',
            breakdown: 'L: 8.5 | R: 8.0 | W: 7.5 | S: 8.0'
        },
        {
            id: 4,
            name: 'Tanvir Hossain',
            role: 'Professional',
            avatar: 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=150&auto=format&fit=crop&q=80',
            score: '86 Points',
            type: 'PTE Academic',
            rating: 5,
            destination: 'Australia',
            headline: 'Cracked PTE in my first attempt!',
            text: 'PTE exam formats can be tricky, but HBD Language Academy\'s computer-based practice platform gave me the exact simulation I needed.',
            breakdown: 'L: 88 | R: 84 | W: 86 | S: 90'
        },
        {
            id: 5,
            name: 'Anika Rahman',
            role: 'Medical Student',
            avatar: 'https://images.unsplash.com/photo-1517841905240-472988babdf9?w=150&auto=format&fit=crop&q=80',
            score: '7.5 Band',
            type: 'IELTS General',
            rating: 5,
            destination: 'New Zealand',
            headline: 'Clear, practical, and highly effective lessons!',
            text: 'The trainers are exceptionally patient. They broke down complex grammar rules and provided template strategies.',
            breakdown: 'L: 8.0 | R: 7.5 | W: 7.0 | S: 7.5'
        },
        {
            id: 6,
            name: 'Nabil Chowdhury',
            role: 'IT Engineer',
            avatar: 'https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?w=150&auto=format&fit=crop&q=80',
            score: '79 Points',
            type: 'PTE Academic',
            rating: 5,
            destination: 'USA',
            headline: 'Flexible schedules that worked for my job!',
            text: 'Balancing work and prep was tough. The weekend batch flexibility combined with instant mock test evaluations allowed me to achieve my target.',
            breakdown: 'L: 78 | R: 79 | W: 82 | S: 77'
        }
    ],

    // Ensures smooth loop even when total items are 3 or fewer
    get loopableReviews() {
        let list = [...this.rawReviews];
        while (list.length < 9) {
            list = list.concat(this.rawReviews.map((item, idx) => ({
                ...item,
                id: `${item.id}-dup-${idx}-${list.length}`
            })));
        }
        return list;
    },

    initSwiper() {
        const startSwiper = () => {
            if (typeof Swiper !== 'undefined' && this.$refs.swiperContainer) {
                new Swiper(this.$refs.swiperContainer, {
                    loop: true,
                    speed: 6000,
                    autoplay: {
                        delay: 0,
                        disableOnInteraction: false,
                        pauseOnMouseEnter: true,
                    },
                    slidesPerView: 1,
                    spaceBetween: 24,
                    breakpoints: {
                        640: {
                            slidesPerView: 2,
                            spaceBetween: 24,
                        },
                        1024: {
                            slidesPerView: 3,
                            spaceBetween: 24,
                        },
                    },
                });
            } else {
                setTimeout(startSwiper, 100);
            }
        };
        this.$nextTick(startSwiper);
    }
}" x-init="initSwiper()"
    class="relative overflow-hidden bg-white py-12 md:py-16 lg:py-20">
    <!-- Background Decorator -->
    <div
        class="pointer-events-none absolute -top-24 left-1/2 h-96 w-full -translate-x-1/2 max-w-7xl bg-brand-500/5 blur-3xl">
    </div>

    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <!-- Standardized Section Header -->
        <div class="mx-auto max-w-3xl text-center" data-aos="fade-up" data-aos-duration="800">
            <span
                class="inline-flex items-center gap-2 rounded-full border border-secondary-200 bg-secondary-50 px-4 py-1.5 text-xs font-semibold uppercase tracking-wider text-secondary-700 shadow-xs" data-aos="fade-up" data-aos-duration="600">
                <span class="relative flex h-2 w-2">
                    <span
                        class="absolute inline-flex h-full w-full animate-ping rounded-full bg-secondary-500 opacity-60"></span>
                    <span class="relative inline-flex h-2 w-2 rounded-full bg-secondary-500"></span>
                </span>
                Student Success Stories
            </span>

            <h2 class="mt-4 text-3xl font-extrabold tracking-tight text-brand-950 sm:text-4xl lg:text-5xl" data-aos="fade-up" data-aos-duration="800">
                Real Students, Real <span
                    class="relative inline-block bg-gradient-to-r from-brand-600 via-brand-500 to-secondary-500 bg-clip-text text-transparent">
                    Band 8+ Scores
                    <svg class="absolute -bottom-2 left-0 w-full" height="8" viewBox="0 0 120 8" fill="none"
                        preserveAspectRatio="none">
                        <path d="M2 6C30 2 60 2 118 5" stroke="url(#uGradStudentStories)" stroke-width="3"
                            stroke-linecap="round" />
                        <defs>
                            <linearGradient id="uGradStudentStories" x1="0" y1="0" x2="120" y2="0"
                                gradientUnits="userSpaceOnUse">
                                <stop stop-color="#00b1ee" />
                                <stop offset="1" stop-color="#155b9d" />
                            </linearGradient>
                        </defs>
                    </svg>
                </span>
            </h2>

            <p class="mt-4 text-base leading-relaxed text-neutral-600 md:text-lg" data-aos="fade-up" data-aos-duration="900">
                Discover how our structured IELTS & PTE courses helped hundreds of students achieve their target scores
                and study abroad dreams.
            </p>
        </div>

        <!-- INFINITE SLIDER CONTAINER -->
        <div class="overflow-hidden">
            <div x-ref="swiperContainer" class="swiper py-8!">
                <div class="swiper-wrapper">
                    <template x-for="item in loopableReviews" :key="item.id">
                        <div class="swiper-slide h-auto">
                            <div @click="activeModal = item"
                                class="group relative flex h-full flex-col justify-between rounded-3xl border border-neutral-200/80 bg-white p-6 shadow-sm transition-all duration-300 hover:-translate-y-1.5 hover:border-brand-200 hover:shadow-xl">
                                <!-- Top Info -->
                                <div>
                                    <div
                                        class="flex items-start justify-between gap-3 border-b border-neutral-100 pb-4">
                                        <div class="flex items-center gap-3">
                                            <img :src="item.avatar" :alt="item.name"
                                                class="h-12 w-12 rounded-full object-cover ring-2 ring-brand-500/20" />
                                            <div>
                                                <h3 class="font-bold text-neutral-900 transition-colors group-hover:text-brand-600"
                                                    x-text="item.name"></h3>
                                                <p class="text-xs text-neutral-500" x-text="item.role"></p>
                                            </div>
                                        </div>

                                        <div class="text-right">
                                            <span
                                                class="inline-block rounded-lg bg-brand-50 px-2.5 py-1 text-xs font-black text-brand-700"
                                                x-text="item.score"></span>
                                            <div class="mt-1 text-[10px] font-bold uppercase tracking-wider text-neutral-400"
                                                x-text="item.type"></div>
                                        </div>
                                    </div>

                                    <!-- Rating & Destination -->
                                    <div class="mt-4 flex items-center justify-between text-xs">
                                        <div class="flex text-amber-400">
                                            <template x-for="i in item.rating">
                                                <span class="material-symbols-outlined text-lg">star</span>
                                            </template>
                                        </div>
                                        <span
                                            class="inline-flex items-center gap-1 rounded-full bg-neutral-100 px-2.5 py-0.5 text-[11px] font-medium text-neutral-600">
                                            <span
                                                class="material-symbols-outlined text-xs text-neutral-400">flight_takeoff</span>
                                            <span x-text="item.destination"></span>
                                        </span>
                                    </div>

                                    <!-- Review Text -->
                                    <div class="mt-3">
                                        <h4 class="font-semibold text-neutral-800 line-clamp-1" x-text="item.headline">
                                        </h4>
                                        <p class="mt-2 text-xs leading-relaxed text-neutral-600 line-clamp-2"
                                            x-text="item.text"></p>
                                    </div>
                                </div>

                                <!-- Card Footer -->
                                <div
                                    class="mt-6 flex items-center justify-between border-t border-neutral-100 pt-3 text-[11px] font-semibold text-brand-600">
                                    <span class="flex items-center gap-1">
                                        <span class="material-symbols-outlined text-sm">analytics</span>
                                        <span x-text="item.breakdown"></span>
                                    </span>
                                    <span
                                        class="material-symbols-outlined !text-base !leading-none transition-transform group-hover:translate-x-1">arrow_forward</span>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
        </div>

    </div>
    <div x-show="activeModal" x-transition.opacity @keydown.escape.window="activeModal = null"
        class="fixed inset-0 z-50 flex items-center justify-center bg-neutral-950/60 p-4 backdrop-blur-sm" x-cloak>
        <div @click.away="activeModal = null"
            class="relative w-full max-w-lg rounded-3xl border border-neutral-200 bg-white p-6 shadow-2xl sm:p-8">
            <button @click="activeModal = null"
                class="absolute right-5 top-5 rounded-md flex items-center justify-center bg-neutral-100 p-1 text-neutral-500 hover:bg-neutral-200">
                <span class="material-symbols-outlined !text-xl !leading-none">close</span>
            </button>

            <template x-if="activeModal">
                <div class="flex flex-col gap-4">
                    <div class="flex items-center gap-4">
                        <img :src="activeModal.avatar" :alt="activeModal.name"
                            class="h-16 w-16 rounded-full object-cover ring-4 ring-brand-500/10" />
                        <div>
                            <h3 class="text-lg font-bold text-neutral-900" x-text="activeModal.name"></h3>
                            <p class="text-xs text-neutral-500" x-text="activeModal.role"></p>
                            <span
                                class="mt-1 inline-block rounded-md bg-brand-50 px-2 py-0.5 text-xs font-bold text-brand-700"
                                x-text="activeModal.score + ' (' + activeModal.type + ')'"></span>
                        </div>
                    </div>

                    <div class="rounded-xl bg-neutral-50 p-3 text-xs text-neutral-600">
                        <strong>Score Breakdown:</strong> <span x-text="activeModal.breakdown"></span>
                    </div>

                    <div>
                        <h4 class="font-bold text-neutral-900" x-text="activeModal.headline"></h4>
                        <p class="mt-2 text-sm leading-relaxed text-neutral-600" x-text="activeModal.text"></p>
                    </div>

                    <div
                        class="mt-2 flex items-center justify-between border-t border-neutral-100 pt-4 text-xs text-neutral-500">
                        <span>Target: <strong class="text-neutral-800" x-text="activeModal.destination"></strong></span>
                        <span class="flex items-center gap-1 font-semibold text-emerald-600">
                            <span class="material-symbols-outlined !text-sm !leading-none">verified</span> Verified
                            Student
                        </span>
                    </div>
                </div>
            </template>
        </div>
    </div>
</section>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
