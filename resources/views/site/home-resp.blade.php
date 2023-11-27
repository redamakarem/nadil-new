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



            <div class="">
                <div class="text-xl greeting uppercase">{{ __('nadil.general.whats_the_plan') }}</div>
                <form action="{{ route('site.restaurants.search-resp') }}" method="POST" class="mb-6">
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


                        <div class="w-1/2 flex">
                            <input
                                class=" flex-1 font-lato placeholder:font-lato placeholder:rtl:font-ahlan placeholder:rtl:tracking-normal flex text-center border-none py-6 uppercase bg-nadilBtn-100 outline-none rounded-lg mx-6"
                                type="text" name="search_name" id="search_name"
                                placeholder="{{ __('nadil.general.search_placeholder') }}">
                            <button
                                class="font-lato rtl:font-ahlan rtl:tracking-normal border-none px-12 py-6 uppercase bg-nadilBtn-100 shadow-md outline-none rounded-lg"
                                type="submit">{{ __('nadil.booking.book_now') }}</button>
                        </div>
                    </div>
                </form>
            </div>



            <div class="nadil-carousel">
                @foreach ($restaurants as $restaurant)
                    <div class="item flex flex-col justify-center rounded-xl border-2  font-lato"
                        style="background-image:url('{{ $restaurant->getFirstMediaUrl('restaurant_images') }}'); background-size: cover">
                        <a href="{{ route('site.restaurants.view', ['id' => $restaurant->id]) }}"
                            class="flex flex-col justify-center w-full h-full bg-black/70 rounded-xl py-4">
                            <h4
                                class="text-center font-bold ltr:font-lato rtl:font-ahlan text-white uppercase text-[22px] ltr:tracking-[2px] rtl:tracking-normal text-opacity-100">
                                {{ $restaurant->{'name_' . app()->getLocale()} }}</h4>
                            <div
                                class="address text-center text-white uppercase text-[16px] ltr:tracking-[2px] rtl:tracking-normal ltr:font-lato rtl:font-ahlan text-opacity-100">
                                {{ $restaurant->areaa->{'name_' . app()->getLocale()} }}</div>

                        </a>
                    </div>
                @endforeach
            </div>

            {{-- End Test --}}



            {{-- Featured --}}

            <div class="flex flex-col">
                <h2 class="mt-6 uppercase ltr:font-lato rtl:font-ahlan text-[#454545]">
                    Featured</h2>
                <div>

                    <div class="nadil-carousel">
                        @foreach ($featured as $item)
                            <div class="item flex flex-col justify-center rounded-xl border-2 h-32 font-lato"
                                style="background-image:url('{{ $item->getFirstMediaUrl('restaurant_images') }}'); background-size: cover">
                                <a href="{{ route('site.restaurants.view', ['id' => $item->id]) }}"
                                    class="flex flex-col justify-center w-full h-full bg-black/70 rounded-xl py-4">
                                    <h4
                                        class="text-center font-bold ltr:font-lato rtl:font-ahlan text-white uppercase text-[22px] ltr:tracking-[2px] rtl:tracking-normal text-opacity-100">
                                        {{ $item->{'name_' . app()->getLocale()} }}</h4>
                                    <div
                                        class="address text-center text-white uppercase text-[16px] ltr:tracking-[2px] rtl:tracking-normal ltr:font-lato rtl:font-ahlan text-opacity-100">
                                        {{ $item->areaa->{'name_' . app()->getLocale()} }}</div>

                                </a>
                            </div>
                        @endforeach
                    </div>


                </div>
            </div>

            {{-- Latest --}}

            <div class="flex flex-col">
                <h2 class="mt-6 uppercase ltr:font-lato rtl:font-ahlan text-[#454545]">
                    Most recent</h2>
                <div>

                    <div class="nadil-carousel">
                        @foreach ($latest as $item)
                            <div class="item flex flex-col justify-center rounded-xl border-2 h-32 font-lato"
                                style="background-image:url('{{ $item->getFirstMediaUrl('cuisine_images') }}'); background-size: cover">
                                <a href="{{ route('site.restaurants.view', ['id' => $item->id]) }}"
                                    class="flex flex-col justify-center w-full h-full bg-black/70 rounded-xl py-4">
                                    <h4
                                        class="text-center font-bold ltr:font-lato rtl:font-ahlan text-white uppercase text-[22px] ltr:tracking-[2px] rtl:tracking-normal text-opacity-100">
                                        {{ $item->{'name_' . app()->getLocale()} }}</h4>
                                    <div
                                        class="address text-center text-white uppercase text-[16px] ltr:tracking-[2px] rtl:tracking-normal ltr:font-lato rtl:font-ahlan text-opacity-100">
                                        {{ $item->areaa->{'name_' . app()->getLocale()} }}</div>

                                </a>
                            </div>
                        @endforeach
                    </div>


                </div>
            </div>

            {{--   Restaurants by meal types     --}}
            <div class="greeting uppercase font-lato rtl:font-ahlan mt-8">{{ __('nadil.general.meal_type') }}</div>

            @foreach ($meal_types as $meal_type)
                @if ($meal_type->active_restaurants->count() > 0)
                    <h2 class="mt-6 uppercase ltr:font-lato rtl:font-ahlan text-[#454545]">
                        {{ $meal_type->{'name_' . app()->getLocale()} }}</h2>

                    <div>

                        <div class="nadil-carousel">
                            @foreach ($meal_type->restaurants as $meal_restaurant)
                                <div class="item flex flex-col justify-center rounded-xl border-2 h-32 font-lato"
                                    style="background-image:url('{{ $meal_restaurant->getFirstMediaUrl('restaurant_images') }}'); background-size: cover">
                                    <a href="{{ route('site.restaurants.view', ['id' => $meal_restaurant->id]) }}"
                                        class="flex flex-col justify-center w-full h-full bg-black/70 rounded-xl py-4">
                                        <h4
                                            class="text-center font-bold ltr:font-lato rtl:font-ahlan text-white uppercase text-[22px] ltr:tracking-[2px] rtl:tracking-normal text-opacity-100">
                                            {{ $meal_restaurant->{'name_' . app()->getLocale()} }}</h4>
                                        <div
                                            class="address text-center text-white  uppercase text-[16px] ltr:tracking-[2px] rtl:tracking-normal ltr:font-lato rtl:font-ahlan text-opacity-100">
                                            {{ $meal_restaurant->areaa->{'name_' . app()->getLocale()} }}</div>

                                    </a>
                                </div>
                            @endforeach
                        </div>


                    </div>
                @endif
            @endforeach
            <div class="greeting uppercase font-lato rtl:font-ahlan rtl:tracking-normal text-[#454545]">
                {{ __('nadil.general.pick_cuisine') }}</div>
            <div>

                <div class="nadil-carousel">
                    @foreach ($cuisines as $cuisine)
                        <div class="item flex flex-col justify-center rounded-xl border-2 h-32 font-lato"
                            style="background-image:url('{{ $cuisine->getFirstMediaUrl('cuisine_images') }}'); background-size: cover">
                            <a href="{{ route('site.restaurants.view', ['id' => $cuisine->id]) }}"
                                class="flex flex-col justify-center w-full h-full bg-black/70 rounded-xl py-6">
                                <h4
                                    class="text-center font-bold ltr:font-lato rtl:font-ahlan text-white uppercase text-[22px] ltr:tracking-[2px] rtl:tracking-normal text-opacity-100">
                                    {{ $cuisine->{'name_' . app()->getLocale()} }}</h4>


                            </a>
                        </div>
                    @endforeach
                </div>


            </div>
        </div>
    </div>
