@extends('layouts.app')
@section('content')
<div class="alert alert-danger" > 
<h2>Lihat Buku Perpustakaan</h2>
	@csrf
		<table class="table table-bordered">
			<tr>
				<th class="table-primary">JUDUL BUKU</th>
				<td class="table-secondary">{{ $row->judul_buku }}</td>
			</tr>
			<tr>
				<th class="table-primary">PENGARANG BUKU</th>
				<td class="table-secondary">{{ $row->pengarang_buku }}</td>
			</tr>
			<tr>
				<th class="table-primary">PENERBIT BUKU</th>
				<td class="table-secondary">{{ $row->penerbit_buku }}</td>
			</tr>
			<tr>
				<th class="table-primary">TAHUN BUKU</th>
				<td class="table-secondary">{{ $row->tahun_buku }}</td>
			</tr>
		</table>
</div>
@endsection