@extends('layouts.site-mobile',['restaurant' => $restaurant])
@section('content')
    <div class="container mx-auto">
        <div class="flex flex-col justify-center">
            <div class="restaurant-header px-4 py-8">
                <h1 class="text-center font-lato  font-medium text-xl text-black uppercase tracking-[1.0rem] rtl:font-ahlan rtl:tracking-normal">{{$restaurant->{'name_' . app()->getLocale()} }}</h1>
                <h4 class="text-center font-lato  font-medium text-xs text-black uppercase tracking-[0.6rem] rtl:font-ahlan rtl:tracking-normal">{{$restaurant->areaa->governate->{'name_'.app()->getLocale()} }}</h4>
                <h4 class="text-center font-lato  font-medium text-[0.6rem] text-black uppercase tracking-[0.4rem] rtl:font-ahlan rtl:tracking-normal mt-5">&quot; {{__('nadil.general.slogan')}} &quot;</h4>
                <div class="text-center my-4">
                    <div>Accessible: @if ($restaurant->accessible)
                            <span><i class="fas fa-check text-green-500"></i></span>
                        @else
                            <span><i class="fas fa-times text-red-500"></i></span>
                        @endif

                    </div>
                    <div>Private Rooms:@if ($restaurant->private_rooms)
                            <span><i class="fas fa-check text-green-500"></i></span>
                        @else
                            <span><i class="fas fa-times text-red-500"></i></span>
                        @endif
                    </div>
                    @if (!empty($restaurant->dress_code))
                        <div>Dress Code: <span>{{ $restaurant->dress_code }}</span></div>
                    @endif

                </div>
                <h4 class="text-center font-lato text-xs text-black uppercase tracking-[0.5rem] rtl:font-ahlan rtl:tracking-normal font-bold mt-5">{{__('nadil.dishes.explore_more')}}</h4>
            </div>
            @livewire('site.mobile.restaurant.menu',[$restaurant])
        </div>

        </div>
    </div>
@endsection
