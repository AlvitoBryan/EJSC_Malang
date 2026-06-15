<section id="about" class="py-16 md:py-24 max-w-7xl mx-auto px-4 md:px-6">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-start">

        {{-- Left Column: About EJSC --}}
        <div class="lg:col-span-5 space-y-6">
            <p class="text-[#71A2CF] text-xs uppercase tracking-widest font-bold mb-2">{!! __('about.about_us') !!}</p>
            <h3 class="text-2xl md:text-3xl font-bold text-white leading-tight" style="font-family: 'Poppins', sans-serif;">
                {!! __('about.get_to_know') !!} <br/>
                <span class="opacity-50">{!! __('about.ejsc_name') !!}</span>
            </h3>
            <p class="text-gray-400 leading-relaxed text-sm md:text-base text-justify">
                {!! __('about.description') !!}
            </p>
            <div class="pt-6 border-t border-[#123B7A]/30">
                <h4 class="text-sm font-semibold text-[#71A2CF] mb-4 uppercase tracking-wider">{!! __('about.service_programs') !!}</h4>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    {{-- Item 1 --}}
                    <div class="flex items-center gap-3 bg-[#123B7A]/20 p-3 rounded-xl border border-[#123B7A]/30 hover:border-[#71A2CF]/50 transition-colors">
                        <div class="w-10 h-10 rounded-lg bg-[#71A2CF]/10 flex items-center justify-center flex-shrink-0 border border-[#71A2CF]/20">
                            <svg class="w-5 h-5 text-[#71A2CF]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                        </div>
                        <h4 class="text-xs font-bold text-white leading-tight">{!! __('about.collab_program') !!}</h4>
                    </div>

                    {{-- Item 2 --}}
                    <div class="flex items-center gap-3 bg-[#123B7A]/20 p-3 rounded-xl border border-[#123B7A]/30 hover:border-[#71A2CF]/50 transition-colors">
                        <div class="w-10 h-10 rounded-lg bg-[#71A2CF]/10 flex items-center justify-center flex-shrink-0 border border-[#71A2CF]/20">
                            <svg class="w-5 h-5 text-[#71A2CF]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                        <h4 class="text-xs font-bold text-white leading-tight">{!! __('about.room_fac') !!}</h4>
                    </div>

                    {{-- Item 3 --}}
                    <div class="flex items-center gap-3 bg-[#123B7A]/20 p-3 rounded-xl border border-[#123B7A]/30 hover:border-[#71A2CF]/50 transition-colors">
                        <div class="w-10 h-10 rounded-lg bg-[#71A2CF]/10 flex items-center justify-center flex-shrink-0 border border-[#71A2CF]/20">
                            <svg class="w-5 h-5 text-[#71A2CF]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"></path>
                            </svg>
                        </div>
                        <h4 class="text-xs font-bold text-white leading-tight">{!! __('about.clinic_cons') !!}</h4>
                    </div>

                    {{-- Item 4 --}}
                    <div class="flex items-center gap-3 bg-[#123B7A]/20 p-3 rounded-xl border border-[#123B7A]/30 hover:border-[#71A2CF]/50 transition-colors">
                        <div class="w-10 h-10 rounded-lg bg-[#71A2CF]/10 flex items-center justify-center flex-shrink-0 border border-[#71A2CF]/20">
                            <svg class="w-5 h-5 text-[#71A2CF]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                            </svg>
                        </div>
                        <h4 class="text-xs font-bold text-white leading-tight">{!! __('about.mjc') !!}</h4>
                    </div>
                </div>
            </div>
        </div>

        {{-- Right Column: Co-Working Space Card --}}
        <div class="lg:col-span-7">
            {{-- Main Facility Card --}}
            <div class="bg-[#123B7A]/20 border border-[#123B7A]/50 rounded-2xl overflow-hidden backdrop-blur-md shadow-2xl hover:border-[#71A2CF]/50 transition-all duration-300 relative group">
                {{-- Decorative subtle diagonal line background --}}
                <div class="absolute inset-0 bg-gradient-to-br from-transparent via-[#71A2CF]/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700 pointer-events-none"></div>

                <div class="p-6 md:p-8 flex flex-col md:flex-row gap-8 relative z-10">

                    {{-- Left side of Card: Title & Description --}}
                    <div class="md:w-1/2 flex flex-col justify-center border-b md:border-b-0 md:border-r border-white/10 pb-6 md:pb-0 md:pr-6">
                        <h3 class="text-3xl md:text-2xl font-bold text-white mb-3 uppercase leading-tight" style="font-family: 'Poppins', sans-serif;">
                            {!! __('about.coworking_title') !!}
                            <span class="text-[#71A2CF]">{!! __('about.coworking_subtitle') !!}</span>
                        </h3>
                        <p class="text-gray-400 text-xs sm:text-sm mb-6 leading-relaxed">
                            {!! __('about.coworking_desc') !!}
                        </p>
                        <div class="inline-flex mt-auto">
                            <span class="bg-[#F7AD12] text-black font-extrabold px-6 py-2 rounded-full shadow-[0_4px_15px_rgba(247,173,18,0.4)] transform hover:scale-105 transition-transform text-sm tracking-widest">
                                {!! __('about.free') !!}
                            </span>
                        </div>
                    </div>

                    {{-- Right side of Card: Facilities Grid --}}
                    <div class="md:w-1/2 md:pl-2">
                        <h4 class="text-xs font-bold text-[#71A2CF] mb-5 tracking-[0.2em] uppercase text-center md:text-left">{!! __('about.facilities') !!}</h4>
                        <div class="grid grid-cols-3 gap-y-6 gap-x-2">
                            {{-- Facility 1 --}}
                            <div class="flex flex-col items-center text-center group/item">
                                <div class="w-10 h-10 rounded-lg bg-white/5 flex items-center justify-center mb-2 group-hover/item:bg-[#71A2CF]/20 transition-colors border border-white/10 group-hover/item:border-[#71A2CF]/50">
                                    <svg class="w-5 h-5 text-white group-hover/item:text-[#F7AD12] transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <span class="text-[10px] sm:text-[11px] font-medium text-gray-300 leading-tight">{!! __('about.fac_1') !!}</span>
                            </div>

                            {{-- Facility 2 --}}
                            <div class="flex flex-col items-center text-center group/item">
                                <div class="w-10 h-10 rounded-lg bg-white/5 flex items-center justify-center mb-2 group-hover/item:bg-[#71A2CF]/20 transition-colors border border-white/10 group-hover/item:border-[#71A2CF]/50">
                                    <svg class="w-5 h-5 text-white group-hover/item:text-[#F7AD12] transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16h16M4 16v5M20 16v5M6 16v-5a3 3 0 0 1 3-3h6a3 3 0 0 1 3 3v5M8 8V5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v3" />
                                    </svg>
                                </div>
                                <span class="text-[10px] sm:text-[11px] font-medium text-gray-300 leading-tight">{!! __('about.fac_2') !!}</span>
                            </div>

                            {{-- Facility 3 --}}
                            <div class="flex flex-col items-center text-center group/item">
                                <div class="w-10 h-10 rounded-lg bg-white/5 flex items-center justify-center mb-2 group-hover/item:bg-[#71A2CF]/20 transition-colors border border-white/10 group-hover/item:border-[#71A2CF]/50">
                                    <svg class="w-5 h-5 text-white group-hover/item:text-[#F7AD12] transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                    </svg>
                                </div>
                                <span class="text-[10px] sm:text-[11px] font-medium text-gray-300 leading-tight">{!! __('about.fac_3') !!}</span>
                            </div>

                            {{-- Facility 4 --}}
                            <div class="flex flex-col items-center text-center group/item">
                                <div class="w-10 h-10 rounded-lg bg-white/5 flex items-center justify-center mb-2 group-hover/item:bg-[#71A2CF]/20 transition-colors border border-white/10 group-hover/item:border-[#71A2CF]/50">
                                    <svg class="w-5 h-5 text-white group-hover/item:text-[#F7AD12] transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 2v7c0 1.1.9 2 2 2h4a2 2 0 0 0 2-2V2M7 2v20M21 15V2v0a5 5 0 0 0-5 5v6c0 1.1.9 2 2 2h3Zm0 0v7" />
                                    </svg>
                                </div>
                                <span class="text-[10px] sm:text-[11px] font-medium text-gray-300 leading-tight">{!! __('about.fac_4') !!}</span>
                            </div>

                            {{-- Facility 5 --}}
                            <div class="flex flex-col items-center text-center group/item">
                                <div class="w-10 h-10 rounded-lg bg-white/5 flex items-center justify-center mb-2 group-hover/item:bg-[#71A2CF]/20 transition-colors border border-white/10 group-hover/item:border-[#71A2CF]/50">
                                    <svg class="w-5 h-5 text-white group-hover/item:text-[#F7AD12] transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0" />
                                    </svg>
                                </div>
                                <span class="text-[10px] sm:text-[11px] font-medium text-gray-300 leading-tight">{!! __('about.fac_5') !!}</span>
                            </div>

                            {{-- Facility 6 --}}
                            <div class="flex flex-col items-center text-center group/item">
                                <div class="w-10 h-10 rounded-lg bg-white/5 flex items-center justify-center mb-2 group-hover/item:bg-[#71A2CF]/20 transition-colors border border-white/10 group-hover/item:border-[#71A2CF]/50">
                                    <svg class="w-5 h-5 text-white group-hover/item:text-[#F7AD12] transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z" />
                                    </svg>
                                </div>
                                <span class="text-[10px] sm:text-[11px] font-medium text-gray-300 leading-tight">{!! __('about.fac_6') !!}</span>
                            </div>

                            {{-- Facility 7 --}}
                            <div class="flex flex-col items-center text-center group/item">
                                <div class="w-10 h-10 rounded-lg bg-white/5 flex items-center justify-center mb-2 group-hover/item:bg-[#71A2CF]/20 transition-colors border border-white/10 group-hover/item:border-[#71A2CF]/50">
                                    <svg class="w-5 h-5 text-white group-hover/item:text-[#F7AD12] transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18 12H2v4h16M22 12v4M7 12v4M18 8c.5-1 2-1 2 1v3M18 5c.5-1 2-1 2 1v3" />
                                    </svg>
                                </div>
                                <span class="text-[10px] sm:text-[11px] font-medium text-gray-300 leading-tight">{!! __('about.fac_7') !!}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <p class="text-[11px] text-[#71A2CF]/80 mt-4 italic md:text-right">{!! __('about.note_visitor') !!}</p>
        </div>
    </div>

    {{-- EJSC Visitor Guidelines --}}
    <div class="mt-20 pt-12 border-t border-[#123B7A]/30">
        <div class="text-center mb-12">
            <h3 class="text-2xl md:text-3xl font-bold text-white mb-4" style="font-family: 'Poppins', sans-serif;">
                EJSC {!! __('about.visitor_guidelines') !!}
            </h3>
            <p class="text-gray-400 max-w-2xl mx-auto text-sm md:text-base">
                {!! __('about.guidelines_desc') !!}
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            {{-- Entry Procedures --}}
            <div class="bg-[#123B7A]/10 border border-[#123B7A]/30 rounded-2xl p-6 md:p-8 backdrop-blur-sm">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-12 h-12 rounded-xl bg-[#71A2CF]/20 flex items-center justify-center border border-[#71A2CF]/30">
                        <svg class="w-6 h-6 text-[#71A2CF]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold text-white uppercase tracking-wider">{!! __('about.entry_proc') !!}</h4>
                </div>
                <div class="space-y-6">
                    <div class="flex gap-4">
                        <div class="w-6 h-6 rounded-full bg-[#F7AD12]/20 flex items-center justify-center flex-shrink-0 text-[#F7AD12] font-bold text-xs mt-1">1</div>
                        <div>
                            <h5 class="text-white font-semibold mb-1">{!! __('about.proc_1_title') !!}</h5>
                            <p class="text-gray-400 text-sm">{!! __('about.proc_1_desc') !!}</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="w-6 h-6 rounded-full bg-[#F7AD12]/20 flex items-center justify-center flex-shrink-0 text-[#F7AD12] font-bold text-xs mt-1">2</div>
                        <div>
                            <h5 class="text-white font-semibold mb-1">{!! __('about.proc_2_title') !!}</h5>
                            <p class="text-gray-400 text-sm">{!! __('about.proc_2_desc') !!}</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="w-6 h-6 rounded-full bg-[#F7AD12]/20 flex items-center justify-center flex-shrink-0 text-[#F7AD12] font-bold text-xs mt-1">3</div>
                        <div>
                            <h5 class="text-white font-semibold mb-1">{!! __('about.proc_3_title') !!}</h5>
                            <p class="text-gray-400 text-sm">{!! __('about.proc_3_desc') !!}</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Code of Conduct --}}
            <div class="bg-[#123B7A]/10 border border-[#123B7A]/30 rounded-2xl p-6 md:p-8 backdrop-blur-sm">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-12 h-12 rounded-xl bg-[#F7AD12]/20 flex items-center justify-center border border-[#F7AD12]/30">
                        <svg class="w-6 h-6 text-[#F7AD12]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A3.33 3.33 0 0018.333 3h-1.333c-1.104 0-2 .896-2 2v1h-6V5c0-1.104-.896-2-2-2H5.667a3.33 3.33 0 00-2.618 1.984C2.42 6.643 2 8.27 2 10c0 1.73.42 3.357 1.049 5.016A3.33 3.33 0 005.667 17h12.666a3.33 3.33 0 002.618-1.984C21.58 13.357 22 11.73 22 10c0-1.73-.42-3.357-1.049-5.016z" />
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold text-white uppercase tracking-wider">{!! __('about.code_of_conduct') !!}</h4>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    {{-- Do's --}}
                    <div>
                        <h5 class="text-[#10B981] font-bold text-sm uppercase tracking-widest mb-4 flex items-center gap-2">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            {!! __('about.dos') !!}
                        </h5>
                        <ul class="space-y-3">
                            <li class="flex items-start gap-2 text-gray-400 text-xs sm:text-sm">
                                <span class="text-[#10B981] mt-0.5">•</span>
                                {!! __('about.do_1') !!}
                            </li>
                            <li class="flex items-start gap-2 text-gray-400 text-xs sm:text-sm">
                                <span class="text-[#10B981] mt-0.5">•</span>
                                {!! __('about.do_2') !!}
                            </li>
                            <li class="flex items-start gap-2 text-gray-400 text-xs sm:text-sm">
                                <span class="text-[#10B981] mt-0.5">•</span>
                                {!! __('about.do_3') !!}
                            </li>
                            <li class="flex items-start gap-2 text-gray-400 text-xs sm:text-sm">
                                <span class="text-[#10B981] mt-0.5">•</span>
                                {!! __('about.do_4') !!}
                            </li>
                        </ul>
                    </div>

                    {{-- Don'ts --}}
                    <div>
                        <h5 class="text-[#EF4444] font-bold text-sm uppercase tracking-widest mb-4 flex items-center gap-2">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                            </svg>
                            {!! __('about.donts') !!}
                        </h5>
                        <ul class="space-y-3">
                            <li class="flex items-start gap-2 text-gray-400 text-xs sm:text-sm">
                                <span class="text-[#EF4444] mt-0.5">•</span>
                                {!! __('about.dont_1') !!}
                            </li>
                            <li class="flex items-start gap-2 text-gray-400 text-xs sm:text-sm">
                                <span class="text-[#EF4444] mt-0.5">•</span>
                                {!! __('about.dont_2') !!}
                            </li>
                            <li class="flex items-start gap-2 text-gray-400 text-xs sm:text-sm">
                                <span class="text-[#EF4444] mt-0.5">•</span>
                                {!! __('about.dont_3') !!}
                            </li>
                            <li class="flex items-start gap-2 text-gray-400 text-xs sm:text-sm">
                                <span class="text-[#EF4444] mt-0.5">•</span>
                                {!! __('about.dont_4') !!}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-12 text-center">
            <div class="inline-block px-6 py-3 bg-[#71A2CF]/10 border border-[#71A2CF]/20 rounded-2xl">
                <p class="text-[#71A2CF] text-sm italic">
                    <span class="font-bold not-italic">{!! __('about.note_title') !!}</span> {!! __('about.note_desc') !!}
                </p>
            </div>
        </div>
    </div>
</section>
