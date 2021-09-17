@extends('panel.layouts.app')
@section('title', 'Reservaciones')
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <livewire:mesas/>
        </div>
        <div class="col-sm-2"></div>
    </div>
</div>
@endsection