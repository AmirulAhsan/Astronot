@extends('template')
@section('title', 'Data Astronot')

@section('konten')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>

<div class="container">
    <h2> Data Astronot </h2>
	<div class="row">
        <div class="table-responsive">                
            <table id="mytable" class="table table-bordred table-striped">
                <thead>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Negara</th>
                    <th>Tahun</th>
                    <th>Roket</th>
                </thead>
            <tbody> 
                @foreach($astronot as $ast)
                <tr>
                    <td>{{$ast->id}}</td>
                    <td>{{$ast->nama}}</td>
                    <td>{{$ast->negara}}</td>
                    <td>{{$ast->tahun}}</td>
                    <td>{{$ast->roket}}</td>
                    <td>
                        <a href="/astronot/edit/{{ $ast->id}}">Edit</a>
                        <!-- <a href="">Edit</a>&nbsp;&nbsp;&nbsp; -->
                        <a style="color:red;" href="/astronot/hapus/{{ $ast->id}}">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection