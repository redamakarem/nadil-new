@extends('layouts.admin-tw')
@section('content')
    @livewire('admin.restaurants.multi-step-create-form',[$cuisines, $users])
@endsection
