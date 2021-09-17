@extends('layouts.default')
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