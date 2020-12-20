@extends('layouts.app')
@section('content')
<div class="container">

       <ul class="nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" aria-current="page" href="#Tujuan">Tujuan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#Platmobil">Plat Mobil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#Kembali">Kembali</a>
        </li>
          </ul>

          <div class="jumbotron bg-success text-white" >
            <h1>Mex</h1>
            <h5>Kode Driver : 1413</h5>
            <p>No Handphone : 085234132455</p>
    </div>
    <div class="tab-content">
        <div class="tab-pane active" role="tabpanel" id="Tujuan">
            <a href="{{ Route("keberangkatan.form") }}" class="btn btn-outline-success float-right mb-4"><i class="fas fa-plus"></i> Buat Pertemuan</a>
           <div class="clearfix"></div>
            <div class="card mb-2">
              <div class="card-body">
                <h3><a href="{{ route("daftarsewa.form") }}">Pertemuan 1</a></h3>
                <span class="text-muted">Tanggal 01/01/2020</span>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio laborum sit, temporibus dolores numquam iusto. Numquam nam exercitationem cupiditate quae, saepe rem, officiis, illum facere accusantium at consectetur suscipit repudiandae?</p>
                </div>
              <div class="card-footer">
                 <a href="" class="btn btn-danger float-right"><i class="fas fa-trash"></i> Hapus</a>
              </div>
            </div>
          </div>
        <div class="tab-pane" role="tabpanel"id="Platmobil">
            <hr>
            <h2 class="text-success">Driver</h2>
            <hr>
            <ul class="list-group">
              <li class="list-group-item">Nama Driver</li>
            </ul>
            <h2 class="d-flex justify-cont
            ent-between mt-1">Angkutan</h2>
            <div class="div float-right">
              <span class="text-muted">10 Sewa</span>
              <a href="{{ Route("user.email") }}" class="btn btn-outline-success"><i class="fas fa-user-plus"></i></a>
            </div>
            <div class="clearfix"></div>
            <ul class="list-group">
              <li class="list-group-item d-flex justify-content-between align-items-center">
                  <a href="{{ route("peserta.detail")}}">Sewa 1</a>
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
                  <td>Pertemuan 1</td>
                  <td>Pertemuan 2</td>
                  <td>Pertemuan 3</td>
                  <td>Pertemuan 4</td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Budi</td>
                  <td>A</td>
                  <td>H</td>
                  <td>H</td>
                  <td>I</td>
                </tr>
              </tbody>

            </table>
        </div>
      </div>


</div>

@endsection
