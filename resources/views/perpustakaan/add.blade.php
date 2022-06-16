@extends('layouts.app')
@section('content')
<div class="alert alert-danger">
<h2><th>Tambah Data Buku Perpustakaan</h2></th>
	<form method="post" action="{{ url('/perpustakaan') }}">
	@csrf 
		<table class="table table-bordered" cellpadding="6">
		<tr>
			<th class="table-primary">JUDUL BUKU</th>
			<td class="table-secondary">
				<input type="text" name="judul_buku">
			</td> 
		</tr>
		<tr> 
			<th class="table-primary">PENGARANG BUKU</th>
			<td class="table-secondary">
				<input type="text" name="pengarang_buku">
			</td>
		</tr>
		<tr> 
			<th class="table-primary">PENERBIT BUKU</th>
			<td class="table-secondary">
				<input type="text" name="penerbit_buku">
			</td>
		</tr>
		<tr>
			<th class="table-primary">TAHUN BUKU</th>
			<td class="table-secondary">
				<select name="tahun_buku" id="tahun_buku">			
					@foreach($tahun_rows as $row)
					  <option value="{{ $row->tahun }}">{{ $row->tahun }}</option>
					@endforeach
				</select>
			</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="SIMPAN"></td>
		</tr>
		</table>
	</form>
</div>

@endsection