@extends('master')

@section('content')
<ol>
    @foreach ($penghunis as $item)
        <li>
            <a href="/penghuni/{{$item->id}}"> {{$item->nama}} </a>
            <div class="d-flex flex-row my-3">
                <a href="/penghuni/{{$item->id}}/edit" class="btn btn-warning"> Edit </a>

                <form method="POST" action="/penghuni/{{$item->id}}/delete" class="mx-3">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete" class="btn btn-danger">
                </form>
            </div>
        </li>
    @endforeach
</ol>

<a href="/penghuni/create" class="btn btn-success my-3"> Create </a>

@endsection