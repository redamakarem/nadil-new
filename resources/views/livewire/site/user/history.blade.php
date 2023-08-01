<div class="rounded-[64px] border-2 bg-nadilBtn-100 w-full h-full p-8">
    <div class="flex rounded-[64px] h-full w-full">
        {{-- <div class="flex items-center w-full justify-between">
            <div class="flex flex-col w-1/2 py-8 px-12">
                <h3 class="font-lato font-italic uppercase text-[21px] tracking-[10px] mb-12">{{__('nadil.booking.reservation_history')}}</h3>
                <div class="w-full flex flex-col max-h-[500px] space-y-8 scrollbar-hide overflow-y-scroll">
                    @foreach ($bookings as $booking )
                    <div wire:click="select_restaurant('{{$booking->id}}')" class="flex flex-col shadow-md rounded-md py-8 cursor-pointer" style="background-image:url('{{$booking->restaurant->getFirstMediaUrl('restaurant_bgs')}}'); background-size: cover">
                       <div class="text-3xl text-white text-center"> {{ $booking->restaurant->{'name_'.app()->getLocale()} }}</div>
                       <div class="text-white text-center"> {{ $booking->booking_date }}</div>
                       <div class="text-white text-center"> {{ $booking->booking_status->{'name_'.app()->getLocale()} }}</div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="flex flex-col items-center w-1/2 py-8 justify-start h-full bg-white rounded-[64px] px-12 space-y-8">
                @if ($selected_booking)
                <div class="py-6 px-12 text-center justify-center rounded-xl shadow-md w-full bg-nadilBtn-100 font-lato font-bold uppercase tracking-[6px]">{{ $booking->restaurant->{'name_'.app()->getLocale()} }}</div>
                @else
                <div class="py-6 px-12 text-center justify-center rounded-xl shadow-md w-full bg-nadilBtn-100 font-lato font-bold uppercase tracking-[6px]">{{ __('Select Reservation') }}</div>
                @endif
                <div class="flex flex-1 w-full h-6 bg-[#f5f5f5] rounded-[64px]">
                    @if ($selected_booking)
                    <div class="flex flex-col justify-between w-full py-8">
                        <div class="text-center">
                            <div>{{__('nadil.booking.date')}}</div>
                            <div>{{$selected_booking->booking_date}}</div>
                        </div>
                        <div class="text-center">
                            <div>{{__('nadil.booking.seats')}}</div>
                            <div>{{$selected_booking->seats}}</div>
                        </div>
                        <div class="text-center">
                            <div>{{__('nadil.booking.area')}}</div>
                            <div>{{$selected_booking->restaurant->areaa->{'name_'.app()->getLocale()} }}</div>
                        </div>
                        <div class="text-center">
                            <div class="text-black text-center"> {{ $booking->booking_status->{'name_'.app()->getLocale()}  }}</div>
               @if ($selected_booking->booking_date > \Carbon\Carbon::now() && $selected_booking->booking_status_id==1)
               <button class="bg-nadilBtn-100 py-4 px-8 uppercase my-4 shadow md rounded-[19px]" wire:click="confirmBookingDeletion({{$selected_booking->id}})">{{__('Cancel Booking')}}</button>
               @endif
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div> --}}

        {{-- Tabs --}}

        <div class="flex items-center w-full justify-between">
            <div class="flex flex-col w-1/2 py-8 px-12">
                <h3 class="font-lato font-italic uppercase text-[21px] tracking-[2px] mb-12">{{__('nadil.booking.reservation_history')}}</h3>
                <div class="tabs-container">
                    <div class="tabs-headers flex justify-between space-x-4">
                        <button wire:click="changeTab('upcoming')" class="bg-nadilBg-100 flex w-full h-full justify-center textlg uppercase ltr:font-lato rtl:font-ahlan">Upcoming</button>
                        <button wire:click="changeTab('past')" class="bg-nadilBg-100 flex w-full h-full justify-center textlg uppercase ltr:font-lato rtl:font-ahlan">Past</button>
                        <button wire:click="changeTab('cancelled')" class="bg-nadilBg-100 flex w-full h-full justify-center textlg uppercase ltr:font-lato rtl:font-ahlan">Cancelled</button>
                    </div>
                    <div class="w-full flex flex-col max-h-[500px] space-y-8 scrollbar-hide overflow-y-scroll">
                        
                        @forelse ($filtered_bookings as $booking)
                        <div wire:click="select_restaurant('{{$booking->id}}')" class="flex flex-col shadow-md rounded-md py-8 cursor-pointer" style="background-image:url('{{$booking->restaurant->getFirstMediaUrl('restaurant_bgs')}}'); background-size: cover">
                            <div class="text-3xl text-white text-center"> {{ $booking->restaurant->{'name_'.app()->getLocale()} }}</div>
                            <div class="text-white text-center"> {{ $booking->booking_date }}</div>
                            <div class="text-white text-center"> {{ $booking->booking_status->{'name_'.app()->getLocale()} }}</div>
                         </div>
                        @empty
                            <div class="flex flex-col justify-center items-center h-48">No bookings found</div>
                        @endforelse
                        
                        
                        {{-- @if ($filtered_bookings)
                        @foreach ($filtered_bookings as $booking )
                        <div wire:click="select_restaurant('{{$booking->id}}')" class="flex flex-col shadow-md rounded-md py-8 cursor-pointer" style="background-image:url('{{$booking->restaurant->getFirstMediaUrl('restaurant_bgs')}}'); background-size: cover">
                           <div class="text-3xl text-white text-center"> {{ $booking->restaurant->{'name_'.app()->getLocale()} }}</div>
                           <div class="text-white text-center"> {{ $booking->booking_date }}</div>
                           <div class="text-white text-center"> {{ $booking->booking_status->{'name_'.app()->getLocale()} }}</div>
                        </div>
                        @endforeach
                        @else
                        <div class="flex flex-col justify-center h-44">
                            <div class="w-full text-center">No bookings found</div>
                        </div>
                        @endif --}}
                    </div>
                </div>
            </div>
            <div class="flex flex-col items-center w-1/2 py-8 justify-start h-full bg-white rounded-[64px] px-12 space-y-8">
                @if ($selected_booking)
                <div class="py-6 px-12 text-center justify-center rounded-xl shadow-md w-full bg-nadilBtn-100 font-lato font-bold uppercase tracking-[2px]">{{ $booking->restaurant->{'name_'.app()->getLocale()} }}</div>
                @else
                <div class="py-6 px-12 text-center justify-center rounded-xl shadow-md w-full bg-nadilBtn-100 font-lato font-bold uppercase tracking-[2px]">{{ __('Select Reservation') }}</div>
                @endif
                <div class="flex flex-1 w-full h-6 bg-[#f5f5f5] rounded-[64px]">
                    @if ($selected_booking)
                    <div class="flex flex-col justify-between w-full py-8">
                        <div class="text-center">
                            <div>{{__('nadil.booking.date')}}</div>
                            <div>{{$selected_booking->booking_date}}</div>
                        </div>
                        <div class="text-center">
                            <div>{{__('nadil.booking.seats')}}</div>
                            <div>{{$selected_booking->seats}}</div>
                        </div>
                        <div class="text-center">
                            <div>{{__('nadil.booking.area')}}</div>
                            <div>{{$selected_booking->restaurant->areaa->{'name_'.app()->getLocale()} }}</div>
                        </div>
                        <div class="text-center">
                            <div class="text-black text-center"> {{ $booking->booking_status->{'name_'.app()->getLocale()}  }}</div>
               @if ($selected_booking->booking_date > \Carbon\Carbon::now() && $selected_booking->booking_status_id==1)
               <button class="bg-nadilBtn-100 py-4 px-8 uppercase my-4 shadow md rounded-[19px]" wire:click="confirmBookingDeletion({{$selected_booking->id}})">{{__('Cancel Booking')}}</button>
               @endif
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        window.addEventListener('show-swal-delete',evt => {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.emit('bookingDeleteConfirmed')
                }
            })
        })
    </script>
@endpush