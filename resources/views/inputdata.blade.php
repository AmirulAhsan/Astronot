@extends('template')
@section('title', 'Input Data Astronot')

@section('konten')
    <form action="/astronot/store" method ="get">
        {{csrf_field()}}
        <center>
            ID <br> <input type=text, name="id", required="required"><br>
            Nama <br>  <input type=text, name="nama", required="required"><br>
            Negara <br><input type=text, name="negara", required="required"><br>
            Tahun <br> <input type=text, name="tahun", required="required"><br>
            Roket <br> <input type=text, name="roket", required="required"><br>
            <input type="submit" value="Simpan Data">
        </center>
    </form>

@endsection