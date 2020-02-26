@extends('layout/main')
@section('title', 'Daftar Mahasiswa')
@section('container')
	<div class="container">
		<div class="row">
			<div class="col-10">
				<h1 class="mt-3">Daftar Mahasiswa</h1>
				
				<table class="table">
					<thead class="thead-dark">
						<tr>
							<th scope="col">No</th>
							<th scope="col">Nama</th>
							<th scope="col">Nim</th>
							<th scope="col">Jurusan</th>
							<th scope="col">Aksi</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($students as $student)
						<tr>
							<th scope="row">{{ $loop->iteration }}</th>
							<td>{{ $student->nama }}</td>
							<td>{{ $student->nim }}</td>
							<td>{{ $student->jurusan }}</td>
							<td>
								<a href="" class="badge badge-warning">Edit</a>
								<a href="" class="badge badge-danger">Hapus</a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection