@extends('layouts.restaurant-admin')
@section('content')
    @livewire('restaurant-admin.users.by-role',[$users])
@endsection
