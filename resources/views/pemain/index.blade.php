@extends('pemain.template')

@include('pemain.navbar')

@section('content')
<table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">NAMA PEMAIN</th>
        <th scope="col">NOMOR PUNGGUNG</th>
        <th scope="col">POSISI</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($data_pemain as $pemain)
        <tr>
            <td>{{ $pemain->id }}</td>
            <td>{{ $pemain->nama_pemain }}</td>
            <td>{{ $pemain->no_punggung }}</td>
            <td>{{ $pemain->posisi }}</td>
        </tr>
      @empty
          <div class="alert alert-danger">
              Data Pemain belum Tersedia.
          </div>
      @endforelse
    </tbody>
</table>  
@endsection