@endsection

@section('content-mob')
    <div class="lg:hidden container px-8">
        <p class="uppercase font-lato tracking-[4px] rtl:font-ahlan rtl:tracking-normal text-center py-6">
            {{ __('nadil.general.whats_the_plan') }}</p>
        <div class="flex flex-col items-center">
            <form action="{{ route('site.restaurants.search-resp') }}" method="POST">
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


    {{-- Cuisines --}}

    <div class="">
        <div class="uppercase font-lato rtl:font-ahlan rtl:tracking-normal text-center m-4 tracking-widest">
            {{ __('nadil.general.pick_cuisine') }}</div>
        

        <div class="nadil-carousel mx-4">
            @foreach ($cuisines as $item)
                <div class="item flex flex-col justify-center rounded-xl border-2 h-32 font-lato"
                    style="background-image:url('{{ $item->getFirstMediaUrl('cuisine_images') }}'); background-size: cover">
                    <a href="{{ route('site.restaurants.cuisine', ['cuisine' => $item->id]) }}"
                        class="flex flex-col justify-center w-full h-full bg-black/70 rounded-xl py-6">
                        <h4
                            class="text-center font-bold ltr:font-lato rtl:font-ahlan text-white uppercase text-[22px] ltr:tracking-[2px] rtl:tracking-normal text-opacity-100 py-4">
                            {{ $item->{'name_' . app()->getLocale()} }}</h4>

                    </a>
                </div>
            @endforeach
        </div>

    </div>



    <div class="mx-4">
        <div class="uppercase font-lato rtl:font-ahlan rtl:tracking-normal text-center m-4 tracking-widest">
            {{ __('nadil.general.pick_spot') }}</div>
        


        <div class="nadil-carousel">
            @foreach ($restaurants as $restaurant)
                <div class="item flex flex-col justify-center rounded-xl border-2 h-[130px] font-lato"
                    style="background-image:url('{{ $restaurant->getFirstMediaUrl('restaurant_images') }}'); background-size: cover; ">
                    <a href="{{ route('site.restaurants.view-resp', ['id' => $restaurant->id]) }}"
                        class="flex flex-col justify-center w-full bg-black/70 rounded-xl" style="min-height: 130px;">
                        <h4
                            class="text-center font-bold ltr:font-lato rtl:font-ahlan text-white uppercase text-[22px] ltr:tracking-[2px] rtl:tracking-normal text-opacity-100">
                            {{ $restaurant->{'name_' . app()->getLocale()} }}</h4>
                        <div
                            class="address text-center text-white uppercase text-[16px] ltr:tracking-[2px] rtl:tracking-normal ltr:font-lato rtl:font-ahlan text-opacity-100">
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
                            class="text-center font-bold ltr:font-lato rtl:font-ahlan text-white uppercase text-[22px] ltr:tracking-[2px] rtl:tracking-normal text-opacity-100">
                            {{ $restaurant->{'name_' . app()->getLocale()} }}</h4>
                        <div
                            class="address text-center text-white uppercase text-[16px] ltr:tracking-[2px] rtl:tracking-normal ltr:font-lato rtl:font-ahlan text-opacity-100">
                            {{ $restaurant->areaa->{'name_' . app()->getLocale()} }}</div>
                    </a>
                </div>
            @endforeach
        </div>





       
    </div>

    {{-- Recently added --}}
    <div class="mx-4">
        <div class="uppercase font-lato rtl:font-ahlan rtl:tracking-normal text-center mb-4 tracking-widest">
            {{ __('nadil.general.recently_added') }}</div>
        


        <div class="nadil-carousel">
            @foreach ($latest as $item)
                <div class="item flex flex-col justify-center rounded-xl border-2 font-lato"
                    style="background-image:url('{{ $item->getFirstMediaUrl('restaurant_images') }}'); background-size: cover">
                    <a href="{{ route('site.restaurants.view', ['id' => $item->id]) }}"
                        class="flex flex-col justify-center w-full h-full bg-black/70 rounded-xl" style="min-height: 130px">
                        <h4
                            class="text-center font-bold ltr:font-lato rtl:font-ahlan text-white uppercase text-[22px] ltr:tracking-[2px] rtl:tracking-normal text-opacity-100">
                            {{ $item->{'name_' . app()->getLocale()} }}</h4>
                        <div
                            class="address text-center text-white uppercase text-[16px] ltr:tracking-[2px] rtl:tracking-normal ltr:font-lato rtl:font-ahlan text-opacity-100">
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
                                    class="text-center uppercase text-white text-[22px] ltr:tracking-[2px] rtl:tracking-normal ltr:font-lato rtl:font-ahlan text-opacity-100">
                                    {{ $meal_restaurant->{'name_' . app()->getLocale()} }}</h4>
                                <div
                                    class="address text-center uppercase text-white text-[16px] ltr:tracking-[2px] rtl:tracking-normal ltr:font-lato rtl:font-ahlan text-opacity-100">
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

        .slider-nav::after,
        .slider-nav::before {
            content: none !important;
        }

        .slider-nav {
            opacity: 1 !important;
        }

        .slider-nav.slider-nav-next {
            right: -30px;
            left: unset;
        }

        .slider-nav.slider-nav-prev {
            left: -30px;
            right: unset;
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
            left: -25px;
        }

        .slick-next {
            right: -25px;
        }

        .slick-track {
            margin-right: 0 !important;
            margin-left: 0 !important;
        }
    </style>
