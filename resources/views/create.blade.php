@extends('master')

@section('content')

<form method="POST" action="/store">
    @csrf
    <label for="nama">Nama:</label><br>
    <input type="text" id="nama" name="nama"><br>

    <label for="alamatAsal">Alamat Asal:</label><br>
    <input type="text" id="alamatAsal" name="alamatAsal"><br>

    <label for="noTelp">Nomor Telepon:</label><br>
    <input type="number" id="noTelp" name="noTelp"><br>

    <label for="nomorKamar">Nomor Kamar:</label><br>
    <input type="number" id="nomorKamar" name="nomorKamar"><br><br>
    
    <input type="submit" value="Submit" class="btn btn-success">
</form>

@endsection