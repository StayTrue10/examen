<div class="ibox content-shadow">
    <div class="card-body p-4 p-sm-5">
        <h5 class="card-title text-center mb-5 fw-light h3">Hacer reservación</h5>
        @if(session()->has('mensaje'))
            <h4 class="text-center mb-5 fw-light text-danger">{{ session('mensaje')}}</h4>
        @endif
        {{var_dump($response)}}
        <form>
            @if(Auth::check())

            <label>Folio</label>
            @else

            <label>RFC</label>
            @endif
            <div class="row">
                @if(Auth::check())
                <div class="col-sm-6">
                    <input wire:model="folio" type="text" class="form-control" id="folio" placeholder="Folio">
                    @error('folio') <small class="text-danger py-1">{{ $message }}</small> @enderror
                </div>
                <div class="col-sm-6">
                    <button wire:click.prevent="buscar()" class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Buscar</button>
                </div>
                @else
                <div class="col-sm-12">
                    <input wire:model="rfc" type="text" class="form-control" id="rfc" placeholder="RFC">
                    @error('rfc') <small class="text-danger py-1">{{ $message }}</small> @enderror
                </div>
                @endif
            </div>
            <br>
            <div>
                <label for="mesa">Escoger mesa</label>
                <select wire:model="mesa" class="form-control" id="mesa">
                    <option selected value="0">Selecciona una</option>
                    @foreach($filtros['mesas'] as $mesa)
                        <option value="{{$mesa['id']}}">{{$mesa['nombre'].' - '.$mesa['tipo'].' - '.$mesa['restaurante']}}</option>
                    @endforeach
                </select>
                @error('apellido') <small class="text-danger py-1">{{ $message }}</small> @enderror
            </div>
            <br>
            <div>
                <label for="horario">Horario</label>
                <select wire:model="horario" class="form-control" id="horario">
                    <option selected value='0'>Selecciona una</option>
                    @foreach($filtros['horarios'] as $horario)
                        <option value="{{$horario['id']}}">{{'De '.$horario['inicio'].' PM a '.$horario['final'].' PM'}}</option>
                    @endforeach
                </select>
                @error('apellido') <small class="text-danger py-1">{{ $message }}</small> @enderror
            </div>
            <br>
            <div>
                <label for="factura">Factura</label>
                <select wire:model="factura" class="form-control" id="factura">
                    <option value="1">Si</option>
                    <option value="2">No</option>
                </select>
                @error('apellido') <small class="text-danger py-1">{{ $message }}</small> @enderror
            </div>
            <br>
            <div class="col-sm-12">
                <input wire:model="estatus" type="hidden" id="estatus">
                @error('estatus') <small class="text-danger py-1">{{ $message }}</small> @enderror
            </div>
            <br>
            <div class="d-grid">
                @if(Auth::check())
                    <button wire:click.prevent="actualizar()" class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Actualizar</button>
                @else
                    <button wire:click.prevent="guardar()" class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Reservar</button>
                @endif
            </div>
            <br>
        </form>
    </div>
</div>