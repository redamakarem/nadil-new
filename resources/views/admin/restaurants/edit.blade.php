@extends('layouts.admin-tw')
@section('content')
    @livewire('admin.restaurants.edit', [$restaurant, $cuisines]);
@endsection
