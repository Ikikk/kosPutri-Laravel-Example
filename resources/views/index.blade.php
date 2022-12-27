@extends('master')

@section('content')
<ol>
    @foreach ($rooms as $item)
        <li>
            <a href="/{{$item->id}}"> {{$item->jenisKamar}} </a>
        </li>
    @endforeach
</ol>
@endsection