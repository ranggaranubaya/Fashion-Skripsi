@extends('layout.page')

@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Wisata</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Wisata</li>
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
                <h3 class="card-title">Add Wisata</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{ url('/wisata/store')}}" class="form-horizontal">
                @csrf
                <div class="card-body">
                  <div class="form-group row">
                    <label for="nama_wisata" class="col-sm-2 col-form-label">Nama Wisata</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama_wisata" placeholder="Nama Wisata" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="lokasi_wisata" class="col-sm-2 col-form-label">Lokasi Wisata</label>
                      <div class="col-sm-10">
                      <input type="text" class="form-control" name="lokasi_wisata" placeholder="Lokasi Wisata" required>
                      </div>
                  </div>
                  <div class="form-group row">
                    <label for="kode_wisata" class="col-sm-2 col-form-label">Kode Wisata</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="kode_wisata" placeholder="Kode Wisata" required>
                    </div>
                  </div>
                  <div class="form-group row">
  <label for="kategori_wisata" class="col-sm-2 col-form-label">Kategori Wisata</label>
  <div class="col-sm-10">
    <select name="kategori_wisata" class="form-control" required>
      <option value="">-- Pilih Kategori --</option>
      <option value="Gunung">Gunung</option>
      <option value="Hutan">Hutan</option>
      <option value="Air Terjun">Air Terjun</option>
      <option value="Sungai">Sungai</option>
      <option value="Kuliner">Kuliner</option>
    </select>
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