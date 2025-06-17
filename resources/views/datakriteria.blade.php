@extends('layout.page')

@section('content')
<!-- Content Wrapper -->
<div class="content-wrapper bg-gray-50">
    <!-- Content Header -->
    <section class="content-header py-3">
        <div class="container-fluid">
            <div class="row mb-2 align-items-center">
                <div class="col-sm-6">
                    <h1 class="text-xl font-semibold text-gray-800">Data Kriteria</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right bg-transparent p-0 m-0">
                        <li class="breadcrumb-item"><a href="#" class="text-blue-600 hover:underline">Home</a></li>
                        <li class="breadcrumb-item active text-gray-500">Data Kriteria</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card shadow-sm border-0 rounded">
                        <div class="card-header bg-white border-0">
                            <h3 class="card-title font-medium text-gray-700">Data Kriteria</h3>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <!-- Add Button -->
                            <a href="{{ url('kriteria/add') }}" class="btn btn-sm btn-success mb-3">
                                <i class="fas fa-plus mr-1"></i> Tambah Kriteria
                            </a>

                            <!-- Data Table -->
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped w-full text-sm">
                                    <thead class="bg-gray-100">
                                        <tr>
                                            <th class="px-4 py-2">No.</th>
                                            <th class="px-4 py-2">Kode Kriteria</th>
                                            <th class="px-4 py-2">Kriteria</th>
                                            <th class="px-4 py-2">Nilai Bobot</th>
                                            <th class="px-4 py-2">Jenis Kriteria</th>
                                            <th class="px-4 py-2">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $i => $kriteria)
                                            <tr class="hover:bg-gray-50">
                                                <td class="px-4 py-2">{{ $i + 1 }}</td>
                                                <td class="px-4 py-2">{{ $kriteria->kode_kriteria }}</td>
                                                <td class="px-4 py-2">{{ $kriteria->nama_kriteria }}</td>
                                                <td class="px-4 py-2">{{ $kriteria->bobot }}</td>
                                                <td class="px-4 py-2">{{ $kriteria->jenis }}</td>
                                                <td class="px-4 py-2">
                                                    <a href="{{ url('kriteria/edit/'.$kriteria->id) }}" 
                                                       class="btn btn-xs btn-primary mr-1">
                                                        Edit
                                                    </a>
                                                    <a href="{{ url('kriteria/delete/'.$kriteria->id) }}" 
                                                       class="btn btn-xs btn-danger"
                                                       onclick="return confirm('Yakin ingin menghapus data ini?')">
                                                        Delete
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@section('styles')
<!-- Tailwind CSS for modern styling -->
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<!-- DataTables CSS -->
<link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endsection

@section('scripts')
<!-- jQuery (required for DataTables) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
        $('#example1').DataTable({
            responsive: true,
            pageLength: 10,
            language: {
                search: "",
                searchPlaceholder: "Cari di tabel...",
                lengthMenu: "Tampilkan _MENU_ entri",
                info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
                paginate: {
                    first: "Pertama",
                    last: "Terakhir",
                    next: "Selanjutnya",
                    previous: "Sebelumnya"
                }
            },
            columnDefs: [
                { orderable: false, targets: 5 } // Disable sorting on action column
            ]
        });
    });
</script>
@endsection