@endpush
@push('scripts')
    <script src="{{ asset('pickadate/lib/compressed/picker.js') }}"></script>
    <script src="{{ asset('pickadate/lib/compressed/picker.date.js') }}"></script>
    <script src="{{ asset('pickadate/lib/compressed/picker.time.js') }}"></script>
    <script src="{{ asset('pickadate/lib/compressed/legacy.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://npmcdn.com/flatpickr/dist/l10n/ar.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous"
        defer></script>

    <script>
        var booking_time = flatpickr("#search_time", {

            enableTime: true,
            noCalendar: true,
            dateFormat: "G:i K",
            defaultDate: "18:00",
            minuteIncrement: 15,

        });

        var booking_date = flatpickr("#search_date", {
            "locale": "{{ app()->getLocale() }}",
            dateFormat: 'Y-m-d',
            minDate: 'today',
            defaultDate: 'today',
        });



        $(".owl-carousel").each(function() {
            $(this).owlCarousel({
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
        });
        // Custom Navigation Events
        $(".next").click(function() {
            console.log('NEXT??');
            $(this).closest('.carousel-container').find('.owl-carousel').trigger('next.owl.carousel');
        })
        $(".prev").click(function() {
            $(this).closest('.carousel-container').find('.owl-carousel').trigger('prev.owl.carousel');
            console.log('PREV??');
        })


        $(document).ready(function() {
            $('#desktop-wrapper .nadil-carousel').slick({
                // autoplay:true,
                infinite: true,
                slidesToShow: 4,
                rtl: {{ app()->getLocale() == 'ar' ? 'true' : 'false' }},
                slidesToScroll: 1,
                arrows: true,
                prevArrow: "<button type='button' class=' z-20 slick-prev pull-left bg-nadilBtn-100 w-10 h-10 flex justify-center items-center rounded-full'><i class='fa-solid fa-chevron-left'></i></button>",
                nextArrow: "<button type='button' class=' z-20 slick-next pull-left bg-nadilBtn-100 w-10 h-10 flex justify-center items-center rounded-full'><i class='fa-solid fa-chevron-right'></i></button>",
            });

            $('#mobile-wrapper .nadil-carousel').slick({
                // autoplay:true,
                infinite: true,
                slidesToShow: 1,
                rtl: {{ app()->getLocale() == 'ar' ? 'true' : 'false' }},
                slidesToScroll: 1,
                arrows: true,
                prevArrow: "<button type='button' class=' z-20 slick-prev pull-left bg-nadilBtn-100 w-10 h-10 flex justify-center items-center rounded-full'><i class='fa-solid fa-chevron-left'></i></button>",
                nextArrow: "<button type='button' class=' z-20 slick-next pull-left bg-nadilBtn-100 w-10 h-10 flex justify-center items-center rounded-full'><i class='fa-solid fa-chevron-right'></i></button>",
            });
        });
    </script>
@endpush
