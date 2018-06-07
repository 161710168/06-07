@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Absensi 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Tgl_absen</label>	
			  			<input type="tgl_absen" name="tgl_absen" class="form-control" value="{{ $b->tgl_absen }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Kelas</label>	
			  			<input type="text" name="kelas" class="form-control" value="{{ $b->Siswa->kelas }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Nama_Siswa</label>
						<input type="text" name="id_siswa" class="form-control" value="{{ $b->Siswa->nama }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Keterangan</label>
						<input type="text" name="keterangan" class="form-control" value="{{ $b->Keterangan->keterangan }}"  readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection