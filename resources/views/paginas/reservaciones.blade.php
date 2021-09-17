@extends('layouts.default')
{{-- @section('titulo', 'Home titulo')
@section('descripcion', 'Home descripcion')
@section('keywords', 'Home keywords') --}}
@section('styles')
{{-- meta tags --}}

{{-- css --}}
<style type="text/css">
	body {
		background: #007bff;
		background: linear-gradient(to right, #0062E6, #33AEFF);
	}
	.btn-login {
		font-size: 0.9rem;
		letter-spacing: 0.05rem;
		padding: 0.75rem 1rem;
	}
</style>
@endsection
@section('contenido') {{-- contenido vista --}}
<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
	<livewire:reservacion />
</div>
@endsection
@section('scripts')

@endsection