@extends('layouts.site-tw')
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



            <div class="bg-black px-8 py-12 mb-12 rounded-md">
                <div class="text-white text-xl greeting uppercase">{{ __('nadil.general.whats_the_plan') }}</div>
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
                                placeholder="{{ __('nadil.general.search') }}">
                            <button
                                class="font-lato rtl:font-ahlan rtl:tracking-normal border-none px-12 py-6 uppercase bg-nadilBtn-100 shadow-md outline-none rounded-lg"
                                type="submit">{{ __('nadil.booking.book_now') }}</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="relative carousel-container restaurants-carousel flex rtl:flex-row-reverse items-center">
                <div
                    class="absolute bg-nadilBtn-100 carousel-nav p-4 prev rounded-full z-10 -left-4 top-[30%] w-12 h-12 flex justify-center items-center shadow-md">
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
                    class="absolute bg-nadilBtn-100 carousel-nav p-4 next rounded-full z-10 -right-4 top-[30%] w-12 h-12 flex justify-center items-center shadow-md">
                    <i class="fa-solid fa-chevron-right"></i>
                </div>
            </div>

            {{-- Featured --}}

            <div class="flex flex-col">
                <h2 class="mt-6 uppercase ltr:font-lato rtl:font-ahlan text-[#454545]">
                    Featured</h2>
                <div class="relative carousel-container flex rtl:flex-row-reverse items-center">
                    <div
                        class="absolute bg-nadilBtn-100 carousel-nav p-4 prev rounded-full z-10 -left-4 top-[30%] w-12 h-12 flex justify-center items-center shadow-md">
                        <i class="fa-solid fa-chevron-left"></i>
                    </div>
                    <div class="featured-carousel owl-carousel owl-theme mb-8">
                        @foreach ($featured as $item)
                            <div class="item flex flex-col justify-center rounded-xl border-2 h-32 font-lato"
                                style="background-image:url('{{ $item->getFirstMediaUrl('restaurant_images') }}'); background-size: cover">
                                <a href="{{ route('site.restaurants.view', ['id' => $item->id]) }}"
                                    class="flex flex-col justify-center w-full h-full bg-black/70 rounded-xl">
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
                    <div
                        class="absolute bg-nadilBtn-100 carousel-nav p-4 next rounded-full z-10 -right-4 top-[30%] w-12 h-12 flex justify-center items-center shadow-md">
                        <i class="fa-solid fa-chevron-right"></i>
                    </div>
                </div>
            </div>

            {{-- Latest --}}

            <div class="flex flex-col">
                <h2 class="mt-6 uppercase ltr:font-lato rtl:font-ahlan text-[#454545]">
                    Most recent</h2>
                <div class="relative carousel-container flex rtl:flex-row-reverse items-center">
                    <div
                        class="absolute bg-nadilBtn-100 carousel-nav p-4 prev rounded-full z-10 -left-4 top-[30%] w-12 h-12 flex justify-center items-center shadow-md">
                        <i class="fa-solid fa-chevron-left"></i>
                    </div>
                    <div class="restaurant-carousel owl-carousel owl-theme mb-8">
                        @foreach ($latest as $item)
                            <div class="item flex flex-col justify-center rounded-xl border-2 h-32 font-lato"
                                style="background-image:url('{{ $item->getFirstMediaUrl('restaurant_images') }}'); background-size: cover">
                                <a href="{{ route('site.restaurants.view', ['id' => $item->id]) }}"
                                    class="flex flex-col justify-center w-full h-full bg-black/70 rounded-xl">
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
                    <div
                        class="absolute bg-nadilBtn-100 carousel-nav p-4 next rounded-full z-10 -right-4 top-[30%] w-12 h-12 flex justify-center items-center shadow-md">
                        <i class="fa-solid fa-chevron-right"></i>
                    </div>
                </div>
            </div>

            {{--   Restaurants by meal types     --}}
            <div class="greeting uppercase font-lato rtl:font-ahlan">{{ __('nadil.general.meal_type') }}</div>

            @foreach ($meal_types as $meal_type)
                @if ($meal_type->active_restaurants->count() > 0)
                    <h2 class="mt-6 uppercase ltr:font-lato rtl:font-ahlan text-[#454545]">
                        {{ $meal_type->{'name_' . app()->getLocale()} }}</h2>
                    <div class="relative carousel-container flex rtl:flex-row-reverse items-center">
                        <div
                            class="absolute bg-nadilBtn-100 carousel-nav p-4 meals-prev prev rounded-full z-10 -left-4 top-[30%] w-12 h-12 flex justify-center items-center shadow-md">
                            <i class="fa-solid fa-chevron-left"></i>
                        </div>
                        <div class="owl-carousel owl-theme mb-8 meals-carousel">
                            @foreach ($meal_type->restaurants as $meal_restaurant)
                                @if ($meal_restaurant->is_active)
                                    <div class="item flex flex-col justify-center rounded-xl border-2 h-32 shadow-md font-lato"
                                        style="background-image:url('{{ $meal_restaurant->getFirstMediaUrl('restaurant_images') }}'); background-size: cover">
                                        <a href="{{ route('site.restaurants.view', ['id' => $meal_restaurant->id]) }}"
                                            class="flex flex-col justify-center w-full h-full bg-black/70 rounded-xl">
                                            <h4
                                                class="text-center uppercase text-white text-[18px] ltr:tracking-[2px] rtl:tracking-normal ltr:font-lato rtl:font-ahlan text-opacity-100">
                                                {{ $meal_restaurant->{'name_' . app()->getLocale()} }}</h4>
                                            <div
                                                class="address text-center uppercase text-white text-[18px] ltr:tracking-[2px] rtl:tracking-normal ltr:font-lato rtl:font-ahlan text-opacity-100">
                                                {{ $meal_restaurant->areaa->{'name_' . app()->getLocale()} }}</div>
                                        </a>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <div
                            class="absolute bg-nadilBtn-100 carousel-nav p-4 meals-next next rounded-full z-10 -right-4 top-[30%] w-12 h-12 flex justify-center items-center shadow-md">
                            <i class="fa-solid fa-chevron-right"></i>
                        </div>
                    </div>
                @endif
            @endforeach
            <div class="greeting uppercase font-lato rtl:font-ahlan rtl:tracking-normal text-[#454545]">
                {{ __('nadil.general.pick_cuisine') }}</div>
            <div class="relative carousel-container flex rtl:flex-row-reverse items-center">
                <div
                    class="absolute bg-nadilBtn-100 carousel-nav p-4 cuisines-prev prev rounded-full z-10 -left-4 top-[30%] w-12 h-12 flex justify-center items-center shadow-md">
                    <i class="fa-solid fa-chevron-left"></i>
                </div>
                <div class="owl-carousel owl-theme cuisines-carousel">
                    @foreach ($cuisines as $cuisine)
                        

                        <div class="item flex flex-col justify-center rounded-xl border-2 h-32 font-lato"
                            style="background-image:url('{{ $cuisine->getFirstMediaUrl('cuisine_images') }}'); background-size: cover">
                            <a href="{{ route('site.restaurants.view', ['id' => $cuisine->id]) }}"
                                class="flex flex-col justify-center w-full h-full bg-black/70 rounded-xl">
                                <h4
                                    class="text-center font-bold ltr:font-lato rtl:font-ahlan text-white uppercase text-[26px] ltr:tracking-[2px] rtl:tracking-normal text-opacity-100">
                                    {{ $cuisine->{'name_' . app()->getLocale()} }}</h4>
                                
                            </a>
                        </div>
                        
                    @endforeach
                </div>
                <div
                    class="absolute bg-nadilBtn-100 carousel-nav p-4 cuisines-next next rounded-full z-10 -right-4 top-[30%] w-12 h-12 flex justify-center items-center shadow-md">
                    <i class="fa-solid fa-chevron-right"></i>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('styles')
    <link rel="stylesheet" href="{{ asset('pickadate/lib/themes/default.css') }}">
    <link rel="stylesheet" href="{{ asset('pickadate/lib/themes/default.date.css') }}">
    <link rel="stylesheet" href="{{ asset('pickadate/lib/themes/default.time.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <style>
        .flatpickr-day.selected {
            background: #0a0e14;
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

        // var res_carousel = $('.restaurant-carousel');
        // res_carousel.owlCarousel({
        //     loop: true,
        //     rtl: {{ app()->getLocale() == 'ar' ? 'true' : 'false' }},
        //     margin: 10,
        //     responsive: {
        //         0: {
        //             items: 1
        //         },
        //         600: {
        //             items: 3
        //         },
        //         1000: {
        //             items: 4
        //         }
        //     }
        // });
        // $('.restaurant-carousel .next').click(function() {
        //     res_carousel.trigger('next.owl.carousel');
        // })
        // $('.restaurant-carousel .prev').click(function() {
        //     res_carousel.trigger('prev.owl.carousel');
        // })

        // Featured

        // var featured_carousel = $('.featured-carousel');
        // featured_carousel.owlCarousel({
        //     loop: true,
        //     rtl: {{ app()->getLocale() == 'ar' ? 'true' : 'false' }},
        //     margin: 10,
        //     responsive: {
        //         0: {
        //             items: 1
        //         },
        //         600: {
        //             items: 3
        //         },
        //         1000: {
        //             items: 4
        //         }
        //     }
        // });
        // $('.featured-carousel .next').click(function() {
        //     featured_carousel.trigger('next.owl.carousel');
        // })
        // $('.featured-carousel .prev').click(function() {
        //     featured_carousel.trigger('prev.owl.carousel');
        // })

        // $('.meals-carousel').each(function(index) {
        //     var meal_slider = $(this).owlCarousel({
        //         loop: true,
        //         rtl: {{ app()->getLocale() == 'ar' ? 'true' : 'false' }},
        //         margin: 10,
        //         responsive: {
        //             0: {
        //                 items: 1
        //             },
        //             600: {
        //                 items: 3
        //             },
        //             1000: {
        //                 items: 4
        //             }
        //         }
        //     });
        //     $(this).closest('.carousel-container').find('.meals-prev').click(function() {
        //         console.log('PREV');
        //         meal_slider.trigger('prev.owl.carousel');
        //     })
        //     $(this).closest('.carousel-container').find('.meals-next').click(function() {
        //         console.log('MEXT');
        //         meal_slider.trigger('next.owl.carousel');
        //     })
        // });



        // var cuisines_carousel = $('.cuisines-carousel');
        // cuisines_carousel.owlCarousel({
        //     loop: true,
        //     rtl: {{ app()->getLocale() == 'ar' ? 'true' : 'false' }},
        //     margin: 10,
        //     responsive: {
        //         0: {
        //             items: 1
        //         },
        //         600: {
        //             items: 3
        //         },
        //         1000: {
        //             items: 4
        //         }
        //     }
        // });
        // $('.cuisines-next').click(function() {
        //     cuisines_carousel.trigger('next.owl.carousel');
        // })
        // $('.cuisines-prev').click(function() {
        //     cuisines_carousel.trigger('prev.owl.carousel');
        // })

        // $('.owl-carousel-mobile').owlCarousel({
        //     loop: true,
        //     margin: 10,
        //     items: 1
        // })

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
    </script>
@endpush
