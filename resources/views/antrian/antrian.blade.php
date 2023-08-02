@extends('antrian.layout')

@include('antrian.navbar')

@section('content')
    <div style="height: 800px">
        <livewire:show-antrian>
    </div>
@endsection

@section('script')
    <script>
        window.addEventListener('closeModal', event => {
            $('#createAntrian').modal('hide')
            $('#editAntrian').modal('hide')
            $('#deleteAntrian').modal('hide')
        })
    
    </script>
@endsection

@include('partials.footer')