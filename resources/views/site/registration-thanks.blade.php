@extends('layouts.site-tw')
@section('content')

<div class="rounded-[64px] bg-nadilBtn-100 m-8 flex flex-col space-y-8 py-12 min-h-32 justify-center items-center">
    <div>
        <lottie-player src="https://assets6.lottiefiles.com/packages/lf20_pqnfmone.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"    autoplay></lottie-player>
    </div>
    <div class="uppercase font-lato rtl:font-ahlan rtl:tracking-normal">Thank you for registering with Nadil</div>
    <div class="uppercase font-lato rtl:font-ahlan rtl:tracking-normal">Looking forward to your first booking</div>
    <a class="uppercase mt-12 px-16 py-6 bg-nadilBg-100 shadow-md ltr:tracking-[6px] rtl:tracking-normal rounded-[19px]" href="{{route('login')}}">Login</a>
</div>

@endsection

@push('scripts')
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

@endpush
