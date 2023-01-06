@extends('master')

@section('content')
<br>
<ol>
    @foreach ($rooms as $item)
        <li>
            <a href="/kamar/{{$item->id}}"> {{$item->jenisKamar}} </a>
        </li>
    @endforeach
</ol>
<a href="/" class="btn btn-warning my-3"> Back </a>

@endsection