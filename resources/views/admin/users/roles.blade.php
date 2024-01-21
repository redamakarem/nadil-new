@extends('layouts.admin-tw')
@section('content')
    @livewire('admin.users.roles',[$users,$role_id])
@endsection
