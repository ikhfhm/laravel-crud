@extends('layouts.master')

@section('content')
	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Hover Row</h3>
								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
												<th>#</th>
												<th>First Name</th>
												<th>Last Name</th>
												<th>Username</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>Steve</td>
												<td>Jobs</td>
												<td>@steve</td>
											</tr>
											<tr>
												<td>2</td>
												<td>Simon</td>
												<td>Philips</td>
												<td>@simon</td>
											</tr>
											<tr>
												<td>3</td>
												<td>Jane</td>
												<td>Doe</td>
												<td>@jane</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop
@section('content1')
				@if(session('sukses'))
				<div class="alert alert-success" role="alert">
				  {{session('sukses')}}
				</div>
				@endif
				<div class="row">
					<div class="col-6">
						<h1>Data Siswa</h1>
					</div>
					<div class="col-6">
						<button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
						  Tambah data siswa
						</button>
					</div>
					
					<table class="table table-hover">
						<tr>
							<th>NAMA DEPAN</th>
							<th>NAMA BELAKANG</th>
							<th>JENIS KELAMIN</th>
							<th>AGAMA</th>
							<th>ALAMAT</th>
							<th>AKSI</th>
						</tr>
						@foreach($data_siswa as $siswa)
						<tr>
							<td>{{$siswa->nama_depan}}</td>
							<td>{{$siswa->nama_belakang}}</td>
							<td>{{$siswa->jenis_kelamin}}</td>
							<td>{{$siswa->agama}}</td>
							<td>{{$siswa->alamat}}</td>
							<td>
								<a href="/siswa/{{$siswa->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
								<a href="/siswa/{{$siswa->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus?')">Delete</a>
							</td>
						</tr>
						@endforeach
					</table>
				</div>
			</div>
	
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/siswa/create" method="post">
        	{{csrf_field()}}
		  <div class="form-group">
		    <label for="exampleInputEmail1">Nama Depan</label>
		    <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan">
		  </div>

		  <div class="form-group">
		    <label for="exampleInputEmail1">Nama Belakang</label>
		    <input name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang">
		  </div>

		  <div class="form-group">
		  	<label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
			<select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
			   <option value="L">Laki-laki</option>
			   <option value="P">Perempuan</option>
			</select>
		  </div>

		  <div class="form-group">
			<label for="exampleInputEmail1">Agama</label>
		    <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama">
		  </div>

		  <div class="form-group">
		    <label for="exampleFormControlTextarea1">Alamat</label>
		    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
		  </div>

		 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>														
@endsection

