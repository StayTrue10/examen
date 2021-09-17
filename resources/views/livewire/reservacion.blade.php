<div class="card border-0 shadow rounded-3 my-5">
    <div class="card-body p-4 p-sm-5">
        <h5 class="card-title text-center mb-5 fw-light h3">Registrarse</h5>
        @if(session()->has('mensaje'))
            <h4 class="text-center mb-5 fw-light text-danger">{{ session('mensaje')}}</h4>
        @endif
        <form>
            <div class="form-floating mb-3">
                <input wire:model="nombre" type="text" class="form-control" id="nombre" placeholder="Nombre">
                <label for="nombre">Nombre</label>
                @error('nombre') <small class="text-danger py-1">{{ $message }}</small> @enderror
            </div>
            <div class="form-floating mb-3">
                <input wire:model="apellido" type="text" class="form-control" id="apellido" placeholder="Apellido">
                <label for="apellido">Apellido</label>
                @error('apellido') <small class="text-danger py-1">{{ $message }}</small> @enderror
            </div>
            <div class="form-floating mb-3">
                <input wire:model="fecha" type="date" class="form-control" id="fecha" placeholder="Fecha de cumpleaños">
                <label for="fecha">Fecha de cumpleaños</label>
                @error('fecha') <small class="text-danger py-1">{{ $message }}</small> @enderror
            </div>
            <div class="form-floating mb-3">
                <input wire:model="correo" type="email" class="form-control" id="correo" placeholder="Correo">
                <label for="correo">Correo</label>
                @error('correo') <small class="text-danger py-1">{{ $message }}</small> @enderror
            </div>
            <div class="form-floating mb-3">
                <input wire:model="numero" maxlength="12" onkeypress="if ( isNaN( String.fromCharCode(event.keyCode) )) return false;" type="text" class="form-control" id="numero" placeholder="Teléfono">
                <label for="numero">Teléfono</label>
                @error('numero') <small class="text-danger py-1">{{ $message }}</small> @enderror
            </div>
            <div class="form-floating mb-3">
                <input wire:model="rfc" type="text" class="form-control" id="floatingPassword" placeholder="RFC">
                <label for="floatingPassword">RFC</label>
                @error('rfc') <small class="text-danger py-1">{{ $message }}</small> @enderror
            </div>
            <div class="form-floating mb-3">
                <input wire:model="usuario" type="text" class="form-control" id="floatingPassword" placeholder="Usuario (nickname)">
                <label for="floatingPassword">Usuario (nickname)</label>
                @error('usuario') <small class="text-danger py-1">{{ $message }}</small> @enderror
            </div>
            <div class="d-grid">
                <button wire:click.prevent="guardar()" class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Registarse</button>
            </div>
        </form>
    </div>
</div>