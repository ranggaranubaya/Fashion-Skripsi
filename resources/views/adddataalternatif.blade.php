@extends('layout.page')

@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Alternatif</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Alternatif</li>
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
                <h3 class="card-title">Add Alternatif</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{ url('/alternatif/store')}}" class="form-horizontal">
                @csrf
                <div class="card-body">
                  <div class="form-group row">
                    <label for="kode_alternatif" class="col-sm-2 col-form-label">Kode</label>
                    <div class="col-sm-10">
                      <select name="kode_alternatif" class="form-control" required>
                        <option value="">Pilih Kode Alternatif</option>
                        @foreach($wisatas as $kode)
                          <option value="{{ $kode }}">{{ $kode }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kriteria_1" class="col-sm-2 col-form-label">C1</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="kriteria_1" placeholder="Nilai Kriteria (Kriteria 1)" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kriteria_2" class="col-sm-2 col-form-label">C2</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="kriteria_2" placeholder="Nilai Kriteria (Kriteria 2)" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kriteria_3" class="col-sm-2 col-form-label">C3</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="kriteria_3" placeholder="Nilai Kriteria (Kriteria 3)" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kriteria_4" class="col-sm-2 col-form-label">C4</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="kriteria_4" placeholder="Nilai Kriteria (Kriteria 4)" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kriteria_5" class="col-sm-2 col-form-label">C5</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="kriteria_5" placeholder="Nilai Kriteria (Kriteria 5)" required>
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