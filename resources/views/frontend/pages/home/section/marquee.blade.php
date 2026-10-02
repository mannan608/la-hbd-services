@php
    $universities = [
        ['name' => 'Stanford University', 'logo' => asset('images/university/sponsor_1.png')],
        ['name' => 'Harvard University', 'logo' => asset('images/university/sponsor_2.png')],
        ['name' => 'University of Oxford', 'logo' => asset('images/university/sponsor_3.png')],
        ['name' => 'MIT', 'logo' => asset('images/university/sponsor_4.png')],
        ['name' => 'University of Cambridge', 'logo' => asset('images/university/sponsor_5.png')],
        ['name' => 'Yale University', 'logo' => asset('images/university/sponsor_6.png')],
        ['name' => 'Princeton University', 'logo' => asset('images/university/sponsor_7.png')],
        ['name' => 'Columbia University', 'logo' => asset('images/university/sponsor_8.png')],
        ['name' => 'ETH Zurich', 'logo' => asset('images/university/sponsor_9.png')],
        ['name' => 'UC Berkeley', 'logo' => asset('images/university/sponsor_10.png')],
        ['name' => 'UC Berkeley', 'logo' => asset('images/university/sponsor_11.png')],
        ['name' => 'UC Berkeley', 'logo' => asset('images/university/sponsor_12.png')],
    ];
@endphp

<section class="bg-white py-12">
    <div class="px-4 sm:px-6 lg:px-8">

        {{-- Heading --}}
        <div class="mb-8 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" data-aos="fade-up" data-aos-duration="600">
            <h2 class="text-2xl font-bold tracking-tight text-slate-900 sm:text-3xl">
                Learn from world-class leading universities
            </h2>
        </div>

        <div class="relative space-y-5">
            <div
                class="absolute left-0 top-0 bottom-0 w-20 sm:w-32 lg:w-40 bg-gradient-to-r from-neutral-50 to-transparent z-20 pointer-events-none">
            </div>
            <div
                class="absolute right-0 top-0 bottom-0 w-20 sm:w-32 lg:w-40 bg-gradient-to-l from-neutral-50 to-transparent z-20 pointer-events-none">
            </div>
            <div class="w-full overflow-hidden">
                <div
                    class="flex w-max animate-[university-left-to-right_50s_linear_infinite] hover:[animation-play-state:paused]">
                    <div class="flex shrink-0 gap-5 pr-5">
                        @foreach ($universities as $university)
                            <div
                                class="flex shrink-0 items-center gap-4 px-7 py-6 bg-white rounded-2xl border border-neutral-200 shadow-sm transition-all duration-300 hover:shadow-lg hover:border-brand-500/30 group">
                                <div class=" shrink-0 flex items-center justify-center">
                                    <img src="{{ $university['logo'] }}" alt="{{ $university['name'] }}"
                                        class="max-w-full max-h-9.5 w-auto h-auto object-contain transition-transform duration-300 group-hover:scale-110">
                                </div>

                            </div>
                        @endforeach
                    </div>
                    <div class="flex shrink-0 gap-5 pr-5" aria-hidden="true">
                        @foreach ($universities as $university)
                            <div
                                class="flex shrink-0 items-center gap-4 px-7 py-6 bg-white rounded-2xl border border-neutral-200 shadow-sm transition-all duration-300 hover:shadow-lg hover:border-brand-500/30 group">
                                <div class=" shrink-0 flex items-center justify-center">
                                    <img src="{{ $university['logo'] }}" alt="{{ $university['name'] }}"
                                        class="max-w-full max-h-9.5 w-auto h-auto object-contain transition-transform duration-300 group-hover:scale-110">
                                </div>

                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
