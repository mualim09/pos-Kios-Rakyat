@extends('layout.main')
@section('management_menu_open', 'menu-is-opening menu-open')
@section('management_aktif', 'active')
@section('operator_aktif', 'active')

@section('navigation')
  <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Beranda</a></li>
      <li class="breadcrumb-item"><a href="{{url('/operator')}}">Petugas Kasir</a></li>
      <li class="breadcrumb-item active">Tambah Kasir</li>
    </ol>
  </div>
@stop

@section('css')

@endsection

@section('title')
  <h1>Tambah Petugas Kasir</h1>    
@stop
@section('content')
<!-- Main content -->
<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <!-- <h3 class="card-title">Toko {{ Auth::user()->nama_toko }}</h3> -->
          <h3 class="card-title">Tambah Operator Kasir</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal" method="POST" action="{{ url('operator/store') }}">
          @csrf
          <div class="card-body">
            <input type="hidden" class="form-control" id="id_retailer" name="id_retailer" value="{{ Auth::user()->id_retailer }}">
            <div class="form-group row">
              <label for="nama" class="col-sm-2 col-form-label">Nama Operator</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" id="nama" name="name" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="nama" class="col-sm-2 col-form-label">Username</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" id="nama" name="username" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="nama" class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-4">
                <input type="Password" class="form-control" id="nama" name="password" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="password_confirmation" class="col-sm-2 col-form-label">Konfirmasi Password</label>
              <div class="col-sm-4">
                <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password">
              </div>
            </div>
            <div class="row">
              <div class="col-sm-2"></div>
              <div class="col-sm-4">
                <button type="submit" class="btn btn-brand-secondary btn-sm bg-brand-secondary text-white rounded-8 no-shadow">
                  Tambah
                </button>
                <a class="btn btn-outline-danger rounded-8" onclick="location.href='{{url('operator')}}'">Batal</a>
              </div>
            </div>
          </div>
          <!-- /.card-body -->
          <!-- <div class="card-footer">
            <button type="submit" class="btn btn-sm btn-primary">Tambah</button>
            <a class="btn btn-danger btn-sm" onclick="location.href='{{url('/operator')}}'">Batal</a>
          </div> -->
          <!-- /.card-footer -->
        </form>
      </div>
      <!-- /.card -->

    </div>

    
    <!-- <div class="col-5">
      general form elements disabled
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Hak Akses</h3>
        </div>
        /.card-header -->
        <!-- <div class="card-body">
         <form> -->
              <!-- <div class="row">
                <div class="col-sm-6">
                   checkbox -->
                  <!-- <div class="form-group">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox">
                      <label class="form-check-label">Laporan</label>
                    </div>
                  </div>
                </div>
              </div> --> 
          <!-- </form> -->
        <!-- </div> -->
        <!-- /.card-body -->
      <!-- </div> -->
      <!-- /.card -->
    <!-- </div> --> 


  </div>


</div>
@endsection
@section('js')
  
@endsection