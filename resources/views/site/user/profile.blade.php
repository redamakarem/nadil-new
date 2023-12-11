@extends('layouts.site-tw')
@section('content')
<div class="flex w-5/6 mx-auto my-32 h-full">
    <div class="w-1/3  flex-col space-y-8 px-8 items-center" >
        <div class="flex flex-col items-center space-y-4 my-4">
            <div class="w-32 h-32 rounded-full shadow-md bg-nadilBg-100
            flex justify-center items-center font-lato text-3xl font-bold uppercase">{{auth()->user()->initials}}</div>
            <div class="font-lato uppercase tracking-[6px] rtl:font-ahlan rtl:tracking-normal rtl:font-normal text-sm ltr:font-semibold">{{__('nadil.profile.your_profile')}}</div>
        </div>
        <div class="">
            <a href="route('user.profile.show')"
               class="py-6 px-12 flex flex-1 justify-center rounded-xl shadow-md w-full bg-nadilBtn-100 font-lato font-bold uppercase tracking-[6px] rtl:font-ahlan rtl:tracking-normal rtl:font-normal text-sm ltr:font-semibold">{{__('nadil.profile.account_details')}}</a>
        </div>
        <div class="">
            <a href="{{ route('user.history.show') }}"
               class="py-6 px-12 flex flex-1 justify-center rounded-xl shadow-md w-full bg-nadilBtn-100 font-lato font-bold uppercase tracking-[6px] rtl:font-ahlan rtl:tracking-normal rtl:font-normal text-sm ltr:font-semibold">{{__('nadil.profile.history')}}</a>
        </div>
        
    </div>
    <div class="w-2/3 flex-col ">

        <div class="rounded-[64px] border-2 bg-nadilBtn-100 w-full h-full p-8">
            <div class="flex rounded-[64px] border-2 bg-white h-full w-full">
                @if ($profile)
                <div class="flex items-center w-full justify-between">
                    <div class="flex flex-col w-2/3 py-8 px-12">
                        <h3 class="font-lato font-italic uppercase text-[21px] tracking-[2px] mb-12 rtl:font-ahlan rtl:tracking-normal rtl:font-normal text-sm ltr:font-semibold">{{__('nadil.profile.account_details')}}</h3>
                        <div class="w-full flex flex-col space-y-8">
                            <div class="flex w-full space-x-8">
                                <div class="font-lato font-bold uppercase text-[21px] tracking-[2px] rtl:font-ahlan rtl:tracking-normal rtl:font-normal text-sm ltr:font-semibold">{{__('nadil.profile.name')}}</div>
                                <div class="font-lato uppercase text-[21px] tracking-[2px]">{{$profile->name}}</div>
                            </div>
                            <div class="flex w-full space-x-8">
                                <div class="font-lato font-bold uppercase text-[21px] tracking-[2px] rtl:font-ahlan rtl:tracking-normal rtl:font-normal text-sm ltr:font-semibold">{{__('nadil.profile.address')}}</div>
                                <div class="font-lato uppercase text-[21px] tracking-[2px]">{{$profile->address}}</div>
                            </div>
                            <div class="flex w-full space-x-8">
                                <div class="font-lato font-bold uppercase text-[21px] tracking-[2px] rtl:font-ahlan rtl:tracking-normal rtl:font-normal text-sm ltr:font-semibold">{{__('nadil.profile.phone')}}</div>
                                <div class="font-lato uppercase text-[21px] tracking-[2px]">{{$profile->phone}}</div>
                            </div>
                            <div class="flex w-full space-x-8">
                                <div class="font-lato font-bold uppercase text-[21px] tracking-[2px] rtl:font-ahlan rtl:tracking-normal rtl:font-normal text-sm ltr:font-semibold">{{__('nadil.profile.email')}}</div>
                                <div class="font-lato uppercase text-[21px] tracking-[2px]">{{$profile->email}}</div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col w-1/3 py-8 justify-start items-end h-full w-full">
                        <div class="flex justify-end px-6">
                            <a href="{{ route('user.profile.edit') }}"
                               class="font-lato font-bold uppercase bg-nadilBtn-100 px-12 py-6  rounded-[19px] border-1 shadow-md text-xs tracking-[6px] rtl:font-ahlan rtl:tracking-normal rtl:font-normal ltr:font-semibold">{{__('nadil.profile.edit_profile')}}</a>
                        </div>
                    </div>
                </div>
                @else
                <div class="flex justify-center items-center"><a href="{{route('user.profile.edit')}}">{{__('Create Profile')}}</a></div>
                @endif
                
            </div>
        </div>
    </div>
</div>
@endsection
