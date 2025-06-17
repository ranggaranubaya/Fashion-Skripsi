@extends('layout.page')

@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Data Wisata</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Data Wisata</li>
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
                <h3 class="card-title">Edit Data Wisata</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{ url('/wisata/update/'.$wisata->id) }}" class="form-horizontal">
                @csrf
                <div class="card-body">
                  <div class="form-group row">
                    <label for="nama_wisata" class="col-sm-2 col-form-label">Nama Wisata</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama_wisata" placeholder="Nama Wisata" value="{{ $wisata->nama_wisata}}" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="lokasi_wisata" class="col-sm-2 col-form-label">Lokasi Wisata</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="lokasi_wisata" placeholder="Lokasi Wisata" value="{{ $wisata->lokasi_wisata}}" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kode_wisata" class="col-sm-2 col-form-label">Kode Wisata</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="kode_wisata" placeholder="Kode Wisata" value="{{ $wisata->kode_wisata}}" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kategori_wisata" class="col-sm-2 col-form-label">Kategori Wisata</label>
                      <div class="col-sm-10">
                        <select name="kategori_wisata" class="form-control" required>
  <option value="">-- Pilih Kategori --</option>
  <option value="Gunung" {{ $wisata->kategori_wisata == 'Gunung' ? 'selected' : '' }}>Gunung</option>
  <option value="Hutan" {{ $wisata->kategori_wisata == 'Hutan' ? 'selected' : '' }}>Hutan</option>
  <option value="Air Terjun" {{ $wisata->kategori_wisata == 'Air Terjun' ? 'selected' : '' }}>Air Terjun</option>
  <option value="Sungai" {{ $wisata->kategori_wisata == 'Sungai' ? 'selected' : '' }}>Sungai</option>
  <option value="Kuliner" {{ $wisata->kategori_wisata == 'Kuliner' ? 'selected' : '' }}>Kuliner</option>
</select>

                      </div>
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