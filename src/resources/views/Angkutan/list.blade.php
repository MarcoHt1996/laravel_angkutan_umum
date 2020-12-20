@extends('layouts.app')
@section('content')
<div class="container">

       <ul class="nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" aria-current="page" href="#Tujuan">Tujuan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#Platmobil">Angkutan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#Kembali">Kembali</a>
        </li>
          </ul>

          <div class="jumbotron bg-success text-white" >
            <h1>Selamat Datang Di Website Kami</h1>

    </div>
    <div class="tab-content">
        <div class="tab-pane active" role="tabpanel" id="Tujuan">
            <a href="{{ Route("keberangkatan.form") }}" class="btn btn-outline-success float-right mb-4"><i class="fas fa-plus"></i> Daftar Keberangkatan</a>
           <div class="clearfix"></div>
            <div class="card mb-2">
              <div class="card-body">
                <h3><a href="{{ route("daftarsewa.form") }}">Medan-Banda Aceh</a></h3>
                    <h1>Rp.200.000,-</h1>
                    <span>01/01/2020</span>
                    <h3><a href="{{ route("daftarsewa.form") }}">Medan-Pekan Baru</a></h3>
                    <h1>Rp.300.000,-</h1>
                    <span>01/01/2020</span>
                    <h3><a href="{{ route("daftarsewa.form") }}">Medan-Jambi</a></h3>
                    <h1>Rp.450.000,-</h1>
                    <span>01/01/2020</span>
                    <h3><a href="{{ route("daftarsewa.form") }}">Medan-Banda Aceh</a></h3>
                    <h1>Rp.200.000,-</h1>
                    <span>02/01/2020</span>
                    <h3><a href="{{ route("daftarsewa.form") }}">Medan-Pekan Baru</a></h3>
                    <h1>Rp.300.000,-</h1>
                    <span>02/01/2020</span>
                    <h3><a href="{{ route("daftarsewa.form") }}">Medan-Jambi</a></h3>
                    <h1>Rp.450.000,-</h1>
                    <span>02/01/2020</span>
                </div>



            </div>
          </div>
        <div class="tab-pane" role="tabpanel"id="Platmobil">
            <hr>
            <h2 class="text-success">Driver</h2>
            <hr>
            <ul class="list-group">
              <li class="list-group-item">Samsudin</li>
            </ul>
            <h2 class="d-flex justify-content-between mt-1">Angkutan</h2>
            <div class="div float-right">
              <span class="text-muted">10 Sewa</span>
              <a href="{{ Route("user.email") }}" class="btn btn-outline-success"><i class="fas fa-user-plus"></i></a>
            </div>
            <div class="clearfix"></div>
            <ul class="list-group">
              <li class="list-group-item d-flex justify-content-between align-items-center">
                  <a href="{{ route("peserta.detail")}}">Angkutan 1</a>
         <a href="" class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</a>
              </li>
              <div class="div float-right">
                <span class="text-muted">20 Sewa</span>
                <a href="{{ Route("user.email") }}" class="btn btn-outline-success"><i class="fas fa-user-plus"></i></a>
              </div>
              <div class="clearfix"></div>
              <ul class="list-group">
              <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="{{ route("peserta.detail")}}">Angkutan 2</a>
       <a href="" class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</a>
            </li>

            </ul>
            <hr>
        </div>
        <div class="tab-pane"role="tabpanel" id="Kembali">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <td>Nama</td>
                  <td>Keberangkatan 1</td>
                  <td>Keberangkatan 2</td>
                  <td>Keberangkatan 3</td>
                  <td>Keberangkatan 4</td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Budi</td>
                  <td>Senin</td>
                  <td>Rabu</td>
                  <td>Jumat</td>
                  <td>Minggu</td>
                </tr>
              </tbody>

            </table>
        </div>
      </div>


</div>

@endsection
