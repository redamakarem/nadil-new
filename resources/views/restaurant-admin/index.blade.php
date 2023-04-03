@extends('layouts.restaurant-admin')

@section('content')
    <div class="row">
        @if(\Illuminate\Support\Facades\Session::has('info'))
            <p class="alert-success">{{\Illuminate\Support\Facades\Session::get('info')}}</p>
        @endif
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{1}}</h3>

                    <p>Restaurants</p>
                </div>
                <div class="icon">
                    <i class="ion ion-android-restaurant"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">

            @livewire('admin.components.restaurant-registration-submissions-box')
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>1</h3>

                    <p>Clients</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>65</h3>

                    <p>Unique Visitors</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>

    <div class="row">
        <div class="col-md-12">
            {{-- <div class="card card-primary card-tabs">
                <div class="card-header p-0 pt-1">
                    <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill"
                                href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home"
                                aria-selected="true" wire:ignore>Expected</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill"
                                href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile"
                                aria-selected="false" wire:ignore>Arrived</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill"
                                href="#custom-tabs-one-messages" role="tab" aria-controls="custom-tabs-one-messages"
                                aria-selected="false" wire:ignore>No Show</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-one-settings-tab" data-toggle="pill"
                                href="#custom-tabs-one-settings" role="tab" aria-controls="custom-tabs-one-settings"
                                aria-selected="false" wire:ignore>Cancelled</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="custom-tabs-one-tabContent" >
                        <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel"
                            aria-labelledby="custom-tabs-one-home-tab">
                            @livewire('components.todays-bookings-table')
                        </div>
                        <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel"
                            aria-labelledby="custom-tabs-one-profile-tab">
                            @livewire('components.todays-bookings-table',[3])
                        </div>
                        <div class="tab-pane fade" id="custom-tabs-one-messages" role="tabpanel"
                            aria-labelledby="custom-tabs-one-messages-tab">
                            @livewire('components.todays-bookings-table',[4])
                        </div>
                        <div class="tab-pane fade" id="custom-tabs-one-settings" role="tabpanel"
                            aria-labelledby="custom-tabs-one-settings-tab">
                            @livewire('components.todays-bookings-table',[5])
                        </div>
                    </div>
                </div>

            </div> --}}

            <div class="card">
                <div class="card-header">
                    <!-- BEGIN Nav -->
                    <div class="nav nav-lines card-header-lines" id="card1-tab" role="tablist">
                        <a class="nav-item nav-link active" id="card1-home-tab" data-bs-toggle="tab" href="#card1-expected" aria-selected="true" role="tab">Expected</a>
                        <a class="nav-item nav-link" id="card1-profile-tab" data-bs-toggle="tab" href="#card1-arrived" aria-selected="false" tabindex="-1" role="tab">Arrived</a>
                        <a class="nav-item nav-link" id="card1-contact-tab" data-bs-toggle="tab" href="#card1-no-show" aria-selected="false" tabindex="-1" role="tab">No Show</a>
                        <a class="nav-item nav-link" id="card1-contact-tab" data-bs-toggle="tab" href="#card1-cancelled" aria-selected="false" tabindex="-1" role="tab">Cancelled</a>
                    </div>
                    <!-- END Nav -->
                </div>
                <div class="card-body">
                    <!-- BEGIN Tab -->
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="card1-expected" role="tabpanel" aria-labelledby="#card1-home-tab">
                            <p class="mb-0">
                                @livewire('components.todays-bookings-table')
                            </p>
                        </div>
                        <div class="tab-pane fade" id="card1-arrived" role="tabpanel" aria-labelledby="#card1-profile-tab">
                            <p class="mb-0">
                                @livewire('components.todays-bookings-table',[3])
                            </p>
                        </div>
                        <div class="tab-pane fade" id="card1-no-show" role="tabpanel" aria-labelledby="#card1-contact-tab">
                            <p class="mb-0">
                                @livewire('components.todays-bookings-table',[4])
                            </p>
                        </div>
                        <div class="tab-pane fade" id="card1-cancelled" role="tabpanel" aria-labelledby="#card1-contact-tab">
                            <p class="mb-0">
                                @livewire('components.todays-bookings-table',[5])
                            </p>
                        </div>
                    </div>
                    <!-- END Tab -->
                </div>
            </div>
        </div>
    </div>
@endsection
