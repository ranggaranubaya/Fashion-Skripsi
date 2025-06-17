@extends('layout.page')

@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Gallery</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Gallery</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Add Gallery</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{ url('/gallery/store')}}" class="form-horizontal" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group row">
                    <label for="foto" class="col-sm-2 col-form-label">Foto Wisata</label>
                    <div class="col-sm-10">
                      <input type="file" class="form-control" name="foto" accept="image/*" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama Wisata</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama" placeholder="Nama Wisata" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi Wisata</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi Wisata" required>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-success float-right">Create</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection