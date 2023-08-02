<?php

namespace App\Http\Livewire\DaftarPoli;

use App\Models\Antrian;
use Livewire\Component;
use Livewire\WithPagination;

class DashboardPoliKandungan extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $antrian_id;

    public function panggilAntrian($antrian_id)
    {
        $this->antrian_id = $antrian_id;
    }

    public function updatePanggilan()
    {
        Antrian::find($this->antrian_id)->update(['is_call' => 1]);

        session()->flash('success', 'Berhasil Mengambil Antrian Ini');
        $this->dispatchBrowserEvent('closeModal');
    }

    public function render()
    {
        return view('livewire.daftarpoli.dashboard-poli-kandungan', [
            'poliKandungan' => Antrian::where('poli', 'kandungan')->where('is_call', 0)->paginate(10)
        ]);
    }
}
