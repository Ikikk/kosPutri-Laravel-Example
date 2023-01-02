@extends('master')

@section('content')
<ol>
    @foreach ($rooms as $item)
        <li>
            <a href="/kamar/{{$item->id}}"> {{$item->jenisKamar}} </a>
        </li>
    @endforeach
</ol>

@endsection