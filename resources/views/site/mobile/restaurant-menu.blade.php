@extends('layouts.site-mobile',['current_restaurant' => $restaurant])
@section('content')
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
