<div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Today's Bookings</h3>
                </div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Date/Time</th>
                            <th>Seats</th>
                            <th>Restaurant</th>
                        </tr>
                    @forelse ($bookings as $booking)
                        <tr>
                            <td>{{$booking->booking_code}}</td>
                            <td>{{$booking->user->name??'Manual Booking'}}</td>
                            <td>{{$booking->booking_date}} / {{$booking->booking_time}}</td>
                            <td>{{$booking->seats}}</td>
                            <td>{{$booking->restaurant->name_en}}</td>
                        </tr>
                        @empty
                                <tr>
                                    <td colspan="4">No Bookings yet</td>
                                </tr>
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>