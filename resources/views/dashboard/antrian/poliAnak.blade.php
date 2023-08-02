@extends('dashboard.layout')

@section('content')

    <div >
        <livewire:daftar-poli.dashboard-poli-anak>
    </div>
@endsection

@section('script')
    <script>
        window.addEventListener('closeModal', event => {
            $('#panggilAntrian').modal('hide')
        })
    </script>
@endsection