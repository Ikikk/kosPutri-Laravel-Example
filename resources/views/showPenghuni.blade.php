@extends('master')

@section('content')
<ul>
    <dl>
        <h2>{{$penghunis->nama}}</h2>
        <img src={{ url('storage/images/'.$penghunis->image)}} style=""><br>
        <dd>- Alamat Asal : {{$penghunis->alamatAsal}}</dd>
        <dd>- Nomor Telepon : {{$penghunis->noTelp}}</dd>
        <dd>- Nomor Kamar : {{$penghunis->nomorKamar}}</dd>
        {{-- <dd>- Tagihan : {{$rooms->hargaPerBulan}}</dd> --}}
        <dd>- Tagihan : {{$penghunis->room->hargaPerBulan}}</dd> 
    </dl>
</ul> 
@endsection