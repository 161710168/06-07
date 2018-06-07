@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Tambah Data Absensi 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('absensi.store') }}" method="post" >
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('tgl_absen') ? ' has-error' : '' }}">
			  			<label class="control-label">tgl_absen</label>	
			  			<input type="date" name="tgl_absen" class="form-control"  required>
			  			@if ($errors->has('tgl_absen'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tgl_absen') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('id_siswa') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama_siswa</label>	
			  			<select name="id_siswa" class="form-control">
			  				@foreach($s as $data)
			  				<option value="{{ $data->id }}">{{ $data->nama }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('id_siswa'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_siswa') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('id_keterangan') ? ' has-error' : '' }}">
			  			<label class="control-label">Keterangan</label>	
			  			<select name="id_keterangan" class="form-control">
			  				@foreach($k as $data)
			  				<option value="{{ $data->id }}">{{ $data->keterangan }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('id_keterangan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_keterangan') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Tambah</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection