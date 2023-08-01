@extends('layouts.site-mobile',['restaurant' => null])
@section('content')
    <div class="m-8 bg-nadilBtn-100 rounded-xl h-full shadow-lg">
        <div class="h-full flex flex-col items-center justify-center space-y-8">
            
            <img src="{{asset('/images/nadil-icons/NADIL_HIGHLIGHTS-03.png')}}" alt="" class="h-48 w-auto object-contain"/>
            <h3 class="text-4xl text-[#454545] font-lato uppercase font-bold">Success</h3>
            <h3 class="text-4xl text-[#454545] font-lato capitalize">Password reset successfully. Please check your email</h3>
            <a href="/" class="bg-nadilBg-100 text-[#454545] rtl:ml-2 px-11 rounded-md uppercase ltr:font-lato rtl:font-ahlan rtl:tracking-normal rtl:font-normal text-sm ltr:font-semibold py-4 px-16 tracking-[4px]">{{__(' Back Home')}}</a>
        </div>
    </div>
@endsection
