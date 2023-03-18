@extends('layouts.admin-tw')

@section('content')
    @livewire('admin.restaurants.restaurant-dishes',[$restaurant])
@endsection
