@extends('layouts.app')
@section('content')
<div class="alert alert-danger"> 
<h2><th>Edit Buku</h2></th>
	<form action="{{ url('/perpustakaan/' . $row->id_buku) }}" method="POST">
	<input name="_method" type="hidden" value="PATCH"> 
	@csrf
		<table>
			<tr>
				<th class="table-primary">JUDUL BUKU</th>
				<td class="table-secondary">
					<input type="text" name="judul_buku" value="{{ $row->judul_buku }}">
				</td>
			</tr>
			<tr>
				<th class="table-primary">PENGARANG BUKU</th>
				<td class="table-secondary">
					<input type="text" name="pengarang_buku" value="{{ $row->pengarang_buku }}">
				</td>
			</tr>
			<tr>
				<th class="table-primary">PENERBIT BUKU</th>
				<td class="table-secondary">
					<input type="text" name="penerbit_buku" value="{{ $row->penerbit_buku }}">
				</td>
			</tr>
			<tr>
				<th class="table-primary">TAHUN BUKU</th>
				<td class="table-secondary">
					<input type="text" name="tahun_buku" value="{{ $row->tahun_buku }}">
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" value="UPDATE">
				</td>
			</tr>
		</table>
	</form>
</div>
@endsection