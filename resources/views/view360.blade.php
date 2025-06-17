@extends('layout.app')

@section('content')
<div class="container mt-5">
  <h2 class="text-center mb-4">360 View</h2>
  <div id="viewer360" style="width: 100%; height: 500px;"></div>
</div>
@endsection

@section('scripts')
@php
  // Ambil parameter dari URL, jika tidak ada pakai default
  $image = request('img') ?? 'Panorama Curug Bayan.jpeg';
@endphp

<script>
  const viewer = new PhotoSphereViewer.Viewer({
    container: document.getElementById('viewer360'),
    panorama: '/assets/img/{{ $image }}',
    navbar: ['zoom', 'fullscreen'],
  });
</script>
@endsection
