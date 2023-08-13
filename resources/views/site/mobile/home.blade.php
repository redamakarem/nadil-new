@extends('layouts.site-mobile')
@section('content')
    <div class="lg:hidden container px-8">
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
                    class="rounded-[64px] bg-[#E0E0E0] outline-none border-none placeholder:text-center placeholder:font-lato placeholder:text-xs placeholder:normal-case placeholder:rtl:font-ahlan placeholder:rtl:tracking-normal w-full mb-4"
                    type="text" name="search_name" id="search_name"
                    placeholder="{{ __('nadil.general.search_placeholder') }}">
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
    {{-- <div class="mx-4">
        <div class="uppercase font-lato rtl:font-ahlan rtl:tracking-normal text-center tracking-widest">
            {{ __('nadil.general.pick_cuisine') }}</div>
        @foreach ($cuisines->chunk(2) as $row)
            <div class="flex justify-between space-x-4 rtl:flex-row-reverse">
                @foreach ($row as $item)
                    <a class="my-4 w-1/2 rounded-[64px] py-4 bg-[#E0E0E0] text-center uppercase font-lato rtl:font-ahlan rtl:tracking-normal"
                        href="{{ route('site.restaurants.cuisine', ['cuisine' => $item->id]) }}">{{ $item->{'name_' . app()->getLocale()} }}</a>
                @endforeach
            </div>
        @endforeach
    </div> --}}





    {{-- Cuisines --}}

    <div class="">
        <div class="uppercase font-lato rtl:font-ahlan rtl:tracking-normal text-center m-4 tracking-widest">
            {{ __('nadil.general.pick_cuisine') }}</div>
        {{-- <div class="swiffy-slider slider-item-show4 slider-nav-outside slider-nav-dark slider-nav-sm slider-nav-visible slider-nav-page slider-item-snapstart  slider-item-ratio slider-item-ratio-contain slider-item-ratio-32x9 bg-white  py-3 py-lg-4 px-5" data-slider-nav-autoplay-interval="2000">
                <div class="slider-container">
                    @foreach ($cuisines as $item)
                            <div class="item flex flex-col justify-center rounded-xl border-2 h-32 font-lato"
                                style="background-image:url('{{ $item->getFirstMediaUrl('cuisine_images') }}'); background-size: cover">
                                <a href="{{ route('site.restaurants.cuisine', ['cuisine' => $item->id]) }}"
                                    class="flex flex-col justify-center w-full h-full bg-black/70 rounded-xl">
                                    <h4
                                        class="text-center font-bold ltr:font-lato rtl:font-ahlan text-white uppercase text-[26px] ltr:tracking-[2px] rtl:tracking-normal text-opacity-100">
                                        {{ $item->{'name_' . app()->getLocale()} }}</h4>
                                    
                                </a>
                            </div>
                        @endforeach
                </div>
            
                <button type="button" class="slider-nav" aria-label="Go left">
                    <div class="bg-nadilBtn-100 w-12 h-12 flex justify-center items-center rounded-full">
                        <i class="fa-solid fa-chevron-left"></i>
                    </div>
                </button>
                <button type="button" class="slider-nav slider-nav-next" aria-label="Go left">
                    <div class="bg-nadilBtn-100 w-12 h-12 flex justify-center items-center rounded-full">
                        <i class="fa-solid fa-chevron-right"></i>
                    </div>
                </button>
            
            </div> --}}

        <div class="nadil-carousel mx-4">
            @foreach ($cuisines as $item)
                <div class="item flex flex-col justify-center rounded-xl border-2 h-32 font-lato"
                    style="background-image:url('{{ $item->getFirstMediaUrl('cuisine_images') }}'); background-size: cover">
                    <a href="{{ route('site.restaurants.cuisine', ['cuisine' => $item->id]) }}"
                        class="flex flex-col justify-center w-full h-full bg-black/70 rounded-xl py-6">
                        <h4
                            class="text-center font-bold ltr:font-lato rtl:font-ahlan text-white uppercase text-[26px] ltr:tracking-[2px] rtl:tracking-normal text-opacity-100 py-4">
                            {{ $item->{'name_' . app()->getLocale()} }}</h4>

                    </a>
                </div>
            @endforeach
        </div>

    </div>



    <div class="mx-4">
        <div class="uppercase font-lato rtl:font-ahlan rtl:tracking-normal text-center m-4 tracking-widest">
            {{ __('nadil.general.pick_spot') }}</div>
        {{-- <div class="relative carousel-container flex rtl:flex-row-reverse items-center">
            <div
                class="absolute bg-nadilBtn-100 carousel-nav p-4 prev rounded-full z-10 -left-4 top-[23%] w-12 h-12 flex justify-center items-center shadow-md">
                <i class="fa-solid fa-chevron-left"></i>
            </div>
            <div class="restaurant-carousel owl-carousel owl-theme mb-8">
                @foreach ($restaurants as $restaurant)
                    <div class="item flex flex-col justify-center rounded-xl border-2 h-32 font-lato"
                        style="background-image:url('{{ $restaurant->getFirstMediaUrl('restaurant_images') }}'); background-size: cover">
                        <a href="{{ route('site.restaurants.view', ['id' => $restaurant->id]) }}"
                            class="flex flex-col justify-center w-full h-full bg-black/70 rounded-xl">
                            <h4
                                class="text-center font-bold ltr:font-lato rtl:font-ahlan text-white uppercase text-[26px] ltr:tracking-[2px] rtl:tracking-normal text-opacity-100">
                                {{ $restaurant->{'name_' . app()->getLocale()} }}</h4>
                            <div
                                class="address text-center text-white uppercase text-[18px] ltr:tracking-[2px] rtl:tracking-normal ltr:font-lato rtl:font-ahlan text-opacity-100">
                                {{ $restaurant->areaa->{'name_' . app()->getLocale()} }}</div>
                        </a>
                    </div>
                @endforeach
            </div>
            <div
                class="absolute bg-nadilBtn-100 carousel-nav p-4 next rounded-full z-10 -right-4 top-[23%] w-12 h-12 flex justify-center items-center shadow-md">
                <i class="fa-solid fa-chevron-right"></i>
            </div>
        </div> --}}


        <div class="nadil-carousel">
            @foreach ($restaurants as $restaurant)
                <div class="item flex flex-col justify-center rounded-xl border-2 h-[130px] font-lato"
                    style="background-image:url('{{ $restaurant->getFirstMediaUrl('restaurant_images') }}'); background-size: cover; ">
                    <a href="{{ route('site.restaurants.view', ['id' => $restaurant->id]) }}"
                        class="flex flex-col justify-center w-full bg-black/70 rounded-xl" style="min-height: 130px;">
                        <h4
                            class="text-center font-bold ltr:font-lato rtl:font-ahlan text-white uppercase text-[26px] ltr:tracking-[2px] rtl:tracking-normal text-opacity-100">
                            {{ $restaurant->{'name_' . app()->getLocale()} }}</h4>
                        <div
                            class="address text-center text-white uppercase text-[18px] ltr:tracking-[2px] rtl:tracking-normal ltr:font-lato rtl:font-ahlan text-opacity-100">
                            {{ $restaurant->areaa->{'name_' . app()->getLocale()} }}</div>
                    </a>
                </div>
            @endforeach
        </div>



    </div>
    {{-- Featured --}}
    <div class="mx-4">
        <div class="uppercase font-lato rtl:font-ahlan rtl:tracking-normal text-center mb-4 tracking-widest">
            {{ __('nadil.general.featured') }}</div>


        <div class="nadil-carousel">
            @foreach ($featured as $restaurant)
                <div class="item flex flex-col justify-center rounded-xl border-2 font-lato"
                    style="background-image:url('{{ $restaurant->getFirstMediaUrl('cuisine_images') }}'); background-size: cover">
                    <a href="{{ route('site.restaurants.cuisine', ['cuisine' => $restaurant->id]) }}"
                        class="flex flex-col justify-center w-full h-full bg-black/70 rounded-xl" style="min-height: 130px">
                        <h4
                            class="text-center font-bold ltr:font-lato rtl:font-ahlan text-white uppercase text-[26px] ltr:tracking-[2px] rtl:tracking-normal text-opacity-100">
                            {{ $restaurant->{'name_' . app()->getLocale()} }}</h4>
                        <div
                            class="address text-center text-white uppercase text-[18px] ltr:tracking-[2px] rtl:tracking-normal ltr:font-lato rtl:font-ahlan text-opacity-100">
                            {{ $restaurant->areaa->{'name_' . app()->getLocale()} }}</div>
                    </a>
                </div>
            @endforeach
        </div>





        {{-- <div class="relative carousel-container flex rtl:flex-row-reverse items-center">
            <div
                class="absolute bg-nadilBtn-100 carousel-nav p-4 prev rounded-full z-10 -left-4 top-[23%] w-12 h-12 flex justify-center items-center shadow-md">
                <i class="fa-solid fa-chevron-left"></i>
            </div>
            <div class="restaurant-carousel owl-carousel owl-theme mb-8">
                @foreach ($featured as $restaurant)
                    <div class="item flex flex-col justify-center rounded-xl border-2 h-32 font-lato"
                        style="background-image:url('{{ $restaurant->getFirstMediaUrl('restaurant_images') }}'); background-size: cover">
                        <a href="{{ route('site.restaurants.view', ['id' => $restaurant->id]) }}"
                            class="flex flex-col justify-center w-full h-full bg-black/70 rounded-xl">
                            <h4
                                class="text-center font-bold ltr:font-lato rtl:font-ahlan text-white uppercase text-[26px] ltr:tracking-[2px] rtl:tracking-normal text-opacity-100">
                                {{ $restaurant->{'name_' . app()->getLocale()} }}</h4>
                            <div
                                class="address text-center text-white uppercase text-[18px] ltr:tracking-[2px] rtl:tracking-normal ltr:font-lato rtl:font-ahlan text-opacity-100">
                                {{ $restaurant->areaa->{'name_' . app()->getLocale()} }}</div>
                        </a>
                    </div>
                @endforeach
            </div>
            <div
                class="absolute bg-nadilBtn-100 carousel-nav p-4 next rounded-full z-10 -right-4 top-[23%] w-12 h-12 flex justify-center items-center shadow-md">
                <i class="fa-solid fa-chevron-right"></i>
            </div>
        </div> --}}

    </div>

    {{-- Recently added --}}
    <div class="mx-4">
        <div class="uppercase font-lato rtl:font-ahlan rtl:tracking-normal text-center mb-4 tracking-widest">
            {{ __('nadil.general.recently_added') }}</div>
        {{-- <div class="relative carousel-container flex rtl:flex-row-reverse items-center">
            <div
                class="absolute bg-nadilBtn-100 carousel-nav p-4 prev rounded-full z-10 -left-4 top-[23%] w-12 h-12 flex justify-center items-center shadow-md">
                <i class="fa-solid fa-chevron-left"></i>
            </div>
            <div class="restaurant-carousel owl-carousel owl-theme mb-8">
                @foreach ($featured as $restaurant)
                    <div class="item flex flex-col justify-center rounded-xl border-2 h-32 font-lato"
                        style="background-image:url('{{ $restaurant->getFirstMediaUrl('restaurant_images') }}'); background-size: cover">
                        <a href="{{ route('site.restaurants.view', ['id' => $restaurant->id]) }}"
                            class="flex flex-col justify-center w-full h-full bg-black/70 rounded-xl">
                            <h4
                                class="text-center font-bold ltr:font-lato rtl:font-ahlan text-white uppercase text-[26px] ltr:tracking-[2px] rtl:tracking-normal text-opacity-100">
                                {{ $restaurant->{'name_' . app()->getLocale()} }}</h4>
                            <div
                                class="address text-center text-white uppercase text-[18px] ltr:tracking-[2px] rtl:tracking-normal ltr:font-lato rtl:font-ahlan text-opacity-100">
                                {{ $restaurant->areaa->{'name_' . app()->getLocale()} }}</div>
                        </a>
                    </div>
                @endforeach
            </div>
            <div
                class="absolute bg-nadilBtn-100 carousel-nav p-4 next rounded-full z-10 -right-4 top-[23%] w-12 h-12 flex justify-center items-center shadow-md">
                <i class="fa-solid fa-chevron-right"></i>
            </div>
        </div> --}}


        <div class="nadil-carousel">
            @foreach ($latest as $item)
                <div class="item flex flex-col justify-center rounded-xl border-2 font-lato"
                    style="background-image:url('{{ $item->getFirstMediaUrl('restaurant_images') }}'); background-size: cover">
                    <a href="{{ route('site.restaurants.view', ['id' => $item->id]) }}"
                        class="flex flex-col justify-center w-full h-full bg-black/70 rounded-xl" style="min-height: 130px">
                        <h4
                            class="text-center font-bold ltr:font-lato rtl:font-ahlan text-white uppercase text-[26px] ltr:tracking-[2px] rtl:tracking-normal text-opacity-100">
                            {{ $item->{'name_' . app()->getLocale()} }}</h4>
                        <div
                            class="address text-center text-white uppercase text-[18px] ltr:tracking-[2px] rtl:tracking-normal ltr:font-lato rtl:font-ahlan text-opacity-100">
                            {{ $item->areaa->{'name_' . app()->getLocale()} }}</div>
                    </a>
                </div>
            @endforeach
        </div>

    </div>

    {{-- Restaurants by meal types --}}
    <div class="greeting uppercase font-lato rtl:font-ahlan rtl:tracking-normal text-center text-xl mx-4">
        {{ __('nadil.general.meal_type') }}</div>
    @foreach ($meal_types as $meal_type)
        @if ($meal_type->active_restaurants->count() > 0)
            <h2 class=" mx-4 my-4 uppercase ltr:font-lato rtl:font-ahlan text-[#454545]">
                {{ $meal_type->{'name_' . app()->getLocale()} }}</h2>
            <div class="item flex flex-col justify-center rounded-xl font-lato ">

                <div class="nadil-carousel mx-4 mb-4">
                    @foreach ($meal_type->restaurants as $meal_restaurant)
                        <div class="item flex flex-col justify-center rounded-xl border-2 h-32  font-lato"
                            style="background-image:url('{{ $meal_restaurant->getFirstMediaUrl('restaurant_images') }}'); background-size: cover">
                            <a href="{{ route('site.restaurants.view', ['id' => $meal_restaurant->id]) }}"
                                class="flex flex-col justify-center w-full h-full bg-black/70 rounded-xl"
                                style="min-height: 130px">
                                <h4
                                    class="text-center uppercase text-white text-[18px] ltr:tracking-[2px] rtl:tracking-normal ltr:font-lato rtl:font-ahlan text-opacity-100">
                                    {{ $meal_restaurant->{'name_' . app()->getLocale()} }}</h4>
                                <div
                                    class="address text-center uppercase text-white text-[18px] ltr:tracking-[2px] rtl:tracking-normal ltr:font-lato rtl:font-ahlan text-opacity-100">
                                    {{ $meal_restaurant->areaa->{'name_' . app()->getLocale()} }}</div>
                            </a>
                        </div>
                    @endforeach
                </div>
        @endif
    @endforeach
    </div>
