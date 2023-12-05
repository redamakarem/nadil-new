@extends('layouts.site-mobile')
@section('content')
    <div class="flex flex-col items-center">
        <div class="p-6 flex flex-col items-center justify-center">
            <div class="uppercase text-center my-4 px-8 py-6 w-full bg-nadilBtn-100 tracking-[4px] rounded-[19px]">Thank you
            </div>
            <img src="{{ asset('/images/booking-thanks.png') }}" class="w-32" alt="booking thanks">
            <table class="mt-6">
                <tr>
                    <td class="w-36">Booking ID</td>
                    <td>NDL-{{ $booking->booking_code }}</td>
                </tr>
                <tr>
                    <td>Restaurant</td>
                    <td>{{ $booking->restaurant->{'name_' . app()->getLocale()} }}</td>
                </tr>
                <tr>
                    <td>Date</td>
                    <td>{{ $booking->booking_date }}</td>
                </tr>
                <tr>
                    <td>Time</td>
                    <td>{{ $booking->booking_time }}</td>
                </tr>
                <tr>
                    <td>Seats</td>
                    <td>{{ $booking->seats }}</td>
                </tr>
            </table>
            <div class="flex w-full justify-center">
                <a href="{{ route('home') }}"
                    class="uppercase mt-12 px-16 py-6 bg-nadilBg-100 shadow-md ltr:tracking-[6px] rtl:tracking-normal rounded-[19px]">Back
                    to home</a>
            </div>
        </div>
    </div>
@endsection
