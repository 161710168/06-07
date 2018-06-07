@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Siswa 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">NIS</label>	
			  			<input type="text" name="nis" class="form-control" value="{{ $s->nis }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Nama</label>
						<input type="text" name="nama" class="form-control" value="{{ $s->nama }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Jenis_kelamin</label>
						<input type="text" name="jenis_kelamin" class="form-control" value="{{ $s->jenis_kelamin }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Kelas</label>
						<input type="text" name="kelas" class="form-control" value="{{ $s->Kelas->kelas }}"  readonly>
			  		</div>


			  		<div class="form-group">
			  			<label class="control-label">No_telp</label>+62
						<input type="text" name="no_telp" class="form-control" value="{{ $s->no_telp }}"  readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection