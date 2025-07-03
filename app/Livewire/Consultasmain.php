<?php

namespace App\Livewire;

use App\Models\Consulta;
use Livewire\Component;
use App\Models\Consultas;
use Illuminate\Support\Facades\DB;

class ConsultasMain extends Component
{
    public $consultas = [];
    public $especialidades = [];
    public $search = '';
    public $resultados = false;

    public function mount()
    {
        $this->cargarDatos();
    }

    public function buscar()
    {
        if (trim($this->search) != '') {
            $this->consultas = Consulta::where('nombre', 'like', '%' . $this->search . '%')->get();
            $this->resultados = true;
        } else {
            $this->cargarDatos();
            $this->resultados = false;
        }
    }

    public function cargarDatos()
    {
        $this->consultas = Consulta::all();

        $this->especialidades = DB::table('consultas')
            ->select('especialidad', DB::raw('count(*) as total'))
            ->groupBy('especialidad')
            ->orderBy('total', 'desc')
            ->get();
    }

    public function render()
    {
        return view('livewire.consultasmain');
    }

}
