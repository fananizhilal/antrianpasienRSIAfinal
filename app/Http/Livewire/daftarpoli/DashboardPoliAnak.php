<?php

namespace App\Http\Livewire\DaftarPoli;

use App\Models\Antrian;
use Livewire\Component;
use Livewire\WithPagination;


class DashboardPoliAnak extends Component
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

        session()->flash('success', 'Antrian Selesai');
        $this->dispatchBrowserEvent('closeModal');
    }


    public function render()
    {
        return view('livewire.daftarpoli.dashboard-poli-anak', [
            'poliAnak' => Antrian::where('poli', 'anak')->where('is_call', 0)->paginate(10)
        ]);
    }

}
