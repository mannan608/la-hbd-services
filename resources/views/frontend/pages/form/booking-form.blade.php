 <form class="flex flex-col gap-4"
                    onsubmit="event.preventDefault(); alert('Course prospectus PDF has been dispatched to your email address.');">

                    {{-- Form heading --}}
                    <div class="border-b border-neutral-200 pb-4">

                        <span class="font-display text-lg font-bold uppercase tracking-tight text-brand-500">
                            Register with Us to Take the Next Step
                        </span>

                        <p class="mt-1  text-[9px] font-bold uppercase tracking-wide text-neutral-500">
                            Direct dispatch to your primary inbox
                        </p>

                    </div>


                    {{-- Name --}}
                    <div class="flex flex-col gap-2">

                        <label for="full-name" class=" text-xs font-bold uppercase tracking-wide text-neutral-800">
                            Full Legal Name *
                        </label>

                        <input id="full-name" type="text" required placeholder="e.g. Alex Henderson"
                            class="h-11 w-full rounded-lg border border-neutral-300 bg-neutral-25 px-4 py-2.5  text-sm text-neutral-900 placeholder:text-neutral-400 transition-all duration-200 focus:border-brand-400 focus:bg-neutral-25 focus:outline-none focus:ring-4 focus:ring-brand-500/10" />

                    </div>

                    {{-- Name --}}
                    <div class="flex flex-col gap-2">

                        <label for="phone" class=" text-xs font-bold uppercase tracking-wide text-neutral-800">
                            Phone Number *
                        </label>

                        <input id="phone" type="text" required placeholder="e.g. 01978-855506"
                            class="h-11 w-full rounded-lg border border-neutral-300 bg-neutral-25 px-4 py-2.5  text-sm text-neutral-900 placeholder:text-neutral-400 transition-all duration-200 focus:border-brand-400 focus:bg-neutral-25 focus:outline-none focus:ring-4 focus:ring-brand-500/10" />

                    </div>


                    {{-- Email --}}
                    <div class="flex flex-col gap-2">

                        <label for="email" class=" text-xs font-bold uppercase tracking-wide text-neutral-800">
                            Email Address *
                        </label>

                        <input id="email" type="email" required placeholder="name@example.com"
                            class="h-11 w-full rounded-lg border border-neutral-300 bg-neutral-25 px-4 py-2.5  text-sm text-neutral-900 placeholder:text-neutral-400 transition-all duration-200 focus:border-brand-400 focus:bg-neutral-25 focus:outline-none focus:ring-4 focus:ring-brand-500/10" />

                    </div>


                    {{-- Interest --}}
                    <div class="flex flex-col gap-2">

                        <label for="area-interest"
                            class=" text-xs font-bold uppercase tracking-wide text-neutral-800">
                            Course Interest *
                        </label>

                        <select id="area-interest" required
                            class="h-11 w-full rounded-lg border border-neutral-300 bg-neutral-25 px-4 py-2.5  text-sm text-neutral-900 transition-all duration-200 focus:border-brand-400 focus:bg-neutral-25 focus:outline-none focus:ring-4 focus:ring-brand-500/10">

                            <option value="">
                                Select course...
                            </option>

                            <option value="trade">
                                IELTS Preparation
                            </option>

                            <option value="health">
                                PTE Preparation
                            </option>

                            <option value="business">
                                Speaking English
                            </option>

                            <option value="all">
                                Writing & Grammar
                            </option>

                        </select>

                    </div>

                    <div class="flex items-start gap-2.5 pt-1">

                        <input id="agree" type="checkbox"
                            class="mt-0.5 h-4 w-4 rounded border-neutral-300 accent-brand-500" />

                        <label for="agree" class="cursor-pointer select-none text-sm leading-5 text-neutral-600">

                           You agree to our Privacy Policy and Terms & Conditions

                        </label>

                    </div>

                    {{-- Submit --}}
                    <button type="submit"
                        class="mt-3 group relative w-full flex items-center justify-center gap-2 overflow-hidden rounded-xl bg-gradient-to-r from-brand-600 to-brand-600 px-6 py-4 text-white font-semibold shadow-lg shadow-brand-600/25 hover:shadow-xl hover:shadow-brand-600/30 hover:-translate-y-0.5 active:translate-y-0 focus:outline-none focus:ring-4 focus:ring-brand-500/30 transition-all duration-200">
                        <span
                            class="absolute inset-0 bg-gradient-to-r from-brand-600 to-brand-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                        <svg class="relative w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                        </svg>
                        <span class="relative">Get Started With Us</span>
                    </button>
                    <p class="text-center text-xs text-slate-400 flex items-center justify-center gap-1.5">
                        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                clip-rule="evenodd" />
                        </svg>
                        Your information is safe and will never be shared.
                    </p>

                </form>