@extends('layouts.app')
@section('content')
<div class="container">
    <form action="">
        <div class="form-group">
            <label for="pertemuan">Nama</label>
            <input type="text" class="form-control" name="pertemuan">
        </div>
        <div class="form-group">
            <label for="tanggal">Tanggal Keberangkatan</label>
            <input type="date"  name="Tanggal" id="" class="form-control">
        </div>
        <div class="form-group">
            <label for="emaiil">Email</label>
            <input type="text" class="form-control" name="emaiil">
        </div>
        <div class="form-group">
            <label for="nohp">No Handphone</label>
            <input type="text" class="form-control" name="nohp">
        </div>
        <div class="form-group">
            <label for="jurusan">Tujuan</label>
            <input type="text" class="form-control" name="jurusan">
        </div>
        <div class="form-group">
            <label for="materi">Note</label>
            <textarea name="materi" class="form-control" id="" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group float-right">
            <button type="submit" class="btn btn-success"><i class="fas fa-save"></i>Save</button>
            <a href="{{url()->previous() }}" class="btn btn-danger"><i class="fas fa-undo"></i>batal</a>
        </div>

    </form>
    </div>
    @endsection
