@extends('layouts.app')
@section('content')
        <div class="container">
            <h1>Undang Mahasiswa</h1>
            <hr>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="" class="form-control">

                </div>
                <div class="form-group d-flex justify-content-between">
                    <a href="" class="btn btn-danger">
                        <i class="fas fa-arrow-left"></i> Kembali</a>
                        <button type="submit" class="btn btn-success"><i class="fas fa-user-plus"></i>
                            Undang
                        </button>
                </div>
            </form>

        </div>
@endsection
