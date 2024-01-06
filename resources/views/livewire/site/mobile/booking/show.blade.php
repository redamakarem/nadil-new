<div>
    <div wire:loading class="absolute">

        <div class="h-screen w-screen flex justify-center items-center fixed bg-gray-500/20  top-0 left-0 z-30">
            <lottie-player src="https://lottie.host/07048e2a-58bc-4111-ac06-10c47c955114/MTwZhf7FYy.json"
                background="transparent" speed="1" style="width: 600px; height: 600px;" loop autoplay></lottie-player>
    
        </div>
    </div>
    <div id="booking-container" class="flex flex-col px-4 pt-8">
        
    
        @if ($errors->any())
            <div id="validation-errors"
                class="bg-red-100 text-center text-red-700">
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif
        <div
            class="uppercase font-lato rtl:font-ahlan rtl:tracking-normal text-center tracking-[4px] underline underline-offset-[10px] mb-3">
            {{ $restaurant->{'name_' . app()->getLocale()} }}</div>
        <div class="uppercase font-lato rtl:font-ahlan rtl:tracking-normal text-center tracking-[4px]">
            {{ $restaurant->areaa->governate->{'name_' . app()->getLocale()} }}</div>
        <div class="uppercase font-lato rtl:font-ahlan rtl:tracking-normal text-center tracking-[4px]">
            {{ __('nadil.general.slogan') }}</div>
        <div class="px-8 my-6">
            <div class="grid grid-cols-2 gap-x-3 mt-4">
                <div>Accessible:</div>
                <div class="text-center"><span><i class="fas fa-check text-green-500"></i></span></div>
    
    
                <div>Private Rooms:</div>
                <div class="text-center"><span><i class="fas fa-check text-green-500"></i></span></div>
    
                <div>Dress Code: </div>
                <div class="text-center">Formal
                </div>
    
            </div>
    
    
        </div>
    
    
    
    
        <div class="bg-[#f5f5f5] rounded-[60px] p-8 mb-8">
            <div
            class="uppercase font-lato rtl:font-ahlan rtl:tracking-normal text-center mt-12 mb-4 px-8 py-6 bg-nadilBtn-100 tracking-[4px] rounded-[19px]">
            {{ __('nadil.booking.select_date_time') }}</div>
        <div wire:ignore class="flex justify-center">
            <div id="booking-date-mob"></div>
        </div>
        <div
            class="uppercase text-center mt-12 mb-4 px-16 py-6 bg-nadilBtn-100 tracking-[6px] rounded-[19px] rtl:font-ahlan rtl:tracking-normal">
            {{ __('nadil.booking.how_many_seats') }}</div>
        <div class="my-4 flex flex-col items-center">
            {{-- <input
                class="rounded-[64px] bg-[#E0E0E0] outline-none border-none placeholder:text-center placeholder:font-lato placeholder:uppercase text-center w-full h-12"
                type="number" step="1" min="0" max="{{$restaurant->max_party_size}}" wire:model="seats" placeholder="{{ __('# of people') }}"> --}}
    
                <p class="mb-8 uppercase font-lato rtl:font-ahlan rtl:tracking-normal text-center">{{ __('nadil.messages.booking_party_size', ['max' => $restaurant->max_party_size]) }}</p>
            <select wire:model.defer="seats"
                class="rounded-[64px] bg-[#E0E0E0] outline-none border-none placeholder:text-center placeholder:font-lato placeholder:uppercase text-center w-full h-12">
                <option value="">{{ __('nadil.booking.num_guest') }}</option>
                @for ($i = 1; $i <= $restaurant->max_party_size; $i++)
                    <option value="{{ $i }}">{{ $i }} {{ trans_choice('nadil.booking.guest', $i) }}
                       
                    </option>
                @endfor
            </select>
        </div>
    
        <div
            class="uppercase text-center mt-12 mb-4 px-16 py-6 bg-nadilBtn-100 tracking-[4px] rounded-[19px] rtl:font-ahlan rtl:tracking-normal">
            {{ $selected_time ?? __('nadil.booking.select_time') }}</div>
        {{-- <div class="overflow-y-scroll scrollbar scrollbar-thumb-gray-600 scrollbar-track-gray-100 px-8">
            @if ($slots)
                @foreach (array_chunk($slots, 2, true) as $chunk)
                    <div class="flex justify-center">
                        @foreach ($chunk as $key => $timeSlot)
                            <div role="group" class="mx-1">
                                <button type="button" wire:click="setSelectedTime('{{ $timeSlot }}')"
                                    {{ $this->slot_bookable($timeSlot) ? '' : 'disabled' }}
                                    class="mb-4 inline-block px-4 py-2 bg-nadilBtn-100 tracking-[4px] rounded-lg disabled:text-gray-400 hover:bg-grey-500 focus:bg-black focus:text-white focus:outline-none focus:ring-0 active:bg-black active:text-white transition duration-150 ease-in-out">{{ \Carbon\Carbon::parse($timeSlot)->translatedFormat('h:i A') }}</button>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            @else
                <div class="flex flex-col justify-center h-44">
                    <div class="w-full text-center">{{ __('nadil.booking.no_available_slots') }}</div>
                </div>
            @endif
        </div> --}}
    
        {{-- Select time --}}
    
        <div class="overflow-y-scroll scrollbar scrollbar-thumb-gray-600 scrollbar-track-gray-100 px-8">
            @if ($slots)
            <select wire:model='selected_time' class="my-8 rounded-[64px] bg-[#E0E0E0] outline-none border-none placeholder:text-center placeholder:font-lato placeholder:uppercase text-center w-full h-12">
                @foreach ($slots as $slot)
                    <option {{$this->slot_bookable($slot) ? '' : 'disabled'}} value="{{ $slot }}">{{ \Carbon\Carbon::parse($slot)->translatedFormat('h:i A') }}
                        {{ $this->slot_bookable($slot) ? '' : 'disabled' }}
                    </option>
    
                @endforeach
            </select>
            @else
                <div class="flex flex-col justify-center h-44">
                    <div class="w-full text-center">{{ __('nadil.booking.no_available_slots') }}</div>
                </div>
            @endif
        </div>
    
    
    
        <div class="flex justify-center mb-6">
            <button class="uppercase font-lato font-bold bg-[#F8F8F8] shadow-md rounded-lg py-4 w-2/3" wire:click="submit"
                type="button">{{ __('nadil.booking.book_now') }}</button>
        </div>
        </div>
    </div>
    
</div>
@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <style>
        .flatpickr-day.selected {
            background: #0a0e14;
        }

        .flatpickr-day.selected:hover {
            background: #666666;
        }
    </style>
@endpush

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://npmcdn.com/flatpickr/dist/l10n/ar.js"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>


    <script>
        var booking_date = flatpickr("#booking-date-mob", {
            "locale": "{{ app()->getLocale() }}",
            inline: true,
            dateFormat: 'y-m-d',
            minDate: 'today'
        });
        booking_date.config.onChange.push(function(selectedDates, dateStr, instance) {
            console.log(dateStr);
            @this.selected_date = dateStr;
        });
    </script>
@endpush