@endsection


@push('styles')
    <link rel="stylesheet" href="{{ asset('pickadate/lib/themes/default.css') }}">
    <link rel="stylesheet" href="{{ asset('pickadate/lib/themes/default.date.css') }}">
    <link rel="stylesheet" href="{{ asset('pickadate/lib/themes/default.time.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <style>
        .flatpickr-day.selected {
            background: #0a0e14;
        }

        .slider-nav::after {
            content: none !important;
        }

        .slider-nav {
            opacity: 1 !important;
        }

        select.text-center {
            text-align: -webkit-center;
        }

        .slider-nav.slider-nav-next {
            right: -15px;
            left: unset;
        }

        .slider-nav.slider-nav-prev {
            left: -15px;
            right: unset;
        }

        select {
            text-align-last: center;
            text-align: center;
            -ms-text-align-last: center;
            -moz-text-align-last: center;
        }

        .slick-arrow {
            background-color: #e0e0e0;
            position: absolute;
            top: 50%;
            transform: translate(0, -50%);
        }

        .slick-next:focus,
        .slick-next:hover,
        .slick-prev:focus,
        .slick-prev:hover {
            color: #000;
        }

        .slick-prev {
            left: -12px;
        }

        .slick-next {
            right: -12px;
        }
    </style>
@endpush
@push('scripts')
    <script src="{{ asset('pickadate/lib/compressed/picker.js') }}"></script>
    <script src="{{ asset('pickadate/lib/compressed/picker.date.js') }}"></script>
    <script src="{{ asset('pickadate/lib/compressed/picker.time.js') }}"></script>
    <script src="{{ asset('pickadate/lib/compressed/legacy.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous"
        defer></script>


    <script>
        var booking_time = flatpickr("#search_time", {
            enableTime: true,
            noCalendar: true,
            dateFormat: "G:i K",
            defaultDate: "18:00",
            minuteIncrement: 15,
            minTime: "08:00",
            maxTime: "22:30",
        });

        var booking_date = flatpickr("#search_date", {
            dateFormat: 'Y-m-d',
            minDate: 'today',
            defaultDate: 'today',
        });




        $('.nadil-carousel').slick({
            // autoplay: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            rtl: {{ app()->getLocale() == 'ar' ? 'true' : 'false' }},
            arrows: true,
            prevArrow: "<button type='button' class=' z-20 slick-prev pull-left bg-nadilBtn-100 w-10 h-10 flex justify-center items-center rounded-full'><i class='fa-solid fa-chevron-left'></i></button>",
            nextArrow: "<button type='button' class=' z-20 slick-next pull-left bg-nadilBtn-100 w-10 h-10 flex justify-center items-center rounded-full'><i class='fa-solid fa-chevron-right'></i></button>",
        });
    </script>
@endpush
