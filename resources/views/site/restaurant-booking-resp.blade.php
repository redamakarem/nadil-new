@extends('layouts.site-resp')
@section('content')
<div id="page-wrapper" style="background-image:url('{{$restaurant->getFirstMediaUrl('restaurant_bgs')}}'); background-size: cover">
    <div id="page-content" class="flex flex-grow flex-col max-w-12xl mx-auto py-[80px]">

        <div class="flex">
            <div id="restaurant-details"
                 class="flex flex-col items-center ml-5 w-[375px] rounded-[64px] border-2 bg-white">
                <h2 class="text-4xl tracking-widest mt-16 uppercase text-center rtl:tracking-normal">{{$restaurant->{'name_'.app()->getLocale()} }}</h2>
                <hr class="h-1 w-48 mt-4" />
                <a href="{{route('site.restaurants.view',['id' => $restaurant->id])}}" class="uppercase mt-12 px-16 py-6 bg-nadilBtn-100 tracking-[6px] rtl:tracking-normal rounded-[19px]">{{__('nadil.booking.menu')}}</a>
                <div class="uppercase font-din rtl:font-ahlan text-xl tracking-[2px] rtl:tracking-normal mt-3">{{$restaurant->areaa->governate->{'name_'.app()->getLocale()} }}</div>
                <div class="uppercase  text-center font-din text-md tracking-[2px] rtl:font-ahlan rtl:tracking-normal">{{$restaurant->areaa->{'name_'.app()->getLocale()} }}</div>
                <div class="uppercase  text-center font-din text-md tracking-[2px] rtl:font-ahlan rtl:tracking-normal">
                    {{__('nadil.general.weekdays')}}:{{ $restaurant->{'opening_hours_' . app()->getLocale()} }}</div>
                <div class="uppercase  text-center font-din text-md tracking-[2px] rtl:font-ahlan rtl:tracking-normal">
                    {{__('nadil.general.weekends')}}:{{ $restaurant->{'weekend_opening_hours_' . app()->getLocale()} }}</div>


                <div class="px-8 flex w-full">
                    <div id="googleMap" class="flex mt-6 flex-grow rounded-[64px] h-[183px]"></div>
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
                        <div class="text-center">{{ $restaurant->dress_code->{'name_' . app()->getLocale()} }}</div>
                    @endif

                    </div>                 
                    

                </div>
                <div class="flex flex-grow w-full px-4 mt-12">
    
                    <div class="mx-auto space-x-8">
                        <a href="tel://{{$restaurant->phone}}" class="uppercase px-8 py-4 bg-nadilBtn-100 rtl:tracking-normal tracking-[2px] rounded-[19px]">{{__('nadil.general.phone')}}</a>
                        <a href="mailto:{{$restaurant->email}}" class="uppercase px-8 py-4 bg-nadilBtn-100 rtl:tracking-normal tracking-[2px] rounded-[19px]">{{__('nadil.general.email')}}</a>
                    </div>
    
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
                <div class="mt-16 pb-28 uppercase rtl:font-ahlan font-lato font-italic">&quot;{{__('nadil.general.slogan')}} &quot;</div>
            </div>
    
            <div class="w-12"></div>
    
            <div id="booking"
                 class="flex flex-1 px-16 py-16 min-h-80 border-2 rounded-[64px] bg-white">
                <div class="bg-[#f5f5f5] flex w-full p-8 rounded-[64px]">
                    @livewire('site.booking.show',[$restaurant])
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content-mob')
@livewire('site.mobile.booking.show',[$restaurant])
@endsection

@push('scripts')
    <script>
        // jQuery('#inlinePicker').datepicker();
        document.addEventListener('load', function () {
            initMap();




        })
        function initMap() {
            var coordsStr = "{{$restaurant->coordinates}}";
            const myArray = coordsStr.split(",");
            const lat = myArray[0];
            const lng = myArray[1];

            console.log(coordsStr.toString());
            const myLatlng = { lat: parseFloat(lat), lng: parseFloat(lng) };
            const map = new google.maps.Map(document.getElementById("googleMap"), {
                zoom: 17,
                center: myLatlng,
            });

            const marker = new google.maps.Marker({
                position: myLatlng,
                map: map,
            });
            const mapmob = new google.maps.Map(document.getElementById("googleMap-mob"), {
                zoom: 17,
                center: myLatlng,
            });

            const marker = new google.maps.Marker({
                position: myLatlng,
                map: mapmob,
            });


        }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfJsNn93pyzgF-9ICzEI1q-N9UN3c0SxE&callback=initMap"></script>
@endpush