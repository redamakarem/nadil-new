<div class="h-full py-6" >
    <div class="flex items-center flex-col space-y-8 my-8 mx-6 py-8 bg-[#e0e0e0] rounded-[60px] px-6 min-h-[70vh]">
        <div class="flex flex-col w-full items-center space-y-6">
            <h2 class="text-lg font-bold">{{__('nadil.booking.filter_by_status')}}</h2>
            <select class="rounded-[64px] bg-nadilBg-100 outline-none border-none placeholder:text-center placeholder:font-lato placeholder:uppercase text-center w-full h-12" wire:model='selected_filter'>
                <option value="upcoming">{{ __('nadil.booking.upcoming') }}</option>
                <option value="past">{{ __('nadil.booking.past') }}</option>
                <option value="cancelled">{{ __('nadil.booking.cancelled') }}</option>
            </select>
        </div>
        @forelse ($filtered_bookings as $booking)
            <div class="shadow-md bg-red rounded-md mx-6 w-full mt-8 cursor-pointer"
                style="background-image:url('{{ $booking->restaurant->getFirstMediaUrl('restaurant_bgs') }}'); background-size: cover">
                <div class="py-8 rounded-md w-full h-full bg-black/40">
                    <div class="text-3xl text-white text-center">
                        {{ $booking->restaurant->{'name_' . app()->getLocale()} }}</div>
                    <div class="text-white text-center"> {{ $booking->booking_date }}</div>
                    <div class="text-white text-center"> {{ $booking->booking_status->{'name_' . app()->getLocale()} }}
                    </div>
                    @if ($booking->booking_date > \Carbon\Carbon::now() && $booking->booking_status_id == 1)
                        <div class="flex justify-center">
                            <a class="bg-nadilBtn-100 my-4 px-8 py-2 rounded-lg font-lato uppercase" href="#"
                                wire:click.prevent="confirmBookingDeletion({{ $booking->id }})"
                                class="text-black">{{ __('nadil.booking.cancel_booking') }}</a>
                        </div>
                    @endif

                </div>
            </div>
            @empty
            <div>No booking data</div>
        @endforelse
    </div>

</div>
</div>
@push('scripts')
    <script>
        window.addEventListener('show-swal-delete', evt => {
            Swal.fire({
                title: "{{ __('nadil.general.swal_title') }}",
                text: "{{ __('nadil.general.swal_text') }}",
                icon: 'warning',
                showCancelButton: true,
                cancelButtonText: "{{ __('nadil.general.swal_cancel_text') }}",
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: "{{ __('nadil.general.swal_confirm_text') }}",
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.emit('bookingDeleteConfirmed')
                }
            })
        })
    </script>
@endpush
