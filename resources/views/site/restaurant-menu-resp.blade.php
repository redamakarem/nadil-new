@extends('layouts.site-resp')
@section('content')
    <div id="page-wrapper"
        style="background-image:url('{{ $restaurant->getFirstMediaUrl('restaurant_bgs') }}'); background-size: cover">
        <div id="page-content" class="flex flex-grow flex-col max-w-12xl mx-auto py-[80px] ">
            <div class="flex">
                <div id="restaurant-details" class="flex flex-col items-center w-[375px] rounded-[64px] border-2 bg-white">
                    <h2
                        class="ltr:font-lato rtl:font-ahlan text-4xl ltr:tracking-[2px] rtl:tracking-normal mt-16 uppercase text-center">
                        {{ $restaurant->{'name_' . app()->getLocale()} }}</h2>
                    <hr class="h-1 w-48 mt-4" />
                    <a href="{{ route('site.restaurants.book', $restaurant->id) }}"
                        class="uppercase mt-12 px-16 py-6 bg-nadilBtn-100 ltr:tracking-[2px] rtl:tracking-normal rounded-[19px]">{{ __('nadil.booking.book_now') }}</a>
                    <div class="uppercase ltr:font-din rtl:font-ahlan text-xl ltr:tracking-[2px] rtl:tracking-normal mt-3">
                        {{ $restaurant->areaa->governate->{'name_' . app()->getLocale()} }}</div>
                    <div class="uppercase  text-center font-din text-md tracking-[2px] rtl:font-ahlan rtl:tracking-normal">
                        {{ $restaurant->areaa->{'name_' . app()->getLocale()} }}</div>
                    <div class="uppercase  text-center font-din text-md tracking-[2px] rtl:font-ahlan rtl:tracking-normal">
                        {{ __('nadil.general.weekdays') }}:{{ $restaurant->{'opening_hours_' . app()->getLocale()} }}</div>
                    <div class="uppercase  text-center font-din text-md tracking-[2px] rtl:font-ahlan rtl:tracking-normal">
                        {{ __('nadil.general.weekends') }}:{{ $restaurant->{'weekend_opening_hours_' . app()->getLocale()} }}
                    </div>
                    <div class="px-8 flex w-full">
                        <div id="googleMap" class="flex mt-6 flex-grow rounded-[64px] h-[183px] shadow-md"></div>
                    </div>
                    <div>
                        <div class="grid grid-cols-2 gap-x-3 mt-4">
                            <div>{{ __('nadil.booking.accessible') }}:</div>
                            @if ($restaurant->accessible)
                                <div class="text-center"><span><i class="fas fa-check text-green-500"></i></span></div>
                            @else
                                <div class="text-center"><span><i class="fas fa-times text-red-500"></i></span></div>
                            @endif


                            <div>{{ __('nadil.booking.private_rooms') }}:</div>
                            @if ($restaurant->private_rooms)
                                <div class="text-center"><span><i class="fas fa-check text-green-500"></i></span></div>
                            @else
                                <div class="text-center"><span><i class="fas fa-times text-red-500"></i></span></div>
                            @endif

                            @if (!empty($restaurant->dress_code))
                                <div>Dress Code: </div>
                                <div class="text-center">{{ $restaurant->dress_code->{'name_' . app()->getLocale()} }}
                                </div>
                            @endif

                        </div>


                    </div>
                    <div class="flex w-full px-4 mt-6 space-x-8 rtl:space-x-reverse justify-center">
                        <a href="tel://{{ $restaurant->phone }}"
                            class="uppercase font-lato rtl:tracking-normal rtl:font-ahlan px-8 py-4 bg-nadilBtn-100 tracking-[2px] rounded-[19px]">{{ __('nadil.general.phone') }}</a>
                        <a href="mailto:{{ $restaurant->email }}"
                            class="uppercase font-lato rtl:tracking-normal rtl:font-ahlan px-8 py-4 bg-nadilBtn-100 tracking-[2px] rounded-[19px]">{{ __('nadil.general.email') }}</a>
                    </div>
                    <div class="flex w-full px-4 mt-6 space-x-8 rtl:space-x-reverse justify-center">
                        @if (!empty($restaurant->facebook))
                            <a href="{{ $restaurant->facebook }}"
                                class="uppercase px-4 py-4 bg-nadilBtn-100 w-12 h-12 flex justify-center items-center rounded-[19px]"><i
                                    class="fa-brands fa-facebook-f"></i></a>
                        @endif
                        @if (!empty($restaurant->instagram))
                            <a href="{{ $restaurant->instagram }}"
                                class="uppercase px-2 py-2 bg-nadilBtn-100 w-12 h-12 flex justify-center items-center rounded-[19px]"><i
                                    class="fa-brands fa-instagram text-lg"></i></a>
                        @endif

                    </div>

                    <div class="mt-16 pb-28 uppercase font-lato rtl:font-ahlan rtl:tracking-normal font-italic">
                        &quot;{{ __('nadil.general.slogan') }} &quot;</div>
                </div>

                <div class="w-12"></div>

                <div id="menu" class="flex flex-1 px-16 py-16 min-h-80 rounded-[64px] border-2 bg-white">
                    @livewire('site.restaurant.menu', [$restaurant])
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content-mob')
<div class="container mx-auto">
    <div class="flex flex-col justify-center">
        <div class="restaurant-header px-4 py-8">
            <h1 class="text-center font-lato  font-medium text-xl text-black uppercase tracking-[1.0rem] rtl:font-ahlan rtl:tracking-normal">{{$restaurant->{'name_' . app()->getLocale()} }}</h1>
            <h4 class="text-center font-lato  font-medium text-xs text-black uppercase tracking-[0.6rem] rtl:font-ahlan rtl:tracking-normal">{{$restaurant->areaa->governate->{'name_'.app()->getLocale()} }}</h4>
            <h4 class="text-center font-lato  font-medium text-[0.6rem] text-black uppercase tracking-[0.4rem] rtl:font-ahlan rtl:tracking-normal mt-5">&quot; {{__('nadil.general.slogan')}} &quot;</h4>
            <div class="px-8 my-6">
                <div class="grid grid-cols-2 gap-x-3 mt-4">
                    <div>{{ __('nadil.booking.accessible') }}:</div>
                    @if ($restaurant->accessible)
                        <div class="text-center"><span><i class="fas fa-check text-green-500"></i></span></div>
                    @else
                        <div class="text-center"><span><i class="fas fa-times text-red-500"></i></span></div>
                    @endif


                    <div>{{ __('nadil.booking.private_rooms') }}:</div>
                    @if ($restaurant->private_rooms)
                        <div class="text-center"><span><i class="fas fa-check text-green-500"></i></span></div>
                    @else
                        <div class="text-center"><span><i class="fas fa-times text-red-500"></i></span></div>
                    @endif

                    @if (!empty($restaurant->dress_code))
                        <div>Dress Code: </div>
                        <div class="text-center">{{ $restaurant->dress_code->{'name_' . app()->getLocale()} }}
                        </div>
                    @endif

                </div>


            </div>
            <h4 class="text-center font-lato text-xs text-black uppercase tracking-[0.5rem] rtl:font-ahlan rtl:tracking-normal font-bold mt-5">{{__('nadil.dishes.explore_more')}}</h4>
        </div>
        @livewire('site.mobile.restaurant.menu',[$restaurant])
    </div>

    </div>
