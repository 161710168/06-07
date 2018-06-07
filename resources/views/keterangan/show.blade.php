@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Keterangan 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Keterangan</label>	
			  			<input type="text" name="keterangan" class="form-control" value="{{ $k->keterangan }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Nama_Siswa</label>	
			  			<textarea rows="10" class="form-control" readonly>@foreach($k->Absensi as $data)
			  				-{{ $data->id_siswa }}
			  				@endforeach
			  			</textarea> 


			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection