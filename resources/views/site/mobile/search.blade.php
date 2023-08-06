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
    <div class="container">
        @if ($result->count() > 0)
        <div class="flex flex-col justify-center">
            <div class="uppercase font-lato text-center my-4">{{__('Your search results')}}</div>
            <div class="">
                @foreach ($result as $item)
                    <div class="item rounded-xl py-12 shadow-lg filter grayscale mx-6 my-4"
                        style="background-image:url('{{ $item->getFirstMediaUrl('restaurant_images') }}'); background-size: cover">
                        <a href="{{ route('site.restaurants.view', ['id' => $item->id]) }}">
                            <h4 class="text-center">{{ $item->{'name_' . app()->getLocale()} }}</h4>
                            <div class="address text-center">{{ $item->address }}</div>
                        </a>
                    </div>
                @endforeach
            </div>
            
        </div>
        @else
        <div class="flex flex-col justify-center">
            <div class="uppercase font-lato text-center my-4">{{__('nadil.general.no_results')}}</div>
        </div>
        @endif

        </div>
    </div>
@endsection