</div>
@endsection

@push('scripts')
    <script>
        jQuery('#inlinePicker').datepicker();
        document.addEventListener('load', function() {
            initMap();




        })

        function initMap() {
            var coordsStr = "{{ $restaurant->coordinates }}";
            const myArray = coordsStr.split(",");
            const lat = myArray[0];
            const lng = myArray[1];

            console.log(coordsStr.toString());
            const myLatlng = {
                lat: parseFloat(lat),
                lng: parseFloat(lng)
            };
            const map = new google.maps.Map(document.getElementById("googleMap"), {
                zoom: 17,
                center: myLatlng,
            });

            const marker = new google.maps.Marker({
                position: myLatlng,
                map: map,
            });


        }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfJsNn93pyzgF-9ICzEI1q-N9UN3c0SxE&callback=initMap">
    </script>

@endpush


@push('scripts')
    <script>
        function isOnScreen(elem) {
            // if the element doesn't exist, abort
            if (elem.length == 0) {
                return;
            }
            var $window = jQuery(window)
            var viewport_top = $window.scrollTop()
            var viewport_height = $window.height()
            var viewport_bottom = viewport_top + viewport_height
            var $elem = jQuery(elem)
            var top = $elem.offset().top
            var height = $elem.height()
            var bottom = top + height

            return (top >= viewport_top && top < viewport_bottom) ||
                (bottom > viewport_top && bottom <= viewport_bottom) ||
                (height > viewport_height && top <= viewport_top && bottom >= viewport_bottom)
        }

        jQuery(document).ready(function() {
            window.addEventListener('scroll', function(e) {
                if (isOnScreen(jQuery('#googleMap'))) {
                    /* Pass element id/class you want to check */
                    jQuery('#btn-booking-wrapper').removeClass('fixed');
                } else {
                    jQuery('#btn-booking-wrapper').addClass('fixed');
                }
            });
        });
        document.addEventListener('load', function() {
            initMap();

        })

        function initMap() {
            var coordsStr = "{{ $restaurant->coordinates }}";
            const myArray = coordsStr.split(",");
            const lat = myArray[0];
            const lng = myArray[1];

            console.log(coordsStr.toString());
            const myLatlng = {
                lat: parseFloat(lat),
                lng: parseFloat(lng)
            };
            const map = new google.maps.Map(document.getElementById("googleMap"), {
                zoom: 17,
                center: myLatlng,
            });

            const marker = new google.maps.Marker({
                position: myLatlng,
                map: map,
            });


        }
    </script>

    
@endpush