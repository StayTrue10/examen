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
	<div class="card border-0 shadow rounded-3 my-5">
		<div class="card-body p-4 p-sm-5">
			<h5 class="card-title text-center mb-5 fw-light fs-5">Iniciar sesión</h5>
			<form method="POST" action="{{ route('login') }}">
				@csrf
				<div class="form-floating mb-3">
					<input type="email" class="form-control" id="floatingInput" placeholder="Correo" name="email">
					<label for="floatingInput">Correo</label>
					@error('email') <small class="text-danger py-1">{{ $message }}</small> @enderror
				</div>
				<div class="form-floating mb-3">
					<input type="password" class="form-control" id="floatingPassword" placeholder="Contraseña" name="password">
					<label for="floatingPassword">Contraseña</label>
					@error('password') <small class="text-danger py-1">{{ $message }}</small> @enderror
				</div>
				<div class="d-grid">
					<button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Iniciar Sesión</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection
@section('scripts')

@endsection