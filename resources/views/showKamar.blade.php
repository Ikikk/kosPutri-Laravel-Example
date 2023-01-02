@extends('master')

@section('content')
    <h2>
        {{$rooms->jenisKamar}} : {{$rooms->hargaPerBulan}}
        Penghuni : {{$rooms->penghuni->nama}}
    </h2>
@endsection
