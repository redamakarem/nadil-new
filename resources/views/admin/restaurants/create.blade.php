@extends('layouts.admin-tw')
@section('content')
    @livewire('admin.restaurants.create',[$cuisines, $users])
@endsection
