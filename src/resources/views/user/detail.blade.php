@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Detail peserta</h1>
    <hr>

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="" class="form-control">
            </div>
            <a href="{{ url()->previous() }}" class="btn btn-danger">
                <i class="fas fa-arrow-left"></i> Kembali</a>



</div>


@endsection
