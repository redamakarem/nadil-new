@extends('layouts.admin-tw')

@section('content')
    <div class="row">
        <div class="col-12">
            @livewire('admin.logs.view',[$activity])
        </div>
    </div>
@endsection