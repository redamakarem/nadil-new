@extends('layouts.admin-tw')

@section('content')
    @livewire('admin.dishes-category.index',[$categories,$restaurant_id,$menu_id])
@endsection
