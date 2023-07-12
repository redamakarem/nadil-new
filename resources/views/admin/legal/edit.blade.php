@extends('layouts.admin-tw')
@section('content')
@livewire('admin.legal.edit',['legal' => $legal])
@endsection
