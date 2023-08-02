<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Antrian;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

class ShowAntrian extends Component
{
    public $antrian_id, $no_antrian, $nama, $alamat, $jenis_kelamin, $poli, $no_ktp, $no_hp, $dokter, $tanggal_antrian, $user_id, $data;
  

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    
    protected $rules = [
        'no_antrian'    => 'required',
        'nama'          => 'required',
        'alamat'        => 'required',
        'jenis_kelamin' => 'required',
        'no_hp'         => 'required|numeric',
        'no_ktp'        => 'required|numeric',
        'poli'          => 'required',
        'dokter'          => 'required',
        'tanggal_antrian' => 'required'
    ];

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }


    public function save()
    {
        // Mengambil data antrian terbaru berdasarkan poli yang di pilih
        $latestAntrian = Antrian::where('poli', $this->poli)
            ->where('tanggal_antrian', now()->toDateString())
            ->latest('id')
            ->first();

        // Jika tanggal berbeda dengan hari ini, maka reset nomor antrian dari awal
        if (!$latestAntrian) {
            if($this->poli === 'anak'){
                $this->no_antrian = 'A1';
            } elseif ($this->poli === 'kandungan'){
                $this->no_antrian = 'K1';
            } elseif ($this->poli === 'neonatologi'){
                $this->no_antrian = 'N1';
            }
            $this->tanggal_antrian = now()->toDateString();
        } else {
            // Jika tanggalnya sama dengan hari ini, maka no antrian akan melakukan increment / pengurutan
            $kode_awal = substr($latestAntrian->no_antrian, 0, 1);
            $angka = (int) substr($latestAntrian->no_antrian, 1);
            $angka +=1;
            $this->no_antrian = $kode_awal . $angka;
            $this->tanggal_antrian = $latestAntrian->tanggal_antrian;
        }


        $validatedData = $this->validate();
        $validatedData['no_antrian'] = $this->no_antrian;
        $validatedData['tanggal_antrian'] = $this->tanggal_antrian;
        $validatedData['user_id'] = auth()->user()->id;

        Antrian::create($validatedData);
        session()->flash('success', 'Berhasil Mengambil Antrian');
        $this->emit('update');
        $this->resetInput();
        $this->dispatchBrowserEvent('closeModal');
    }


    public function resetInput()
    {
        $this->no_antrian = '';
        $this->nama = '';
        $this->alamat = '';
        $this->jenis_kelamin = '';
        $this->no_hp = '';
        $this->no_ktp = '';
        $this->poli = '';
        $this->dokter = '';
    }

    public function close_modal()
    {
        $this->resetInput();
    }

    public function editAntrian($antrian_id)
    {
        $antrian = Antrian::find($antrian_id);
        if($antrian){
            $this->antrian_id       = $antrian->id;
            $this->no_antrian       = $antrian->no_antrian;
            $this->nama             = $antrian->nama;
            $this->alamat           = $antrian->alamat;
            $this->jenis_kelamin    = $antrian->jenis_kelamin;
            $this->no_hp            = $antrian->no_hp;
            $this->no_ktp           = $antrian->no_ktp;
            $this->poli             = $antrian->poli;
            $this->dokter           = $antrian->dokter;
        } else {
            return redirect()->to('/');
        }
    }

    public function updateAntrian()
    {
        
        if($this->poli === 'anak'){
            $this->no_antrian = 'A1';
        } elseif ($this->poli === 'kandungan'){
            $this->no_antrian = 'K1';
        } elseif ($this->poli === 'neonatologi'){
            $this->no_antrian = 'N1';
        }


        $latest_no_antrian = Antrian::where('poli', $this->poli)
            ->latest()
            ->first();

        if($latest_no_antrian){
            $kode_awal = substr($latest_no_antrian->no_antrian, 0,1);
            $angka = (int) substr($latest_no_antrian->no_antrian, 1);
            $angka+=1;
            $this->no_antrian = $kode_awal . $angka;
        } 

        $validatedData = $this->validate([
            'no_antrian'    => 'required|unique:antrians',
            'nama'          => 'required',
            'alamat'        => 'required',
            'jenis_kelamin' => 'required',
            'no_hp'         => 'required',
            'no_ktp'        => 'required',
            'poli'          => 'required',
            'dokter'        => 'required'
        ]);

        Antrian::where('id', $this->antrian_id)->update([
            'no_antrian'    => $validatedData['no_antrian'],
            'nama'          => $validatedData['nama'],
            'alamat'        => $validatedData['alamat'],
            'jenis_kelamin' => $validatedData['jenis_kelamin'],
            'no_hp'         => $validatedData['no_hp'],
            'no_ktp'        => $validatedData['no_ktp'],
            'poli'          => $validatedData['poli'],
            'dokter'        => $validatedData['dokter']
        ]);

        session()->flash('success', 'Berhasil Mengedit Data Antrian Anda');
        $this->resetInput();
        $this->dispatchBrowserEvent('closeModal');
    }

    public function deleteAntrian($antrian_id)
    {
        $this->antrian_id = $antrian_id;
    }

    public function destroy()
    {
        Antrian::find($this->antrian_id)->delete();
        session()->flash('success', 'Berhasil Menghapus Data Antrian Anda');
        $this->resetInput();
        $this->dispatchBrowserEvent('closeModal');
    }

    public function showDetail($antrian_id)
    {
        $antrian = Antrian::find($antrian_id);
        if($antrian){
            $this->antrian_id       = $antrian->id;
            $this->no_antrian       = $antrian->no_antrian;
            $this->nama             = $antrian->nama;
            $this->alamat           = $antrian->alamat;
            $this->jenis_kelamin    = $antrian->jenis_kelamin;
            $this->no_hp            = $antrian->no_hp;
            $this->no_ktp           = $antrian->no_ktp;
            $this->poli             = $antrian->poli;
            $this->dokter           = $antrian->dokter;
        } else {
            return redirect()->to('/');
        }
    }

    public function mount()
    {
        $this->data = Antrian::all();
        $user = User::find(Auth::id());
        $this->no_hp = $user->no_hp;
        $this->no_ktp = $user->no_ktp;
        
    }

    public function render()
    {   
        return view('livewire.show-antrian', [
            'antrian' => $this->poli ? Antrian::where('poli', $this->poli)->where('is_call', 0)->paginate(10) : Antrian::where('is_call', 0)->paginate(10),
            'cekAntrian' => Antrian::where('user_id', Auth::id())->count(),
            'detailAntrian' => Antrian::where('user_id', Auth::id())->where('is_call', 0)->get()
        ]);
    }

}

