@extends('layouts.site-tw')
@section('content')

<div id="page-wrapper">
    <div class="flex flex-col px-24 py-[80px]">
        {!! $faq->{'content_' . app()->getLocale()} !!}
    </div>
</div>

@endsection


