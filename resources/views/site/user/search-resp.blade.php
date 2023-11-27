@extends('layouts.site-resp')
@section('content')
    <div id="main-content" class="h-full">
        <div class="flex flex-col px-24 py-[80px]">
            <div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <p><strong>Opps Something went wrong</strong></p>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <div class="px-8 py-12 mb-12">
                <div class="text-white greeting uppercase">{{ __('nadil.general.whats_the_plan') }}</div>
                <form action="{{ route('site.restaurants.search') }}" method="POST" class="mb-6">
                    @csrf
                    <div class="flex my-4 items-center">
                        <div class="w-1/2 flex">
                            <input
                                class="flex-1 font-lato flex text-center border-none py-6 uppercase bg-nadilBtn-100 outline-none ltr:rounded-l-lg rtl:rounded-r-lg"
                                type="text" name="search_date" id="search_date" placeholder="Date">
                            <div class="bg-gray-600 w-[1px] h-[72px] opacity-40"></div>

                            <input
                                class="flex-1 font-lato flex text-center border-none py-6 uppercase bg-nadilBtn-100 outline-none "
                                type="text" name="search_time" id="search_time" placeholder="Time">
                            <div class="bg-gray-600 w-[1px] h-[72px] opacity-40"></div>

                            <select
                                class="flex-1 font-lato rtl:font-ahlan rtl:tracking-normal flex text-center border-none py-6 uppercase bg-nadilBtn-100 outline-none ltr:rounded-r-lg rtl:rounded-l-lg"
                                type="text" name="search_seats" id="search_seats">
                                <option value="1" @if ($validated_data['search_seats'] == 1) selected @endif>1
                                    {{ trans_choice('nadil.booking.guest', 1) }}</option>
                                <option value="2" @if ($validated_data['search_seats'] == 2) selected @endif>2
                                    {{ trans_choice('nadil.booking.guest', 2) }}</option>
                                <option value="3" @if ($validated_data['search_seats'] == 3) selected @endif>3
                                    {{ trans_choice('nadil.booking.guest', 3) }}</option>
                                <option value="4" @if ($validated_data['search_seats'] == 4) selected @endif>4
                                    {{ trans_choice('nadil.booking.guest', 4) }}</option>
                                <option value="5" @if ($validated_data['search_seats'] == 5) selected @endif>5
                                    {{ trans_choice('nadil.booking.guest', 5) }}</option>
                                <option value="6" @if ($validated_data['search_seats'] == 6) selected @endif>6
                                    {{ trans_choice('nadil.booking.guest', 6) }}</option>
                                <option value="7" @if ($validated_data['search_seats'] == 7) selected @endif>7
                                    {{ trans_choice('nadil.booking.guest', 7) }}</option>
                                <option value="8" @if ($validated_data['search_seats'] == 8) selected @endif>8
                                    {{ trans_choice('nadil.booking.guest', 8) }}</option>
                                <option value="9" @if ($validated_data['search_seats'] == 9) selected @endif>9
                                    {{ trans_choice('nadil.booking.guest', 9) }}</option>
                                <option value="10" @if ($validated_data['search_seats'] == 10) selected @endif>10
                                    {{ trans_choice('nadil.booking.guest', 10) }}</option>
                                <option value="10+" @if ($validated_data['search_seats'] == 11) selected @endif>10+
                                    {{ trans_choice('nadil.booking.guest', 11) }}</option>
                            </select>
                        </div>


                        <div class="w-1/2 flex">
                            <input
                                class=" flex-1 font-lato placeholder:font-lato placeholder:rtl:font-ahlan placeholder:rtl:tracking-normal flex text-center border-none py-6 uppercase bg-nadilBtn-100 outline-none rounded-lg mx-6"
                                type="text" name="search_name" id="search_name"
                                value="{{ $validated_data['search_name'] }}"
                                placeholder="{{ __('nadil.general.search') }}">
                            <button
                                class="font-lato rtl:font-ahlan rtl:tracking-normal border-none px-12 py-6 uppercase bg-nadilBtn-100 shadow-md outline-none rounded-lg"
                                type="submit">{{ __('nadil.booking.book_now') }}</button>
                        </div>
                    </div>
                </form>
            </div>
            @if ($result->count() > 0)
                <div class="restaurant-search-results mb-8 grid grid-cols-2 gap-4">
                    @foreach ($result as $restaurant)
                        <div class="item flex flex-col justify-center rounded-xl border-2 h-36 font-lato"
                            style="background-image:url('{{ $restaurant->getFirstMediaUrl('restaurant_images') }}'); background-size: cover">
                            <a href="{{ route('site.restaurants.view-resp', ['id' => $restaurant->id]) }}"
                                class="flex justify-center w-full h-full bg-black/50 rounded-xl">
                                <div class="flex w-full">
                                    <h4
                                        class="flex w-1/2 items-center justify-center font-bold ltr:font-lato rtl:font-ahlan text-white uppercase text-[26px] ltr:tracking-[2px] rtl:tracking-normal text-opacity-100">
                                        {{ $restaurant->{'name_' . app()->getLocale()} }}</h4>
                                    <div class="flex w-1/2 flex-col justify-center items-center">
                                        <div class="flex gap-1">

                                            <div
                                                class="address text-center text-white uppercase text-[18px] ltr:tracking-[2px] rtl:tracking-normal ltr:font-lato rtl:font-ahlan text-opacity-100">
                                                {{ $restaurant->areaa->{'name_' . app()->getLocale()} }}</div>
                                            <div class="text-white">
                                                {{ $restaurant->cuisines[0]->{'name_' . app()->getLocale()} }}</div>
                                        </div>
                                        <div class="text-white px-4 py2">{{ __('nadil.general.weekdays') }} :
                                            {{ $restaurant->{'opening_hours_' . app()->getLocale()} }}</div>
                                        @if ($restaurant->{'weekend_opening_hours_' . app()->getLocale()} != null)
                                            <div class="text-white px-4 py2">{{ __('nadil.general.weekends') }} :
                                                {{ $restaurant->{'weekend_opening_hours_' . app()->getLocale()} }}</div>
                                        @endif
                                    </div>

                                </div>

                            </a>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="flex flex-col justify-center items-center">
                    <div>No results found</div>
                </div>
            @endif

        </div>
    </div>
