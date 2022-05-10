@extends('template')
@section('title', 'Edit Data Astronot')

@section('konten')
    @foreach($astronot as $ast)
        <form action="/astronot/update" method ="get">
            {{csrf_field()}}
            <center>
                ID <br> <input type=text, name="id", required="required", value="{{$ast->id}}"><br>
                Nama <br>  <input type=text, name="nama", required="required", value="{{$ast->nama}}"><br>
                Negara <br><input type=text, name="negara", required="required", value="{{$ast->negara}}"><br>
                Tahun <br> <input type=text, name="tahun", required="required", value="{{$ast->tahun}}"><br>
                Roket <br> <input type=text, name="roket", required="required", value="{{$ast->roket}}"><br>
                <input type="submit" value="Simpan Data">
            </center>
        </form>
    @endforeach
@endsection