@extends('layout.page')

@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Data Gallery</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Data Gallery</li>
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
                <h3 class="card-title">Edit Data Gallery</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{ url('/gallery/update/'.$gallery->id) }}" class="form-horizontal" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group row">
                    <label for="foto" class="col-sm-2 col-form-label">Foto Wisata</label>
                    <div class="col-sm-10">
                      <!-- Menampilkan foto yang sudah diunggah -->
                      @if($gallery->foto)
                        <div class="mb-3">
                          <img src="{{ asset('storage/' . $gallery->foto) }}" alt="{{ $gallery->nama }}" style="max-width: 300px; max-height: 200px; object-fit: cover;">
                        </div>
                      @else
                        <span class="text-muted">Tidak ada foto</span>
                      @endif
                      <input type="file" class="form-control" name="foto" accept="image/*">
                      <small class="form-text text-muted">Biarkan kosong jika tidak ingin mengganti foto.</small>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama Wisata</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama" placeholder="Nama Wisata" value="{{ $gallery->nama }}" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi Wisata</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi Wisata" value="{{ $gallery->deskripsi }}" required>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-success float-right">Simpan</button>
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