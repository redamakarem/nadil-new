@extends('layouts.site-mobile')
@section('content')
    <div id="profile">
        <h1 class="text-xl font-bold uppercase text-center mb-8 mt-4">{{__('Account Details')}}</h1>
    </div>
    @livewire('site.mobile.user.profile-edit')
@endsection
