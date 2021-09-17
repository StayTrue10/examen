<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Traits\APITrait;

class Mesas extends Component {
    use APITrait;
    public $filtros, $rfc, $mesa, $horario, $factura, $reservacion, $folio, $estatus, $response;
    protected $rules = [
        'rfc' => 'required|exists:usuarios,rfc',
        'mesa' => 'required',
        'horario' => 'required',
        'factura' => 'required',
        'estatus' => 'unique:reservaciones,estatus'
    ];
    protected $messages = [
        'estatus.unique' => 'Esta mesa y horario no esta disponible, seleccione otras opciones por favor.',
    ];
    // Validación de cada input
    public function updated($input) {
        $this->validateOnly($input);
    }
    public function render() {
        $this->filtros = $this->consultar(env('API_URL').'/filtros');
        $this->estatus = $this->mesa.','.$this->horario.','.($this->horario+1);
        return view('livewire.mesas');
    }
    public function guardar() {
        $validatedData = $this->validate();
        $client = new \GuzzleHttp\Client();
        $response = $client->request('POST', env('API_URL').'/reservacion', [
            'form_params' => [
                'rfc' => $this->rfc,
                'mesa' => $this->mesa,
                'horario' => $this->horario,
                'factura' => $this->factura,
            ]
        ]);
        $folio = $response->getBody();
        session()->flash('mensaje', '¡Reservación completada! Este es tu folio: '.$folio.' No lo pierdas es muy importante.');
    }
    public function actualizar() {
        $validatedData = $this->validate();
        $client = new \GuzzleHttp\Client();
        $response = $client->request('POST', env('API_URL').'/reservacion'.'/'.$this->folio, [
            'form_params' => [
                'mesa' => $this->mesa,
                'horario' => $this->horario,
                'factura' => $this->factura,
            ]
        ]);
        session()->flash('mensaje', '¡Reservación actualizada!');
    }
    public function buscar() {
        $this->reservacion = $this->consultar(env('API_URL').'/reservacion'.'/'.$this->folio);
        if ($this->reservacion) {
            $this->mesa = $this->reservacion['id_mesa'];
            $this->horario = $this->reservacion['id_horario'];
            $this->factura = $this->reservacion['factura'];
        }
        session()->flash('mensaje', $this->reservacion ? '¡se encontro!' : '¡no se encontro!');
    }
}