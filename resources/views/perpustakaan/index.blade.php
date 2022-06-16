@extends('layouts.app')

@section('content')

<div class="alert alert-danger">	

<h2><th>Daftar Buku Perpustakaan</h2></th>	

<td>
		<form class="form" method="get" action="{{ route('search') }}">
		    <div class="form-group w-75 mb-3">
		        <input type="text" name="search" class="form-control w-75 d-inline" id="search" placeholder="Masukkan keyword">
		        <button type="submit" class="btn btn-primary mb-1">Cari</button>
		    </div>
		</form>
		</td>
		
	<table class="table table-bordered" cellpadding="6">
	<tr class="table-primary">
		<th>JUDUL BUKU</th>
		<th>PENGARANG BUKU</th>
		<th>PENERBIT BUKU</th>
		<th>TAHUN BUKU</th>
		<th><a href="{{ url('perpustakaan/create') }}">Tambah Data</a></th>
	</tr>
	@foreach($rows as $row)
	<tr class="table-secondary">
		<td>{{ $row->judul_buku }}</td>
		<td>{{ $row->pengarang_buku }}</td>
		<td>{{ $row->penerbit_buku }}</td>
		<td>{{ $row->tahun_buku }}</td>
		<td><a href="{{ url('perpustakaan/' . $row->id_buku . '/edit') }}">Edit</a></td>
		<td><a href="{{ url('perpustakaan/' . $row->id_buku . '/lihat') }}">Lihat</a></td>
		<td>
			<form action="{{ url('perpustakaan/' . $row->id_buku) }}" method="POST">
			<input name="_method" type="hidden" value="DELETE">
			@csrf
			<button>Hapus</button>
			</form>			
		</td>
	</tr>
	@endforeach
	</table>
</div>
@endsection