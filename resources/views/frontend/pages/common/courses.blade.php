<div class="grid grid-cols-1 gap-5 md:grid-cols-2 md:gap-6">

    @foreach ($courses as $course)
        <div
            class="group flex cursor-pointer flex-col overflow-hidden rounded-2xl border border-neutral-200 bg-neutral-25 shadow-theme-xs transition-all duration-300 ease-out hover:-translate-y-1 hover:shadow-theme-lg reveal-scale">

            {{-- Course Image --}}
            <div class="relative h-56 overflow-hidden border-b border-neutral-200 bg-neutral-100">

                <img
                    src="{{ asset($course['image']) }}"
                    alt="{{ $course['name'] }}"
                    class="h-full w-full object-cover transition-transform duration-700 ease-out group-hover:scale-105"
                />

                {{-- Course Badge --}}
                @if ($course['essential'] && $course['premium'])
                    <div
                        class="absolute left-3 top-3 rounded-md bg-brand-500 px-2.5 py-1 text-[10px] font-bold uppercase tracking-wide text-neutral-25">
                        Essential & Premium
                    </div>
                @elseif ($course['essential'])
                    <div
                        class="absolute left-3 top-3 rounded-md bg-brand-500 px-2.5 py-1 text-[10px] font-bold uppercase tracking-wide text-neutral-25">
                        Essential
                    </div>
                @elseif ($course['premium'])
                    <div
                        class="absolute left-3 top-3 rounded-md bg-brand-500 px-2.5 py-1 text-[10px] font-bold uppercase tracking-wide text-neutral-25">
                        Premium
                    </div>
                @endif

            </div>

            {{-- Course Content --}}
            <div class="flex flex-1 flex-col justify-between gap-6 p-6">

                <div class="flex flex-col gap-3">

                    <h3
                        class="font-display text-xl font-bold uppercase leading-tight tracking-tight text-brand-500">
                        {{ $course['name'] }}
                    </h3>

                    <p class="line-clamp-3 text-sm leading-6 text-neutral-600">
                        {{ $course['description'] }}
                    </p>

                </div>

                {{-- Footer --}}
                <div class="flex items-center justify-between border-t border-neutral-200 pt-5">

                    {{-- Online Status --}}
                    <div class="flex items-center gap-2 text-xs font-medium text-slate-500">
                        <span
                            class="flex h-2 w-2 rounded-full {{ $course['online'] ? 'bg-brand-500' : 'bg-neutral-400' }}">
                        </span>

                        {{ $course['online'] ? 'Online Available' : 'Online Unavailable' }}
                    </div>

                    {{-- Read More --}}
                    <a
                        href="{{ url('/courses/' . $course['slug']) }}"
                        class="inline-flex items-center justify-center gap-1.5 rounded-lg border border-brand-500 bg-transparent px-4 py-2 text-xs font-bold uppercase tracking-wide text-brand-500 transition-all duration-300 hover:bg-brand-600 hover:text-white hover:shadow-theme-sm focus:outline-none focus:ring-4 focus:ring-brand-500/20">

                        Read More

                        <span class="material-symbols-outlined !text-sm !leading-none">
                            chevron_right
                        </span>

                    </a>

                </div>

            </div>

        </div>
    @endforeach

</div>