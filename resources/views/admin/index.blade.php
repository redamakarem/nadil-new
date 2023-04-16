@extends('layouts.admin-tw')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="portlet">
                <div class="widget10 widget10-vertical-md">
                    <div class="widget10-item">
                        <div class="widget10-content">
                            <h2 class="widget10-title">{{ $restaurant_count }}</h2>
                            <span class="widget10-subtitle">Restaurants</span>
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
                            <h2 class="widget10-title">{{ $user_count }}</h2>
                            <span class="widget10-subtitle">Total users</span>
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
            @livewire('admin.booking.calendar')
        </div>
        <div class="col-md-12">
            <!-- BEGIN Portlet -->
            @livewire('admin.reports.top-stats')
            <!-- END Portlet -->
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            @livewire('admin.reports.charts.users-by-gender')
        </div>
        <div class="col-md-6">
            @livewire('admin.reports.charts.all-bookings')
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-6">
            @livewire('admin.reports.new-users')
        </div>
        <div class="col-md-6">
            @livewire('admin.reports.charts.users-by-age')
        </div>
    </div>

    </div>
    
@endsection
