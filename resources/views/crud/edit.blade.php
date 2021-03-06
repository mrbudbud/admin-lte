@extends('layouts.master')

@section('title', 'Karyawan')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    
    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
        <!-- Main content -->
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- /.card-header -->
                <!-- form start -->
              <form action="" method="post" enctype="multipart/form-data" >
                @method('patch')
                @csrf
                              <!-- Input addon -->
                  <div class="card card-info">
                    <div class="card-header">
                      <h3 class="card-title">Input Pegawai</h3>
                    </div>
                    <!-- <label for="customFile">Custom File</label> -->

                      <div class="input-group my-3">
                      </div>

                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"></span>
                        </div>
                        <input type="text" name="posisi" id="posisi" class="form-control" value="{{ $datas->posisi }}"
                      </div>

                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"></span>
                        </div>
                        <input type="text" class="form-control" name="nama" id="nama" value="{{ $datas->nama }}">
                      </div>

                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"></span>
                        </div>
                        <div class="col-sm-8">
                          <!-- <textarea class="form-control"  placeholder="Enter ..."></textarea> -->
                        <textarea class="form-control" rows="3"  class="form-control" name="alamat" id="alamat" placeholder="">{{ $datas->alamat }}</textarea>
                        </div>
                      </div>

                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"></span>
                        </div>
                        <input type="text" class="form-control" name="notelpon" id="notelpon" value="{{ $datas->notelpon   }}">
                      </div>

                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                      <button type="submit" name="submit" class="btn btn-info">Submit</button>
                      <a href="index.php" class="btn btn-danger float-right">Cancel</a>
                    </div>
                  </div>
                  <!-- /.card -->
              </form>
              <!-- /.card -->
            </div>
          </div>
          <!-- /.row -->
        <!-- /.content -->
      <!-- /.card -->

    </section>
    <!-- /.content -->

  </div>
@endsection n