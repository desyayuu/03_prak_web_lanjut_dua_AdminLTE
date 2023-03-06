@extends('layout.template')
@section('content')
<section class="content">
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Profile Page</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{Route('desyprofile')}}">Profile</a></li>
                <li class="breadcrumb-item active">Blank Page</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
    </section>

    <div class="card">
        <div class="card-header border-0">
            <div class="d-flex justify-content-between">
                <h3 class="card-title">Profil</h3>
            </div>
            <div class="card-body">
                Nama: {!! $nama !!} <br>
                NIM: {!! $nim !!} <br>
                Kelas: {!! $kelas !!} <br>
                Jurusan: {!! $jurusan !!} <br>
                Asal Daerah: {!! $asal !!} <br>
            </div>
        </div>
    </div>
</section>
@endsection