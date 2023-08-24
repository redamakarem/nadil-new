@extends('layouts.site-mobile')
@section('content')

<div class="flex flex-col w-full h-full justify-center">
    <div class=" rounded-[64px] flex flex-col border-2 bg-[#EFEFEF] my-12 px-6 py-12 mx-8 ">
        <div class="flex justify-center">
            <img src="{{asset('/images/nadil-black.png')}}" alt="" class="h-32 w-auto"/>
        </div>
        <div>
            <h2 class="ltr:font-lato rtl:font-ahlan text-center uppercase text-base ltr:tracking-[2px] rtl:tracking-normal my-8">{{__('auth.reset_password_msg')}}</h2>
        </div>
        <div class="form-group">
            @if($errors->any())
                <div class="alert alert-danger">
                    <p><strong>{{__('nadil.general.validation_error_header')}}</strong></p>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>

        <form action="{{ route('password.request') }}" method="POST" class="space-y-8">
            @csrf
            <div class="w-full">
                <input type="text" placeholder="{{__('nadil.auth.email')}}" name="email"
                       class="flex items-center w-full ltr:font-lato rtl:font-ahlan ltr:placeholder:font-bold rtl:placeholder:font-normal text-[19px] ltr:tracking-[2px] rtl:tracking-normal uppercase border-[#707070] border-2 p-4 rounded-[19px]">
            </div>
            
            
            <div class="flex w-full justify-center">
                <button type="submit"
                        class="ltr:font-lato rtl:font-ahlan uppercase px-12 py-4 bg-white shadow-md rounded-[12px] ltr:tracking-[2px] rtl:tracking-normal ltr:font-bold rtl:font-normal">{{__('nadil.auth.reset_password')}}
                </button>
            </div>
        </form>
    </div>
</div>


@endsection