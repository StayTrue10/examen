@extends('layouts.default')
{{-- @section('titulo', 'Home titulo')
@section('descripcion', 'Home descripcion')
@section('keywords', 'Home keywords') --}}
@section('styles')
{{-- meta tags --}}

{{-- css --}}
@endsection
@section('contenido') {{-- contenido vista --}}
<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
	<livewire:mesas />
</div>
@endsection
@section('scripts')

@endsection