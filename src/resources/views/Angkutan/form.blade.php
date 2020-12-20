@extends('layouts.app')

@section('content')
<div class="container">
<form action="">
<div class="form-group">
<form action="">
<div class="form-group">
<label for="nama">Nama</label>
<input type="text" name="nama" class="form-control" >
</div>
<div class="form-group">
    <form action="">
    <div class="form-group">
    <label for="matakuliah">Tujuan</label>
    <input type="text" name="matakuliah" class="form-control" >
    </div>
    <div class="form-group">
        <form action="">
        <div class="form-group">
        <label for="noruang">No Kursi</label>
        <input type="text" name="noruang" class="form-control" >
        </div>
        <div class="form-group">
            <form action="">
            <div class="form-group">
            <label for="nohp">No Handphone</label>
            <input type="text" name="nohp" class="form-control" >
            </div>
            <div class="from-group">
                <label for="tanggal">Tanggal</label>
                <input type="date" name="tanggal" id="" class="form-control">
            </div>
        <div class="form-group float-right">
            <button type="submit" class="btn btn-success">
                <i class="fas fa-save"></i> Simpan</button>
                <a href="{{ url() ->previous()}}" class="btn btn-danger "><i class="fas fa-undo"></i> Batal</a>
        </div>
</form>
</div>
@endsection