@endsection

@section('content-mob')
    <div class="lg:hidden container mx-auto px-8">
        <p class="uppercase font-lato tracking-[4px] rtl:font-ahlan rtl:tracking-normal text-center py-6">
            {{ __('nadil.general.whats_the_plan') }}</p>
        <div class="flex flex-col items-center">
            <form action="{{ route('site.restaurants.search') }}" method="POST">
                @csrf

                <div class="my-4">
                    <input
                        class="text-center rounded-[64px] bg-[#E0E0E0] outline-none border-none placeholder:text-center placeholder:font-lato placeholder:uppercase w-full"
                        type="text" name="search_date" id="search_date" placeholder="{{ __('Date') }}">
                </div>
                <div class="my-4">
                    <input
                        class="text-center rounded-[64px] bg-[#E0E0E0] outline-none border-none placeholder:text-center placeholder:font-lato placeholder:uppercase w-full"
                        type="text" name="search_time" id="search_time" placeholder="{{ __('Time') }}">
                </div>
                <div class="my-4">
                    <select
                        class="text-center rounded-[64px] bg-[#E0E0E0] outline-none border-none placeholder:text-center placeholder:font-lato placeholder:uppercase w-full"
                        name="search_seats" id="search_seats">
                        <option value="1">1 {{ trans_choice('nadil.booking.guest', 1) }}</option>
                        <option value="2">2 {{ trans_choice('nadil.booking.guest', 2) }}</option>
                        <option value="3">3 {{ trans_choice('nadil.booking.guest', 3) }}</option>
                        <option value="4">4 {{ trans_choice('nadil.booking.guest', 4) }}</option>
                        <option value="5">5 {{ trans_choice('nadil.booking.guest', 5) }}</option>
                        <option value="6">6 {{ trans_choice('nadil.booking.guest', 6) }}</option>
                        <option value="7">7 {{ trans_choice('nadil.booking.guest', 7) }}</option>
                        <option value="8">8 {{ trans_choice('nadil.booking.guest', 8) }}</option>
                        <option value="9">9 {{ trans_choice('nadil.booking.guest', 9) }}</option>
                        <option value="10">10 {{ trans_choice('nadil.booking.guest', 10) }}</option>
                        <option value="10+">10+ {{ trans_choice('nadil.booking.guest', 11) }}</option>
                    </select>
                </div>
                <input
                    class="rounded-[64px] bg-[#E0E0E0] outline-none border-none placeholder:text-center placeholder:font-lato placeholder:rtl:font-ahlan placeholder:rtl:tracking-normal placeholder:uppercase w-full mb-4"
                    type="text" name="search_name" id="search_name" placeholder="{{ __('nadil.general.search') }}">
        </div>
        <div class="flex justify-center mb-6">
            <button
                class="uppercase font-lato rtl:font-ahlan rtl:tracking-normal font-bold bg-[#E0E0E0] shadow-md w-full rounded-lg py-4"
                type="submit">{{ __('nadil.booking.book_now') }}</button>
        </div>
        <div class="">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <p><strong>Opps Something went wrong</strong></p>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        </form>
    </div>
    <div class="px-6 mx-auto p-4">
        @if ($result->count() > 0)
        <div class="restaurant-search-results mb-8 grid grid-cols-1 gap-4">
            @foreach ($result as $restaurant)
                <div class="item flex flex-col justify-center rounded-xl border-2 h-36 font-lato"
                    style="background-image:url('{{ $restaurant->getFirstMediaUrl('restaurant_images') }}'); background-size: cover">
                    <a href="{{ route('site.restaurants.view-resp', ['id' => $restaurant->id]) }}"
                        class="flex justify-center w-full h-full bg-black/50 rounded-xl  px-4">
                        <div class="flex w-full">
                            <div class="flex flex-col justify-center w-1/2 ">
                                <h4
                                class="flex items-center justify-center text-center font-bold ltr:font-lato rtl:font-ahlan text-white uppercase text-[18px] ltr:tracking-[2px] rtl:tracking-normal text-opacity-100">
                                {{ $restaurant->{'name_' . app()->getLocale()} }}</h4>
                                <div
                                        class="address text-center text-white uppercase text-[14px] ltr:tracking-[2px] rtl:tracking-normal ltr:font-lato rtl:font-ahlan text-opacity-100">
                                        {{ $restaurant->areaa->{'name_' . app()->getLocale()} }}</div>
                            </div>
                            <div class="flex w-1/2 flex-col justify-center items-center">
                                <div class="flex">

                                    
                                    <div class="text-white">
                                        {{ $restaurant->cuisines[0]->{'name_' . app()->getLocale()} }}</div>
                                </div>
                                
                            </div>

                        </div>

                    </a>
                </div>
            @endforeach
        </div>
        @else
            <div class="flex flex-col justify-center">
                <div class="uppercase font-lato text-center my-4">{{ __('nadil.general.no_results') }}</div>
            </div>
        @endif

    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('pickadate/lib/themes/default.css') }}">
    <link rel="stylesheet" href="{{ asset('pickadate/lib/themes/default.date.css') }}">
    <link rel="stylesheet" href="{{ asset('pickadate/lib/themes/default.time.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endpush
@push('scripts')
    <script src="{{ asset('pickadate/lib/compressed/picker.js') }}"></script>
    <script src="{{ asset('pickadate/lib/compressed/picker.date.js') }}"></script>
    <script src="{{ asset('pickadate/lib/compressed/picker.time.js') }}"></script>
    <script src="{{ asset('pickadate/lib/compressed/legacy.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://npmcdn.com/flatpickr/dist/l10n/ar.js"></script>

    <script>
        var booking_time = flatpickr("#search_time", {

            enableTime: true,
            noCalendar: true,
            dateFormat: "G:i K",
            defaultDate: "{{ $validated_data['search_time'] }}",
            minuteIncrement: 15,

        });

        var booking_date = flatpickr("#search_date", {
            "locale": "{{ app()->getLocale() }}",
            dateFormat: 'Y-m-d',
            minDate: 'today',
            defaultDate: '{{ $validated_data['search_date'] }}',
        });

        var res_carousel = $('.restaurant-carousel');
        res_carousel.owlCarousel({
            loop: true,
            rtl: {{ app()->getLocale() == 'ar' ? 'true' : 'false' }},
            margin: 10,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        });
        $('.next').click(function() {
            res_carousel.trigger('next.owl.carousel');
        })
        $('.prev').click(function() {
            res_carousel.trigger('prev.owl.carousel');
        })

        $('.meals-carousel').each(function(index) {
            var meal_slider = $(this).owlCarousel({
                loop: true,
                rtl: {{ app()->getLocale() == 'ar' ? 'true' : 'false' }},
                margin: 10,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 4
                    }
                }
            });
            $(this).closest('.carousel-container').find('.meals-prev').click(function() {
                console.log('PREV');
                meal_slider.trigger('prev.owl.carousel');
            })
            $(this).closest('.carousel-container').find('.meals-next').click(function() {
                console.log('MEXT');
                meal_slider.trigger('next.owl.carousel');
            })
        });



        var cuisines_carousel = $('.cuisines-carousel');
        cuisines_carousel.owlCarousel({
            loop: true,
            rtl: {{ app()->getLocale() == 'ar' ? 'true' : 'false' }},
            margin: 10,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        });
        $('.cuisines-next').click(function() {
            cuisines_carousel.trigger('next.owl.carousel');
        })
        $('.cuisines-prev').click(function() {
            cuisines_carousel.trigger('prev.owl.carousel');
        })

        $('.owl-carousel-mobile').owlCarousel({
            loop: true,
            margin: 10,
            items: 1
        })
    </script>
@endpush
