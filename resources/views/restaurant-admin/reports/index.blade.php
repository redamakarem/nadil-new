@extends('layouts.restaurant-admin')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="portlet">
            <div class="widget10 widget10-vertical-md">
                <div class="widget10-item">
                    <div class="widget10-content">
                        <h2 class="widget10-title">Top Times</h2>
                    @foreach ($top_time as $item)
                        <p>{{ $item->booking_time }}</p>
                    @endforeach
                    </div>
                    <div class="widget10-addon">
                        <!-- BEGIN Avatar -->
                        <div class="avatar avatar-label-info avatar-circle widget10-avatar">
                            <div class="avatar-display">
                                <i class="fa fa-dollar-sign"></i>
                            </div>
                        </div>
                        <!-- END Avatar -->
                    </div>
                </div>
                @livewire('admin.components.restaurant-registration-submissions-box')
                <div class="widget10-item">
                    <div class="widget10-content">
                        <h2 class="widget10-title">Top Booked</h2>
                    @foreach ($top_weekdays as $item)
                        <p>{{ $item }}</p>
                    @endforeach
                    </div>
                    <div class="widget10-addon">
                        <!-- BEGIN Avatar -->
                        <div class="avatar avatar-label-info avatar-circle widget10-avatar">
                            <div class="avatar-display">
                                <i class="fa fa-users"></i>
                            </div>
                        </div>
                        <!-- END Avatar -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="row">
        <div class="col-md-12">
            @livewire('restaurant-admin.reports.charts-users-by-gender')
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            @livewire('restaurant-admin.reports.charts.all-bookings')
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            @livewire('admin.reports.new-users')
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            @livewire('admin.reports.charts.users-by-age')
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            @livewire('restaurant-admin.booking.calendar')
        </div>
    </div>


    </div>
@endsection
