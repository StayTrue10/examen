<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Reservacion extends Component {
    // Inputs del formulario
    public $nombre, $apellido, $fecha, $correo, $numero, $rfc, $usuario;
    // Reglas de validacion para cada input
    protected $rules = [
        'nombre' => 'required',
        'apellido' => 'required',
        'fecha' => 'required',
        'correo' => 'required|email',
        'numero' => 'required',
        'rfc' => ['required', 'unique:usuarios', 'regex:/^([A-ZÑ\x26]{3,4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1])([A-Z]|[0-9]){2}([A]|[0-9]){1})?$/'],
        'usuario' => 'required',
    ];
    //Mensajes personalizados
    protected $messages = [
        'rfc.unique' => 'Este RFC ya esta en uso',
    ];
    // Validación de cada input
    public function updated($input) {
        $this->validateOnly($input);
    }
    // Regresa el componente
    public function render() {
        return view('livewire.reservacion');
    }
    public function guardar() {
        $validatedData = $this->validate();
        $client = new \GuzzleHttp\Client();
        $response = $client->request('POST', env('API_URL').'/registrar', [
            'form_params' => [
                'nombre' => $this->nombre,
                'apellido' => $this->apellido,
                'fecha' => $this->fecha,
                'correo' => $this->correo,
                'numero' => $this->numero,
                'rfc' => $this->rfc,
                'usuario' => $this->usuario,
            ]
        ]);
        session()->flash('mensaje', '¡Registro completado!');
        $this->limpiarCampos();
    }
    public function limpiarCampos() {
        $this->nombre = '';
        $this->apellido = '';
        $this->fecha = '';
        $this->correo = '';
        $this->numero = '';
        $this->rfc = '';
        $this->usuario = '';
    }
}